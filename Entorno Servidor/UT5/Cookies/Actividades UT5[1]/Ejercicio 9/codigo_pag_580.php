<?php
function url($url){
    //Si la directiva de configuración session.use_trans_sid
    //está en 0(no se inicializa ninguna transmisi´ñon automñaticca por URL) y
    //si SID no está vacío (el equipo ha rechazado la cookie), entonces
    //debemos gestionar la transmisión
    if((get_cfg_var('session.use_trans_sid')==0) and (SID !='')){
        //Agregar la constante  SID detrás de la URL con un "?"
        //si todavía no hay ningún parámetro, o con un & en
        //caso contrario
        $url.=((strpos($url,'?')===FALSE)?'?':'&').SID;
    }
    return $url;
}
// session_start();
// echo url("cons_SID_href.php"),"<br/>";
// echo url("cons_SID2_href.php?nombre=Manolo"),"<br/>";
?>
