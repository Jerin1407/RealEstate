<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\LocationModel;
use App\Models\PriceRangeModel;
use App\Models\PriceUnitModel;
use App\Models\AreaUnitModel;

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

    public function saveProperty(Request $request) {
        
    }
}
