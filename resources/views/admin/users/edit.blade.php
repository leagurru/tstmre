@extends('layouts.admin')
@section('content')

    <h1>Edición de Usuario</h1>

    <div class="row">


        <div class="col-sm-9">
{{--            {!! Form::model($user,['method'=>'PATCH','action'=>['UsersController', $user->id],'files'=>true])  !!}--}}
            {!! Form::model($user,['method'=>'PATCH','url'=>['/admin/users/' . $user->id]])  !!}

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

            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Actualizar Usuario',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=> ['Admin\UsersController@destroy', $user->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Borrar Usuario',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>


@stop