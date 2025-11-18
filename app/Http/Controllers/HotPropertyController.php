<?php

namespace App\Http\Controllers;

use App\Models\HotPropertyModel;
use Illuminate\Http\Request;
use App\Models\PropertyImageModel;
use Illuminate\Support\Facades\File;
use App\Models\PropertyEnquire;
use Illuminate\Support\Facades\Mail;
use App\Mail\HotPropertyEnquiryMail;

class HotPropertyController extends Controller
{
    public function hotPropertyList()
    {
        $hotProperties = HotPropertyModel::where('is_active', 1)
            ->paginate(10);

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
        $hotProperty->is_active = 1;
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
        $hotProperty->modified_date = now()->format('Y-m-d H:i:s');
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

        $hotProperty->is_active = 0;
        $hotProperty->save();

        return redirect()->back()->with('success_delete', 'Hot property deleted successfully!');
    }

    public function hotPropertyEnquiry(Request $request)
    {
        $request->validate([
            'hot_property_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:20',
            'message' => 'required|string',
            'captcha' => 'required|captcha',
        ], [
            'captcha.captcha' => 'Invalid Captcha !!!'
        ]);

        PropertyEnquire::create([
            'hot_property_id' => $request->hot_property_id,
            'fullname' => $request->name,
            'contact_number' => $request->number,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
        ]);

        // Prepare email data
        $data = [
            'hot_property_id' => $request->hot_property_id,
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('bYw4y@example.com')->send(new HotPropertyEnquiryMail($data));
      //  Mail::to('jerinrichard@gmail.com')->send(new HotPropertyEnquiryMail($data));

        return redirect()->back()->with('success_enquiry', 'Your enquiry has been submitted successfully!');
    }
}
