<!-- stranica koju svuda ukljucujemo,tj ona ce biti kao neki okvir -->
<!-- KOSTUR -->
<!-- NA OSNOVU OVE STRANICE SE POPUNJAVA MATERIJAL -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title> Kulminacija znanja </title>
        
    </head>
    <body>
        
        @include('inc.navbar') <!-- blade sintaksa i ovim ukljucujemo navbar u nas kostur -->
        <br><br><br>
        <div class="container"> <!-- pravimo da bi se nalazilo centrirano u stranici -->
            <!-- gde god stavimo da smo extend ovaj fajl i napravimo sekciju kod,taj citav kod ce biti
            prebacen umesto ovog ovde yield-a  -->
            @yield('kod')
        </div>
    </body>    
</html>