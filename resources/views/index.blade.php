<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>

<body>
    <header>
        <h1>Текущий город: {{ $currentCity ? $currentCity->name : 'Не выбран' }}</h1>
        <nav>
            <ul>
                <li><a href="{{ \App\Helpers\CityHelper::route('about') }}">О нас</a></li>
                <li><a href="{{ \App\Helpers\CityHelper::route('news') }}">Новости</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <ul>
            @foreach ($cities as $city)
                <li>
                    <a href="{{ route('city.show', $city->slug) }}"
                        style="{{ session('city') == $city->slug ? 'font-weight:bold' : '' }}">
                        {{ $city->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </main>
</body>

</html>
