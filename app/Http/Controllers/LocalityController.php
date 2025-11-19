<?php

namespace App\Http\Controllers;

use App\Models\LocationModel;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    public function listLocality()
    {
        $localities = LocationModel::orderBy('locality_name', 'asc')->where('is_active', 1)->get();

        return view('localities.list', compact('localities'));
    }

    public function addLocality(Request $request)
    {
        // Validate input
        $request->validate([
            'locality_name' => 'required|string|max:255',
        ]);

        // Save locality
        $locality = new LocationModel();
        $locality->locality_name = $request->locality_name;
        $locality->save();

        return redirect()->back()->with('success_add', 'Locality added successfully !!!');
    }

    public function updateLocality(Request $request)
    {
        // Validate inputs
        $request->validate([
            'locality_id' => 'required|exists:localities,locality_id',
            'locality_name' => 'required|string|max:255',
        ]);

        $locality = LocationModel::find($request->locality_id);

        // Save locality
        if ($locality) {
            $locality->locality_name = $request->locality_name;
            $locality->save();
            return redirect()->back()->with('success_update', 'Locality updated successfully !!!');
        }

        return redirect()->back()->with('error', 'Locality not found!');
    }

    public function deleteLocality($id)
    {
        $locality = LocationModel::find($id);

        if (!$locality) {
            return redirect()->back()->with('error', 'Locality not found!');
        }

        // Updating is_active to 0
        $locality->is_active = 0;
        $locality->save();

        return redirect()->back()->with('success_delete', 'Locality deleted successfully !!!');
    }
}
