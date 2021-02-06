@extends('headerFooter')
@section('content')

    <div id="articlesPage">
        <div id="article1">
            @if (count($articles) >= 1)
                <h1>{{ $articles[0]->title }}</h1>
                <h3 class="inline-heading">CATEGORIES: </h3>
                <span>|</span>
                @foreach ($articleCategories[0] as $articleCategory)
                    <span class="article-category">{{ $articleCategory }}</span>
                    <span>|</span>
                @endforeach
                <p>{{ $articles[0]->content }}</p>
            @else
                <h3>NEWEST ARTICLE WILL APPEAR HERE</h3>
            @endif
        </div>

        <div id="article2">
            @if (count($articles) >= 2)
                <h1>{{ $articles[1]->title }}</h1>
                <h3 class="inline-heading">CATEGORIES:</h3>
                <span>|</span>
                @foreach ($articleCategories[1] as $articleCategory)
                    <span class="article-category">{{ $articleCategory }}</span>
                    <span>|</span>
                @endforeach
                <p>{{ $articles[1]->content }}</p>
            @else
                <h3>OLDER ARTICLE WILL APPEAR HERE</h3>
            @endif
        </div>

        <div id="article3">
            @if (count($articles) >= 3)
                <h1>{{ $articles[2]->title }}</h1>
                <h3 class="inline-heading">CATEGORIES:</h3>
                <span>|</span>
                @foreach ($articleCategories[2] as $articleCategory)
                    <span class="article-category">{{ $articleCategory }}</span>
                    <span>|</span>
                @endforeach
                <p>{{ $articles[2]->content }}</p>
            @else
                <h3>EVEN OLDER ARTICLE WILL APPEAR HERE</h3>
            @endif
        </div>

        <div id="all-categories">
            <h2 class="inline-heading">NUMBER OF CATEGORIES:</h2>
            <span class="counter">{{ $numOfCategories }}</span>
            @if ($numOfCategories > 0)
                <h2>NUMBER OF ARTICLES IN INDIVIDUAL CATEGORIES:</h2>
                <span>|</span>
                @foreach ($categoryArticles as $categoryArticle)
                    <span id="category-table">
                        <span class="article-category">{{ $categoryArticle->name }}</span>
                        <span> - </span>
                        <span class="counter">{{ $categoryArticle->numOfArticles }}</span>
                        <span>|</span>
                    </span>
                @endforeach
            @endif
        </div>
    </div>

@endsection
