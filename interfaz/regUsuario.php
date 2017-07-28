<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body style="background: #2f3238;">
	</br>

	<div class="container" id="formRegistro">
		<form action="regUsuario.php" class="" method="POST">
			<div class="form-group">
				<h2 class="text-center">Registro De Usuario</h2>
			</div>
			
			<div class="form-group">
				<label for="">Nombre Completo:</label>
				<input type="text" class="form-control" name="txt_nombre" required="">
			</div>

			<div class="form-group">
				<label for="">Usuario o Nick:</label>
				<input type="text" class="form-control" name="txt_usuario" required="">
			</div>

			<div class="form-group">
				<label for="">Password:</label>
				<input type="password" class="form-control" name="txt_password" required="">
			</div>

			<div class="form-group">
				<label for="">Fecha De Nacimiento:</label>
				<input type="date" class="form-control" name="txt_fecha" required="">
			</div>

			<div class="form-group">
				<label for="">Celular:</label>
				<input type="phone" class="form-control" name="txt_celular" required="">
			</div>

			<div class="form-group">
				<label for="">Email:</label>
				<input type="email" class="form-control" name="txt_email" required="">
			</div>

			<div class="form-group text-center">
				<input type="submit" value="Registrar" class="btn btn-primary btn-lg" name="Registrar"> 
			</div>
		
		</form>
	</div>

	<!--CODIGO PHP-->
	<?php 
		include_once('../php/PhpregUsuario.php');
		function guardar()
		{
			if (($_POST['txt_usuario']) && ($_POST['txt_password']) ) {
				$obj = new Usuario();
				$obj->setTipoUsuario(2);
				$obj->setNombre($_POST['txt_nombre']);
				$obj->setUsuario($_POST['txt_usuario']);
				$obj->setPassword(md5($_POST['txt_password']));
				$obj->setFechaNacimiento($_POST['txt_fecha']);
				$obj->setCelular($_POST['txt_celular']);
				$obj->setEmail($_POST['txt_email']);
				if ($obj->guardar()) {
					echo '<script>
						alert ("Registrado Exitosamente");
						location.href ="loginUsuario.php";
						</script>';
				}
				else
				{
					echo "Error Al Registrar.......!!!";
				}
			}
			else
			{
				echo "Por Favor Introdusca Sus Datos Correctamente.....!!!!";
			}
		}

		if (isset($_POST['Registrar'])) {
			guardar();
		}
	?>
	<!--CODIGO PHP-->

<script type="text/javascript" src="../js/bootstrap.min.css"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
</body>
</html>