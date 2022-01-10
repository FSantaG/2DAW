<?php
function url($url){
    if((get_cfg_var('session.use_trans_sid')==0) and (SID !='')){
        $url.=((strpos($url,'?')===FALSE)?'?':'&').SID;
    }
    return $url;
}
session_start();
echo url("cons_SID_href.php"),"<br/>";
echo url("cons_SID2_href.php?nombre=Manolo"),"<br/>";
?>
