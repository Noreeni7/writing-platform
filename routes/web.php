<?php

use Illuminate\Support\Facades\Route;

use App\Models\Article;
use App\Models\Poem;

// Homepage route
Route::get('/', function () {
    $articles = Article::latest()->take(3)->get();
    $poems = Poem::latest()->take(3)->get();

    return view('home', compact('articles', 'poems'));
});

// Article detail page route
Route::get('/articles/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->firstOrFail();
    return view('articles.show', compact('article'));
});
