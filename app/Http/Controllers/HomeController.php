<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyProperties;

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
            //->where('is_approved', 1) // Optional: show only approved villas
            ->orderByDesc('post_date')
            ->take(4)
            ->get();
        $plots = MyProperties::with(['category', 'locality'])
            ->where('category_id', 3)
            //->where('is_approved', 1) // Optional: show only approved villas
            ->orderByDesc('post_date')
            ->take(4)
            ->get();
        $commercials = MyProperties::with(['category', 'locality'])
            ->where('category_id', 4)
            //->where('is_approved', 1) // Optional: show only approved villas
            ->orderByDesc('post_date')
            ->take(4)
            ->get();

        return view('pages.index', compact('villas', 'flats', 'plots', 'commercials'));
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

        return view('pages.view_villa', compact('villas', 'villaCount'));
    }

    public function viewVillaProperty($id)
    {
        // Fetch villa with relationships
        $villa = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        return view('subpages.view_villa', compact('villa'));
    }

    public function viewAllFlat()
    {
        // Fetch all villas (category_id = 2)
        $flats = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 2)
            ->orderByDesc('post_date')
            ->get();

        // Count total villas
        $flatCount = $flats->count();

        return view('pages.view_flat', compact('flats', 'flatCount'));
    }

    public function viewFlatProperty($id)
    {
        // Fetch villa with relationships
        $flat = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        return view('subpages.view_flat', compact('flat'));
    }

    public function viewAllPlot()
    {
        // Fetch all villas (category_id = 3)
        $plots = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 3)
            ->orderByDesc('post_date')
            ->get();

        // Count total villas
        $plotCount = $plots->count();

        return view('pages.view_plot', compact('plots', 'plotCount'));
    }

    public function viewPlotProperty($id)
    {
        // Fetch villa with relationships
        $plot = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        return view('subpages.view_plot', compact('plot'));
    }

    public function viewAllCommercial()
    {
        // Fetch all villas (category_id = 4)
        $commercials = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 4)
            ->orderByDesc('post_date')
            ->get();

        // Count total villas
        $commercialCount = $commercials->count();

        return view('pages.view_commercial', compact('commercials', 'commercialCount'));
    }

    public function viewCommercialProperty($id)
    {
        // Fetch villa with relationships
        $commercial = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        return view('subpages.view_commercial', compact('commercial'));
    }
}
