@extends('adminlte::page')

@section('contenido')
	<h1>Usuario</h1>
	<p>Nombre: {{ $usuario ->name}} - {{ $user->name }}</p>
	<p>Telefono: {{$usuario ->phone}} - {{ $user->phone}}</p>
	<p>Email: {{ $usuario ->email }} - {{ $user->email}}</p>
@endsection 