@extends('adminlte::page')

@section('content')

{{-- {!! Form::open(['route' => 'home']) !!}
    <div class="form-group">
        {!! Form::h1('welcome', 'Bienvenido') !!}
    </div>
{!! Form::close() !!} --}}

{{-- 222222222222222222222222222222222222222222222222222222222222222222222222 --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Bienvenido</h1>
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_costom.css">
@endsection
