<?php
    class Actor{
        public function __construct(){
        }
        public function queryNombreActrices($conec){
            $sql="SELECT nombre_apellidos from actor where sexo ='f'";
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