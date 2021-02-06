@extends('headerFooter')
@section('content')

    <div id="articlesPage">
        <div id="article1">
            @if (count($articles) >= 1)
                <h1>{{ $articles[0]->title }}</h1>
                @foreach ($articles[0]->categories as $category)
                    <span class="pill article-category">{{ $category->name }}</span>
                @endforeach
                <p>{{ $articles[0]->content }}</p>
            @else
                <h3>NEWEST ARTICLE WILL APPEAR HERE</h3>
            @endif
        </div>

        <div id="article2">
            @if (count($articles) >= 2)
                <h1>{{ $articles[1]->title }}</h1>
                @foreach ($articles[1]->categories as $category)
                    <span class="pill article-category">{{ $category->name }}</span>
                @endforeach
                <p>{{ $articles[1]->content }}</p>
            @else
                <h3>OLDER ARTICLE WILL APPEAR HERE</h3>
            @endif
        </div>

        <div id="article3">
            @if (count($articles) >= 3)
                <h1>{{ $articles[2]->title }}</h1>
                @foreach ($articles[2]->categories as $category)
                    <span class="pill article-category">{{ $category->name }}</span>
                @endforeach
                <p>{{ $articles[2]->content }}</p>
            @else
                <h3>EVEN OLDER ARTICLE WILL APPEAR HERE</h3>
            @endif
        </div>

        <div id="all-categories">
            <h2 class="inline-heading">NUMBER OF CATEGORIES:</h2>
            <span class="counter">{{ $categories->count() }}</span>
            @if ($categories->count() > 0)
                <h2>NUMBER OF ARTICLES IN INDIVIDUAL CATEGORIES:</h2>
                @foreach ($categories as $category)
                    <span class="pill">
                        <span class="article-category">{{ $category->name }}</span>
                        <span> - </span>
                        <span class="counter">{{ $category->articles->count() }}</span>
                    </span>
                @endforeach
            @endif
        </div>
    </div>

@endsection
