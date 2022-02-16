<?php
    class Conexion{
        protected $bd_connect;

        public function __construct($bd){
            try{
               $this->bd_connect = new PDO("mysql:host='localhost'; port=3306; dbname='$bd'","root",""); 
                $this->bd_connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("La conexión no ha sido posible ".$e->getMessage());
                /*
                error_log($e->getMessage());
                die("Error en la conexión");
                */
            }
        }

        public function __get($atrib){
            return($this->$atrib);
        }
    }
?>