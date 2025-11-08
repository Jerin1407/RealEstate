<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyProperties;
use App\Models\CategoryModel;
use App\Models\PriceRangeModel;
use App\Models\LocationModel;
use App\Models\AreaUnitModel;
use App\Models\PriceUnitModel;
use App\Models\UserTypeModel;
use App\Models\PropertyImageModel;
use App\Models\UserModel;
use App\Models\HotPropertyModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $villas = MyProperties::with(['category', 'locality'])
            ->where('category_id', 1)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->take(4)
            ->get();

        $flats = MyProperties::with(['category', 'locality'])
            ->where('category_id', 2)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->take(4)
            ->get();
        $plots = MyProperties::with(['category', 'locality'])
            ->where('category_id', 3)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->take(4)
            ->get();
        $commercials = MyProperties::with(['category', 'locality'])
            ->where('category_id', 4)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->take(4)
            ->get();
        $rents = MyProperties::with(['category', 'locality'])
            ->where('category_id', 5)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->take(4)
            ->get();
        $hotProperties = HotPropertyModel::with(['images', 'coverImage'])
            ->orderByDesc('add_date')
            ->take(6)
            ->get();

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.index', compact('villas', 'flats', 'plots', 'commercials', 'rents', 'categories', 'priceRanges', 'locations', 'hotProperties'));
    }

    public function about()
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.about', compact('categories', 'priceRanges', 'locations'));
    }

    public function service()
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.service', compact('categories', 'priceRanges', 'locations'));
    }

    public function homeLoan()
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.home_loan', compact('categories', 'priceRanges', 'locations'));
    }

    public function contact()
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.contact', compact('categories', 'priceRanges', 'locations'));
    }

    public function viewAllVilla()
    {
        // Fetch all villas (category_id = 1)
        $villas = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 1)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->get();

        // Count total villas
        $villaCount = $villas->count();

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.view_villa', compact('villas', 'villaCount', 'categories', 'priceRanges', 'locations'));
    }

    public function viewVillaProperty($id)
    {
        // Fetch villa with relationships
        $villa = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('subpages.view_villa', compact('villa', 'categories', 'priceRanges', 'locations'));
    }

    public function viewAllFlat()
    {
        // Fetch all flats (category_id = 2)
        $flats = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 2)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->get();

        // Count total flats
        $flatCount = $flats->count();

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.view_flat', compact('flats', 'flatCount', 'categories', 'priceRanges', 'locations'));
    }

    public function viewFlatProperty($id)
    {
        // Fetch flat with relationships
        $flat = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('subpages.view_flat', compact('flat', 'categories', 'priceRanges', 'locations'));
    }

    public function viewAllPlot()
    {
        // Fetch all plots (category_id = 3)
        $plots = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 3)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->get();

        // Count total plots
        $plotCount = $plots->count();

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.view_plot', compact('plots', 'plotCount', 'categories', 'priceRanges', 'locations'));
    }

    public function viewPlotProperty($id)
    {
        // Fetch plot with relationships
        $plot = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('subpages.view_plot', compact('plot', 'categories', 'priceRanges', 'locations'));
    }

    public function viewAllCommercial()
    {
        // Fetch all commercials (category_id = 4)
        $commercials = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 4)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->get();

        // Count total commercials
        $commercialCount = $commercials->count();

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.view_commercial', compact('commercials', 'commercialCount', 'categories', 'priceRanges', 'locations'));
    }

    public function viewCommercialProperty($id)
    {
        // Fetch commercial with relationships
        $commercial = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('subpages.view_commercial', compact('commercial', 'categories', 'priceRanges', 'locations'));
    }

    public function viewAllRent()
    {
        // Fetch all rents (category_id = 5)
        $rents = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 5)
            ->where('is_approved', 1)
            ->orderByDesc('post_date')
            ->get();

        // Count total rents
        $rentCount = $rents->count();

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.view_rent', compact('rents', 'rentCount', 'categories', 'priceRanges', 'locations'));
    }

    public function viewRentProperty($id)
    {
        // Fetch rent with relationships
        $rent = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('subpages.view_rent', compact('rent', 'categories', 'priceRanges', 'locations'));
    }

    public function viewHotProperty($id)
    {
        $hotProperties = HotPropertyModel::with(['coverImage', 'images'])->findOrFail($id);

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('subpages.view_hotProperty', compact('hotProperties', 'categories', 'priceRanges', 'locations'));
    }

    public function searchLocation(Request $request)
    {
        $query = $request->get('query', '');

        $locations = LocationModel::where('locality_name', 'like', "%{$query}%")
            ->orderBy('locality_name')
            ->take(10)
            ->get(['locality_name']); // only fetch needed column

        return response()->json($locations);
    }

    public function searchProperty(Request $request)
    {
        $query = MyProperties::with(['category', 'locality', 'images']);

        // Filter by category
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Filter by location
        if ($request->filled('location')) {
            $query->whereHas('locality', function ($q) use ($request) {
                $q->where('locality_name', 'like', '%' . $request->location . '%');
            });
        }

        // Filter by price range
        if ($request->filled('price_range_id')) {
            $priceRange = PriceRangeModel::find($request->price_range_id);

            if ($priceRange) {
                $rangeText = strtolower(trim($priceRange->price_range));

                if (str_contains($rangeText, '& above')) {
                    if (preg_match('/(\d+\.?\d*)\s*(l|lakhs|lakh)?/', $rangeText, $matches)) {
                        $min = (float)$matches[1];
                        $unit = $matches[2] ?? '';

                        if (in_array($unit, ['l', 'lakh', 'lakhs'])) {
                            $min *= 100000;
                        }

                        $query->where('price', '>=', $min);
                    }
                } else {
                    if (preg_match('/(\d+\.?\d*)\s*(l|lakhs|lakh)?\s*-\s*(\d+\.?\d*)\s*(l|lakhs|lakh)?/', $rangeText, $matches)) {
                        $min = (float)$matches[1];
                        $max = (float)$matches[3];
                        $unitMin = $matches[2] ?? '';
                        $unitMax = $matches[4] ?? '';

                        if (in_array($unitMin, ['l', 'lakh', 'lakhs'])) {
                            $min *= 100000;
                        }
                        if (in_array($unitMax, ['l', 'lakh', 'lakhs'])) {
                            $max *= 100000;
                        }

                        $query->whereBetween('price', [$min, $max]);
                    } elseif (preg_match('/(\d+)\s*-\s*(\d+)/', $rangeText, $matches)) {
                        $query->whereBetween('price', [(float)$matches[1], (float)$matches[2]]);
                    }
                }
            }
        }

        $villas = $query->orderByDesc('post_date')->get();

        // Return the same "Premium Villas" view but filtered
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();

        // Return the same view used for displaying all villas
        return view('pages.searchProperty', compact('villas', 'categories', 'priceRanges'));
    }

    public function addProperty()
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();
        $priceUnits = PriceUnitModel::all();
        $areaUnits = AreaUnitModel::all();
        $userTypes = UserTypeModel::all();

        return view('pages.add_property', compact('categories', 'priceRanges', 'locations', 'priceUnits', 'areaUnits', 'userTypes'));
    }

    public function saveProperty(Request $request)
    {
        // Validate input
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
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'your_name' => 'required|string|max:255',
            'email_id' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'type' => 'required|not_in:0',
            //'captcha' => 'required|captcha',
            // ], [
            //     'captcha.captcha' => 'Invalid Captcha !!!'
        ]);

        // Check if user exists by email
        $existingUser = UserModel::where('email', $request->email_id)->first();

        if ($existingUser) {
            $userId = $existingUser->user_id;
        } else {
            // Create new user
            $user = new UserModel();
            $user->fullname = $request->your_name;
            $user->email = $request->email_id;
            $user->contact_number = $request->phone;
            $user->user_type_id = $request->type;
            $user->save();

            $userId = $user->user_id;
        }

        // Generate next property code (RT1000 → RT9999)
        $lastProperty = MyProperties::orderBy('property_id', 'desc')->first();

        if ($lastProperty && preg_match('/^RT(\d{4})$/', $lastProperty->property_code, $matches)) {
            $nextNumber = intval($matches[1]) + 1;
        } else {
            $nextNumber = 1000;
        }

        // Limit to 9999
        if ($nextNumber > 9999) {
            return redirect()->back()->with('error', 'Maximum property code limit (RT9999) reached.');
        }

        $propertyCode = 'RT' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

        // Get current date and time in MySQL format
        $currentDateTime = now()->format('Y-m-d H:i:s');

        // save property
        $property = new MyProperties();
        $property->posted_by = $userId;
        $property->locality_id = $request->location;
        $property->category_id = $request->category;
        $property->price_range_id = $request->price_range;
        $property->area_unit_id = $request->amount_for;
        $property->approved_by = null;
        $property->property_code = $propertyCode;
        $property->price = $request->exact_price;
        $property->property_title = $request->title;
        $property->property_description = strip_tags($request->description);
        $property->youtubeurl = $request->youtube_url;
        $property->contact_name = $request->contact_person;
        $property->contact_number = $request->contact_number;
        $property->post_date = $currentDateTime;
        $property->modified_date = null;
        $property->is_approved = 0;
        $property->is_modified = 0;
        $property->is_active = 1;
        $property->priority = $request->priority;
        $property->save();

        // Save uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/property'), $filename);

                PropertyImageModel::create([
                    'property_id' => $property->property_id,
                    'filename' => $filename,
                    'is_cover' => $index === 0 ? 1 : 0, // mark first image as cover
                ]);
            }
        }

        return redirect()->route('home')->with('success', 'Property added successfully !!!');
    }
}
