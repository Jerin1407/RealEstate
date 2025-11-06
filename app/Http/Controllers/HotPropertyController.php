<?php

namespace App\Http\Controllers;

use App\Models\HotPropertyModel;
use Illuminate\Http\Request;

class HotPropertyController extends Controller
{
    public function hotPropertyList()
    {
        $hotProperties = HotPropertyModel::paginate(10);

        return view('hot_property.list', compact('hotProperties'));
    }

    public function addHotProperty()
    {
        return view('hot_property.add');
    }

    public function saveHotProperty(Request $request)
    {
        // validate inputs
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|not_in:0',
            'url' => 'nullable|string',
        ]);

        // save property
        $hotProperty = new HotPropertyModel();
        $hotProperty->title = $request->title;
        $hotProperty->description = $request->description;
        $hotProperty->type = $request->type;
        $hotProperty->url = $request->url;
        $hotProperty->save();
    }

    public function editHotProperty()
    {
        return view('hot_property.edit');
    }
}
