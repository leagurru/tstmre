@extends('layouts.admin')
@section('content')

    <h1>Creación de Usuario</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])  !!}
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

    {{--<div class="form-group">--}}
        {{--{!! Form::label('is_active','Status:') !!}--}}
        {{--{!! Form::select('is_active', array(1=>'Activo',0=>'Inactivo'), 0,['class'=>'form-control']) !!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('photo_id','File:') !!}--}}
        {{--{!! Form::file('photo_id',null,['class'=>'form-control']) !!}--}}
    {{--</div>--}}

    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Crear Usuario',['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

    @include('includes.form_error')


@stop