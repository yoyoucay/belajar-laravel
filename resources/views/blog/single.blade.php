@extends('layouts.master')

@section('title', 'Biodata')

@section('content')
    <h1>Ini adalah halaman Biodata </h1>
    <h3>{{$blog}}</h3>

    @foreach($users as $user)
        <li>{{ $user->username.' '.$user->password }}</li>
    @endforeach

    <!-- {!! $unescape !!} -->
    {{ $unescape }}

    <div>
    @if(count($users) > 2)
        <p>wah banyak juga ya</p>
    @else
        <p> lumayan banyak </p>
    @endif
    </div>

@endsection
