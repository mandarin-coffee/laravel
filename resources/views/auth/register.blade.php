@extends('layouts.index')

@section('content')
    <div class="auth">
        <form action="#">
            <p>Введите Логин:</p> <input type="text">
            <p>Введите e-mail:</p> <input type="email">
            <p>Введите Пароль:</p> <input type="password">
            <button>Войти</button>
        </form>

        <div class="authLinks">
            <a href="{{route('forgotPass')}}">Забыли пароль?</a>
{{--            <a href="{{route('register')}}">Регистрация</a>--}}
        </div>
    </div>
@stop
