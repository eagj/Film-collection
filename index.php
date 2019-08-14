<?php

include_once 'includes/conexion.php';


//LEER
$resultadospelis='SELECT * FROM peliculas ORDER BY titulo ASC ';
//ORDEN POR TITULO
$orden='SELECT * FROM peliculas ORDER BY titulo ASC';


//CONEXION SQL
$gsent = $conexion->prepare($resultadospelis);
$gsent->execute();
$resultado= $gsent->fetchAll();



//var_dump($resultado[1]);

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colección de pelis</title>
    <?php
        include("includes/styles.php");
    ?>
</head>
<body>
<div id="home">
    <h1 class="bg-info m-0 text-white p-5 text-center">Pelis y Series</h1>
    <table class="table table-striped d-none"><!--d-none-->
        <thead class="thead-dark">
            <tr class="text-center">
                <th width="10%" scope="col">Foto</th>
                <th width="30%" scope="col">
                    <a href="">Título</a>
                </th>
                <th width="10%" scope="col">Año</th>
                <th width="40%" scope="col">Género</th>
                <th width="10%" scope="col">Formato</th>
            </tr>
        </thead>
        <tbody class="">
    <?php foreach ($resultado as $row): ?>
        <tr class='text-center'>
            <th scope="row">
                <a href='ficha.php?idpeli=<?php echo $row['id_pelicula']?>'>
                    <img class="img-fluid" src="<?php echo $row['foto']?>-msmall.jpg" alt="<?php echo $row['titulo']?>">
                </a>
            </th>
            <td>
                <a href='ficha.php?idpeli=<?php echo $row['id_pelicula']?>'> <?php echo $row['titulo']?></a>
            </td>
            <td>
                <a href='ficha.php?idpeli=<?php echo $row['id_pelicula']?>'><?php echo $row['anio']?></a>
            </td>

            <!--JAVIIIIII ES ASIIIIIIIII?-->
            <td>
                <?php
                    //$resultadosactores='SELECT actores_nombre_actor from actores where actores_id_actor in (select actor_pelis_id_actor from actor_pelis where actor_pelis_id_pelicula = '.$row['id_pelicula'].')';
                    $resultadogeneros='SELECT generos_genero from generos where generos_id in (select generos_pelis_id_genero from generos_pelis where generos_pelis_id_pelicula = '.$row['id_pelicula'].')';
                    $gsent_reparto = $conexion->prepare($resultadogeneros);
                    $gsent_reparto->execute();
                    $ageneros=$gsent_reparto->fetchAll();
                    foreach ($ageneros as $genero):
                ?>
                <span class="small"><?php echo $genero['generos_genero']?> / </span>
                <?php endforeach;?>
            </td>

            <td><a href='ficha.php?idpeli=<?php echo $row['id_pelicula']?>'><img class="img-fluid" src="img/formato_<?php echo $row['formato']?>.svg" alt="<?php echo $row['formato']?>"></a></td>
          </tr>

    <?php endforeach;?>


        </tbody>
    </table>
    <!--CARDS-->
    <div id="cards" class="container">
        <div class="row my-5"><!--row-->

        <?php foreach ($resultado as $row): ?>
         <!--Mostramos los resultados obtenidos-->
            <div class="col-md-3 col-sm-6 my-2"><!--columna-->
                    <div class="card"><!--card-->
                        <div class="imgcard">
                            <a href="<?php echo $row['link_web']?>"><img class="card-img-top img-fluid" src="<?php echo $row['foto']?>-mmed.jpg" alt="<?php echo $row['titulo']?>" /></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-info"><?php echo $row['titulo']?></h5>
                            <p class="card-text"><b>año:</b><?php echo $row['anio']?></p>
                            <p class="card-text"><b>formato:</b> <?php echo $row['formato']?></p>
                            <a href='ficha.php?idpeli=<?php echo $row['id_pelicula']?>' class="btn btn-primary">Ver ficha</a>
                        </div>
                    </div><!--card-->
                </div><!--columna-->
        <?php endforeach;?>


        </div><!--row-->
    </div><!--HOME-->
</div><!--HOME-->
<?php
    include("includes/footer.php");
?>
<!--BOOTSTRAP JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>