<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
</head>

<body>
    <header>
        <h1>Текущий город: {{ $city->name }}</h1>
        <nav>
            <ul>
                <li><a href="{{ \App\Helpers\CityHelper::route('index') }}">На главную</a></li>
                <li><a href="{{ \App\Helpers\CityHelper::route('about') }}">О нас</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </main>
</body>

</html>
