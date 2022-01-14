<?php

class Usuario {
	private $nom;
	private $clave;
	function __construct ($n,$c)
	{
		$this->nom=$n;
		$this->clave=$c;
	}
	function __get($atrib)
	// método mágico para acceder a un atributo fuera de la clase
	{
		return($this->$atrib);
	}	
	
} //fin de la clase Usuario

?>