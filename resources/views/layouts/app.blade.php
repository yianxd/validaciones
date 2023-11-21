<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    <nav>
        <ol>
            <li><a href="">Ruta1</a></li>
            <li><a href="">Ruta2</a></li>
            <li><a href="">Ruta3</a></li>
        </ol>
    </nav>
    @endauth
    @guest
        <ol>
            <li><a href="">Inicio</a></li>
            <li><a href="">Registro</a></li>
            <li><a href="">Iniciar Sesion</a></li>
        </ol>
    @endguest
    @if (auth()->user()->role_id==1)
    <p>Rol: Administrador</p>
    <nav>
        <menu>
            <a href="">Ver usuarios registrados</a>
            <a href="">Actualizar mis datos</a>
            <a href="">Cerrar sesion</a>
        </menu>
    </nav>
@endif

    @yield('title')
</body>
</html>
