<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

    <title>Simple Blog</title>

    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Montserrat font -->
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700') }}" rel="stylesheet">

    <!-- scripts -->
    <script src="{{ URL::asset('js/jquery-3.5.1.min.js') }}"></script>
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

    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer id="footer">
        <ul class="footer-content">
            <li id="footer-link-1"><a href="#">dummy text 1</a></li>
            <li id="footer-link-2"><a href="#">dummy text 2</a></li>
            <li id="footer-link-3"><a href="#">dummy text 3</a></li>
            <li id="footer-link-4"><a href="#">dummy text 4</a></li>
        </ul>
    </footer>
</body>

</html>
