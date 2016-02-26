@extends('app')

@section('content')
   @if($errors->any())
      <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
      </ul>
   @endif

    <h2>Add a employee form </h2>
<hr/>
    <div class="form-group">
{!! Form::open() !!}
{!! Form::label('enter employee name',null,['class'=>'form-group']) !!}
    <br>

{!! Form::text('e_name',null,['class'=>'form-group']) !!}<br>
        {!! Form::label('enter salary',null,['class'=>'form-group']) !!}<br>
        {!! Form::text('salary',null,['class'=>'form-group']) !!}<br>
   {!! Form::input('date','published_at',\Carbon\Carbon::now()) !!}
        {!! Form::submit('add employee',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    </div>

    @stop