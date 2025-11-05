<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotPropertyController extends Controller
{
    public function hotPropertyList()
    {
        return view('hot_property.list');
    }

    public function addHotProperty()
    {
        return view('hot_property.add');
    }

    public function editHotProperty()
    {
        return view('hot_property.edit');
    }
}
