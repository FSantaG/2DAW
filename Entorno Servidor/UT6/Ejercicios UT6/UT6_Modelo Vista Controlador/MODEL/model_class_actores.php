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
        public function queryNacionalidades($conec){
            $sql="SELECT distinct nacionalidad from actor where sexo ='f'";
            $r=$conec->query($sql);
            $result = "";
            if(!$r===false){
                while($fila=$r->fetch_assoc()){
                    $result.=$fila["nacionalidad"].";";
                }
            }else{
                $result="Error: No hay registros asociados";
            }
            return $result;
        }
        public function queryNacionalizados($conec){
            $nacionalidad = $_POST["nacionalidad"];
            $sql="SELECT count(*) from actor where nacionalidad = '$nacionalidad'";
            $r=$conec->query($sql);
            $result = 0;
            if(!$r===false){
                while($fila=$r->fetch_array()){
                    $result=$fila[0].";";
                }
            }else{
                $result="Error: No hay registros asociados";
            }
            return $result;
        }
    }
?>