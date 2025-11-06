<?php
$host = "host.docker.internal"; // ← conecta desde Docker a tu PC
$user = "root";
$pass = "admin";
$db   = "proyecto_web"; // tu base de datos local
$port = 3307;            // el puerto de tu MySQL local

$conexion = new mysqli($host, $user, $pass, $db, $port);

if ($conexion->connect_errno) {
    die("❌ Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
echo "✅ Conexión exitosa a la base de datos local.<br>";
?>
