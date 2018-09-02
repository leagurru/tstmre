@extends('layouts.admin')
@section('content')

    <h1>Edición de un Edificio</h1>

    <div class="row">


        <div class="col-sm-9">
            {!! Form::model($edificio,['method'=>'PATCH','action'=>['AdminEdificiosController@update', $edificio->id]])  !!}

            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('direccion','Dirección:') !!}
                {!! Form::text('direccion',null,['class'=>'form-control']) !!}
            </div>

             <div class="form-group">
                {!! Form::submit('Actualizar Edificio',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=> ['AdminEdificiosController@destroy', $edificio->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Borrar Edificio',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>


@stop