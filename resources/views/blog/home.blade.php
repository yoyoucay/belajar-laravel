@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
  <div>
    <h1>Ini adalah halaman Beranda Blog </h1>
    <p>ya isinya cuma gini aja</p>
  </div>

  <div>
    @foreach($blogs as $blog)
      <h3>Judul : <a href="blog/{{$blog->id}}">{{ $blog->title }}</a></h3>
    @endforeach
  </div>

@endsection
