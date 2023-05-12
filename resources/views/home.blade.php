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
            <table>
                <thead>
                    <th>Azienda |</th>
                    <th>Codice Treno |</th>
                    <th>Stazione Di Partenza |</th>
                    <th>Stazione Di Arrivo |</th>
                    <th>Orario Partenza |</th>
                    <th>orario di arrivo |</th>
                    <th>numero carrozze |</th>
                    <th>in orario |</th>
                    <th>cancellato </th>
                </thead>
                @foreach ($treni as $treno)
                <tbody>
                    <td class="text-center">{{$treno->azienda}}</td>
                    <td class="text-center">{{$treno->codice_treno}}</td>
                    <td class="text-center">{{$treno->stazione_di_partenza}}</td>
                    <td class="text-center">{{$treno->stazione_di_arrivo}}</td>
                    <td class="text-center">{{$treno->orario_di_partenza}}</td>
                    <td class="text-center">{{$treno->orario_di_arrivo}}</td>
                    <td class="text-center">{{$treno->numero_carrozze}}</td>
                    <td class="text-center">{{$treno->in_orario}}</td>
                    <td class="text-center">{{$treno->cancellato}}</td>
                </tbody>
                @endforeach
                <hr>
                {{-- @foreach ($treni as $item)
                <td class="text-center">{{$item->azienda}}</td>
                <td class="text-center">{{$item->codice_treno}}</td>
                <td class="text-center">{{$item->stazione_di_partenza}}</td>
                <td class="text-center">{{$item->stazione_di_arrivo}}</td>
                <td class="text-center">{{$item->orario_di_partenza}}</td>
                @endforeach --}}
                <tbody>

                </tbody>
            </table>
              {{-- {{$treno->azienda}} - {{$treno->codice_treno}}, {{$treno->stazione_di_partenza}} - {{$treno->stazione_di_arrivo}}, {{$treno->orario_di_partenza}}; <br> --}}
        </div>
    </main>

</body>

</html>