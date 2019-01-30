@extends('layouts.master')

@section('title', 'Biodata')

@section('content')
    <h1>Ini adalah halaman Biodata </h1>
    <h3>{{$blog}}</h3>
    <h4>{{$user}}</h4>

    @foreach($pekerjaan as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
    
    {!! $unescape !!} 
    {{ $unescape }}

    <div>
    @if(count($pekerjaan) > 2)
        <p>wah banyak juga ya</p>
    @else
        <p> lumayan banyak </p>
    @endif
    </div>
    
@endsection