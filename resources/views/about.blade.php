<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
</head>

<body>
    <header>
        <h1>Текущий город: {{ $city->name }}</h1>
        <a href="{{ route('index') }}">На главную</a>
    </header>
    <main>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>{{ $city->slug }}</b></p>
    </main>
</body>

</html>
