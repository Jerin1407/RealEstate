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
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function showAdmin()
    {
        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'Please log in to access the admin page.');
        }

        return view('users.admin');
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
        $user->user_type_id = 1;
        $user->login_name = $request->username;
        // $user->password = Hash::make($request->password);
        $user->password = $request->password;
        $user->fullname = $request->fullname;
        $user->contact_number = '';
        $user->contact_address = '';
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

            return redirect()->route('admin')->with('success_login', 'Login successfull! Welcome back...');
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

        return view('users.request', compact('properties'));
    }

    public function editRequest($id)
    {
        $property = MyProperties::findOrFail($id);
        $categories = CategoryModel::all();
        $locations = LocationModel::all();
        $priceRanges = PriceRangeModel::all();
        $priceUnits = PriceUnitModel::all();
        $areaUnits = AreaUnitModel::all();

        return view('users.edit', compact('property', 'categories', 'locations', 'priceRanges', 'priceUnits', 'areaUnits'));
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

        return view('users.view', compact('property'));
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
}
