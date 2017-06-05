@extends('layouts.admin')

@section('page-header')

    Creating Users

@stop


@section('content')

    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files' => true]) !!}

    {{csrf_field()}}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Roles') !!}
        {!! Form::select('role_id',[''=>'Choose Options' ] + $roles ,null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status') !!}
        {!! Form::select('is_active',array(1 => 'Active' , 0 => 'Not Active') ,0, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file', 'File') !!}
        {!! Form::file('file', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password',  ['class' => 'form-control']) !!}
    </div>



    <div class="form-group">
        {!!  Form::submit('Create', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('layouts.errors')

@stop