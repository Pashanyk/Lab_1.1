@extends('layouts.app')

@section('title', 'Меню ресторану')

@section('content')
    <h1>Меню ресторану</h1>

    @if(session('success'))
        <div style="color: green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <p>
        <a href="{{ route('dish.create') }}">Додати нову страву</a>
    </p>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
            <th>#</th>
            <th>Назва</th>
            <th>Категорія</th>
            <th>Ціна</th>
            <th>Дії</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($dishes as $i => $dish)
            <tr>
                <td>{{ $dishes->firstItem() + $i }}</td>
                <td>
                    <a href="{{ route('dish.show', $dish) }}">
                        {{ $dish->name }}
                    </a>
                </td>
                <td>{{ $dish->category }}</td>
                <td>{{ number_format($dish->price, 2, '.', ' ') }} грн</td>
                <td>
                    <a href="{{ route('dish.edit', $dish) }}">Редагувати</a>
                    <form action="{{ route('dish.destroy', $dish) }}" method="POST" style="display:inline;" onsubmit="return confirm('Ви впевнені, що хочете видалити цю страву?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:none; color:red; border:none; padding:0; cursor:pointer; text-decoration:underline;">Видалити</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <br>
    {{ $dishes->links() }}
@endsection
