@extends('app')

@section('content')

    <h1>Пользователи</h1>

    @foreach($users as $user)
        <user>
            <h3>Имя:{{$user->name}}</h3>
            <div class="media-body">Электронная почта:{{$user->email}}</div>

        </user>
    @endforeach

@stop