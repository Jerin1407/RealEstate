<?php

namespace App\Http\Controllers;

use App\Models\LocationModel;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    public function listLocality()
    {
        $localities = LocationModel::orderBy('locality_name', 'asc')->get();

        return view('localities.list', compact('localities'));
    }

    public function updateLocality(Request $request)
    {
        $request->validate([
            'locality_id' => 'required|exists:localities,locality_id',
            'locality_name' => 'required|string|max:255',
        ]);

        $locality = LocationModel::find($request->locality_id);

        if ($locality) {
            $locality->locality_name = $request->locality_name;
            $locality->save();
            return redirect()->back()->with('success_update', 'Locality updated successfully!');
        }

        return redirect()->back()->with('error', 'Locality not found!');
    }

    public function deleteLocality($id)
    {
        $locality = LocationModel::find($id);

        if (!$locality) {
            return redirect()->back()->with('error', 'Locality not found!');
        }

        $locality->delete();

        return redirect()->back()->with('success_delete', 'Locality deleted successfully!');
    }
}
