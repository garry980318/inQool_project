<?php

namespace App\Http\Controllers;

use App\Models\Article;
use \App\Models\Category;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles', [
            'articles' => Article::orderBy('created_at', 'desc')->limit(3)->get(),
            'categories' => Category::all()
        ]);
    }
}
