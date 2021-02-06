<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;
use \App\Models\Category;
use \App\Models\ArticleCategory;

class AddArticleController extends Controller
{
    public function index()
    {
        return view('addArticle');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'categories' => 'required'
        ]);

        $article = Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        $oldCategoryNames = array();
        foreach (Category::select('name')->get() as $category) {
            array_push($oldCategoryNames, $category->name);
        }
        $requestCategoryNames = array_map('trim', array_unique(explode(',', $request->input('categories'))));
        $newCategoryNames = array_diff($requestCategoryNames, $oldCategoryNames); // category names to be saved

        foreach ($newCategoryNames as $categoryName) { // save new categories
            if (isset($categoryName) && $categoryName !== '') {
                Category::create([
                    'name' => $categoryName
                ]);
            }
        }

        foreach ($requestCategoryNames as $categoryName) { // make relationships
            if (isset($categoryName) && $categoryName !== '') {
                ArticleCategory::create([
                    'id_article' => $article->id_article,
                    'id_category' => Category::where('name', $categoryName)->first()->id_category
                ]);
            }
        }

        return response()->json(['success' => 'Article has been created!']);
    }
}
