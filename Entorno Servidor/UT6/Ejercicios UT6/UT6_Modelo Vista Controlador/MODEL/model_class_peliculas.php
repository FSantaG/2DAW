<?php
    class Pelicula{
        public function __construct(){
        }
        public function queryPelisDrama($conec){
            $sql="SELECT titulo from pelicula where genero ='drama'";
            $r=$conec->query($sql);
            $result = "";
            if(!$r===false){
                while($fila=$r->fetch_array()){
                    $result.=$fila[0].";";
                }
            }else{
                $result="Error: No hay registros asociados";
            }
            return $result;
        }
    }
?>