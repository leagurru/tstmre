@extends('layouts.admin')

@section('content')

    <h1>Usuarios</h1>
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