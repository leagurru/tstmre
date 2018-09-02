@extends('layouts.admin')
@section('content')

    <h1>Edición de una MRE</h1>

    <div class="row">


        <div class="col-sm-9">
            {!! Form::model($mre,['method'=>'PATCH','action'=>['AdminMresController@update', $mre->id]])  !!}

            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('organismo_id','Organismo:') !!}
                {!! Form::select('organismo_id', [''=>'Indique el Organismo del Usuario'] + $organismos,null,['class'=>'form-control']) !!}
            </div>

             <div class="form-group">
                {!! Form::submit('Actualizar MRE',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=> ['AdminMresController@destroy', $mre->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Borrar MRE',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>


@stop