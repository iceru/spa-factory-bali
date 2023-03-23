<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Products;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        $hotel = Client::whereHas('product', function ($query) {
            return $query->where('title', 'Hotel Amenities');
        })->get();

        $spa = Client::whereHas('product', function ($query) {
            return $query->where('title', 'Professional & Retail Spa Products');
        })->get();

        $beauty = Client::whereHas('product', function ($query) {
            return $query->where('title', 'Beauty Skincare');
        })->get();
        return view('clientele', compact('clients', 'hotel', 'spa', 'beauty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \IlluminateHttp\Response
     */
    public function create()
    {
        $clients = Client::with('product')->get();
        $options = collect([
            ['name' => 'Tidak', 'value' => 'no'],
            ['name' => 'Ya', 'value' => 'yes'],
        ]);
        $products = Products::all();
        return view('admin.client.create', compact('clients', 'options', 'products'));
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
            'name' => 'required',
            'logo' => 'required|image',
            'images' => 'required',
            'images.*' => 'required',
            'featured' => 'required',
            'products' => 'required',
        ]);

        $client = new Client;
        $imageFiles = [];

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $imageName = time() . '_' . $request->name . '.' . $image->extension();
                $image->storeAs('public/client-images', $imageName);

                $imageFiles[] = $imageName;
            }
        }

        $path = $request->file('logo')->store('public/client-logo');

        $client->name = $request->name;
        $client->logo = $path;
        $client->images = json_encode($imageFiles);
        $client->featured = $request->featured;
        $client->product_id = $request->products;

        $client->save();

        return redirect()->route('client.create')->with('success', 'Client created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $client = Client::where('id', $request->client)->with('product')->firstOrFail();
        $options = collect([
            ['name' => 'Tidak', 'value' => 'no'],
            ['name' => 'Ya', 'value' => 'yes'],
        ]);
        $products = Products::all();
        return view('admin.client.edit', compact('client', 'products', 'options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'nullable|image',
            'images' => 'nullable',
            'images.*' => 'required',
            'featured' => 'required',
            'products' => 'required',
        ]);

        $client = Client::where('id', $request->client)->first();
        $imageFiles = [];

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $imageName = time() . '_' . $request->name . '.' . $image->extension();
                $image->storeAs('public/client-images', $imageName);

                $imageFiles[] = $imageName;
            }
            $client->images = json_encode($imageFiles);
        }

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/client-logo');
            $client->logo = $path;
        }

        $client->name = $request->name;
        $client->featured = $request->featured;
        $client->product_id = $request->products;

        $client->save();

        return redirect()->route('client.create')->with('success', 'Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Client::where('id', $request->client)->first();

        $product->delete();

        return redirect()->route('client.create')->with('success', 'Client deleted successfully');
    }
}
