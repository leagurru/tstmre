@extends('layouts.admin')

@section('content')
            <h1 align="center"><a href="{{route('user.escritos.create')}}">Nuevo Escrito</a></h1>

    <div class="row">


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
                {!! Form::open(['route'=>'user.escritos.informe','method'=>'GET','class'=>'form-inline pull-right', 'role'=>'search'])  !!}
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
                            {!! Form::select('organismo_id', [''=>'Para:'] + $organismos,null,['class'=>'form-control']) !!}
                        </div>
                    </th>


                    <th>
                        <div class="form-group">
                            <select class="form-control" name="id">
                                <option value="" selected="selected">En:</option>
                                @foreach($organismosEn as $mre)
                                    <option value="{{$mre->organismo->id}}">{{$mre->organismo->nombreCorto}}</option>
                                @endforeach
                            </select>
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
                            <button type="submit" class="btn btn-primary" value="buscar" name="accion">Buscar</button>
                            {{--<button type="submit" class="btn btn-primary" type="button">Buscar</button>--}}
                        </div>
                    </th>

                    <th>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" value="informe" name="accion">Informe</button>
                        </div>
                    </th>

                {!! Form::close() !!}


                    {{--// parametros obtenidos en otro form--}}
                {{--{!! Form::open(['route'=>'user.escritos.informe','method'=>'GET','class'=>'form-inline pull-right', 'role'=>'search'])  !!}--}}
                    {{--<th>--}}
                        {{--<div class="form-group">--}}
                            {{--<button type="submit" class="btn btn-primary" type="button">Imprimir PDF</button>--}}
                        {{--</div>--}}
                    {{--</th>--}}

                {{--{!! Form::close() !!}--}}
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
                        <td><a class="btn btn-primary" href="{{route('user.escritos.edit',$escrito->id)}}">Editar</a></td>
                        {{--<td><a class="btn btn-danger"  href="{{route('user.escritos.destroy',$escrito->id)}}">Borrar</a></td>--}}
                        <td>
                        {!! Form::open(['method'=>'DELETE','action'=> ['User\EscritosController@destroy', $escrito->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}
                        </td>
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

