<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'images' => 'nullable|image|max:2048',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->slug = Str::slug($request->title);
        $article->excerpt = $request->excerpt;
        $article->content = $request->content;

        if ($request->hasFile('images')) {
            $path = $request->file('images')->store('articles', 'public');
            $article->images = $path;
        }

        $article->save();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'images' => 'nullable|image|max:2048',
        ]);

        $article->title = $request->title;
        $article->slug = Str::slug($request->title);
        $article->excerpt = $request->excerpt;
        $article->content = $request->content;

        if ($request->hasFile('images')) {
            $path = $request->file('images')->store('articles', 'public');
            $article->images = $path;
        }

        $article->save();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
