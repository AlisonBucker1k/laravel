<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - BckCode</title>
</head>
<body>
    <header>
        <h1>Cabeçalho</h1>
    </header>
    <hr>
        <section>
            @yield('content')
        </section>
    <hr>
    <footer>
        {{ $copy }}
    </footer>
</body>
</html>