<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
</head>
<body>
    <h1>Ini adalah halaman Beranda Blog </h1>
    <h3>{{$blog}}</h3>
    <h4>{{$user}}</h4>

    @foreach($pekerjaan as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
</body>
</html>