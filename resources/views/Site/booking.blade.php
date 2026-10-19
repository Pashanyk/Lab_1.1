@extends('layouts.app')

@section('title', 'Бронювання – Ресторан')

@section('content')
    <h1>Бронювання столика</h1>

    <p><em>{{ $info }}</em></p>

    <form method="POST" action="{{ route('site.booking.store') }}">
        @csrf

        <div>
            <label for="name">Ваше ім'я:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="email">Електронна пошта:</label><br>
            <input type="text" id="email" name="email" value="{{ old('email') }}">
            @error('email')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="phone">Номер телефону (лише цифри):</label><br>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
            >
            @error('phone')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="date">Дата бронювання:</label><br>
            <input type="date" id="date" name="date" value="{{ old('date') }}">
            @error('date')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="message">Побажання до столика:</label><br>
            <textarea id="message" name="message" rows="4" cols="40">{{ old('message') }}</textarea>
            @error('message')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Надіслати заявку</button>
    </form>
@endsection
