<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\LocationModel;
use App\Models\PriceRangeModel;
use App\Models\PriceUnitModel;
use App\Models\AreaUnitModel;
use App\Models\MyProperties;
use App\Models\PropertyImageModel;

class PropertyController extends Controller
{
    public function listProperty()
    {
        return view('pages.properties');
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
        $property->property_description = $request->description;
        $property->youtubeurl = $request->youtube_url;
        $property->contact_name = $request->contact_person;
        $property->contact_number = $request->contact_number;
        $property->post_date = $currentDateTime;
        $property->modified_date = null;
        $property->is_approved = 0;
        $property->is_modified = 0;
        $property->priority = $request->priority;
        $property->save();

        // Save uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $filename);

                PropertyImageModel::create([
                    'property_id' => $property->property_id,
                    'filename' => $filename,
                    'is_cover' => $index === 0 ? 1 : 0, // mark first image as cover
                ]);
            }
        }

        return redirect()->route('listproperty')->with('success', 'Property added successfully.');
    }
}
