<?php
    /*Declaración de la clase Libro */
    class Libro {
        public $titulo;
        public $precio;
        function __construct($titulo, $precio)
        {
            $this->titulo = $_POST["titulo"];
            $this->precio =$_POST["precio"];
        }
        function calcularDescuento(){
            if($_POST["fecha"]="navidad"){
                return round(($this->precio - (($this->precio * 15) / 100)),2);
            }else {
                return round(($this->precio - (($this->precio * 25) / 100)),2);
            }
        }
        function getLibro(){
            return "El libro ".$this->titulo."cuesta realmente ".$this->calcularDescuento()." €";
        }
    }
?>