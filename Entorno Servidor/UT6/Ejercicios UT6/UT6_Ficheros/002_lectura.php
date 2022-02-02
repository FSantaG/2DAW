<?php
    $nomfich = "d:\servidor\archivos_prueba\modulos.txt";
    $fich = fopen($nomfich, "r");
    if($fich == false){
        echo "Archivo no encontrado";
    }else{
        echo "<p align='center'><table border=1 bgcolor='yellow'>";
        while($contenido = fgets($fich)){
            $alumno=explode(";", $contenido);
            $cont=count($alumno);
            echo("<tr>");
            for($i=0;$i<$cont;$i++){
                echo "<td>$alumno[$i]</td>";
            }
            echo "</tr>";
        }
        echo "</table></p>";

        fclose($fich);
    }
?>