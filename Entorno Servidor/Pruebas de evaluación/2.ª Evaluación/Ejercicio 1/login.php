<?php
if(isset($_COOKIE["usuario"])){
    echo "<p><b>BIENVENIDO DE NUEVO</b>, ".$_COOKIE["usuario"]."</p>";
    setcookie("acceso", $_COOKIE["acceso"]+1, time()+60);
    echo "<p><b>Accesos</b>: ".$_COOKIE["acceso"]."</p>";
}else{
    if(isset($_POST["enviar"])){ 
        $nombreFichero = "usuarios.txt";
        $fichero = fopen($nombreFichero, "r");
        if($fichero == false){
            echo "Archivo no encontrado";
        }else{
            $usuarioLogin = strtolower($_POST["usuario"]);
            while($contenido = fgets($fichero)){
                $ok = false;
                $usuario=explode(";", $contenido);
                $cont=count($usuario);
                for($i=0;$i<$cont;$i++){
                    if($usuarioLogin==$usuario[$i]){
                        setcookie("usuario", ucfirst($usuarioLogin), time()+60);
                        echo "<p><b>BIENVENIDO</b> ".ucfirst($usuarioLogin)."</p>";
                        setcookie("acceso", 1, time()+60);
                        $ok=true;
                    }
                }
                if($ok == false){
                    echo "<p><b>Acesso denegado</b></p><br>";
                    echo "<a href='./index.php'>Volver al login</a>";
                }
            }
            fclose($fichero);
        }
    }
}
?>