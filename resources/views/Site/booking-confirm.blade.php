@extends('layouts.app')

@section('title', 'Бронювання прийнято – Ресторан')

@section('content')
    <h1>Дякуємо! Вашу заявку прийнято</h1>
    <p>Менеджер ресторану зв'яжеться з вами для підтвердження бронювання столика.</p>

    <h3>Деталі заявки:</h3>
    <ul>
        <li><strong>Ім'я:</strong> {{ $name }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Повідомлення:</strong> {{ $message }}</li>
    </ul>

    <p>
        <a href="{{ route('site.booking') }}">Повернутися назад</a>
    </p>
@endsection
