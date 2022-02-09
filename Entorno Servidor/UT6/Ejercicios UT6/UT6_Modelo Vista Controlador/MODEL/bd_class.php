<?php
    class Conexion{
        protected $bd_connect; //$bd_connect será un objeto con información sobre la conexión establecida

        public function __construct($bd){
            $this->bd_connect = new mysqli("localhost", "root", "", $bd);
            if($this->bd_connect->connect_errno){
                echo "Error: No se ha podido establecer una conexión";
                exit();
            }
        }

        public function __get($atrib){
            return $this->bd_connect;
        }
    }
?>