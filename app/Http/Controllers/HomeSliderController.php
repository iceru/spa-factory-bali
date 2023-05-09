<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Models\SdgImage;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homesliders = HomeSlider::all();
        $orders = collect([
            ['name' => '1', 'value' => 1],
        ]);
        if ($homesliders->count() > 1) {
            foreach ($homesliders as $x => $home) {
                $orders->push(['name' => $x + 1, 'value' => $x + 1],);
                $x++;
            }
        }
        return view('admin.homeslider.create', compact('homesliders', 'orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order' => 'required',
            'image' => 'required|image',
            'link' => 'nullable'
        ]);

        $homeslider = new HomeSlider;

        $path = $request->file('image')->store('public/homeslider-image');

        $homeslider->order = $request->order;
        $homeslider->image = $path;
        $homeslider->link = $request->link;

        $homeslider->save();

        return redirect()->route('homeslider.create')->with('success', 'Home Slider created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $homeslider = HomeSlider::where('id', $request->homeslider)->firstOrFail();
        $homesliders = HomeSlider::all();
        $orders = collect([
            ['name' => '1', 'value' => 1],
        ]);
        if ($homesliders->count() > 1) {
            foreach ($homesliders as $x => $home) {
                $orders->push(['name' => $x + 1, 'value' => $x + 1],);
                $x++;
            }
        }
        return view('admin.homeslider.edit', compact('homeslider', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $homeSlider)
    {
        $request->validate([
            'order' => 'required',
            'image' => 'image',
            'link' => 'nullable'
        ]);

        $homeslider = new HomeSlider;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/homeslider-image');
            $homeslider->image = $path;
        }

        $homeslider->order = $request->order;
        $homeslider->link = $request->link;

        $homeslider->save();

        return redirect()->route('homeslider.create')->with('success', 'Home Slider created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $homeslider = HomeSlider::where('id', $request->homeslider)->first();
        $homeslider->delete();

        return redirect()->route('homeslider.create')->with('success', 'Home Slider deleted successfully');
    }
}
