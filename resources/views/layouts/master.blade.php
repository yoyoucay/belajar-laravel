<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <head>
        <nav>
            <a href="http://localhost/laravel1/bloggy/public/">Home</a>
            <a href="http://localhost/laravel1/bloggy/public/blog">Blog</a>
        </nav>
    </head>
    <br>
    @yield('content')

    <footer>
        <p>
            &copy; Laravel & Kaca Inc 2019
        </p>
    </footer>
</body>

</html>