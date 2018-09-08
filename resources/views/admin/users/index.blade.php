@extends('layouts.admin')

@section('content')

    <h1>Usuarios</h1>


    {{--<div class="container">--}}
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                        {!! Form::open(['route'=>'admin.users.index','method'=>'GET','class'=>'form-inline pull-right', 'role'=>'search'])  !!}
                        {{csrf_field()}}

                            <div class="form-group">
                                {!! Form::text('name',null, ['class'=>'form-control', 'placeholder' => 'Nombre']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::text('email',null, ['class'=>'form-control', 'placeholder' => 'email']) !!}
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" type="button">Buscar</button>
                            </div>


                        {!! Form::close() !!}
                </div>

            </div>

            <div class="col-md8">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Organismo</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($users)
                        @foreach($users as $user)

                            <tr>
                                <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->organismo->nombre}}</td>
                                <td>{{$user->email}}</td>
                            </tr>

                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>

        </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {{$users->appends(Request::only(['name','email']))->render()}}
        </div>
    </div>

@stop