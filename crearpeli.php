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



mysqli_close($conexion);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir película</title>
    <link rel="stylesheet" href="css/styles.css">
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
if ($enviar) {
    // process form
    $sql = "INSERT INTO peliculas (foto) ".
        "VALUES ('$foto')";
    $result = $mysqli->query($sql);
    echo "¡Gracias! Hemos recibido sus datos.\n";
}else{
    ?>

    <form method="post" action="">
        foto   :<input type="Text" name="foto"><br>
        <input type="Submit" name="enviar" value="Aceptar información">
    </form>

    <?php
} //end if
?>

<!--BOOTSTRAP JS-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>