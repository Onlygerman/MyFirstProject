@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><div class="text-center"> Окно регистрации</div></div>
                        <div class="panel-body">

    {!! Form::open(['url'=>'/auth/register'],['class'=>'form-horizontal'])!!}
    {!! csrf_field() !!}


    <div class="form-group">
        <div class="row">
        {!! Form::label('name','Имя:',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-6">
        {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
        {!! Form::label('email','E-mail:',['class'=>'col-md-3 control-label'])!!}
        <div class="col-md-6">
        {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>
        </div>

    </div>

    <div class="form-group">
        <div class="row">
        {!! Form::label('password','Пароль:',['class'=>'col-md-3 control-label'])!!}
        <div class="col-md-6">
        {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
        {!! Form::label('password_confirmation','Подтвердите пароль:',['class'=>'col-md-3 control-label'])!!}
        <div class="col-md-6">
        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
        </div>
        </div>

    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
        {!!Form::submit('Add user',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    </div>

    </div>
    {!! Form::close()!!}
    </div>
    </div>
    </div>



    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all()as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    @stop

