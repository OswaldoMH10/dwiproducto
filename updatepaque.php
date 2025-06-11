<?php

require 'php/conexion.php';
$id= $_POST["id"];
$nombre = $_POST["nombrep"];
$descripcion = $_POST["descripcionp"];
$precio = $_POST["preciop"];
echo $id . "-" . $nombre . "-" . $descripcion . "-" . $precio;

$db = new MySQL();
$db->updatePaquete($id, $nombre, $descripcion, $precio);

header('Location: paquetes.php');

?>