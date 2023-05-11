<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <h1>ehilà</h1>
        <div class="container">
            @foreach ($treni as $treno)
              {{$treno->azienda}} - {{$treno->codice_treno}}, {{$treno->stazione_di_partenza}} - {{$treno->stazione_di_arrivo}}, {{$treno->orario_di_partenza}}; <br>
            @endforeach
        </div>
    </main>

</body>

</html>