@extends('layouts.admin')

@section('content')
            {{--<h1 align="center"><a href="{{route('user.escritos.create')}}">Nuevo Escrito</a></h1>--}}

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

<div class="row">
    <div class="col-sm-6 col-sm-offset-5">
        {{$escritos->appends(Request::only(['fecha','organismo_id','caratula','causaNumero','causaAnio','observaciones','user_id','id']))->render()}}
    </div>
</div>

@stop

