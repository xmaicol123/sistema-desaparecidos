<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistema De Examenes En Linea</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/login.css" type="text/css" />
</head>
<body style="background: #2f3238;">
<div class="login-form">
	<div class="login-face"><img src="../img/login_img.png"></div>
	<section class="form">
		<form action="loginUsuario.php" method="POST">
			<div class="input uname">
				<input type="text" id="username" placeholder="Usuario" required name="usuario" />
				<i class="fa fa-user"></i>
			</div>
			<div class="input pass">
				<input type="password" id="password" placeholder="Password" required name="password" />
				<i class="fa fa-lock"></i>
			</div>
			<div>
				<input type="submit" id="login" value="Ingresar" name="Ingresar" />
				<p><a style="text-decoration: none; float: right; color: blue; font-size: 18px;" href="regUsuario.php">Registrarse.......!</a></p>
			</div>
		</form>
	</section>
</div>

<?php

	include_once('../php/PhpLogin.php');
	function loginAdmin()
	{
		if ((isset($_POST['usuario'])) && (isset($_POST['password']))) {
			$obj = new Login();
			$obj->setUsuario(addslashes($_POST['usuario']));
			$obj->setPassword(addslashes($_POST['password']));
			$resultado=$obj->loginAdmin();
			$resultado2=$obj->loginUsuario();
			if ($reg=mysqli_fetch_assoc($resultado)) { /*$reg=mysqli_fetch_array*/
				header('location: interfazAdmin.php');
				$cod_usuario=$reg['cod_usuario'];
				$nombre_usuario=$reg['nombre_usuario'];
				$tipo_usuario = $reg['cod_tipo_usuario_table'];
				$_SESSION['cod_usuario'] = $cod_usuario;
				$_SESSION['nombre_usuario'] = $nombre_usuario;
				$_SESSION['loggedin_usuario'] = true; /*VALIDACION SI REALIZO LA SESSION*/
				$_SESSION['cod_tipo_usuario'] = $tipo_usuario;
			}

			else if ($reg=mysqli_fetch_assoc($resultado2)) { /*$reg=mysqli_fetch_array*/
				header('location: interfazUsuario.php');
				$cod_usuario=$reg['cod_usuario'];
				$nombre_usuario=$reg['nombre_usuario'];
				$tipo_usuario = $reg['cod_tipo_usuario_table'];
				$_SESSION['cod_usuario'] = $cod_usuario;
				$_SESSION['nombre_usuario'] = $nombre_usuario;
				$_SESSION['loggedin_usuario'] = true; /*VALIDACION SI REALIZO LA SESSION*/
				$_SESSION['cod_tipo_usuario'] = $tipo_usuario;
				

			}

			else
			{
				echo '<script>
					alert ("Usuario No Registrado.....!!!");
					</script>';
			}
			
		}
		else
		{
			echo "Datos Vacios Insertar Por Favor....!!!";
		}
	}
	if (isset($_POST['Ingresar'])) {
	 	loginAdmin();
	 } 
?>

</body>
</html>