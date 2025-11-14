<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use App\Models\CategoryModel;
use App\Models\LocationModel;
use App\Models\PriceRangeModel;
use App\Models\MyProperties;
use App\Models\PriceUnitModel;
use App\Models\AreaUnitModel;
use App\Models\PropertyImageModel;
use App\Models\UserDetailsModel;
use App\Models\UserTypeModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function showAdmin()
    {
        // if (!session()->has('user_id')) {
        //     return redirect()->route('login')->with('error', 'Please login to access the page.');
        // }

        // $user = UserModel::with('userType')->find(session('user_id'));

        // return view('admin.dashboard', compact('user'));

        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'Please login to access the page.');
        }

        // Load user, userDetails, and package in one go
        $user = UserModel::with(['userDetails.package', 'userType'])->find(session('user_id'));

        // Fetch package info
        $details = $user->userDetails;
        $package = $details?->package;

        // Handle "Admin" users (no package assigned)
        $packageName = $package->package_name ?? 'Admin';
        $renewDate = $details?->renew_date ?? 'Unlimited';

        // Handle allowed and remaining properties
        $allowedProperties = $package?->is_unlimited_properties ? 'Unlimited' : ($package->property_count ?? 'N/A');
        $remainingProperties = $details?->rem_properties ?? 'Unlimited';

        // Calculate property stats if you have a properties table
        $myProperties = MyProperties::where('posted_by', $user->user_id)->count();
        $approvedProperties = MyProperties::where('posted_by', $user->user_id)->where('is_approved', 1)->count() ?? 0;
        $notApprovedProperties = $myProperties - $approvedProperties;

        $properties = MyProperties::where('posted_by', $user->user_id)
            ->orderBy('property_id', 'desc')
            ->limit(8)
            ->get();

        return view('admin.dashboard', compact(
            'user',
            'packageName',
            'renewDate',
            'allowedProperties',
            'remainingProperties',
            'myProperties',
            'approvedProperties',
            'notApprovedProperties',
            'properties'
        ));
    }

    public function showLoginForm()
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.login', compact('categories', 'priceRanges', 'locations'));
    }

    public function showRegistrationForm()
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.register', compact('categories', 'priceRanges', 'locations'));
    }

    public function register(Request $request)
    {
        // Validate inputs
        $request->validate([
            'username' => 'required|string|max:255|unique:users,login_name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        // Save user
        $user = new UserModel();
        $user->login_name = $request->username;
        // $user->password = Hash::make($request->password);
        $user->password = $request->password;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('login')->with('success', 'Registered successfully. Please login !!!');
    }

    public function login(Request $request)
    {
        // Validate inputs
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find user by username
        $user = UserModel::where('login_name', $request->username)->first();

        // Check if user exists and password is correct

        // if ($user && Hash::check($request->password, $user->password)) {

        if ($user && $user->password === $request->password) {

            // Store user info in session
            session([
                'user_id' => $user->user_id,
                'username' => $user->login_name,
                'fullname' => $user->fullname,
                'email' => $user->email,
                'user_type_id' => $user->user_type_id,
            ]);

            return redirect()->route('dashboard')->with('success_login', 'Login successfull! Welcome back...');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('login')->with('success_logout', 'Logout successfull!');
    }

    public function showRequest()
    {
        // Fetch with category, user and location relationships
        $properties = MyProperties::with(['category', 'locality', 'user'])
            ->where('is_approved', 0)
            ->orderByDesc('post_date')
            ->paginate(10);

        return view('admin.list', compact('properties'));
    }

    public function editRequest($id)
    {
        $property = MyProperties::findOrFail($id);
        $categories = CategoryModel::all();
        $locations = LocationModel::all();
        $priceRanges = PriceRangeModel::all();
        $priceUnits = PriceUnitModel::all();
        $areaUnits = AreaUnitModel::all();

        return view('admin.edit', compact('property', 'categories', 'locations', 'priceRanges', 'priceUnits', 'areaUnits'));
    }

    public function updateRequest(Request $request, $id)
    {
        // Check login session
        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error_update', 'Please log in before updating a property.');
        }

        // Validate inputs
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|not_in:0',
            'description' => 'required|string',
            'youtube_url' => 'nullable|string',
            'location' => 'required|not_in:0',
            'price_range' => 'required|not_in:0',
            'price' => 'nullable|numeric',
            'exact_price' => 'nullable|numeric',
            'priority' => 'nullable|string|max:10',
            'amount_for' => 'nullable|not_in:0',
            'contact_person' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:20',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the property
        $property = MyProperties::findOrFail($id);

        // Update property details
        $property->locality_id = $request->location;
        $property->category_id = $request->category;
        $property->price_range_id = $request->price_range;
        $property->area_unit_id = $request->amount_for;
        $property->price = $request->exact_price;
        $property->property_title = $request->title;
        $property->property_description = strip_tags($request->description);
        $property->youtubeurl = $request->youtube_url;
        $property->contact_name = $request->contact_person;
        $property->contact_number = $request->contact_number;
        $property->modified_date = now()->format('Y-m-d H:i:s');
        $property->priority = $request->priority;
        $property->is_modified = 1;
        $property->save();

        // Handle image uploads (optional)
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/property/'), $filename);

                PropertyImageModel::create([
                    'property_id' => $property->property_id,
                    'filename' => $filename,
                    'is_cover' => $index === 0 ? 1 : 0, // mark first image as cover if desired
                ]);
            }
        }

        return redirect()->route('requests')->with('success_update', 'Property updated successfully!!!');
    }

    public function viewRequest($id)
    {
        $property = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        return view('admin.view', compact('property'));
    }

    public function deleteRequestImage($id)
    {
        // Find the image record
        $image = PropertyImageModel::findOrFail($id);

        // Delete the file from 'public/uploads'
        $filePath = public_path('uploads/property/' . $image->filename);
        if (file_exists($filePath)) {
            unlink($filePath); // delete the file
        }

        // Delete the database record
        $image->delete();

        return redirect()->back()->with('success_deleteImage', 'Image deleted successfully!!!');
    }

    public function deleteRequest($id)
    {
        $property = MyProperties::find($id);

        if (!$property) {
            return redirect()->back()->with('error_delete', 'Property not found!');
        }

        // Delete related images
        $images = PropertyImageModel::where('property_id', $id)->get();
        foreach ($images as $image) {
            $imagePath = public_path('uploads/property/' . $image->filename);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $image->delete();
        }

        $property->delete();

        return redirect()->back()->with('success_delete', 'Property deleted successfully!');
    }

    public function approveRequest($id)
    {
        $property = MyProperties::findOrFail($id);

        $property->is_approved = 1;
        $property->save();

        return redirect()->route('requests')->with('success_approve', 'Property approved successfully!');
    }

    public function filterRequestProperty(Request $request)
    {
        $search = $request->input('search');

        $properties = MyProperties::with(['category', 'locality', 'user'])
            ->when($search, function ($query, $search) {
                $query->where('property_title', 'like', "%$search%")
                    ->orWhere('property_code', 'like', "%$search%")
                    ->orWhereHas('category', function ($q) use ($search) {
                        $q->where('category_name', 'like', "%$search%");
                    })
                    ->orWhereHas('locality', function ($q) use ($search) {
                        $q->where('locality_name', 'like', "%$search%");
                    });
            })
            ->orderBy('post_date', 'DESC')
            ->paginate(10)
            ->appends($request->query());

        return view('admin.list', compact('properties'));
    }

    public function listUser()
    {
        // Fetch users with their related user type and paginate (10 per page)
        $users = UserModel::with('userType', 'userDetails.package')
            ->where('is_active', 1)
            ->paginate(10);

        return view('user.list', compact('users'));
    }

    public function addUser()
    {
        $userTypes = UserTypeModel::all();

        return view('user.add', compact('userTypes'));
    }

    public function saveUser(Request $request)
    {
        // Validate inputs
        $request->validate([
            'fullname' => 'required|string|max:255',
            'login_name' => 'required|string|max:255|unique:users,login_name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'contact_number' => 'required|string|max:20',
            'user_type_id' => 'required|integer|not_in:0',
            'contact_address' => 'required|string|max:255',
        ]);

        // dd($request->all());

        try {
            // Save user
            $user = new UserModel();
            $user->user_type_id = $request->user_type_id;
            $user->login_name = $request->login_name;
            $user->password = $request->password;
            $user->fullname = $request->fullname;
            $user->contact_number = $request->contact_number;
            $user->email = $request->email;
            $user->is_active = 1;
            $user->contact_address = $request->contact_address;
            $user->save();

            // Save user details
            $userDetails = new UserDetailsModel();
            $userDetails->user_id = $user->user_id;
            $userDetails->register_date = now()->format('Y-m-d H:i:s');
            $userDetails->is_active = 1;
            $userDetails->user_package_id = 2;
            $userDetails->rem_properties = 2;
            $userDetails->is_post_disabled = 0;
            $userDetails->save();

            return redirect()->route('listUser')->with('success_add', 'User saved successfully!!!');
        } catch (\Exception $e) {
            Log::error('Error saving user: ' . $e->getMessage());
            return back()->with('error', 'Error saving user: ' . $e->getMessage());
        }
    }

    public function editUser($id)
    {
        $user = UserModel::with('userType')->findOrFail($id);
        $userTypes = UserTypeModel::all();

        return view('user.edit', compact('userTypes', 'user'));
    }

    public function updateUser(Request $request, $id)
    {
        // Validate inputs
        $request->validate([
            'fullname' => 'required|string|max:255',
            'login_name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'contact_number' => 'required|string|max:20',
            'user_type_id' => 'required|integer|not_in:0',
            'contact_address' => 'required|string|max:255',
        ]);

        // dd($request->all());

        // Find the user
        $user = UserModel::findOrFail($id);

        try {
            // Update user
            $user->user_type_id = $request->user_type_id;
            $user->login_name = $request->login_name;
            $user->password = $request->password;
            $user->fullname = $request->fullname;
            $user->contact_number = $request->contact_number;
            $user->email = $request->email;
            $user->contact_address = $request->contact_address;
            $user->save();

            $userDetails = UserDetailsModel::where('user_id', $id)->first();

            // Update user details
            $userDetails->renew_date = now()->format('Y-m-d H:i:s');
            $userDetails->save();

            return redirect()->route('listUser')->with('success_update', 'User updated successfully!!!');
        } catch (\Exception $e) {
            Log::error('Error saving user: ' . $e->getMessage());
            return back()->with('error', 'Error saving user: ' . $e->getMessage());
        }
    }

    public function viewUser($id)
    {
        $user = UserModel::with('userType', 'userDetails')->findOrFail($id);

        return view('user.view', compact('user'));
    }

    public function deleteUser($id)
    {
        // Find user
        $user = UserModel::findOrFail($id);

        // Deactivate user
        $user->is_active = 0;
        $user->save();

        // Deactivate user details
        UserDetailsModel::where('user_id', $id)->update([
            'is_active' => 0
        ]);

        return redirect()->route('listUser')->with('success_delete', 'User deleted successfully!!!');
    }

    public function filterUser(Request $request)
    {
        $search = $request->input('search');

        $users = UserModel::with(['userType', 'userDetails'])
            ->when($search, function ($query, $search) {
                $query->where('fullname', 'LIKE', "%{$search}%")
                    ->orWhere('login_name', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%")
                    ->orWhere('contact_number', 'LIKE', "%{$search}%");
            })
            ->orderBy('fullname', 'asc')
            ->paginate(10)
            ->appends(['search' => $search]);

        return view('user.list', compact('users', 'search'));
    }
}
