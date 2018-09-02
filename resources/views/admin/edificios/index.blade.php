@extends('layouts.admin')

@section('content')

    <h1>Edificios</h1>
    <table class="table">
        <thead>
        <tr>
            {{--<th>Id</th>--}}
            <th>Dirección</th>
            {{--<th>Creado</th>--}}
            {{--<th>Actualizado</th>--}}
        </tr>
        </thead>
        <tbody>

        @if($edificios)
            @foreach($edificios as $edificio)

                <tr>
                    {{--<td>{{$edificio->id}}</td>--}}
                    <td><a href="{{route('admin.edificios.edit',$edificio->id)}}">{{$edificio->direccion}}</a></td>
                    {{--<td>{{$edificio->created_at}}</td>--}}
                    {{--<td>{{$edificio->updated_at}}</td>--}}
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
            {{$edificios->render()}}
        </div>
    </div>

@stop