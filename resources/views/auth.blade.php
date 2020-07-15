@extends('layouts.general')

@section('title')Авторизация@endsection

@section('content')

    <div id="div_auth">
        <div class="inp_row">
            <div id="a_reg">
                <a href="{{route('user-reg')}}" >Регистрация</a>
            </div>
        </div>
        <form method="POST" action="{{route('user-auth')}}">
            @csrf
            <div class="inp_row">
                <label>E-mail или телефон</label>
                <input placeholder="Ваш e-mail или телефон..." type="text" name="log"
                       value="{{$log === '' ? old('log') : $log}}"/>
            </div>
            <div class="inp_row">
                <label>Пароль</label>
                <input placeholder="Ваш пароль..." type="password" name="pass"
                       value="{{$pass === '' ? old('pass') : $pass}}"/>
            </div>
            <div class="inp_row">
                <button id="btn_ent" type="submit" name="usr_ent_submit">Вход</button>
            </div>
        </form>
        <div class="inp_row">
            <ul id="err_log">
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                @if($error_log !== '')
                        <li>{{$error_log}}</li>
                    @endif
            </ul>
        </div>
    </div>

    @endsection
