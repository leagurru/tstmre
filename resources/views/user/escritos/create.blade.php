@extends('layouts.admin')
@section('content')



    <h1>Nuevo Escrito</h1>

    {{--<div class="row">--}}


        {{--<div class="col-sm-9">--}}
            {{--{!! Form::open(['method'=>'POST','action'=>'EscritosController@store'])  !!}--}}
        {!! Form::open(['method'=>'POST','url'=>['/user/escritos/']])  !!}

            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('causaNumero','Causa N°:') !!}
                {!! Form::text('causaNumero',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('causaAnio','Causa Año:') !!}
                {!! Form::text('causaAnio',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('caratula','Carátula:') !!}
                {!! Form::text('caratula',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('organismo_id','Organismo:') !!}
                {!! Form::select('organismo_id', [''=>'Indique el Organismo del Usuario'] + $organismos,null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('observaciones','Observaciones:') !!}
                {!! Form::text('observaciones',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('user_id','Usuario:') !!}
                {!! Form::select('user_id', [''=>'Indique el Usuario'] + $users,null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Crear un Nuevo Escrito',['class'=>'btn btn-primary']) !!}
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