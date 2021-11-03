<?php
class Alumno{
            private $num_matrícula;
            private $nombre;
            private $edad;
            const TASA =2;

            function __construct($num_matrícula, $nombre, $edad){
                $this->num_matrícula=$num_matrícula;
                $this->nombre=$nombre;
                $this->edad=$edad;
            }

            public function importe_matricula(){ 
                if((int)$this->edad>=18){ 
                    $precio_matricula=self::TASA; 
                    }else{
                        $precio_matricula=0; 
                    } 
                echo "El precio de la matrícula de $this->nombre es de $precio_matricula euros"; 
        } 
    } 
?>
