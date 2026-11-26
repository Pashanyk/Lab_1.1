@extends('layouts.app')

@section('title', $blog->title)

@section('content')
    <article>
        <h1>{{ $blog->title }}</h1>

        <p class="meta">
            Категорія: {{ $blog->category?->category_name ?? 'Без категорії' }}
            · Дата: {{ $blog->dt_created?->format('d.m.Y H:i') }}
            · Автор: {{ $blog->author?->name ?? 'Редакція' }}
        </p>

        @if ($blog->description)
            <p><strong>{{ $blog->description }}</strong></p>
        @endif

        <div>
            {!! nl2br(e($blog->text)) !!}
        </div>
    </article>

    <p>
        <a href="{{ route('blog.edit', $blog) }}">Редагувати</a> |
        <a href="{{ route('blog.index') }}">До списку записів</a>
    </p>

    <form method="POST" action="{{ route('blog.destroy', $blog) }}">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Видалити запис?')">Видалити</button>
    </form>
@endsection
