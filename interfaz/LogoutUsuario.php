<?php
session_start();



if (($_SESSION['loggedin_usuario'] = true)&&($_SESSION['cod_tipo_usuario']=='2')) {
	unset ($_SESSION['cod_usuario']);
	unset ($_SESSION['nombre_usuario']);
	header('Location: ../index.php');
}



?>