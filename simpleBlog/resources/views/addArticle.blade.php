@extends('headerFooter')

@section('content')

    <div id="addArticlePage">
        <!-- FORM -->
        <div id="form">
            <div id="success-alert" class="alert alert-success myAlert">
                <strong></strong>
                <button class="btn-close"></button>
            </div>
            <form id="article-form">
                <div class="form-group padding-10">
                    <label for="title">TITLE</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Article title..." required
                        autofocus value="{{ old('title') }}">

                    <span id="title-error" class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span>
                </div>

                <div class="form-group padding-10">
                    <label for="categories">CATEGORIES</label>
                    <input type="text" class="form-control" id="categories" name="categories"
                        placeholder="Type here some categories, separated by comma..." required autofocus
                        value="{{ old('categories') }}">

                    <span id="categories-error" class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span>
                </div>

                <div class="form-group padding-10">
                    <textarea class="form-control" id="content" name="content" placeholder="Type here some text..." required
                        autofocus>{{ old('content') }}</textarea>

                    <span id="content-error" class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span>
                </div>

                <div class="form-group padding-10">
                    <button id="create-btn" class="btn btn-outline-dark">CREATE</button>
                </div>
            </form>
        </div>
        <!-- END FORM -->
        <div id="img-background"></div>
    </div>

@endsection
