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
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            margin: 24px 0;
        }

        .blog-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .blog-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
        }

        .blog-card-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }

        .blog-card-body {
            padding: 16px;
        }

        .blog-category {
            font-size: 13px;
            color: #2563eb;
            font-weight: 600;
        }

        .blog-meta {
            font-size: 13px;
            color: #666;
            margin: 6px 0;
        }

    </style>
</head>
<body>

<header>

    <nav>
        <a href="{{ url('/') }}">Головна</a>
        <a href="{{ route('dish.index') }}">Меню</a>
        <a href="{{ route('site.booking') }}">Бронювання</a>
        <a href="{{ url('/about') }}">Про нас</a>
        <a href="{{ url('/contact') }}">Контакти</a>
        <a href="{{ route('stats.pages') }}">Статистика</a>
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
