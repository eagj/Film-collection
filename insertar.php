<?php

include("includes/conexion.php");

$titulo = $_POST['titulo'];
$foto = $_POST['foto'];


#Efectuamos la consulta SQL
$insertar = $conexion->query("INSERT INTO peliculas (titulo,foto) VALUES ('$titulo', '$foto')")
or die ("Problema al insertar el registro");


?>