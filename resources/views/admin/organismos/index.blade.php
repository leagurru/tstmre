@extends('layouts.admin')

@section('content')

    <h1>Organismos</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edificio</th>
            <th>Piso</th>
            <th>MRE</th>
            <th>Observaciones</th>
            {{--<th>Creado</th>--}}
            {{--<th>Actualizado</th>--}}
        </tr>
        </thead>
        <tbody>

        @if($organismos)
            @foreach($organismos as $organismo)

                <tr>
                    <td>{{$organismo->id}}</td>
                    <td>{{$organismo->nombre}}</td>
                    <td>{{$organismo->edificio->direccion}}</td>
                    <td>{{$organismo->piso}}</td>
                    <td>{{$organismo->piso}}</td>
                    <td>{{$organismo->observaciones}}</td>
                    {{--<td>{{$organismo->created_at}}</td>--}}
                    {{--<td>{{$organismo->updated_at}}</td>--}}
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
            {{$organismos->render()}}
        </div>
    </div>

@stop