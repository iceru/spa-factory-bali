<?php

namespace App\Http\Controllers;

use App\Models\Sustainability;
use Illuminate\Http\Request;

class SustainabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sustains = Sustainability::orderBy('number')->get();
        return view('sustainability', compact('sustains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sustainabilities = Sustainability::all();
        return response(view('admin.sustainability.create', compact('sustainabilities')));
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
            'title' => 'required',
            'number' => 'required',
            'images' => 'required',
            'images.*' => 'required',
            'description' => 'required',
            'bg_color' => 'required',
        ]);

        $sustain = new Sustainability;
        $imageFiles = [];

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $x = 1;

            foreach ($images as $image) {
                $imageName = 'sustain_' . $request->title . '_' . $x . '_' . $image->getClientOriginalName();
                $image->storeAs('public/sustainability-images', $imageName);

                $imageFiles[] = $imageName;
            }

            $x++;
        }

        $sustain->title = $request->title;
        $sustain->number = $request->number;
        $sustain->bg_color = $request->bg_color;
        $sustain->images = json_encode($imageFiles);
        $sustain->description = $request->description;

        $sustain->save();

        return redirect()->route('sustainability.create')
            ->with('success', 'Sustainability created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sustainability  $sustainability
     * @return \Illuminate\Http\Response
     */
    public function show(Sustainability $sustainability)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sustainability  $sustainability
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $sustainability = Sustainability::where('id', $request->sustainability)->firstOrFail();
        return view('admin.sustainability.edit', compact('sustainability'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sustainability  $sustainability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'number' => 'required',
            'images' => 'nullable',
            'images.*' => 'nullable',
            'description' => 'required',
            'bg_color' => 'required',
        ]);

        $sustain = Sustainability::where('id', $request->sustainability)->first();;
        $imageFiles = [];

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $x = 1;

            foreach ($images as $image) {
                $imageName = 'sustain_' . $request->title . '_' . $x . '_' . $image->getClientOriginalName();
                $image->storeAs('public/sustainability-images', $imageName);

                $imageFiles[] = $imageName;
            }
            $sustain->images = json_encode($imageFiles);
        }

        $sustain->title = $request->title;
        $sustain->number = $request->number;
        $sustain->description = $request->description;
        $sustain->bg_color = $request->bg_color;

        $sustain->save();

        return redirect()->route('sustainability.create')
            ->with('success', 'Sustainability updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sustainability  $sustainability
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $sustainability = Sustainability::where('id', $request->sustainability)->first();

        $sustainability->delete();

        return redirect()->route('sustainability.create')->with('success', 'Sustianability deleted successfully');
    }
}
