@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

{{--https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css--}}
{{--https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css--}}
@endsection


@section('content')

    <div class="container">
        <table id="escritos" class="table table-striped table-bordered" style="width:100%">
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
                        <td>{{$escrito->caratula}}</a></td>
                        <td>{{$escrito->organismo->nombreCorto}}</td>
                        <td>{{$escrito->mre->organismo->nombreCorto}}</td>
                        <td>{{$escrito->observaciones}}</td>
                        <td>{{$escrito->user->nombre}}</td>
                        {{--<td><a class="btn btn-primary" href="{{route('user.escritos.edit',$escrito->id)}}">Editar</a></td>--}}
                        {{--<td>--}}
                            {{--{!! Form::open(['method'=>'DELETE','action'=> ['User\EscritosController@destroy', $escrito->id]]) !!}--}}

                            {{--<div class="form-group">--}}
                                {{--{!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}--}}
                            {{--</div>--}}

                            {{--{!! Form::close() !!}--}}
                        {{--</td>--}}
                    </tr>

                @endforeach
                @endif

            </tbody>
        </table>
    </div>

{{--<div class="row">--}}
    {{--<div class="col-sm-6 col-sm-offset-5">--}}
        {{--{{$escritos->appends(Request::only(['fecha','organismo_id','caratula','causaNumero','causaAnio','observaciones','user_id']))->render()}}--}}
    {{--</div>--}}
{{--</div>--}}
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#escritos').DataTable();
        } );
    </script>

    {{--https://code.jquery.com/jquery-3.3.1.js--}}
    {{--https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js--}}
    {{--https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js--}}
@endsection





