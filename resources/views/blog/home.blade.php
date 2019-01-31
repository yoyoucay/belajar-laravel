@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
  <div>
    <h1>Ini adalah halaman Beranda Blog </h1>
    <p>ya isinya cuma gini aja</p>
  </div>

  <div>
    @foreach($blogs as $blog)
      <h3>Judul : <a href="blog/{{$blog->id}}">{{ $blog->title }}</a>
        <form action="/laravel1/bloggy/public/blog/{{ $blog->id }}" method="post">
            <input type="submit" name="submit" value="Delete">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
        </form>
      </h3>
    @endforeach
  </div>

  {{ $blogs->appends(Request::input())->links() }}

@endsection
