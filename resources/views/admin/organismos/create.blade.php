@extends('layouts.admin')
@section('content')



    <h1>Creación de un Organismo</h1>

    {{--<div class="row">--}}


        {{--<div class="col-sm-9">--}}
            {!! Form::open(['method'=>'POST','action'=>'AdminOrganismosController@store'])  !!}

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
                {!! Form::submit('Crear Organismo',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

        {{--</div>--}}

    {{--</div>--}}

    <div class="row">
        @include('includes.form_error')
    </div>

    <div class="row">
    @include('includes.success')
    </div>

@stop