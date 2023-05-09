<?php

namespace App\Http\Controllers;

use App\Models\SdgImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Sustainability;
use Illuminate\Support\Facades\Storage;

class SdgImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sdgImages = SdgImage::orderBy('id')->get();
        $sustainabilities = Sustainability::orderBy('number')->get();
        return view('admin.sdgImage.create', compact('sdgImages', 'sustainabilities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sustainability' => 'required',
            'image' => 'required|image',
            'title' => 'required'
        ]);

        $sdgImage = new SdgImage;

        $image = $request->file('image');
        $imageName = 'sdgImage_' . $request->title . '_' . $image->getClientOriginalName();
        $image->storeAs('public/sustainability-images', $imageName);


        if ($request->hasFile('image')) {
            $sdgImageFile = $request->file('image');
            $sdgImageName = 'sdgImage_'  . $sdgImageFile->getClientOriginalName();

            $sdgImageMake = Image::make($sdgImageFile);

            if ($sdgImageMake->width() > 1024) {
                $sdgImageMake->resize(1024, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            Storage::disk('public')->put("sustainability-images/" . $sdgImageName, (string) $sdgImageMake->encode());
        }


        $sdgImage->sustainability_id = $request->sustainability;
        $sdgImage->image = $sdgImageName;
        $sdgImage->title = $request->title;

        $sdgImage->save();

        return redirect()->route('sdgImage.create')->with('success', 'Sustainability Image created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SdgImage $sdgImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $sdgImage = SdgImage::where('id', $request->sdgImage)->firstOrFail();
        $sustainabilities = Sustainability::orderBy('number')->get();
        return view('admin.sdgImage.edit', compact('sdgImage', 'sustainabilities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'sustainability' => 'required',
            'image' => 'image',
            'title' => 'required'
        ]);

        $sdgImage = SdgImage::where('id', $request->sdgImage)->first();

        if ($request->hasFile('image')) {
            $sdgImageFile = $request->file('image');
            $sdgImageName = 'sdgImage_' . $request->name . '_' . $sdgImageFile->getClientOriginalName();

            $sdgImageMake = Image::make($sdgImageFile);

            if ($sdgImageMake->width() > 1024) {
                $sdgImageMake->resize(1024, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            Storage::disk('public')->put("sustainability-images/" . $sdgImageName, (string) $sdgImageMake->encode());

            $oldsdgImage = $sdgImage->image;
            $sdgImage->image = $sdgImageName;
        }


        $sdgImage->sustainability_id = $request->sustainability;
        $sdgImage->title = $request->title;

        $sdgImage->save();

        if ($request->hasFile('image') && Storage::exists('public/sustainability-images/' . $oldsdgImage)) {
            Storage::disk('public')->delete('sustainability-images/' . $oldsdgImage);
        }

        return redirect()->route('sdgImage.create')->with('success', 'Sustainability Image created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $sdgImage = SdgImage::where('id', $request->sdgImage)->first();
        $oldSdgImage = $sdgImage->image;
        if (Storage::exists('public/sustainability-images/' . $oldSdgImage)) {
            Storage::disk('public')->delete('sustainability-images/' . $oldSdgImage);
        }
        $sdgImage->delete();

        return redirect()->route('sdgImage.create')->with('success', 'Sustainability Image deleted successfully');
    }
}
