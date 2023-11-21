@extends('layaout.guest')

@section('title')
INICIO DE SESION
@endsection
<body>
    <form action="{{ route('login')}}" method="POST">
        @csrf

        @if(session('mensaje'))
        @endif

        <input type="email" name="email" id="" placeholder="Email" value="{{ old('email')}}">
        @error('email')
            <h6>{{$message}}</h6>
        @enderror
        <input type="password" name="password" id="" placeholder="Password">
        @error('password')
            <h6>{{$message}}</h6>
        @enderror
        <input type="submit" name="login" value="Login">
    </form>
</body>
