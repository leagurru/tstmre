@extends('layouts.admin')

@section('content')

    <h1>Mesas Receptoras de Escritos</h1>
    <table class="table">
        <thead>
        <tr>
            {{--<th>Id Mesa</th>--}}
            {{--<th>Id Organismo</th>--}}
            <th>Mesa</th>
            <th>Organismos</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @if($mres)
            @foreach($mres as $mre)

                <tr>
                    {{--<td>{{$mre->id}}</td>--}}
                    {{--<td>{{$mre->organismo_id}}</td>--}}
                    <td><a href="{{route('admin.mres.edit',$mre->id)}}">{{$mre->organismo->nombre}}</a></td>
                    <td></td>
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
            {{$mres->render()}}
        </div>
    </div>

@stop