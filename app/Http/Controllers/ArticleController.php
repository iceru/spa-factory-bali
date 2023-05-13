<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Article::where('type', 'banner')->take(1)->get();
        $latest = Article::where('type', 'latest')->get();
        $featured = Article::where('type', 'featured')->take(3)->get();
        return view('article', compact('banner', 'latest', 'featured'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        $options = collect([
            ['name' => 'Latest', 'value' => 'latest'],
            ['name' => 'Featured', 'value' => 'featured'],
            ['name' => 'Banner', 'value' => 'banner'],
        ]);
        return view('admin.article.create', compact('options', 'articles'));
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
            'text' => 'required',
            'subtext' => 'required',
            'type' => 'required',
            'created_at' => 'required',
            'image' => 'required|image',
        ]);
        try {
            $article = new Article;

            if ($request->file('image')) {
                $path = $request->file('image')->store('public/article-image');
            }

            $article->title = $request->title;
            $article->slug = Str::slug($request->title);
            $article->text = $request->text;
            $article->subtext = $request->subtext;
            $article->author = Auth::user()->name;
            $article->type = $request->type;
            $article->created_at =  \Carbon\Carbon::createFromFormat('d-m-Y', $request->created_at);
            $article->image = $path;

            $article->save();

            $redirect = redirect()->route('article.create')->with('success', 'Article created successfully');
        } catch (Exception $e) {
            $message = $e->getMessage();
            $redirect = redirect()->route('article.create')->with('error', $message);
        }
        return $redirect;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $article = Article::where('slug', $request->article)->first();
        $more = Article::where('slug', '!=', $request->article)->inRandomOrder()->take(4)->get();
        return view('article-detail', compact('article', 'more'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $article = Article::where('id', $request->article)->firstOrFail();
        $options = collect([
            ['name' => 'Latest', 'value' => 'latest'],
            ['name' => 'Featured', 'value' => 'featured'],
            ['name' => 'Banner', 'value' => 'banner'],
        ]);
        return view('admin.article.edit', compact('article', 'options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'subtext' => 'required',
            'type' => 'required',
            'created_at' => 'required',
            'image' => 'nullable|image',
        ]);


        $article = Article::where('id', $request->article)->first();

        if ($request->file('image')) {
            $path = $request->file('image')->store('public/article-image');
            $article->image = $path;
        }

        $article->title = $request->title;
        $article->slug = Str::slug($request->title);
        $article->text = $request->text;
        $article->subtext = $request->subtext;
        $article->author = Auth::user()->name;
        $article->type = $request->type;
        $article->created_at = $request->created_at;

        $article->save();

        return redirect()->route('article.create')->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $article = Article::where('id', $request->article)->first();
        $article->delete();

        return redirect()->route('article.create')->with('success', 'Article deleted successfully');
    }

    public function upload(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);
    }
}
