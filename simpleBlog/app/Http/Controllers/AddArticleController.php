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

        $article = new Article;
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();
        $articleId = Article::all()->last()->id_article;

        $oldCategoryNames = array();
        foreach (Category::all() as $category) {
            array_push($oldCategoryNames, $category->name);
        }
        $requestCategoryNames = array_unique(explode(',', $request->input('categories')));
        $trimmedRequestCategoryNames = array();
        foreach ($requestCategoryNames as $requestCategoryName) {
            array_push($trimmedRequestCategoryNames, trim($requestCategoryName));
        }
        $newCategoryNames = array_diff($trimmedRequestCategoryNames, $oldCategoryNames); // category names to be saved

        foreach ($newCategoryNames as $categoryName) { // save new categories
            if (isset($categoryName) && $categoryName !== '') {
                $category = new Category;
                $category->name = $categoryName;
                $category->save();
            }
        }

        foreach ($trimmedRequestCategoryNames as $categoryName) { // make realtionships
            if (isset($categoryName) && $categoryName !== '') {
                $categoryId = Category::where('name', $categoryName)->first()->id_category;
                $articleCategory = new ArticleCategory;
                $articleCategory->id_article = $articleId;
                $articleCategory->id_category = $categoryId;
                $articleCategory->save();
            }
        }

        // return back()->with('success', 'Article has been created!');
        return response()->json(['success' => 'Article has been created!']);
    }
}
