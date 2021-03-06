@extends('layouts.admin')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@section('content')

    <div class="row">


        <div class="col-md8">
            <table class="table table-hover table-striped">
                <thead>

                    <tr>
                        <th>Fecha</th>
                        <th>Causa N°</th>
                        <th>Causa Año</th>
                        <th>Carátula</th>
                        <th>Para</th>
                        <th>En</th>
                        <th>Observaciones</th>
                        <th>Usuario</th>
                    </tr>

                </thead>

            <tbody>

                @if($escritos)
                @foreach($escritos as $escrito)

                    <tr>
                        <td>{{date('d-m-Y', strtotime($escrito->fecha))}}</td>
                        <td>{{$escrito->causaNumero}}</td>
                        <td>{{$escrito->causaAnio}}</td>
                        <td>{{$escrito->caratula}}</td>
                        <td>{{$escrito->organismo->nombreCorto}}</td>
                        <td>{{$escrito->mre->organismo->nombreCorto}}</td>
                        <td>{{$escrito->observaciones}}</td>
                        <td>{{$escrito->user->nombre}}</td>
                    </tr>

                @endforeach
                @endif


            </tbody>
        </table>
    </div>

</div>

@stop

