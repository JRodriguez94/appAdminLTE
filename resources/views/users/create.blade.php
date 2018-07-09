@extends('adminlte::page')

@section('content')

        <h1>Registro Usuarios</h1><br>
        @if( session()->has('info'))
            <h3> {{ session('info') }} </h3>
        @else
        <form method="POST" action="{{ route('users.store') }}">
            <input type="hidden" name="remember_token" value="{!! csrf_token() !!}">
            <p><label for="Nombre">
                Nombre
                <input class="form-control" type="text" name="name" required>
                {!! $errors->first('name', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Telefono">
                Telefono
                <input class="form-control" type="text" name="phone" required>
                {!! $errors->first('phone', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Email">
                Email
                <input class="form-control" type="email" name="email" required>
                {!! $errors->first('email', '<span class=error>:message</span>') !!}
            </label></p>
                @if( session()->has('validateP'))
                    <label class="alert alert-error">
                        {{ session('validateP') }}
                    </label>
                @endif
                <!-- ¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿ -->
             <p><label for="password" >
                {{ __('Contraseña') }}
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
             </label></p>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            <p><label for="password_confirm"> 
                    {{ __('Confirmar contraseña') }}
                    <input id="password_confirm" type="password" class="form-control{{ $errors->has('password_confirm') ? ' is-invalid' : '' }}" name="password_confirmation" required>
            </label></p>
            @if ($errors->has('password_confirm'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password_confirm') }}</strong>
            </span>
            @endif
            <!-- ¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿ -->
            <input class="btn btn-primary" type="submit" value="Enviar">
         </form>
        @endif
@endsection
@section("css")
    <link rel="stylesheet" href="/css/admin_costom.css">
@endsection