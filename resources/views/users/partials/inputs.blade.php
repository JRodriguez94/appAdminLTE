{{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('name') ? '* ' : '' }}{{ trans('adminlte_lang::message.yourname') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::text('name',null,['class'=>'form-control','required', 'maxlength'=>255])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('lastNameFather') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('lastNameFather') ? '* ' : '' }}{{ trans('adminlte_lang::message.lastnamefather') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::text('lastNameFather',null,['class'=>'form-control','required', 'maxlength'=>255])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('lastNameMother') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('lastNameMother') ? '* ' : '' }}{{ trans('adminlte_lang::message.lastnamemother') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::text('lastNameMother',null,['class'=>'form-control', 'maxlength'=>255])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('street') ? '* ' : '' }}Calle:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::text('street',null,['class'=>'form-control','required', 'maxlength'=>191])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group" style="padding-left:82px">--}}
    {{--<div class="col-sm-6">--}}
        {{--<div class="row">--}}
            {{--<div class="form-group{{ $errors->has('interior_number') ? ' has-error' : '' }}">--}}
                {{--<label for="user_lbl"--}}
                       {{--class="col-sm-4 control-label-2r">{{ $errors->has('interior_number') ? '* ' : '' }}--}}
                    {{--Numero interior:</label>--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!!Form::text('interior_number',null,['class'=>'form-control', 'maxlength'=>191])!!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6">--}}
        {{--<div class="row">--}}
            {{--<div class="form-group{{ $errors->has('exterior_number') ? ' has-error' : '' }}">--}}
                {{--<label for="user_lbl"--}}
                       {{--class="col-sm-4 control-label-2r">{{ $errors->has('exterior_number') ? '* ' : '' }}--}}
                    {{--Numero exterior:</label>--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!!Form::text('exterior_number',null,['class'=>'form-control','style' => 'width:94%','required', 'maxlength'=>9])!!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group" style="padding-left:82px">--}}
    {{--<div class="col-sm-6">--}}
        {{--<div class="row">--}}
            {{--<div class="form-group{{ $errors->has('security_social_number') ? ' has-error' : '' }}">--}}
                {{--<label for="user_lbl"--}}
                       {{--class="col-sm-4 control-label-2r">{{ $errors->has('security_social_number') ? '* ' : '' }}--}}
                    {{--No. Seguro social:</label>--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!!Form::text('security_social_number',null,['class'=>'form-control','required', 'maxlength'=>15])!!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6">--}}
        {{--<div class="row">--}}
            {{--<div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">--}}
                {{--<label for="user_lbl"--}}
                       {{--class="col-sm-4 control-label">{{ $errors->has('neighborhood') ? '* ' : '' }}--}}
                    {{--Colonia:</label>--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!!Form::text('neighborhood',null,['class'=>'form-control','style' => 'width:94%','required', 'maxlength'=>191])!!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="form-group" style="padding-left:82px; height: 40px;">--}}
    {{--<div class="col-sm-6">--}}
        {{--<div class="row">--}}
            {{--<div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">--}}
                {{--<label for="user_lbl"--}}
                       {{--class="col-sm-4 control-label-2r">{{ $errors->has('birthday') ? '* ' : '' }}--}}
                    {{--Fecha de nacimiento:</label>--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!! Form::date('birthday', null, ['class' => 'form-control','style' => 'line-height: 20px;']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6">--}}
        {{--<div class="row">--}}
            {{--<div class="form-group{{ $errors->has('initial_date') ? ' has-error' : '' }}">--}}
                {{--<label for="user_lbl"--}}
                       {{--class="col-sm-4 control-label-2r">{{ $errors->has('initial_date') ? '* ' : '' }}--}}
                    {{--Fecha de alta:</label>--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!! Form::date('initial_date', null, ['class' => 'form-control','style' => 'width:94%; line-height: 20px;','required']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('profile_photo') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('profile_photo') ? '* ' : '' }}--}}
        {{--Fotografía:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!! Form::file('profile_photo', ['class'=>'form-control', isset($user) ? '':'required']) !!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('username') ? '* ' : '' }}{{ trans('adminlte_lang::message.username') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::text('username',null,['class'=>'form-control', isset($user) ? '':'required', 'maxlength'=>255, 'pattern'=>'.{5,}', 'title'=>'este campo debe contener al menos 5 carácteres.'])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('email') ? '* ' : '' }}{{ trans('adminlte_lang::message.email') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::email('email',null,['class'=>'form-control', isset($user) ? '':'required', 'maxlength'=>255])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('password') ? '* ' : '' }}{{ trans('adminlte_lang::message.password') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::password('password',['class'=>'form-control', isset($user) ? '':'required', 'maxlength'=>255])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('password') ? '* ' : '' }}{{ trans('adminlte_lang::message.retrypepassword') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8" style="padding-top: 9px;">--}}
        {{--{!!Form::password('password_confirmation',['class'=>'form-control', isset($user) ? '':'required', 'maxlength'=>255])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('roles') ? '* ' : '' }}{{ trans('adminlte_lang::message.roles') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!! Form::select('roles[]', $roles, null,['class'=>'form-control']) !!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('jobs') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl" class="col-sm-3 control-label">{{ $errors->has('jobs') ? '* ' : '' }}--}}
        {{--Puesto: </label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::select('jobs[]',$jobs,--}}
                    {{--$user ? explode(',',$user->job) : null, ['class'=>'js-example-basic-multiple', 'required','multiple','style' => 'width:100%'])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('areas') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl" class="col-sm-3 control-label">{{ $errors->has('areas') ? '* ' : '' }}--}}
        {{--Áreas: </label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::select('areas[]',$areas,--}}
                     {{--null, ['class'=>'js-example-basic-multiple', 'required','multiple','style' => 'width:100%'])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('homePhone') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('homePhone') ? '* ' : '' }}{{ trans('adminlte_lang::message.homephone') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::text('homePhone',null,['class'=>'form-control', 'maxlength'=>255])!!}--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="form-group{{ $errors->has('cellPhone') ? ' has-error' : '' }}">--}}
    {{--<label for="user_lbl"--}}
           {{--class="col-sm-3 control-label">{{ $errors->has('cellPhone') ? '* ' : '' }}{{ trans('adminlte_lang::message.cellphone') }}--}}
        {{--:</label>--}}
    {{--<div class="col-sm-8">--}}
        {{--{!!Form::text('cellPhone',null,['class'=>'form-control', 'maxlength'=>255])!!}--}}
    {{--</div>--}}
{{--</div>--}}

<h1>Hola</h1>