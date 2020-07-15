@extends('layouts.general')

@section('title')Регистрация@endsection

@section('content')

    <div id="div_reg">

        <div class="inp_row">
            <div id="a_reg">
                <a href="{{route('user-auth')}}" >Авторизация</a>
            </div>
        </div>

        <form method="post" action="{{route('user-reg')}}">
            @csrf
            <!--userName-->
            <div class="inp_row">
                <label id="lbl">Имя<span>*</span></label>
                <input type="text" id="userName" name="name" placeholder="Ваше имя"
                       autocomplete="off" value="{{$name === '' ? old('name') : $name}}"/>
            </div>
            <!--userPhone-->
            <div class="inp_row">
                <label id="lbl">Телефон<span>*</span></label>
                <input type="tel" name="phone" placeholder="Ваш номер телефона"
                       autocomplete="off" value="{{$phone === '' ? old('phone') : $phone}}"/>
            </div>
            <!--userEmail-->
            <div class="inp_row">
                <label id="lbl">E-mail<span>*</span></label>
                <input type="email" name="email" placeholder="Ваш E-mail"
                       autocomplete="off" value="{{$email === '' ? old('email') : $email}}"/>
            </div>
            <!--pass-->
            <div class="inp_row">
                <label id="lbl">Пароль<span>*</span></label>
                <input type="password" name="pass" placeholder="Введите пароль"
                       autocomplete="off" value="{{$pass === '' ? old('pass') : $pass}}"/>
            </div>
            <!--passRepeat-->
            <div class="inp_row">
                <label id="lbl">Повтор пароля<span>*</span></label>
                <input type="password" name="passRepeat" placeholder="Повторите пароль"
                       autocomplete="off" value="{{$passRepeat === '' ? old('passRepeat') : $passRepeat}}"/>
            </div>
            <div>
                <button type="submit" name="submit" id="btn_ent">Зарегистрироваться</button>
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
