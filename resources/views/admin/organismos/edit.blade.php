@extends('layouts.admin')
@section('content')

    <h1>Edición de Usuario</h1>

    <div class="row">


        <div class="col-sm-9">
            {!! Form::model($organismo,['method'=>'PATCH','action'=>['AdminOrganismosController@update'])  !!}
            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('nombre','Nombre:') !!}
                {!! Form::text('nombre',null,['class'=>'form-control']) !!}
            </div>

            {{--<div class="form-group">--}}
                {{--{!! Form::label('nombre','Edificio:') !!}--}}
                {{--{!! Form::text('nombre',null,['class'=>'form-control']) !!}--}}
            {{--</div>--}}

            <div class="form-group">
                {!! Form::label('piso','Piso:') !!}
                {!! Form::text('piso',null,['class'=>'form-control']) !!}
            </div>

            {{--<div class="form-group">--}}
                {{--{!! Form::label('nombre','MRE:') !!}--}}
                {{--{!! Form::text('nombre',null,['class'=>'form-control']) !!}--}}
            {{--</div>--}}

            <div class="form-group">
                {!! Form::label('observaciones','Observaciones:') !!}
                {!! Form::text('observaciones',null,['class'=>'form-control']) !!}
            </div>








            {{--<div class="form-group">--}}
                {{--{!! Form::label('email','email:') !!}--}}
                {{--{!! Form::email('email',null,['class'=>'form-control']) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('role_id','Rol:') !!}--}}
                {{--{!! Form::select('role_id', $roles,null,['class'=>'form-control']) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('is_active','Status:') !!}--}}
                {{--{!! Form::select('is_active', array(1=>'Activo',0=>'Inactivo'), null,['class'=>'form-control']) !!}--}}
            {{--</div>--}}


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