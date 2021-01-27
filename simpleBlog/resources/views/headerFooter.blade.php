<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Simple Blog</title>

    <!-- stylesheets -->
    <link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/style.css') }}">

    <!-- fonts -->
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700') }}"
        rel="stylesheet">

    <!-- scripts -->
    <script src="{{ URL::asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('js/navHighlight.js') }}"></script>

</head>

<body id="page-top">

    <!-- HEADER -->
    <header>
        <div id="header-name"><a href="{{ url('/') }}">Radoslav Grenčík</a></div>
        <!-- NAVIGATION -->
        <nav id="navbar">
            <ul class="navbar-nav">
                <li><a id="new-article" href="{{ url('/') }}">Add new article</a></li>
                <li><a id="articles" href="{{ url('/articles') }}">Articles</a></li>
            </ul>
            <div id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <script src="{{ URL::asset('js/hamburger.js') }}"></script>
        </nav>
    </header>

    @yield('content')

    <!-- FOOTER -->
    <footer id="footer">
        <ul class="footer-content">
            <li id="footer-link-1"><a href="#">dummy button 1</a></li>
            <li id="footer-link-2"><a href="#">dummy button 2</a></li>
            <li id="footer-link-3"><a href="#">dummy button 3</a></li>
            <li id="footer-link-4"><a href="#">dummy button 4</a></li>
        </ul>
    </footer>
</body>

</html>
