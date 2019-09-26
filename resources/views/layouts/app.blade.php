<!-- stranica koju svuda ukljucujemo,tj ona ce biti kao neki okvir -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Kulminacija znanja </title>
        
    </head>
    <body>
        <!-- gde god stavimo da smo extend ovaj fajl i napravimo sekciju kod,taj citav kod ce biti
        prebacen umesto ovog ovde yield-a  -->

        @yield('kod')
    </body>
</html>
