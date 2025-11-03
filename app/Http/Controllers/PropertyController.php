<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\LocationModel;
use App\Models\PriceRangeModel;
use App\Models\PriceUnitModel;
use App\Models\AreaUnitModel;
use App\Models\MyProperties;
use App\Models\PropertyEnquire;
use App\Models\PropertyImageModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\PropertyEnquiryMail;
use Illuminate\Support\Facades\File;
use App\Exports\PropertiesExport;
use Maatwebsite\Excel\Facades\Excel;

class PropertyController extends Controller
{
    public function listProperty()
    {
        // Fetch with category, user and location relationships
        $properties = MyProperties::with(['category', 'locality', 'user'])
            ->orderByDesc('post_date')
            ->paginate(10);

        return view('property.list', compact('properties'));
    }

    public function addProperty()
    {
        $categories = CategoryModel::all();
        $locations = LocationModel::all();
        $priceRanges = PriceRangeModel::all();
        $priceUnits = PriceUnitModel::all();
        $areaUnits = AreaUnitModel::all();

        return view('property.add', compact('categories', 'locations', 'priceRanges', 'priceUnits', 'areaUnits'));
    }

    public function saveProperty(Request $request)
    {
        // Check login session
        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'Please log in before adding a property.');
        }

        // validate inputs
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
        $property->posted_by = session('user_id');
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
                $image->move(public_path('uploads/property/'), $filename);

                PropertyImageModel::create([
                    'property_id' => $property->property_id,
                    'filename' => $filename,
                    'is_cover' => $index === 0 ? 1 : 0, // mark first image as cover
                ]);
            }
        }

        return redirect()->route('listproperty')->with('success', 'Property saved successfully!!!');
    }

    public function editProperty($id)
    {
        $property = MyProperties::findOrFail($id);
        $categories = CategoryModel::all();
        $locations = LocationModel::all();
        $priceRanges = PriceRangeModel::all();
        $priceUnits = PriceUnitModel::all();
        $areaUnits = AreaUnitModel::all();

        return view('property.edit', compact('property', 'categories', 'locations', 'priceRanges', 'priceUnits', 'areaUnits'));
    }

    public function updateProperty(Request $request, $id)
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

        return redirect()->route('listproperty')->with('success_update', 'Property updated successfully!!!');
    }

    public function viewProperty($id)
    {
        $property = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        return view('property.view', compact('property'));
    }

    public function deletePropertyImage($id)
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

    public function deleteProperty($id)
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


    // public function deleteProperty(Request $request)
    // {
    //     $propertyIds = $request->input('selected_properties', []);

    //     if (empty($propertyIds)) {
    //         return redirect()->route('listproperty')->with('error_delete', 'No properties selected.');
    //     }

    //     foreach ($propertyIds as $id) {
    //         $property = MyProperties::find($id);
    //         if ($property) {
    //             // Delete all related images
    //             $images = PropertyImageModel::where('property_id', $id)->get();
    //             foreach ($images as $image) {
    //                 $imagePath = public_path('uploads/property/' . $image->filename);
    //                 if (File::exists($imagePath)) {
    //                     File::delete($imagePath);
    //                 }
    //                 $image->delete();
    //             }

    //             // Delete property record
    //             $property->delete();
    //         }
    //     }

    //     return redirect()->back()->with('success_delete', 'Property deleted successfully!!!');
    // }

    public function propertyEnquiry(Request $request)
    {
        $request->validate([
            'property_id' => 'required|integer',
            'property_code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:20',
            'message' => 'required|string',
            'captcha' => 'required|captcha',
        ], [
            'captcha.captcha' => 'Invalid Captcha !!!'
        ]);

        PropertyEnquire::create([
            'property_id' => $request->property_id,
            'property_code' => $request->property_code,
            'fullname' => $request->name,
            'contact_number' => $request->number,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
        ]);

        // Prepare email data
        $data = [
            'property_id' => $request->property_id,
            'property_code' => $request->property_code,
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('bYw4y@example.com')->send(new PropertyEnquiryMail($data));

        return redirect()->back()->with('success_enquiry', 'Your enquiry has been submitted successfully!');
    }

    public function propertyExport()
    {
        return Excel::download(new PropertiesExport, 'properties.xlsx');
    }

    public function filterProperty(Request $request)
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

        return view('property.list', compact('properties'));
    }
}
