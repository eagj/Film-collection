<?php

include("includes/conexion.php");

$titulo = $_POST['titulo'];
$foto = $_POST['foto'];
$genero = $_POST['generopeli'];

#Efectuamos la consulta SQL
$insertar = $conexion->query("INSERT INTO peliculas (titulo,foto) VALUES ('$titulo', '$foto')")
//$insertargenero = $conexion->query("INSERT INTO generos_pelis (generos_pelis_id_genero) VALUES ('$genero')")

    or die ("Problema al insertar el registro");

//INSERT INTO `generos_pelis` (`generos_pelis_id_pelicula`, `generos_pelis_id_genero`) VALUES ('7', '1');
?>

