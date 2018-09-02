@extends('layouts.admin')
@section('content')

    <h1>Edición de un Organismo</h1>

    <div class="row">


        <div class="col-sm-9">
            {!! Form::model($organismo,['method'=>'PATCH','action'=>['AdminOrganismosController@update', $organismo->id]])  !!}

            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('nombre','Nombre:') !!}
                {!! Form::text('nombre',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('edificio_id','Edificio:') !!}
                {!! Form::select('edificio_id', [''=>'Indique el Edificio del Usuario'] + $edificios,null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('piso','Piso:') !!}
                {!! Form::text('piso',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('observaciones','Observaciones:') !!}
                {!! Form::text('observaciones',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Actualizar Organismo',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=> ['AdminOrganismosController@destroy', $organismo->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Borrar Organismo',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>


@stop