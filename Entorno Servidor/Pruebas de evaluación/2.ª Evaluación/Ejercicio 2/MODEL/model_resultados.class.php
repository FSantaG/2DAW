<?php
    class Resultados{
        public function __construct(){
        }
        public function consultaCheckConPlaza($conexion){
            $consulta="SELECT * from resultados where notap > 5 and notat > 5";
            $respuesta=$conexion->query($consulta);
            $result = "";
            if(!$respuesta===false){
                while($fila=$respuesta->fetch_array()){
                    $result.=$fila[0]." ".$fila[1]." ".$fila[2]." ".";";
                }
            }else{
                $result="Error: No hay registros asociados";
            }
            return $result;
        }
        public function consultaCheckBolsaTrabajo($conexion){
            $consulta="SELECT * from resultados where notap > 5 or notat > 5";
            $respuesta=$conexion->query($consulta);
            $result = "";
            if(!$respuesta===false){
                while($fila=$respuesta->fetch_array()){
                    $result.=$fila[0]." ".$fila[1]." ".$fila[2]." ".";";
                }
            }else{
                $result="Error: No hay registros asociados";
            }
            return $result;
        }
        public function consultaCheckNoAptos($conexion){
            $consulta="SELECT * from resultados where notap < 5 and notat < 5";
            $respuesta=$conexion->query($consulta);
            $result = "";
            if(!$respuesta===false){
                while($fila=$respuesta->fetch_array()){
                    $result.=$fila[0]." ".$fila[1]." ".$fila[2]." ".";";
                }
            }else{
                $result="Error: No hay registros asociados";
            }
            return $result;
        }
        public function consultaInsertValores($conexion){
            //VARIABLES
            $codigo = $_POST["codigo"];
            $teoria = $_POST["teoria"];
            $practica = $_POST["practica"];

            $consulta="INSERT into resultados (cod_op, notap, notat) VALUES ($codigo, $practica, $teoria)";
            $respuesta=$conexion->query($consulta);
            $result = "";
            if($respuesta){
                echo "Inserción realizada";
            }else{
                $result="Error en la inserción.";
            }
            return $result;
        }
        
        public function consultaDeleteValores($conexion){
            //VARIABLES
            $codigo = $_POST["codigo"];
            
            $consulta = "DELETE from resultados where cod_op = ?";
            $result = "";
            //Preparación de CONSULTA
            $stmt = $conexion->prepare($consulta);
            $stmt->bind_param("s",$codigo);
            $ok=$stmt->execute();

            if($ok){
                $result = "Borrado realizado con éxito";
            }else{
                $result = "No se ha podido realizar la operación";
            }
            return $result;
        }
    }
?>