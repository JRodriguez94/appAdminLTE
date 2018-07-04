@extends('adminlte::page')

@section('content')
	<h1>Usuario</h1>
	<br>
	<p>
		<h3>Nombre:</h3><h4>{{ $user->name }}</h4>
	</p>
	<p>
		<h3>Telefono:</h3><h4>{{ $user->phone}}</h4>
	</p>
	<p>
		<h3>Email:</h3><h4>{{ $user->email}}</h4>
	</p>
@endsection 