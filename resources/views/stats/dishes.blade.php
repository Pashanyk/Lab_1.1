@extends('layouts.app')

@section('title', 'популярні страви')

@section('content')
    <h1>Популярні страви</h1>

    <p>
        <a href="{{ route('stats.pages', ['type' => 'page']) }}">За сторінками</a>
        <a href="{{ route('stats.pages', ['type' => 'ip']) }}">За IP-адресами</a>
        <a href="{{ route('stats.dishes') }}">популярні страви</a>
    </p>

    <table>
        <thead>
        <tr>
            <th>Страва</th>
            <th>Категорія</th>
            <th>Переглядів</th>
            <th>Унікальних IP</th>
            <th>Останній перегляд</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($rows as $row)
            @php
                $id = (int) str_replace('dish/', '', $row->page);
                $dish = $dishes->get($id);
            @endphp
            <tr>
                <td>
                    @if ($dish)
                        <a href="{{ route('dish.show', $dish) }}">{{ $dish->name }}</a>
                    @else
                        Страва #{{ $id }} (видалена)
                    @endif
                </td>
                <td>{{ $dish ? $dish->category : '—' }}</td>
                <td>{{ $row->hits }}</td>
                <td>{{ $row->visitors }}</td>
                <td>{{ $row->last_visit }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Переглядів окремих страв ще немає.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
