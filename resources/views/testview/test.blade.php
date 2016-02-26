@extends('app')

@section('content')

<h2>hello from {{ $name }}</h2>

    @foreach($myarray as $a)
    {{$a}}
    @endforeach
    @stop