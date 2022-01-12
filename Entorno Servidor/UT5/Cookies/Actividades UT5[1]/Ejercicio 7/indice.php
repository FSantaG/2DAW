<?php
if(isset($_COOKIE["examen"]) && isset($_COOKIE["test"])){
   
    if($_COOKIE["test"]=="norealizado"&& $_COOKIE["examen"]=="realizado"){
        header("location: formulario_test.php");
    }
    if($_COOKIE["test"]=="realizado" && $_COOKIE["examen"]=="norealizado"){
        header("location: formulario_examen.php");
    }
    if($_COOKIE["test"]=="realizado" && $_COOKIE["examen"]=="realizado"){
        header("location: ok.html");
    }
}else{
    header("location: formulario.php");
}
?>