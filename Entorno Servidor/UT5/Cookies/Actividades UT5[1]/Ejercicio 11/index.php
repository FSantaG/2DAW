<?php
if (isset($_POST['enviar'])) {
    if (!isset($_COOKIE['login'])) {
        $usuario = $_POST['usuario'];
        $usuarioactual = $_POST['usuario'];
        $usuario .= "-" . $_POST['clave'] . ",";

        setcookie('login', $usuario, time() + 60);
        $usuarioactual .= "-" . "0";
        setcookie("usuarioactual", $usuarioactual, time() + 60);
        //echo "Bienvenido " . $usuarioactual[0];//falta el explode
        header("location: principal.php");
    } else {

        if ((!empty($_POST['usuario'])) && (!empty($_POST['clave']))) {

            $prueba = false;
            $repetido = false;
            $usuactual = "";
            $usuario = $_COOKIE["login"];
            $usuarioYContraseña = explode(",", $usuario);
            foreach ($usuarioYContraseña as $uyc) {
                $uycseparados = explode("-", $uyc);

                for ($i = 0; $i < count($uycseparados); $i++) {
                    if ($_POST['usuario'] == $uycseparados[$i] && $_POST['clave'] != $uycseparados[$i + 1]) {
                        $repetido = true;
                    }
                    if ($_POST['usuario'] == $uycseparados[$i] && $_POST['clave'] == $uycseparados[$i + 1]) {
                        $prueba = true;
                        $usuactual = $uycseparados[$i];
                    }
                }
            }
            if ($repetido == false) {
                if ($prueba == true) {
                    if (isset($_COOKIE['usuarioactual'])) {
                        $nombre = explode("-", $_COOKIE['usuarioactual']);
                        if ($usuactual == $nombre[0]) {

                            header("location: principal.php");
                        } else {
                            $usuactual .= "-" . "0";
                            setcookie("usuarioactual", $usuactual, time() + 60);

                            setcookie('login', $usuario, time() + 60);

                            //echo "Bienvenido de nuevo " . $usuactual[0];//falta el explode
                            header("location: principal.php");
                        }
                    } else {
                        $usuactual .= "-" . "0";
                        setcookie("usuarioactual", $usuactual, time() + 60);

                        setcookie('login', $usuario, time() + 60);

                        //echo "Bienvenido de nuevo " . $usuactual[0];//falta el explode
                        header("location: principal.php");
                    }
                } else {
                    $usuario .= $_POST['usuario'];
                    $newusu = $_POST['usuario'] . "-" . "0";
                    $usuario .= "-" . $_POST['clave'] . ",";
                    setcookie('login', $usuario, time() + 60);
                    setcookie("usuarioactual", $newusu, time() + 60);
                    // echo "$newusu[0] Te  has registrado con exito";//falta el explode
                    header("location: principal.php");
                }
            } else {
                echo "El usuario o la contraseña no son correctos";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Login </title>
    <style>
        body {
            margin-left: auto;
            margin-right: auto;
            text-align: center;


            background-color: lightgoldenrodyellow;


        }

        h1 {
            border-bottom: dashed 2px darkgoldenrod;
            padding: 10px;
        }

        form {
            font-size: 1.5em;
        }

        #login {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }
    </style>
</Head>

<body>
    <main>
        <br>
        <!--FORMULARIO -->
        <p align="center">
        <h1> Inicio de sesión </h1>
        <form action="" method="post">
            Usuario: <input type="text" name="usuario" placeholder="Introduzca su Usuario" required> <br>
            Contraseña: <input type="password" name="clave" placeholder="Introduzca su Contraseña" required>

            <input id="login" type="submit" name="enviar" value="LOGIN">
        </form>
        </p>
    </main>
</body>

</html>