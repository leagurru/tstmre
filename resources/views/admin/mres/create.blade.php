@extends('layouts.admin')
@section('content')

    <h1>Creación de una MRE</h1>

    {{--<div class="row">--}}


        {{--<div class="col-sm-9">--}}
            {{--{!! Form::open(['method'=>'POST','action'=>'AdminEdificiosController@store'])  !!}--}}
            {!! Form::open(['method'=>'POST','url'=>'/admin/mres/'])  !!}

            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('organismo_id','Organismo:') !!}
                {!! Form::select('organismo_id', [''=>'Indique el Organismo que será MRE'] + $organismos,null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Crear MRE',['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        {{--</div>--}}

    {{--</div>--}}

    <div class="row">
        @include('includes.form_error')
    </div>


@stop