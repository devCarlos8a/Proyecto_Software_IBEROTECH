<?php
//conexión
$host = "localhost";
$usuario = "root";
$contrasena = ""; 
$base_de_datos = "iberotech";
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verifición de conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

//charset
$conexion->set_charset("utf8");

?>
