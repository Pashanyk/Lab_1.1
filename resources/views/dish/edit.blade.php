@extends('layouts.app')

@section('title', 'Редагувати страву')

@section('content')
    <h1>Редагувати страву: {{ $dish->name }}</h1>

    <form action="{{ route('dish.update', $dish) }}" method="POST">
        @method('PUT')
        @include('dish._form')
    </form>

    <p>
        <br>
        <a href="{{ route('dish.index') }}">Назад до меню</a>
    </p>
@endsection
