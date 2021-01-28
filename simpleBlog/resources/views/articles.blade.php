@extends('headerFooter')
@section('content')

    <div id="articlesPage">
        <div id="article1">
            @if (count($articleTitles) >= 1)
                <h1>{{ $articleTitles[0] }}</h1>
                <h3 class="inline-heading">CATEGORIES: </h3>
                <span>|</span>
                @foreach ($articleCategories[0] as $articleCategory)
                    <span class="article-category">{{ $articleCategory }}</span>
                    <span>|</span>
                @endforeach
                <p>{{ $articleContents[0] }}</p>
            @else
                <h3>NEWEST ARTICLE WILL APPEAR HERE</h3>
            @endif
        </div>

        <div id="article2">
            @if (count($articleTitles) >= 2)
                <h1>{{ $articleTitles[1] }}</h1>
                <h3 class="inline-heading">CATEGORIES:</h3>
                <span>|</span>
                @foreach ($articleCategories[1] as $articleCategory)
                    <span class="article-category">{{ $articleCategory }}</span>
                    <span>|</span>
                @endforeach
                <p>{{ $articleContents[1] }}</p>
            @else
                <h3>OLDER ARTICLE WILL APPEAR HERE</h3>
            @endif
        </div>

        <div id="article3">
            @if (count($articleTitles) >= 3)
                <h1>{{ $articleTitles[2] }}</h1>
                <h3 class="inline-heading">CATEGORIES:</h3>
                <span>|</span>
                @foreach ($articleCategories[2] as $articleCategory)
                    <span class="article-category">{{ $articleCategory }}</span>
                    <span>|</span>
                @endforeach
                <p>{{ $articleContents[2] }}</p>
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
                @for ($i = 0; $i < $numOfCategories; $i++)
                    <span id="category-table">
                        <span class="article-category">{{ $categoryNames[$i] }}</span>
                        <span> - </span>
                        <span class="counter">{{ $numOfCategoryArticles[$i] }}</span>
                        <span>|</span>
                    </span>
                @endfor
            @endif
        </div>
    </div>

@endsection
