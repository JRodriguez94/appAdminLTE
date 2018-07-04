@extends('adminlte::page')

@section('content')

        <h1>Registro Usuarios</h1><br>
        @if( session()->has('info'))
            <h3> {{ session('info') }} </h3>
        @else
        
        <form method="POST" action="{{ route('users.store') }}">
            <input type="hidden" name="remember_token" value="{!! csrf_token() !!}">
            {{-- <h3>{!! csrf_field() !!}</h3> --}}
            {{-- <h3>{!! csrf_field() !!}</h3> --}}
            {{-- {!! csrf_token() !!} --}}
            <p><label for="Nombre">
                Nombre
                <input class="form-control" type="text" name="name">
                {!! $errors->first('name', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Telefono">
                Telefono
                <input class="form-control" type="text" name="phone">
                {!! $errors->first('phone', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Email">
                Email
                <input class="form-control" type="text" name="email">
                {!! $errors->first('email', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="Contraseña">
                Contraseña
                <input class="form-control" type="password" name="password">
                {!! $errors->first('password', '<span class=error>:message</span>') !!}
            </label></p>
            <p><label for="ContraseñaConf">
                Confirmar Contraseña
                <input class="form-control" type="password" name="passwordconf">
                {!! $errors->first('password', '<span class=error>:message</span>') !!}
            </label></p>
            <input class="btn btn-primary" type="submit" value="Enviar">
            {{-- ....................................................................... --}}
            {{-- <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div> --}}
            {{-- ....................................................................... --}}
        </form>
        @endif
@endsection
@section("css")
    <link rel="stylesheet" href="/css/admin_costom.css">
@endsection