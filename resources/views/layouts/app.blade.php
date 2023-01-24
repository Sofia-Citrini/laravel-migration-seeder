<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel</title>

    @vite('resources/js/app.js')
</head>

<body>
    <header class="py-5">
        <h1 class="text-center">TRAINS</h1>
    </header>

    <main>
        <div class="container">

            @yield('content')

        </div>
    </main>
</body>

</html>