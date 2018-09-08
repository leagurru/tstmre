@extends('layouts.admin')

@section('content')
            <h1 align="center"><a href="{{route('user.escritos.create')}}">Nuevo Escrito</a></h1>
        {{--<div class="col-md2">--}}
                {{--<a class="btn btn-primary" href="{{route('user.escritos.create')}}" role="button">Nuevo Escrito</a>--}}
        {{--</div>--}}

    {{--<div class="container">--}}
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                {{--{!! Form::open(['route'=>'user.escritos.index','method'=>'GET','class'=>'form-inline pull-right', 'role'=>'search'])  !!}--}}
                {{--{{csrf_field()}}--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::date('fecha',null, ['class'=>'form-control', 'placeholder' => 'Fecha']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::select('organismo_id', [''=>'Organismo'] + $organismos,null,['class'=>'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::text('caratula',null, ['class'=>'form-control', 'placeholder' => 'Carátula']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::number('causaNumero',null, ['class'=>'form-control', 'placeholder' => 'Causa N°']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::number('causaAnio',null, ['class'=>'form-control', 'placeholder' => 'Año']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::text('observaciones',null, ['class'=>'form-control', 'placeholder' => 'Observaciones']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::select('user_id', [''=>'Usuario'] + $users,null,['class'=>'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<button type="submit" class="btn btn-primary" type="button">Buscar</button>--}}
                {{--</div>--}}


                {{--{!! Form::close() !!}--}}
            </div>

        </div>

        <div class="col-md8">
            <table class="table table-hover table-striped">
                <thead>

                {{--<tr>--}}
                    {{--<th>Fecha</th>--}}
                    {{--<th>Causa N°</th>--}}
                    {{--<th>Causa Año</th>--}}
                    {{--<th>Carátula</th>--}}
                    {{--<th>Organismo</th>--}}
                    {{--<th>Observaciones</th>--}}
                    {{--<th>Usuario</th>--}}
                    {{--<th>--}}
                        {{--<a class="btn btn-primary" href="{{route('user.escritos.create')}}" role="button">Nuevo Escrito</a>--}}
                    {{--</th>--}}
                {{--</tr>--}}

                <tr>
                {!! Form::open(['route'=>'user.escritos.index','method'=>'GET','class'=>'form-inline pull-right', 'role'=>'search'])  !!}
                {{csrf_field()}}
            <th>
                <div class="form-group">
                    {!! Form::date('fecha',null, ['class'=>'form-control', 'placeholder' => 'Fecha']) !!}
                </div>
            </th>



            <th>
                <div class="form-group">
                    {!! Form::number('causaNumero',null, ['class'=>'form-control', 'placeholder' => 'Causa N°']) !!}
                </div>
            </th>
            <th>
                <div class="form-group">
                    {!! Form::number('causaAnio',null, ['class'=>'form-control', 'placeholder' => 'Año']) !!}
                </div>
            </th>

    <th>
        <div class="form-group">
            {!! Form::text('caratula',null, ['class'=>'form-control', 'placeholder' => 'Carátula']) !!}
        </div>
    </th>
    <th>
        <div class="form-group">
            {!! Form::select('organismo_id', [''=>'Organismo'] + $organismos,null,['class'=>'form-control']) !!}
        </div>
    </th>



            <th>
                <div class="form-group">
                    {!! Form::text('observaciones',null, ['class'=>'form-control', 'placeholder' => 'Observaciones']) !!}
                </div>
            </th>
            <th>
                <div class="form-group">
                    {!! Form::select('user_id', [''=>'Usuario'] + $users,null,['class'=>'form-control']) !!}
                </div>
            </th>
            <th>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" type="button">Buscar</button>
                </div>
            </th>

            {!! Form::close() !!}
</th>
            </thead>
            <tbody>

                @if($escritos)
                @foreach($escritos as $escrito)

                    <tr>
                        {{--<td>{{$escrito->fecha}}</td>--}}
                        <td>{{date('d-m-Y', strtotime($escrito->fecha))}}</td>
                        {{--date('d-m-Y', strtotime($user->from_date));--}}
                        <td>{{$escrito->causaNumero}}</td>
                        <td>{{$escrito->causaAnio}}</td>
                        <td><a href="{{route('user.escritos.edit',$escrito->id)}}">{{$escrito->caratula}}</a></td>
                        <td>{{$escrito->organismo->nombre}}</td>
                        <td>{{$escrito->observaciones}}</td>
                        <td>{{$escrito->user->name}}</td>
                    </tr>

                @endforeach
                @endif




            </tbody>
        </table>
    </div>

</div>

<div class="row">
    <div class="col-sm-6 col-sm-offset-5">
        {{$escritos->appends(Request::only(['fecha','organismo_id','caratula','causaNumero','causaAnio','observaciones','user_id']))->render()}}
    </div>
</div>

@stop

{{--@extends('layouts.admin')--}}

{{--@section('content')--}}

    {{--<h1>Escritos</h1>--}}
    {{--<table class="table">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>Causa N°</th>--}}
            {{--<th>Causa Año</th>--}}
            {{--<th>Carátula</th>--}}
            {{--<th>Organismo</th>--}}
            {{--<th>Observaciones</th>--}}
            {{--<th>Usuario</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}

        {{--@if($escritos)--}}
            {{--@foreach($escritos as $escrito)--}}

                {{--<tr>--}}
                    {{--<td>{{$escrito->causaNumero}}</td>--}}
                    {{--<td>{{$escrito->causaAnio}}</td>--}}
                    {{--<td><a href="{{route('user.escritos.edit',$escrito->id)}}">{{$escrito->caratula}}</a></td>--}}
                    {{--<td>{{$escrito->organismo->nombre}}</td>--}}
                    {{--<td>{{$escrito->observaciones}}</td>--}}
                    {{--<td>{{$escrito->user->name}}</td>--}}
                {{--</tr>--}}

            {{--@endforeach--}}
        {{--@endif--}}

        {{--</tbody>--}}
    {{--</table>--}}

    {{--<div class="row">--}}
        {{--<div class="col-sm-6 col-sm-offset-5"></div>--}}
    {{--</div>--}}


    {{--<div class="row">--}}
        {{--<div class="col-sm-6 col-sm-offset-5">--}}
            {{--{{$escritos->render()}}--}}
        {{--</div>--}}
    {{--</div>--}}

{{--@stop--}}