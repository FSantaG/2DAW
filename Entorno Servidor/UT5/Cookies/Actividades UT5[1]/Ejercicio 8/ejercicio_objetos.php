<?php
date_default_timezone_set("Europe/Madrid");
class Usuario {
	private $nom;
	private $clave;
	function __construct ($n,$c){
		$this->nom=$n;
		$this->clave=$c;
	}
	function __get($atrib){
		return($this->$atrib);
	}	
	
}
$horas = array();
if (isset($_COOKIE['login'])){
	foreach($_COOKIE["login"] as $nombre => $valor){
		if($nombre == "user"){
		$usuario=unserialize($valor);
		}
		if($nombre = "time"){
			$time = $valor;
		}
	}
	echo "Usuario Correcto ".$usuario->nom." Se logueó exitosamente en las siguientes horas:"."<br>";
	array_push($horas, $time);
	$time = date("G:i:s");
	array_push($horas, $time);
	foreach($horas as $nombre =>$valor){
		echo $valor."</br>";
	}
	exit;
	}
else{	
	if (isset($_POST['enviar']))
		{
		if ($_POST['user']=='admin' && $_POST['pass']=='mjuan')
			{
			echo "Bienvenido";
			$usuario=new Usuario ($_POST['user'],$_POST['pass']);
			$usuario=serialize($usuario);
			$time = date("G:i:s");
			setcookie('login[user]',$usuario,time()+60);
			setcookie('login[time]', $time, time()+60);
			}
		else
			echo "Acceso denegado. Las credenciales no son correctas";
		exit;
		}
	}
?>	
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Serialización </title>
</Head>
<body>
<br>
<!--FORMULARIO -->
<p>
<h2> Login </h2>
<form action="" method="post">
	Usuario: <input type="text" name="user">
	Contraseña:	<input type="password" name="pass">
	<input type="submit" name="enviar" value="Login">
</form>
</p>
	
</body>
</html>
