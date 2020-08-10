@extends('layouts.index')

@section('content')
    <h3>Обратная связь</h3><br>
    <form action="#">
        <p>Введите email</p>
        <input type="email" name="callBackEmail" id=""><br><br>
        <p>Введите Имя</p>
        <input type="email" name="callBackName" id=""><br><br>
        <p>Введите обращение</p>
        <textarea name="callBackText" id="" cols="30" rows="10"></textarea><br>
        <button>Отправить</button>
    </form>
@stop
