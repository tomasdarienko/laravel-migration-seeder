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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>treni in partenza oggi</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">

                        <thead>
                            <th>id</th>
                            <th>stazione di Partenza</th>
                            <th>stazione di Arrivo</th>
                            <th>orario Partenza</th>
                            <th>orario Arrivo</th>
                            <th>codice</th>
                            <th>carrozze</th>
                            <th>In orario</th>
                            <th>treno cancellato</th>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->id}}</td>
                                <td>{{ $train->stazPartenza}}</td>
                                <td>{{ $train->stazArrivo}}</td>
                                <td>{{ $train->orarioPartenza}}</td>
                                <td>{{ $train->orarioArrivo}}</td>
                                <td>{{ $train->codice}}</td>
                                <td>{{ $train->carrozze}}</td>
                                <td>{{ $train->orario ? 'si' : 'no'}}</td>
                                <td>{{ $train->cancellato ? 'si' : 'no'}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>