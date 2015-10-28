@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><div class="text-center"> Вход</div></div>
                    <div class="panel-body">
                    {!! Form::open(['url'=>'/auth/login'])!!}
                    {!! csrf_field() !!}


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
                                {!! Form::label('remember','Запомнить меня:',['class'=>'col-md-3 control-label'])!!}
                                <div class="col-md-6">
                                    {!! Form::checkbox('remember',null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                         </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!!Form::submit('Войти',['class'=>'btn btn-success']) !!}
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
