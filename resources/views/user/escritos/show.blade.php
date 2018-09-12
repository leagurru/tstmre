@extends('layouts.admin')

@section('content')

    <h1>Escrito</h1>

    <div class="container">

        <div class="col-sm-6">
            <table class="table table-hover table-striped">

                <tbody>
                    <tr>
                        <th scope="row">Fecha</th>
                        <td>{{$escrito->fecha}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Causa N°</th>
                        <td>{{$escrito->causaNumero}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Año</th>
                        <td>{{$escrito->causaAnio}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Año</th>
                        <td>{{$escrito->causaAnio}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Carátula</th>
                        <td>{{$escrito->caratula}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Para</th>
                        <td>{{$escrito->organismo->nombreCorto}}</td>
                    </tr>

                    <tr>
                        <th scope="row">En</th>
                        <td>{{$escrito->mre->organismo->nombreCorto}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Observaciones</th>
                        <td>{{$escrito->observaciones}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Usuario</th>
                        <td>{{$escrito->user->nombre}}</td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>


    <div class="row">
        @include('includes.form_error')
    </div>

@endsection