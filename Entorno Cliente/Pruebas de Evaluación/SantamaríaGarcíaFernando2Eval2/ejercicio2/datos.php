<?php
//Tomamos el valor del input procedente de la URL
$nif = $_REQUEST["nif"];

$datos = json_decode('[
	{
		"NIF": "1111A",
		"direccion": "Direccion 1",
		"telefono": "601111111"
	},
	{
		"NIF": "2222B",
		"direccion": "Direccion 2",
		"telefono": "602222222"
	},
	{
		"NIF": "3333C",
		"direccion": "Direccion 3",
		"telefono": "603333333"
	},
	{
		"NIF": "4444D",
		"direccion": "Direccion 4",
		"telefono": "604444444"
	},
	{
		"NIF": "5555E",
		"direccion": "Direccion 5",
		"telefono": "605555555"
	},
	{
		"NIF": "6666F",
		"direccion": "Direccion 6",
		"telefono": "606666666"
	},
	{
		"NIF": "7777G",
		"direccion": "Dirccion 7",
		"telefono": "607777777"
	},
	{
		"NIF": "8888H",
		"direccion": "Direccion 8",
		"telefono": "608888888"
	}
]');

$mi_alumno = "";
foreach($datos as $alumno){
		if ($alumno->NIF === $nif) {
			$mi_alumno = $alumno;
		}
}
if ($mi_alumno === ""){
	echo ("No encontrado");
} else {
	echo (json_encode($mi_alumno));
}
?>