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
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/app.css') }}">

    <!-- scripts -->
    <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script
        src="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</head>

<body id="page-top">

    <!-- HEADER -->
    <header>
        <div id="header-name"><a href="{{ url('/') }}">Radoslav Grenčík</a></div>
        <!-- NAVIGATION -->
        <nav>
            <div id="links">
                <ul>
                    <li><a id="new-article" href="{{ url('/') }}">Add new article</a></li>
                    <li><a id="articles" href="{{ url('/articles') }}">Articles</a></li>
                </ul>
            </div>
            <div id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- FOOTER -->
    <footer>
        <ul>
            <li id="footer-link-1"><a href="#">dummy button 1</a></li>
            <li id="footer-link-2"><a href="#">dummy button 2</a></li>
            <li id="footer-link-3"><a href="#">dummy button 3</a></li>
            <li id="footer-link-4"><a href="#">dummy button 4</a></li>
        </ul>
    </footer>

    <!-- scripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>
