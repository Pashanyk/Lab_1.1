@extends('layouts.app')

@section('title', 'Перегляд страви: ' . $dish->name)

@section('content')
    <h1>{{ $dish->name }}</h1>

    <ul>
        <li><strong>Категорія:</strong> {{ $dish->category }}</li>
        <li><strong>Ціна:</strong> {{ number_format($dish->price, 2, '.', ' ') }} грн</li>
        <li><strong>Опис:</strong> {{ $dish->description ?? 'Відсутній' }}</li>
    </ul>

    <p>
        <a href="{{ route('dish.edit', $dish) }}">Редагувати</a> |
        <a href="{{ route('dish.index') }}">Назад до меню</a>
    </p>
@endsection
