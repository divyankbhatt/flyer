@extends('app')
@section('content')
    <h2>Company Name :- </h2>{{ $art['company_name']  }}
    <h4>Employee Details</h4>
    @foreach($art['employee'] as $emp)
    <h6>Employee name :- </h6>{{$emp['e_name']}}
    @endforeach
@stop
