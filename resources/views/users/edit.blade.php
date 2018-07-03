@extends('adminlte::page')

@section('content')

        <h1>Modificar datos de {{ $user->name }}</h1><br>
        {{-- @if( session()->has('info'))
            <h3> {{ session('info') }} </h3>
        @else --}}
        
        <form method="POST" action="{{ route('users.update', $user->id) }}">
            {!! method_field('PUT') !!}
            {!! csrf_field() !!}
            {{-- <input type="hidden" name="remember_token" value="{!! csrf_token() !!}"> --}}
            <p><label for="Nombre">
                Nombre
                <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                {!! $errors->first('name', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Telefono">
                Telefono
                <input class="form-control" type="text" name="phone" value="{{ $user->phone }}">
                {!! $errors->first('phone', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Email">
                Email
                <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                {!! $errors->first('email', '<span class=error>:message</span>') !!}
            </label></p>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </form>
        {{-- @endif --}}
@endsection
@section("css")
    <link rel="stylesheet" href="/css/admin_costom.css">
@endsection