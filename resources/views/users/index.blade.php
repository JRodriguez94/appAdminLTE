@extends('adminlte::page')

@section('content')

	<h1>Usuarios</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>E-mail</th>
				<th>Fecha creado</th>
				<th>Ultima actualazación</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>
					<a href="{{ route('users.show', $user->id) }}">
					{{ $user->name }}
					</a>
				</td>
				<td>{{ $user->phone }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->created_at }}</td>
				<td>{{ $user->updated_at }}</td>
				<td>
					<a href="{{ route('users.edit', $user->id) }}">Editar</a>
					<form method="POST" action="{{ route('users.destroy', $user->id) }}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}
						<button type="submit">Eliminar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection