<?php

include_once 'includes/conexion.php';

//GET   VARIABLE DE PELICULA
$idpeli=$_GET['idpeli'];


//LEER
$resultadospeli='select * from peliculas WHERE id_pelicula = '.$idpeli.'';

//CONEXION SQL
$gsent = $conexion->prepare($resultadospeli);
$gsent->execute();
$fichadatos= $gsent->fetchAll();

//var_dump($resultadospeli);
//echo $idpeli;
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

    <?php

        foreach ($fichadatos as $row):
    ?>

        <!--ESTILO EN LINEA PARA BG DE FOTO -->
        <style>
            #ficha header::after{background-image: url(<?php echo $row['foto']?>-large.jpg);}
        </style>
        <header class="row align-items-center text-center container-fluid text-white bg-dark m-0">
            <h1 class="col-12 display-1 text-info"><?php echo $row['titulo']?></h1>
        </header>
    
        <div class="container my-3">
            <div class="row">
                <div class="col-4">
                    <div class="foto text-center">
                        <img class="img-fluid rounded border border-dark" src="<?php echo $row['foto']?>-msmall.jpg" alt="<?php echo $row['titulo']?>"/>
                    </div>
                </div>

                <div class="col-7" >
                    <p><b> Año:</b> <?php echo $row['anio']?></p>
                    <p><b> Duración:</b> <?php echo $row['duracion']?> min .</p>
                    <p><b> Dirección:</b> </p>
                    <p><b> Guión:</b></p>
                    <p><b> Música:</b></p>
                    <p><b> Fotografía:</b></p>
                     <p><b>Reparto:</b> </p>
                    <p><b> Género:</b></p>
                    <p><b> Formato:</b> <?php echo $row['formato']?></p>
                </div>
            </div>
            <div class="row my-3" >
                <div class="col-12" >
                    <h3 class="display-4 text-center text-info"> Sinopsis</h3>
                    <p><?php echo $row['sinopsis']?></p >
                </div>
            </div>
    <?php endforeach;?>
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