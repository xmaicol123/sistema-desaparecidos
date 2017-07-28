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
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="loginUsuario.php"><span>Iniciar Session</span></a></span>
			</div>
			<header class="codrops-header">
				<h1>¿Has Visto A....?<span>Sistema De Difusion Para Personas Desaparecidas</span></h1>
			</header>
			</div>
		</div><!-- /container -->
		
		<?php 
			include_once('../php/PhpregEncontrado.php');
			$obj = new Encontrado();
			$reg = $obj->mostrarEncontrado($_GET['setCod']);
			while ($row = mysqli_fetch_object($reg))
			{?>
			<form method="POST" action="regMensajeEncontrado.php">
			<div class="container">
				<div class="row">
					<h2 class="text-center">Reporte De Persona Buscada</h2>
					<div class="col-md-3">
					
					</div>
					<div class="col-md-6">
						<input type="text" name="txt_cod_encontrado" value="<?php echo $_GET['setCod'] ?>" hidden>
						<div class="form-group">
							<h4 for="">¿A Quien Viste?</h4>
							<input type="text" class="form-control text-capitalize" name="txt_mensaje1" required="" value="<?php echo $row->nombre_encontrado ?>">
						</div>
						<div class="form-group">
							<h4 for="">¿De Donde Lo Conoces?</h4>
							<input type="text" class="form-control" name="txt_mensaje2" required="">
						</div>
						<div class="form-group">
							<h4 for="">¿Es Tu Familiar?</h4>
							<input type="text" class="form-control" name="txt_mensaje3" required="">
						</div>
						<div class="form-group">
							<h4 for="">Escribe Una Descripcion Lo Mas Detallada Posible De La Direccion O Numero Telefonico De Los Familiares De Esta Persona.</h4>
							<textarea class="form-control" name="txt_mensaje4"></textarea>
						</div>
					</div>
					<div class="col-md-3">
					
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						
					</div>
					<div class="col-md-6 text-center">
						<input type="submit" name="Registrar" value="Registrar" class="btn-primary btn-lg">
					</div>
					<div class="col-md-3">
						
					</div>
				</div>
			</div>
			</form>
			<?php
			}
		?>
		<!--CODIGO PHP-->
		<?php 
		include_once('../php/PhpregMensajeEncontrado.php');
		function guardar()
		{
			if (($_POST['txt_mensaje1']) && ($_POST['txt_mensaje2']) ) {
				$obj = new MensajeEncontrado();
				$obj->setCodEncontrado($_POST['txt_cod_encontrado']);
				$obj->setMensaje1($_POST['txt_mensaje1']);
				$obj->setMensaje2($_POST['txt_mensaje2']);
				$obj->setMensaje3($_POST['txt_mensaje3']);
				$obj->setMensaje4($_POST['txt_mensaje4']);
				if ($obj->guardar()) {
					echo '<script>
						alert ("Registrado Exitosamente");
						window.history.go(-1);
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
		<!-- EspacioAbAJO-->
		<section class="related">

		</section>

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
	</body>
</html>