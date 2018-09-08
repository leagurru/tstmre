@extends('layouts.admin')
@section('content')

    <h1>Edición de un Escrito</h1>

    <div class="row">


        <div class="col-sm-9">
            {{--{!! Form::model($escrito,['method'=>'PATCH','action'=>['EscritosController@update', $escrito->id]])  !!}--}}

            {!! Form::model($escrito,['method'=>'PATCH','url'=>['/user/escritos/' . $escrito->id]])  !!}

            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('fecha','Fecha:') !!}
                {!! Form::date('fecha',null,['class'=>'form-control']) !!}
            </div>

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
                {!! Form::submit('Actualizar Escrito',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=> ['User\EscritosController@destroy', $escrito->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Borrar Escrito',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>


@stop