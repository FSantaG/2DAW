<?php
$json = file_get_contents('php://input');
$data = json_decode($json);

$nombre = $data->nombre;
$apellido = $data->apellido;

echo "El usuario " . $nombre." ".$apellido . " ha sido registrado." ;
?>