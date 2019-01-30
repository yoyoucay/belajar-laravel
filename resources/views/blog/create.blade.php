@extends('layouts.master')

@section('title', 'Edit page')

@section('content')
  @if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
      @endforeach
    </ul>
  @endif
    <h1>Create Blog </h1>

    <form action="/laravel1/bloggy/public/blog" method="post">
        <input type="text" name="title" value=""> <br>
        <textarea name="description" rows="8" cols="80"></textarea> <br>
        <input type="submit" name="submit" value="Create">
        {{ csrf_field() }}
    </form>
  @endsection
