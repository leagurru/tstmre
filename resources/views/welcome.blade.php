<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div>
                    <div>
                        Usuarios
                    </div>

                    <div>
                        <a href="admin/users">Todos los Usuarios</a>
                        <a href="admin/users/create">Crear un Usuario</a>

                    </div>
                </div>
                <br><br>
                <div>
                    <div>
                        Organismos
                    </div>

                    <div>
                        <a href="admin/organismos">Todos los Organismos</a>
                        <a href="admin/organismos/create">Crear un Organismo</a>

                    </div>
                </div>

                <br><br>
                <div>
                    <div>
                        Edificios
                    </div>

                    <div>
                        <a href="admin/edificios">Consultar Edificios</a>
                        <a href="admin/edificios/create">Crear un Edificio</a>
                    </div>
                </div>

                <br><br>
                <div>
                    <div>
                        Mesas Receptoras
                    </div>

                    <div>
                        <a href="admin/mres">Consultar MREs</a>
                        <a href="admin/mres/create">Crear MRE</a>
                    </div>
                </div>


                <br><br>
                <div>
                    <div>
                        Escritos
                    </div>

                    <div>
                        <a href="escritos/index">Todos los Escritos</a>
                        <a href="https://laracasts.com">Nuevo Escrito</a>

                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
