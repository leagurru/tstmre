@extends('layouts.admin')

@section('content')

    <h1>Escritos</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Organismo</th>
            <th>Causa N°</th>
            <th>Año</th>
            <th>Carátula</th>
            <th>Observaciones</th>
            <th>Creado</th>
            <th>Actualizado</th>
        </tr>
        </thead>
        <tbody>

        @if($escritos)
            @foreach($escritos as $escrito)

                <tr>
                    <td>{{$escrito->id}}</td>
                    <td>{{$escrito->organismo->nombre}}</td>
                    <td>{{$escrito->causaNumero}}</td>
                    <td>{{$escrito->causaAnio}}</td>
                    <td>{{$escrito->caratula}}</td>
                    <td>{{$escrito->observaciones}}</td>
                    <td>{{$escrito->created_at}}</td>
                    <td>{{$escrito->updated_at}}</td>
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
            {{$escritos->render()}}
        </div>
    </div>

@stop