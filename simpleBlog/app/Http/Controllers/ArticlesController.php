<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;
use \App\Models\Category;
use \App\Models\ArticleCategory;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        $articleIds = array();
        $articleTitles = array();
        $articleContents = array();
        foreach ($articles as $article) {
            array_push($articleIds, $article->id_article);
            array_push($articleTitles, $article->title);
            array_push($articleContents, $article->content);
        }

        $articleCategories = array();
        for ($i = 0; $i < count($articleIds); $i++) {
            if ($i >= 3) {
                break;
            }
            $tmpArticleCategories = ArticleCategory::where('id_article', $articleIds[$i])->get();
            $tmpArray = array();
            foreach ($tmpArticleCategories as $tmpArticleCategory) {
                $tmpCategory = Category::where('id_category', $tmpArticleCategory->id_category)->get();
                array_push($tmpArray, $tmpCategory->first()->name);
            }
            array_push($articleCategories, $tmpArray);
        }

        $categories = Category::all();
        $categoryIds = array();
        $categoryNames = array();
        $numOfCategoryArticles = array();
        foreach ($categories as $category) {
            array_push($categoryIds, $category->id_category);
            array_push($categoryNames, $category->name);
        }
        foreach ($categoryIds as $categoryId) {
            array_push($numOfCategoryArticles, count(ArticleCategory::where('id_category', $categoryId)->get()));
        }

        return view('articles', ['articleTitles' => $articleTitles, 'articleContents' => $articleContents, 'articleCategories' => $articleCategories, 'categoryNames' => $categoryNames, 'numOfCategoryArticles' => $numOfCategoryArticles, 'numOfCategories' => count($categories)]);
    }
}
