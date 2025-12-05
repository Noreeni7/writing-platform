<?php

use Illuminate\Support\Facades\Route;

use App\Models\Article;
use App\Models\Poem;

Route::get('/', function () {
    $articles = Article::latest()->take(3)->get();
    $poems = Poem::latest()->take(3)->get();

    return view('home', compact('articles', 'poems'));
});
