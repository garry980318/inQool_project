<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;
use \App\Models\Category;

class AddArticleController extends Controller
{
    public function index()
    {
        return view('addArticle');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:200',
            'content' => 'required',
            'categories' => 'required'
        ]);

        $article = Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        $requestCategories = array_unique(trim_blanks(explode(',', $request->input('categories'))));
        foreach ($requestCategories as $requestCategory) {
            $newCategory = Category::firstOrCreate(['name' => $requestCategory]);
            $article->categories()->attach($newCategory->id_category);
        }

        return response()->json(['success' => 'Article has been created!']);
    }
}
