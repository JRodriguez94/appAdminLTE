@extends('adminlte::page')

@section('content')
	<h1>Usuario</h1>
	<p>Nombre:   {{ $user->name }}</p>
	<p>Telefono: {{ $user->phone}}</p>
	<p>Email: 	 {{ $user->email}}</p>
@endsection 