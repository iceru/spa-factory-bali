<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
        $products = Products::all();
        return view('admin.products.create', compact('products'));
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
            'image' => 'required|image',
            'description' => 'required'
        ]);

        $products = new Products;

        $path = $request->file('image')->store('public/products-image');

        $products->title = $request->title;
        $products->image = $path;
        $products->description = $request->description;

        $products->save();

        return redirect()->route('products.create')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = Products::where('id', $request->product)->firstOrFail();
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
            'description' => 'required'
        ]);


        $products = Products::where('id', $request->product)->first();

        if ($request->file('image')) {

            $path = $request->file('image')->store('public/products-image');
            $products->image = $path;
        }

        $products->title = $request->title;
        $products->description = $request->description;

        $products->save();

        return redirect()->route('products.create')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Products::where('id', $request->product)->first();

        $product->delete();

        return redirect()->route('products.create')->with('success', 'Product deleted successfully');
    }
}
