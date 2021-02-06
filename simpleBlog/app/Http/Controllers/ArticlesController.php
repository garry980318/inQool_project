<?php

namespace App\Http\Controllers;

use \App\Models\Category;
use \App\Models\ArticleCategory;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')
            ->select('articles.id_article', 'articles.title', 'articles.content')
            ->orderBy('articles.created_at', 'desc')
            ->limit(3)
            ->get()
            ->toArray();

        $articleCategories = array();
        foreach ($articles as $article) {
            $tmpArticleCategories = ArticleCategory::where('id_article', $article->id_article)->get();
            $tmpArray = array();
            foreach ($tmpArticleCategories as $tmpArticleCategory) {
                $tmpCategory = Category::where('id_category', $tmpArticleCategory->id_category)->get();
                array_push($tmpArray, $tmpCategory->first()->name);
            }
            array_push($articleCategories, $tmpArray);
        }

        $categoryArticles = DB::table('categories')
            ->join('article_categories', 'categories.id_category', '=', 'article_categories.id_category')
            ->select('categories.name', DB::raw('COUNT(article_categories.id_category) as numOfArticles'))
            ->groupBy('categories.name')
            ->orderBy('categories.id_category')
            ->get();

        return view('articles', [
            'articles' => $articles,
            'articleCategories' => $articleCategories,
            'categoryArticles' => $categoryArticles,
            'numOfCategories' => Category::all()->count()
        ]);
    }
}
