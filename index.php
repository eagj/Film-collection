<?php

// Connecting to and selecting a MySQL database named sakila
// Hostname: 127.0.0.1, username: your_user, password: your_pass, db: sakila
$mysqli = new mysqli('localhost', 'pelis', '123456', 'pelis');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Fallo en el establecimiento de la conexión");
    exit();
}


//Para mostrar los acentos
mysqli_set_charset ( $mysqli , 'utf8' );

#Seleccionamos la base de datos a utilizar
$mysqli->select_db("pelis")
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
//$result = $mysqli->query("select * from listado WHERE post_mime_type like 'image%' ORDER BY post_parent DESC LIMIT 0, 4")
$ordenpornumero = $mysqli->query("select * from peliculas ORDER BY id_pelicula")
or die("Error en la consulta SQL");


mysqli_close($conexion);
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
<div id="home">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col" style='display:none;'>#</th>
                <th width="10%" scope="col">Foto</th>
                <th width="30%" scope="col">Título</th>
                <th width="10%" scope="col">Año</th>
                <th width="40%" scope="col">Género</th>
                <th width="10%" scope="col">Formato</th>
            </tr>
        </thead>
        <tbody class="">
    <?php
        #Mostramos los resultados obtenidos
        while( $row = $ordenpornumero->fetch_array(MYSQLI_ASSOC)) {

            echo "<tr class='text-center'>                               
                    <td style='display:none;'>".$row['id_pelicula']."</td>   
                    <th scope=\"row\"><a href='#'><img class=\"img-fluid\" src=".$row['foto']."-msmall.jpg alt=\"".$row['titulo']."\"></a></th>
                    <td>".$row['titulo']."</td>
                    <td>".$row['anio']."</td>
                    <td>".$row['genero']."</td>
                    <td><img class=\"img-fluid\" src=\"img/formato_".$row['formato'].".svg\" alt=\"Blurary\" /></td>								
                  </tr>";

        }
    ?>
        </tbody>
    </table>

</div>
<footer class="bg-primary text-center text-white py-5">
    Lista de Peliculas de <a class="text-white lead" href="//eagj.net" target="_blank">EAGJ</a>
</footer>
<!--BOOTSTRAP JS-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>