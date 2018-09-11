
@extends('admin::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.registeruser') }}
@endsection

@section('contentheader_title')
@endsection

@section('styles')
    @include('users.partials.header')
@endsection
@section('main-content')

    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{--@include('alert.messages')--}}
                <div class="panel panel-default">
                    <div class="panel-heading header-nuvem">{{ trans('adminlte_lang::message.registeruser') }}</div>
                    <div class="panel-body bgn">
                        {{--{!! Form::open(['route'=>'users.store', 'method'=>'POST', 'class' => 'form-horizontal', 'files' => true]) !!}--}}

                        {{--@include('users.partials.inputs', ['user'=>null])--}}

                        <div class="text-center">
                            <div class="form-group">

                            </div>
                        </div>
                        {{--{!! Form::close() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection








{{--@extends('adminlte::page')--}}

{{--@section('content')--}}

        {{--<h1>Registro Usuarios</h1><br>--}}
        {{--@if( session()->has('info'))--}}
            {{--<h3> {{ session('info') }} </h3>--}}
        {{--@else--}}
        {{--{{ Form::open(['route' => 'users.store']) }}--}}
            {{--<input type="hidden" name="remember_token" value="{!! csrf_token() !!}">--}}
            {{--{{ Form::label('name', 'Nombre') }}<br>--}}
            {{--{{ Form::text('name', old('name'), ['class' => 'form-control']) }}<br>--}}
            {{--{!! $errors->first('name', '<span class=error>:message</span>') !!}--}}

            {{--{{ Form::label('phone', 'Telefono') }}<br>--}}
            {{--{{ Form::text('phone', old('phone'), ['class' => 'form-control']) }}<br>--}}
            {{--{!! $errors->first('phone', '<span class=error>:message</span>') !!}--}}

            {{--{{ Form::label('email', 'Email') }}<br>--}}
            {{--{{ Form::text('email', old('email'), ['class' => 'form-control']) }}<br>--}}
            {{--{!! $errors->first('email', '<span class=error>:message</span>') !!}--}}

            {{--@if( session()->has('validateP'))--}}
                {{--<label class="alert alert-error">--}}
                    {{--{{ session('validateP') }}--}}
                {{--</label>--}}
            {{--@endif--}}

            {{--{{ Form::label('password', 'Contraseña') }}<br>--}}
            {{--{{ Form::password('password', ['class' => 'form-control--}}{{--{{ $errors->has('password') ? ' is-invalid' : '' }}--}}{{--']) }}<br>--}}
            {{--@if ($errors->has('password'))--}}
                        {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--</span><br>--}}
            {{--@endif--}}

            {{--{{ Form::label('password_confirm', 'Confirmar Contraseña') }}<br>--}}
            {{--{{ Form::password('password_confirm', ['class' => 'form-control--}}{{--{{ $errors->has('password_confirm') ? ' is-invalid' : '' }}--}}{{--']) }}<br>--}}
            {{--@if ($errors->has('password_confirm'))--}}
                {{--<span class="invalid-feedback" role="alert">--}}
                    {{--<strong>{{ $errors->first('password_confirm') }}</strong>--}}
                {{--</span>--}}
            {{--@endif--}}

            {{--{{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}--}}
        {{--{{  Form::close()  }}--}}

        {{-- <form method="POST" action="{{ route('users.store') }}">--}}
            {{--<input type="hidden" name="remember_token" value="{!! csrf_token() !!}">--}}
            {{--<p><label for="Nombre">--}}
                {{--Nombre--}}
                {{--<input class="form-control" type="text" name="name" required>--}}
                {{--{!! $errors->first('name', '<span class=error>:message</span>') !!}--}}
            {{--</label></p>--}}
            {{--<p><label for="Telefono">--}}
                {{--Telefono--}}
                {{--<input class="form-control" type="text" name="phone" required>--}}
                {{--{!! $errors->first('phone', '<span class=error>:message</span>') !!}--}}
            {{--</label></p>--}}
            {{--<p><label for="Email">--}}
                {{--Email--}}
                {{--<input class="form-control" type="email" name="email" required>--}}
                {{--{!! $errors->first('email', '<span class=error>:message</span>') !!}--}}
            {{--</label></p>--}}
                {{--@if( session()->has('validateP'))--}}
                    {{--<label class="alert alert-error">--}}
                        {{--{{ session('validateP') }}--}}
                    {{--</label>--}}
                {{--@endif--}}
                {{--<!-- ¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿ -->--}}
             {{--<p><label for="password" >--}}
                {{--{{ __('Contraseña') }}--}}
                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
             {{--</label></p>--}}
                    {{--@if ($errors->has('password'))--}}
                        {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--</span>--}}
                    {{--@endif--}}
            {{--<p><label for="password_confirm"> --}}
                    {{--{{ __('Confirmar contraseña') }}--}}
                    {{--<input id="password_confirm" type="password" class="form-control{{ $errors->has('password_confirm') ? ' is-invalid' : '' }}" name="password_confirmation" required>--}}
            {{--</label></p>--}}
            {{--@if ($errors->has('password_confirm'))--}}
            {{--<span class="invalid-feedback" role="alert">--}}
                {{--<strong>{{ $errors->first('password_confirm') }}</strong>--}}
            {{--</span>--}}
            {{--@endif--}}
            {{--<!-- ¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿ -->--}}
            {{--<input class="btn btn-primary" type="submit" value="Enviar">--}}
         {{--</form> --}}
        {{--@endif--}}
{{--@endsection--}}
{{--@section("css")--}}
    {{--<link rel="stylesheet" href="/css/admin_costom.css">--}}
{{--@endsection--}}