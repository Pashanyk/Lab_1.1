@extends('layouts.app')

@section('title', 'Новий запис блогу')

@section('content')
    <h1>Додати запис у блог</h1>

    <form method="POST" action="{{ route('blog.store') }}">
        @csrf
        @include('blog._form')

        <button type="submit">Зберегти</button>
        <a href="{{ route('blog.index') }}">Скасувати</a>
    </form>
@endsection
