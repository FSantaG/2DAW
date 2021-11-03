<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Alumno {
            protected $nombre;
            protected $edad;
            protected $calif_final;
            const CICLO = "DAW";

            protected function __construct($nombre, $edad, $calif_final){
                $this->nombre=$nombre;
                $this->edad=$edad;
                $this->calif_final=$calif_final;
            }
            protected function supera_curso(){

            }
        }

        class Primero extends Alumno {
            function __construct($nombre, $edad, $calif_final){
                parent::__construct($nombre, $edad, $calif_final);
            }
            function supera_curso(){
                if($this->calif_final >=5){
                    return "Pasa de curso";
                }else{
                    return "Repite curso";
                }
            }
        }

        class Segundo extends Alumno {
            protected $calif_fct;
            protected $calif_proyecto;
            function __construct($nombre, $edad, $calif_final, $calif_fct, $calif_proyecto){
                parent::__construct($nombre, $edad, $calif_final);
                $this->calif_proyecto=$calif_proyecto;
                if($calif_fct=="apto" || $calif_fct="no apto"){
                    $this->calif_fct=$calif_fct;
                }
            }
            function supera_curso(){
                if($this->calif_final >=5 && $this->calif_fct == "apto" && $this->calif_proyecto >=5){
                    return "Aprueba el grado";
                }else{
                    return "Repite";
                }
            }
        }

        
    ?>
</body>
</html>