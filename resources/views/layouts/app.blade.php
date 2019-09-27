<!-- stranica koju svuda ukljucujemo,tj ona ce biti kao neki okvir -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
        <!--CUSTOM CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title> Kulminacija znanja </title>
        
    </head>
    <body>
        <!-- gde god stavimo da smo extend ovaj fajl i napravimo sekciju kod,taj citav kod ce biti
        prebacen umesto ovog ovde yield-a  -->
        @yield('kod')

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
