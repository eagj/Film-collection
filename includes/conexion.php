<?php

    $server = "localhost";
    $bd = "pelis";
    $usuario = "pelis";
    $pass = "123456";

    $conexion = new mysqli($server, $usuario, $pass, $bd);

    if ($conexion->connect_errno) {

        return "No conectado";

    } else {
        return "conectado";
    }
    #Seleccionamos la base de datos a utilizar
    $conexion->select_db("pelis")
    or die("Error en la selección de la base de datos");

    mysqli_close($conexion);
?>