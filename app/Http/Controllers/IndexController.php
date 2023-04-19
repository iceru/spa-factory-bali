<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\Client;
use App\Models\Article;
use App\Models\Products;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $clients = Client::where('featured', 'yes')->get();
        $sliders = HomeSlider::orderBy('order')->get();
        return view('index', compact('products', 'clients', 'sliders'));
    }

    public function sitemap()
    {
        $articles = Article::orderBy('updated_at', 'DESC')->get();
        return response()->view('sitemap', compact('articles'))->header('Content-Type', 'text/xml');
    }
    public function sitemapView()
    {
        $articles = Article::orderBy('updated_at', 'DESC')->get();
        return view('sitemap-view', compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(Index $index)
    {
        //
    }
}
