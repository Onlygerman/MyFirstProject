
@extends('app')

@section('content')
    <h1> Добавление нового пользователя</h1>
    <hr>

    {!! Form::open(['url'=>'users'])!!}
    <div class="form-group">

        {!! Form::label('name','Имя:') !!}
        {!! Form::text('name') !!}
    </div>

    <div class="form-group">

    {!! Form::label('email','E-mail:')!!}
    {!! Form::text('email') !!}

    </div>

    <div class="form-group">

        {!! Form::label('password','Пароль:')!!}
        {!! Form::password('password') !!}

    </div>

    <div class="form-group">
        {!!Form::submit('Add user',['class'=>'btn']) !!}
    </div>

    {!! Form::close()!!}

    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all()as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif





@stop