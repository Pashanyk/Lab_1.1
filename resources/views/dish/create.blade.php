@extends('layouts.app')

@section('title', 'Додати страву')

@section('content')
    <h1>Додати нову страву до меню</h1>

    <form action="{{ route('dish.store') }}" method="POST">
        @include('dish._form')
    </form>

    <p>
        <br>
        <a href="{{ route('dish.index') }}">Назад до меню</a>
    </p>
@endsection
