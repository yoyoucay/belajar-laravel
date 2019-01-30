<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://localhost/laravel1/bloggy/public/css/master.css">
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
    <script src="http://localhost/laravel1/bloggy/public/js/main.js">

    </script>
</body>

</html>
