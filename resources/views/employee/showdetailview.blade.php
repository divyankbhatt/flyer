@extends('app')

@section('content')
    <h2>Details</h2>
    {{$empdetails->e_name}}
    <br>
    {{$empdetails->salary}}

@stop
