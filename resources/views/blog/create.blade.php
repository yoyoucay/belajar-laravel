@extends('layouts.master')

@section('title', 'Edit page')

@section('content')
    <h1>Create Blog </h1>

    <form action="/laravel1/bloggy/public/blog" method="post">
        <input type="text" name="title" value="{{ old('title') }}"> <br>
        @if($errors->has('title'))
            <p>{{ $errors->first('title') }}</p>
        @endif
        <textarea name="description" rows="8" cols="80"> {{ old('description') }}</textarea> <br>
        @if($errors->has('description'))
            <p>{{ $errors->first('description') }}</p>
        @endif
        <input type="submit" name="submit" value="Create">
        {{ csrf_field() }}
    </form>
  @endsection
