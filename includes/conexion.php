<?php

$server = "mysql:host=localhost;dbname=pelis";
//$bd = "pelis";
$usuario = "pelis";
$pass = "a1b2c3d4";


try{
    $conexion = new PDO($server, $usuario, $pass);

    //echo "conectado";


}catch (PDOException $e) {
    print "¡ERROR!: " . $e->getMessage() . "<br />";
    die();
}

?>