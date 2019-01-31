@extends('layouts.master')

@section('title', 'Biodata')

@section('content')
    <h1>Welcome to the Blog Page! </h1>
    <h3>{{ $blog->title }}</h3>
    <hr>
    <p>{{ $blog->description }}</p>
    <img src="{{ asset('storage/blog/'.$blog->featured_img)}}" alt="" width="150">
  @endsection
