@extends('layouts.general')

@section('title')Добро пожаловать@endsection

@section('content')
    <div id="div_welcome">
        <h1>Добро пожаловать</h1>
        <div id="div_reg_auth">
            <a href="{{route('user-reg')}}">Регистрация</a>
            <a href="{{route('user-auth')}}">Авторизация</a>
        </div>
    </div>
    @endsection
