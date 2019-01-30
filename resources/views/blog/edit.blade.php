@extends('layouts.master')

@section('title', 'Edit page')

@section('content')
    <h1>Welcome to the Edit Page! </h1>

    <form action="/laravel1/bloggy/public/blog/{{$blog->id}}" method="post">
        <input type="text" name="title" value="{{$blog->title}}"> <br>
        <textarea name="description" rows="8" cols="80">{{$blog->description}}</textarea> <br>
        <input type="submit" name="submit" value="edit">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
    </form>
  @endsection
