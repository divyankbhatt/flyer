@extends('app')

@section('content')

    <h2>Employees</h2>
@foreach($employee as $e)
    {{$e->e_name}}
    <a href="employee/{{$e->id}}">View detail of this employee </a>
    <br>

    @endforeach
    @stop