@if(count($errors) > 0)
    {{--<h1>Errores de validación:</h1>--}}
    <div class="alert alert-danger">
        <h2>Errores de validación:</h2>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif