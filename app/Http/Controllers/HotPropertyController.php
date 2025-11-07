<?php

namespace App\Http\Controllers;

use App\Models\HotPropertyModel;
use Illuminate\Http\Request;
use App\Models\PropertyImageModel;
use Illuminate\Support\Facades\File;

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
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // save hot property details
        $hotProperty = new HotPropertyModel();
        $hotProperty->title = $request->title;
        $hotProperty->description = strip_tags($request->description);
        $hotProperty->type = $request->type;
        $hotProperty->url = $request->url;
        $hotProperty->add_date = now()->format('Y-m-d H:i:s');
        $hotProperty->save();

        // Save uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/hotproperties/'), $filename);

                PropertyImageModel::create([
                    'hot_property_id' => $hotProperty->id,
                    'filename' => $filename,
                    'is_cover' => $index === 0 ? 1 : 0, // mark first image as cover
                ]);
            }
        }

        return redirect()->route('hotpropertylist')->with('success_hotproperty', 'Hot property saved successfully.');
    }

    public function editHotProperty($id)
    {
        $hotProperty = HotPropertyModel::findOrFail($id);

        return view('hot_property.edit', compact('hotProperty'));
    }

    public function updateHotProperty(Request $request, $id)
    {
        // validate inputs
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|not_in:0',
            'url' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the hot property by id
        $hotProperty = HotPropertyModel::findOrFail($id);

        // update hot property details
        $hotProperty->title = $request->title;
        $hotProperty->description = strip_tags($request->description);
        $hotProperty->type = $request->type;
        $hotProperty->url = $request->url;
        $hotProperty->add_date = now()->format('Y-m-d H:i:s');
        $hotProperty->save();

        // Save uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/hotproperties/'), $filename);

                PropertyImageModel::create([
                    'hot_property_id' => $hotProperty->id,
                    'filename' => $filename,
                    'is_cover' => $index === 0 ? 1 : 0, // mark first image as cover
                ]);
            }
        }

        return redirect()->route('hotpropertylist')->with('update_hotproperty', 'Hot property updated successfully.');
    }

    public function deleteHotPropertyImage($id)
    {
        // Find the image record
        $image = PropertyImageModel::findOrFail($id);

        // Delete the file from 'public/uploads'
        $filePath = public_path('uploads/hotproperties/' . $image->filename);
        if (file_exists($filePath)) {
            unlink($filePath); // delete the file
        }

        // Delete the database record
        $image->delete();

        return redirect()->back()->with('success_deleteImage', 'Image deleted successfully!!!');
    }

    public function deleteHotProperty($id)
    {
        $hotProperty = HotPropertyModel::find($id);

        if (!$hotProperty) {
            return redirect()->back()->with('error_delete', 'Hot property not found!');
        }

        // Delete related images
        $images = PropertyImageModel::where('hot_property_id', $id)->get();
        foreach ($images as $image) {
            $imagePath = public_path('uploads/hotproperties/' . $image->filename);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $image->delete();
        }

        $hotProperty->delete();

        return redirect()->back()->with('success_delete', 'Hot property deleted successfully!');
    }
}
