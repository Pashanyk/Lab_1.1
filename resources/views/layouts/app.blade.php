<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ресторан')</title>
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #d35400;
            padding: 15px 30px;
        }
        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }
        nav a:hover {
            color: #ffeaa7;
        }
        main {
            flex: 1;
            padding: 30px;
            margin: 0;
        }
        footer {
            background-color: #000000;
            color: #d35400;
            padding: 20px 30px;
            text-align: center;
            font-size: 14px;
        }


    </style>
</head>
<body>

<header>

    <nav>
        <a href="{{ url('/') }}">Головна</a>
        <a href="{{ url('/menu') }}">Меню кухні</a>
        <a href="{{ url('/about') }}">Про нас</a>
        <a href="{{ url('/contact') }}">Контакти</a>
    </nav>
</header>

<main>
    @yield('content')
</main>


<footer>
    <div class="footer-info">
        <p><strong>Ресторан</strong></p>
        <p>Графік роботи: | Тел:</p>
        <p>Адреса:</p>
    </div>
    <div>
        &copy; {{ date('Y') }}
    </div>
</footer>

</body>
</html>
