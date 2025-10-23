<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyProperties;
use App\Models\CategoryModel;
use App\Models\PriceRangeModel;
use App\Models\LocationModel;

class HomeController extends Controller
{
    public function index()
    {
        $villas = MyProperties::with(['category', 'locality'])
            ->where('category_id', 1)
            //->where('is_approved', 1) // Optional: show only approved villas
            ->orderByDesc('post_date')
            ->take(4)
            ->get();

        $flats = MyProperties::with(['category', 'locality'])
            ->where('category_id', 2)
            //->where('is_approved', 1) // Optional: show only approved flats
            ->orderByDesc('post_date')
            ->take(4)
            ->get();
        $plots = MyProperties::with(['category', 'locality'])
            ->where('category_id', 3)
            //->where('is_approved', 1) // Optional: show only approved plots
            ->orderByDesc('post_date')
            ->take(4)
            ->get();
        $commercials = MyProperties::with(['category', 'locality'])
            ->where('category_id', 4)
            //->where('is_approved', 1) // Optional: show only approved commercials
            ->orderByDesc('post_date')
            ->take(4)
            ->get();

        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('pages.index', compact('villas', 'flats', 'plots', 'commercials', 'categories', 'priceRanges', 'locations'));
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
}
