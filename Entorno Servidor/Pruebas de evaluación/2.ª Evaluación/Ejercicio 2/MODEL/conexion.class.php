<?php
    class Conexion{
        protected $bd_connect;

        public function __construct($bd){
            $this->bd_connect = new mysqli("localhost", "root", "", $bd);
            if($this->bd_connect->connect_errno){
                echo "No se ha podido conectar con la base de datos";
                exit();
            }
        }

        public function __get($atrib){
            return $this->bd_connect;
        }
    }
?>