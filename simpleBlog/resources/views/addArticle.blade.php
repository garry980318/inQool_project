@extends('headerFooter')

@section('content')

<div id="addArticlePage">
    <!-- FORM -->
    <div id="form">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissable myAlert">
            <strong>{{ $message }}</strong>
            <button class="btn-close" data-dismiss="alert"></button>
        </div>
        @endif
        <form method="POST" action="{{ route('store') }}">
            @csrf

            <div class="form-group padding-10">
                <label for="title">TITLE</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Article title..." required autofocus value="{{ old('title') }}">

                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group padding-10">
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Type here some text..." rows="10" required autofocus>{{ old('content') }}</textarea>

                @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group padding-10">
                <label for="categories">CATEGORIES</label>
                <input type="text" class="form-control @error('categories') is-invalid @enderror" id="categories" name="categories" placeholder="Type here some categories, separated by comma..." required autofocus value="{{ old('categories') }}">

                @error('categories')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group padding-10">
                <button type="submit" class="btn btn-outline-dark">CREATE</button>
            </div>
        </form>
    </div>
    <!-- END FORM -->
    <div id="img-background" />
</div>

@endsection
