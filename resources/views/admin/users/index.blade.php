@extends('layouts.admin')

@section('content')

    <h1>Usuarios</h1>

    {{--<div class="input-group mb-3">--}}
        {{--<input type="text" class="form-control" placeholder="Buscar Usuario" aria-label="Recipient's username" aria-describedby="basic-addon2">--}}
        {{--<div class="input-group-append">--}}
            {{--<button class="btn btn-outline-secondary" type="button">Buscar</button>--}}
        {{--</div>--}}
    {{--</div>--}}

    {!! Form::open(['route'=>'admin.users.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right', 'role'=>'search'])  !!}
    {{csrf_field()}}
        <div class="row">

            <div class="col-md-1 text-left">
                <a class="btn btn-primary" href="{{route('admin.users.create')}}" role="button">Nuevo Usuario</a>
            </div>

            <div class="col-md-3 input-group mb-3 left-pull-right">
                {!! Form::text('name',null, ['class'=>'form-control', 'placeholder' => 'Buscar Usuario']) !!}
                <button type="submit" class="btn btn-primary" type="button">Buscar</button>
            </div>


    {!! Form::close() !!}



    {{--<div class="container-fluid">--}}
        {{--<div class="row">--}}

            {{--<div class="col-md-6 input-group mb-3 left-pull-right">--}}
                {{--<input type="text" class="form-control" placeholder="Buscar Usuario" aria-label="Recipient's username" aria-describedby="basic-addon2">--}}
                {{--<div class="input-group-append">--}}
                    {{--<button class="btn btn-outline-secondary" type="button">Buscar</button>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="col-md-1 text-left">--}}
                {{--<a class="btn btn-primary" href="{{route('admin.users.create')}}" role="button">Nuevo Usuario</a>--}}
            {{--</div>--}}


        {{--</div>--}}
    {{--</div>--}}

    <table class="table">
        <thead>
        <tr>
            {{--<th>Id</th>--}}
            <th>Nombre</th>
            <th>Organismo</th>
            <th>Email</th>
            {{--<th>Creado</th>--}}
            {{--<th>Actualizado</th>--}}
            {{--<th>Editar</th>--}}
        </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)

                <tr>
                    {{--<td>{{$user->id}}</td>--}}
                    <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->organismo->nombre}}</td>
                    <td>{{$user->email}}</td>
                    {{--<td>{{$user->created_at}}</td>--}}
                    {{--<td>{{$user->updated_at}}</td>--}}
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5"></div>
    </div>


    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {{$users->render()}}
        </div>
    </div>

@stop