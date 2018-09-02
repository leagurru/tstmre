@extends('layouts.admin')

@section('content')

    <h1>Escritos</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Organismo</th>
            <th>Causa N°</th>
            <th>Causa Año</th>
            <th>Carátula</th>
            <th>Observaciones</th>
            <th>Usuario</th>
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
                    {{--<td><a href="{{route('escritos.edit',$escrito->id)}}">{{$escrito->caratula}}</a></td>--}}
                    <td>{{$escrito->observaciones}}</td>
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