<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="{!! asset('app.css') !!}">
    <script src="{!! asset('js/imagen.js') !!}"></script>
  </head>
  <body>

    <div class="container-fluid">

        <div class="nav col-12">
            <div class=" col-12"> <img class="icono" src="{!! asset('icono.png') !!}"/> </div>

        </div>
        <div class="posicion">
            <div>
                <img id="tigre" class="desaparecertigre" src="{!! asset('tigre.jpg') !!}"/>
                <div class="barra">  </div>
            </div>
            <div class="boton" onclick="Click()" id="flecha"> <p class="señal"> ᛨ</p> </div>


            @yield('content')
            @yield('create')
        </div>
  </body>
  <!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

</html>
