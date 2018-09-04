@extends('layouts.admin')
@section('content')

    <h1>Creación de un Edificio</h1>

    {{--<div class="row">--}}


        {{--<div class="col-sm-9">--}}
            {{--{!! Form::open(['method'=>'POST','action'=>'AdminEdificiosController@store'])  !!}--}}
            {!! Form::open(['method'=>'POST','url'=>'/admin/edificios/'])  !!}

            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('direccion','Dirección:') !!}
                {!! Form::text('direccion',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Crear Edificio',['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        {{--</div>--}}

    {{--</div>--}}

    <div class="row">
        @include('includes.form_error')
    </div>


@stop