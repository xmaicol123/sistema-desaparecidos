<?php
	session_start();

	$_SESSION['cod_usuario'];
	$_SESSION['nombre_usuario'];
	$_SESSION['loggedin_usuario'] = true;

	if (isset($_SESSION['cod_usuario']) && $_SESSION['loggedin_usuario'] == true && $_SESSION['cod_tipo_usuario']=='2') 
	{

	} 
	else 
	{
   	echo "Esta pagina es solo para usuarios registrados.<br>";
   	echo "<br><a href='../index.php'>Login</a>";
	exit;
	}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>¿Has Visto A...?</title>
		<meta name="description" content="Sistema De Difusion Para Personas Desaparecidas" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/set2.css" />
		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/menu_cornermorph.css" />
		<!--BOOTSTRAP-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/estilos.css">
		<!--BOOTSTRAP-->
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body style="background: #2f3238; color: white;">

		<div class="contenido"><!-- /container -->
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="../index.php"><span>Inicio</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" <?php if ($_SESSION['loggedin_usuario'] == true) { echo "href='LogoutUsuario.php'><span>Salir</span></a></span>"; } else { echo "href='interfaz/loginUsuario.php'><span>Iniciar Session</span></a></span>";} ?> 
			</div>
			<header class="codrops-header">
				<h1>¿Has Visto A....?<span>Sistema De Difusion Para Personas Desaparecidas</span></h1>
			</header>
			</div>
		</div><!-- /container -->
<!--HACIENDO METODO POST EN MISMA PAGINA PRUEBA-->
		<?php
			if ($_GET['setCod']) {
		?>
		<form method="POST" action="regDesaparecido.php" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<h2 class="text-center">Registro De Persona Desaparecida</h2>
				<input type="text" name="txt_cod" value="<?php echo $_GET['setCod'] ?>" hidden>
				<input type="text" name="txt_imagen" value="<?php echo $_GET['setImagen'] ?>" hidden>
				<input type="text" name="txt_fecha_registro" value="<?php echo $_GET['setFechaRegistro'] ?>" hidden>
				<div class="col-md-6">
					<div class="form-group">
						<center>
						<a href="regDesaparecido.php?setCambiarImagen=<?php echo $numero = 1; ?>&&setCodDesaparecido=<?php echo $_GET['setCod'] ?>&&setNombre=<?php echo $_GET['setNombre'] ?>&&setSexo=<?php echo $_GET['setSexo'] ?>&&setEdad=<?php echo $_GET['setEdad'] ?>&&setEstatura=<?php echo $_GET['setEstatura'] ?>&&setTez=<?php echo $_GET['setTez'] ?>&&setOjos=<?php echo $_GET['setOjos'] ?>&&setCabello=<?php echo $_GET['setCabello'] ?>&&setFechaDesaparicion=<?php echo $_GET['setFechaDesaparicion'] ?>&&setSeñasParticulares=<?php echo $_GET['setSeñasParticulares'] ?>&&setVestimenta=<?php echo $_GET['setVestimenta'] ?>&&setCircunstancia=<?php echo $_GET['setCircunstancia'] ?>&&setEstado=<?php echo $_GET['setEstado'] ?>&&setFechaRegistro=<?php echo $_GET['setFechaRegistro'] ?>"><h3 class="bg-primary lg" style="padding: 21px;">¿Usted Desea Cambiar De Imagen?</h3></a>
						<div id="salida_imagen" style="max-width: 100%;max-height: 100%;width: 500px;height: 332px; border: 2px solid white; overflow: hidden;"><output id="list"><img src="../img_upload/<?php echo $_GET['setImagen'] ?>" style="width: 500px;"></output></div>
						</center>
					</div>
					<div class="form-group">
						<label for="">Nombre Del Desaparecido:</label>
						<input type="text" class="form-control" name="txt_nombre" required="" value="<?php echo $_GET['setNombre'] ?>">
					</div>
					<div class="form-group">
						<label for="">Sexo:</label>
						<select class="form-control" name="txt_sexo">
							<option <?php if ($_GET['setSexo']=="Hombre") {echo "selected";} ?> value="Hombre">Hombre</option>
							<option <?php if ($_GET['setSexo']=="Mujer") {echo "selected";} ?> value="Mujer">Mujer</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Edad:</label>
						<input type="text" class="form-control" name="txt_edad" required="" value="<?php echo $_GET['setEdad'] ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Estatura:</label>
						<input type="text" class="form-control" name="txt_estatura" required="" value="<?php echo $_GET['setEstatura'] ?>">
					</div>
					<div class="form-group">
						<label for="">Tez:</label>
						<input type="text" class="form-control" name="txt_tez" required="" value="<?php echo $_GET['setTez'] ?>">
					</div>
					<div class="form-group">
						<label for="">Ojos:</label>
						<input type="text" class="form-control" name="txt_ojos" required="" value="<?php echo $_GET['setOjos'] ?>">
					</div>
					<div class="form-group">
						<label for="">Cabello</label>
						<input type="text" class="form-control" name="txt_cabello" required="" value="<?php echo $_GET['setCabello'] ?>">
					</div>
					<div class="form-group">
						<label for="">Fecha Desaparicion:</label>
						<input type="date" class="form-control" name="txt_fecha_desaparicion" required="" value="<?php echo $_GET['setFechaDesaparicion'] ?>">
					</div>
					<div class="form-group">
						<label for="">Señas Particulares</label>
						<input type="text" class="form-control" name="txt_señas_particulares" required="" value="<?php echo $_GET['setSeñasParticulares'] ?>">
					</div>
					<div class="form-group">
						<label for="">Vestimenta</label>
						<input type="text" class="form-control" name="txt_vestimenta" required="" value="<?php echo $_GET['setVestimenta'] ?>">
					</div>
					<div class="form-group">
						<label for="">Circunstancia</label>
						<input type="text" class="form-control" name="txt_circunstancia" required="" value="<?php echo $_GET['setCircunstancia'] ?>">
					</div>
					<div class="form-group">
						<label for="">Estado:</label>
						<select class="form-control" name="txt_desaparicion">
							<option <?php if ($_GET['setEstado']=="Desaparecido") {echo "selected";} ?> value="Desaparecido">Desaparecido</option>
							<option <?php if ($_GET['setEstado']=="Aparecido") {echo "selected";} ?> value="Aparecido">Aparecido</option>
						</select>
					</div>
					<div class="form-group text-center" id="buttonPadding">
						<input type="submit" class="btn btn-primary btn-lg" value="Modificar" name="Modificar">
					</div>
				</div>	
			</div>
		</div>
		</form>
		<?php
		}
		else if ($_GET['setCambiarImagen']==1) 
		{
		?>
		<form method="POST" action="regDesaparecido.php" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<h2 class="text-center">Registro De Persona Desaparecida</h2>
				<input type="text" name="txt_codDesaparecido" value="<?php echo $_GET['setCodDesaparecido'] ?>" hidden>
				<input type="text" name="txt_fecha_registro" value="<?php echo $_GET['setFechaRegistro'] ?>" hidden>
				<div class="col-md-6">
					<div class="form-group">
						<center>
						<input type="file" name="imagen" id="files" class="files">
						<div id="salida_imagen" style="max-width: 100%;max-height: 100%;width: 500px;height: 332px; border: 2px solid white; overflow: hidden;"><output id="list"></output></div>
						</center>
					</div>
					<div class="form-group">
						<label for="">Nombre Del Desaparecido:</label>
						<input type="text" class="form-control" name="txt_nombre" required="" value="<?php echo $_GET['setNombre'] ?>">
					</div>
					<div class="form-group">
						<label for="">Sexo:</label>
						<select class="form-control" name="txt_sexo">
							<option <?php if ($_GET['setSexo']=="Hombre") {echo "selected";} ?> value="Hombre">Hombre</option>
							<option <?php if ($_GET['setSexo']=="Mujer") {echo "selected";} ?> value="Mujer">Mujer</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Edad:</label>
						<input type="text" class="form-control" name="txt_edad" required="" value="<?php echo $_GET['setEdad'] ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Estatura:</label>
						<input type="text" class="form-control" name="txt_estatura" required="" value="<?php echo $_GET['setEstatura'] ?>">
					</div>
					<div class="form-group">
						<label for="">Tez:</label>
						<input type="text" class="form-control" name="txt_tez" required="" value="<?php echo $_GET['setTez'] ?>">
					</div>
					<div class="form-group">
						<label for="">Ojos:</label>
						<input type="text" class="form-control" name="txt_ojos" required="" value="<?php echo $_GET['setOjos'] ?>">
					</div>
					<div class="form-group">
						<label for="">Cabello</label>
						<input type="text" class="form-control" name="txt_cabello" required="" value="<?php echo $_GET['setCabello'] ?>">
					</div>
					<div class="form-group">
						<label for="">Fecha Desaparicion:</label>
						<input type="date" class="form-control" name="txt_fecha_desaparicion" required="" value="<?php echo $_GET['setFechaDesaparicion'] ?>">
					</div>
					<div class="form-group">
						<label for="">Señas Particulares</label>
						<input type="text" class="form-control" name="txt_señas_particulares" required="" value="<?php echo $_GET['setSeñasParticulares'] ?>">
					</div>
					<div class="form-group">
						<label for="">Vestimenta</label>
						<input type="text" class="form-control" name="txt_vestimenta" required="" value="<?php echo $_GET['setVestimenta'] ?>">
					</div>
					<div class="form-group">
						<label for="">Circunstancia</label>
						<input type="text" class="form-control" name="txt_circunstancia" required="" value="<?php echo $_GET['setCircunstancia'] ?>">
					</div>
					<div class="form-group">
						<label for="">Estado:</label>
						<select class="form-control" name="txt_desaparicion">
							<option <?php if ($_GET['setEstado']=="Desaparecido") {echo "selected";} ?> value="Desaparecido">Desaparecido</option>
							<option <?php if ($_GET['setEstado']=="Aparecido") {echo "selected";} ?> value="Aparecido">Aparecido</option>
						</select>
					</div>
					<div class="form-group text-center" id="buttonPadding">
						<input type="submit" class="btn btn-primary btn-lg" value="Cambiar" name="Cambiar">
					</div>
				</div>	
			</div>
		</div>
		</form>
		<?php
		}
		else
		{
		?>
		<form method="POST" action="regDesaparecido.php" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<h2 class="text-center">Registro De Persona Desaparecida</h2>
				<div class="col-md-6">
					<div class="form-group">
						<center>
						<input type="file" name="imagen" id="files" class="files">
						<div id="salida_imagen" style="max-width: 100%;max-height: 100%;width: 500px;height: 332px; border: 2px solid white; overflow: hidden;"><output id="list"></output></div>
						</center>
					</div>
					<div class="form-group">
						<label for="">Nombre Del Desaparecido:</label>
						<input type="text" class="form-control" name="txt_nombre" required="">
					</div>
					<div class="form-group">
						<label for="">Sexo:</label>
						<select class="form-control" name="txt_sexo">
							<option value="Hombre">Hombre</option>
							<option value="Mujer">Mujer</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Edad:</label>
						<input type="text" class="form-control" name="txt_edad" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Estatura:</label>
						<input type="text" class="form-control" name="txt_estatura" required="">
					</div>
					<div class="form-group">
						<label for="">Tez:</label>
						<input type="text" class="form-control" name="txt_tez" required="">
					</div>
					<div class="form-group">
						<label for="">Ojos:</label>
						<input type="text" class="form-control" name="txt_ojos" required="">
					</div>
					<div class="form-group">
						<label for="">Cabello</label>
						<input type="text" class="form-control" name="txt_cabello" required="">
					</div>
					<div class="form-group">
						<label for="">Fecha Desaparicion:</label>
						<input type="date" class="form-control" name="txt_fecha_desaparicion" required="">
					</div>
					<div class="form-group">
						<label for="">Señas Particulares</label>
						<input type="text" class="form-control" name="txt_señas_particulares" required="">
					</div>
					<div class="form-group">
						<label for="">Vestimenta</label>
						<input type="text" class="form-control" name="txt_vestimenta" required="">
					</div>
					<div class="form-group">
						<label for="">Circunstancia</label>
						<input type="text" class="form-control" name="txt_circunstancia" required="">
					</div>
					<div class="form-group text-center" id="buttonPadding">
						<input type="submit" class="btn btn-primary btn-lg" value="Registrar" name="Registrar">
					</div>
				</div>	
			</div>
		</div>
		</form>
		<?php
		}
		?>

		<section class="related">

		</section>

		<!--CODIGO PHP :D-->
		<?php 
		include('../php/PhpregDesaparecido.php');
			function guardar()
			{
				if ($_FILES['imagen']) 
				{
					/*Datos de la Imagen*/
					$nombre_imagen = $_FILES['imagen']['name'];
					$tipo_imagen = $_FILES['imagen']['type'];
					$tamagno_imagen = $_FILES['imagen']['size'];
					/*Datos de la Imagen*/

					/*Validacion de Imagen*/
					if ($tamagno_imagen<=2000000) 
					{
						if ($tipo_imagen=="image/jpeg" OR $tipo_imagen=="image/jpg" OR $tipo_imagen=="image/png" OR $tipo_imagen=="image/gif") 
						{
							/*ruta de la carpeta del servidor*/
							$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/prototipo/img_upload/';
							/*moviendo la carpeta al servidor con esta funcion :D*/
							move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
							/*Instanciando Nuevo Objeto*/
							/*Fecha Actual*/
							date_default_timezone_set('America/New_York');
							$fecha_registro=date("Y/m/d");
							/*Fecha Actual*/
							$obj = new Desaparecido();
							$obj->setCodUsuario($_SESSION['cod_usuario']);
							$obj->setImagen($nombre_imagen);
							$obj->setNombreDesaparecido($_POST['txt_nombre']);
							$obj->setSexo($_POST['txt_sexo']);
							$obj->setEdad($_POST['txt_edad']);
							$obj->setEstatura($_POST['txt_estatura']);
							$obj->setTez($_POST['txt_tez']);
							$obj->setOjos($_POST['txt_ojos']);
							$obj->setCabello($_POST['txt_cabello']);
							$obj->setFechaDesaparicion($_POST['txt_fecha_desaparicion']);
							$obj->setSeñasParticulares($_POST['txt_señas_particulares']);
							$obj->setVestimenta($_POST['txt_vestimenta']);
							$obj->setCircunstancia($_POST['txt_circunstancia']);
							$obj->setFechaRegistro($fecha_registro);
							$obj->setEstadoDesaparecido('Desaparecido');
							if ($obj->guardar())
							{
								echo '<script>
								alert ("Registrado Exitosamente");
								window.history.go(-1);
								</script>';
							}
							else
							{
								echo '<script>
								alert ("Error Al Registrar Adentro");
								window.history.go(-1);
								</script>';
							}
						}
						else
						{
							echo '<script>
							alert ("Solo Se Permiten Imagenes");
							window.history.go(-1);
							</script>';
						}
					}
					else
					{
						echo '<script>
						alert ("Su Imagen Es Demasiado Grande");
						window.history.go(-1);
						</script>';
					}
				}
				else
				{
					echo '<script>
					alert ("Error al Registrar");
					window.history.go(-1);
					</script>';
				}
			}

			function modificar()
			{
				if ($_POST['txt_cod']) 
				{
					if($_POST['txt_cod']) {
						$obj = new Desaparecido();
						$obj->setCodDesaparecido($_POST['txt_cod']);
						$obj->setImagen($_POST['txt_imagen']);
						$obj->setNombreDesaparecido($_POST['txt_nombre']);
						$obj->setSexo($_POST['txt_sexo']);
						$obj->setEdad($_POST['txt_edad']);
						$obj->setEstatura($_POST['txt_estatura']);
						$obj->setTez($_POST['txt_tez']);
						$obj->setOjos($_POST['txt_ojos']);
						$obj->setCabello($_POST['txt_cabello']);
						$obj->setFechaDesaparicion($_POST['txt_fecha_desaparicion']);
						$obj->setSeñasParticulares($_POST['txt_señas_particulares']);
						$obj->setVestimenta($_POST['txt_vestimenta']);
						$obj->setCircunstancia($_POST['txt_circunstancia']);
						$obj->setFechaRegistro($_POST['txt_fecha_registro']);
						$obj->setEstadoDesaparecido($_POST['txt_desaparicion']);
						if ($obj->modificar()) {
							echo '<script>
									alert ("Modificado Exitosamente");
									window.history.go(-1);
									</script>';
						}
						else
						{
							echo '<script>
									alert ("Error Al Modificar");
									window.history.go(-1);
									</script>';
						}

					}
					else
					{
							echo '<script>
									alert ("Datos Vacios");
									window.history.go(-1);
									</script>';
					}
				}
			}

			function modificarImagen()
			{
				if ($_FILES['imagen']) 
				{
					/*Datos de la Imagen*/
					$nombre_imagen = $_FILES['imagen']['name'];
					$tipo_imagen = $_FILES['imagen']['type'];
					$tamagno_imagen = $_FILES['imagen']['size'];
					/*Datos de la Imagen*/

					/*Validacion de Imagen*/
					if ($tamagno_imagen<=2000000) 
					{
						if ($tipo_imagen=="image/jpeg" OR $tipo_imagen=="image/jpg" OR $tipo_imagen=="image/png" OR $tipo_imagen=="image/gif") 
						{
							/*ruta de la carpeta del servidor*/
							$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/prototipo/img_upload/';
							/*moviendo la carpeta al servidor con esta funcion :D*/
							move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
							/*Instanciando Nuevo Objeto*/
							/*Fecha Actual*/
							date_default_timezone_set('America/New_York');
							$fecha_registro=date("Y/m/d");
							/*Fecha Actual*/
							$obj = new Desaparecido();
							$obj->setCodDesaparecido($_POST['txt_codDesaparecido']);
							$obj->setImagen($nombre_imagen);
							$obj->setNombreDesaparecido($_POST['txt_nombre']);
							$obj->setSexo($_POST['txt_sexo']);
							$obj->setEdad($_POST['txt_edad']);
							$obj->setEstatura($_POST['txt_estatura']);
							$obj->setTez($_POST['txt_tez']);
							$obj->setOjos($_POST['txt_ojos']);
							$obj->setCabello($_POST['txt_cabello']);
							$obj->setFechaDesaparicion($_POST['txt_fecha_desaparicion']);
							$obj->setSeñasParticulares($_POST['txt_señas_particulares']);
							$obj->setVestimenta($_POST['txt_vestimenta']);
							$obj->setCircunstancia($_POST['txt_circunstancia']);
							$obj->setFechaRegistro($_POST['setFechaRegistro']);
							$obj->setEstadoDesaparecido($_POST['txt_desaparicion']);
							if ($obj->modificarImagen())
							{
								echo '<script>
								alert ("Modificado Exitosamente");
								window.history.go(-1);
								</script>';
							}
							else
							{
								echo '<script>
								alert ("Error Al Modificar Adentro");
								window.history.go(-1);
								</script>';
							}
						}
						else
						{
							echo '<script>
							alert ("Solo Se Permiten Imagenes");
							window.history.go(-1);
							</script>';
						}
					}
					else
					{
						echo '<script>
						alert ("Su Imagen Es Demasiado Grande");
						window.history.go(-1);
						</script>';
					}
				}
				else
				{
					echo '<script>
					alert ("Error al Registrar");
					window.history.go(-1);
					</script>';
				}
			}

			if (isset($_POST['Registrar'])) {
				guardar();
			}
			else if (isset($_POST['Modificar'])) {
				modificar();
			}
			else if (isset($_POST['Cambiar'])) {
				modificarImagen();
			}
		?>
		<!--CODIGO PHP :D-->
		<!--MENU CHIQUITO RESPONSIVE-->
		<div class="contenido">
			<div class="menu-wrap">
				<nav class="menu">
					<div class="profile"><img src="../img/users.png" alt="Matthew Greenberg"/ width="40" height="40"><span><?php echo $_SESSION['nombre_usuario'] ?></span></div>
					<div class="link-list" style="text-align: left; width: 100%;">
						<a href="regDesaparecido.php"><span>Reg. Persona Desaparecida</span></a>
						<a href="regEncontrado.php"><span>Reg. Persona Encontrada</span></a>
						<a href="consultaSistema.php"><span>Consultas</span></a>
					</div>
					<div class="icon-list">
						<a href="#"><i class="fa fa-fw fa-home"></i></a>
						<a href="#"><i class="fa fa-fw fa-question-circle"></i></a>
						<a href="#"><i class="fa fa-fw fa-power-off"></i></a>
					</div>
				</nav>
			</div>
			<button class="menu-button" id="open-button" style="color: deepskyblue;"><i class="fa fa-fw fa-cog"></i><span>Open Menu</span></button>
		</div>
		<!--MENU CHIQUITO RESPONSIVE-->

		<script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
		<script src="../js/classie.js"></script>
		<script src="../js/main.js"></script>
		<!--BOOTSTRAP-->
		<script type="text/javascript" src="../js/bootstrap.min.css"></script>
		<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
		<!--BOOTSRAP-->
		<!--VISUALIZAR IMAGEN-->
		<script src="../js/imagen.js"></script>
		<!--VISUALIZAR IMAGEN-->
	</body>
</html>