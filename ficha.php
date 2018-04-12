<?php

include("includes/conexion.php");


#Efectuamos la consulta SQL
$ordenpornumero = $conexion->query("select * from peliculas ORDER BY id_pelicula")
or die("Error en la consulta SQL");


?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colección de pelis</title>
    <link rel="stylesheet" href="css/styles.css">
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div id="ficha">
    <header class="row align-items-center text-center container-fluid text-white bg-dark m-0" style="">
        <h1 class="col-12 display-1 text-info">Blade Runner</h1>
    </header>
    <div class="container my-3">
        <div class="row">
            <div class="col-4">
                <div class="foto text-center">
                    <img class="img-fluid" src="https://pics.filmaffinity.com/blade_runner-351607743-mmed.jpg" alt="Blade Runner" />
                </div>
            </div>
            <div class="col-7" >
                <p><b> Año:</b> 1982</p>
                <p><b> Duración:</b > 117 min .</p>
                <p><b> Dirección:</b ></p>
                <p><b> Guión:</b ></p>
                <p><b> Música:</b ></p>
                <p><b> Fotografía:</b ></p>
                <p><b> Género:</b ></p>
                <p><b> Formato:</b ></p>
            </div>
        </div>
        <div class="row my-3" >
            <div class="col-12" >
                <h3 class="display-4 text-center text-info"> Sinopsis</h3>
                <p> A principios del siglo XXI, la poderosa Tyrell Corporation creó, gracias a los avances de la ingeniería genética, un robot llamado Nexus 6, un ser virtualmente idéntico al hombre pero superior a él en fuerza y agilidad, al que se dio el nombre de Replicante . Estos robots trabajaban como esclavos en las colonias exteriores de la Tierra . Después de la sangrienta rebelión de un equipo de Nexus - 6, los Replicantes fueron desterrados de la Tierra . Brigadas especiales de policía, los Blade Runners, tenían órdenes de matar a todos los que no hubieran acatado la condena . Pero a esto no se le llamaba ejecución, se le llamaba "retiro" . Tras un grave incidente, el ex Blade Runner Rick Deckard es llamado de nuevo al servicio para encontrar y "retirar" a unos replicantes rebeldes .</p >
            </div>
        </div>
    </div>
</div>


<?php
    include("includes/footer.php");
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>