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

        return view('pages.index', compact('villas'));
    }

    public function viewAllVilla()
    {
        // Fetch all villas (category_id = 1)
        $villas = MyProperties::with(['category', 'locality', 'images'])
            ->where('category_id', 1)
            ->orderByDesc('post_date')
            ->get();

        return view('pages.view_villa', compact('villas'));
    }

    public function viewVillaProperty($id)
    {
        // Fetch villa with relationships
        $villa = MyProperties::with(['category', 'locality', 'images'])->findOrFail($id);

        return view('subpages.view_villa', compact('villa'));
    }
}
