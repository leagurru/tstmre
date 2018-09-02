@extends('layouts.admin')
@section('content')

    <h1>Creación de Usuario</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store'])  !!}
    {{csrf_field()}}

    <div class="form-group">
        {!! Form::label('name','Nombre:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','email:') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('organismo_id','Organismo:') !!}
        {!! Form::select('organismo_id', [''=>'Indique el Organismo del Usuario'] + $organismos,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Crear Usuario',['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

    <div class="row">
        @include('includes.form_error')
    </div>


@stop