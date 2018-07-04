@extends('adminlte::page')

@section('content')
        <h1>Modificar datos de {{ $user->name }}</h1><br>
        <form method="POST" action="{{ route('users.update', $user->id) }}">
            {!! method_field('PUT') !!}
            {!! csrf_field() !!}
            <p><label for="Nombre">
                Nombre
                <input class="form-control" type="text" name="name" value="{{ $user->name }}" required>
                {!! $errors->first('name', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Telefono">
                Telefono
                <input class="form-control" type="text" name="phone" value="{{ $user->phone }}" required>
                {!! $errors->first('phone', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Email">
                Email
                <input class="form-control" type="email" name="email" value="{{ $user->email }}" required>
                {!! $errors->first('email', '<span class=error>:message</span>') !!}
            </label></p>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </form>
@endsection
@section("css")
    <link rel="stylesheet" href="/css/admin_costom.css">
@endsection