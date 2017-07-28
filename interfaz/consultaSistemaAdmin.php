<?php
	session_start();

	$_SESSION['cod_usuario'];
	$_SESSION['nombre_usuario'];
	$_SESSION['loggedin_usuario'] = true;

	if (isset($_SESSION['cod_usuario']) && $_SESSION['loggedin_usuario'] == true && $_SESSION['cod_tipo_usuario']=='1') 
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
				<span class="right"><a class="codrops-icon codrops-icon-drop" <?php if ($_SESSION['loggedin_usuario'] == true) { echo "href='LogoutAdmin.php'><span>Salir</span></a></span>"; } else { echo "href='interfaz/loginUsuario.php'><span>Iniciar Session</span></a></span>";} ?> 
			</div>
			<header class="codrops-header">
				<h1>¿Has Visto A....?<span>Sistema De Difusion Para Personas Desaparecidas</span></h1>
				<nav class="codrops-demos">
					<a class="current-demo" href="consultaSistemaAdmin.php">Buscamos A....</a>
					<a href="consultaSistemaAdmin2.php">Encontramos A....</a>
				</nav>
			</header>
			</div>
		</div><!-- /container -->

		
			<?php 
			include_once('../php/PhpregDesaparecido.php');
			$obj = new Desaparecido();
			$reg = $obj->mostrarDesaparecidoIndex();
			while ($row = mysqli_fetch_object($reg)) 
			{?>
			<div class="container" style="padding: 10px; height: auto;">
				<div class="row" style="border :4px solid black; background: white; color: black; /*padding: 15px;*/">
				<div class="1">
					<div class="col-md-12" >
							<h2 class="text-center text-capitalize"><?php echo $row->nombre_desaparecido ?></h2>
							<div class="col-md-4 text-center">
								<img src="../img_upload/<?php echo $row->imagen ?>" class="img-responsive">
							</div>
							<div class="col-md-2">
									<label>Sexo:<small> <?php echo $row->sexo ?></small></label>
									<br>
									<label>Edad:<small><?php echo $row->edad ?></small></label>
									<br>
									<label>Estatura:<small><?php echo $row->estatura ?></small></label>
									<br>
									<label>Tez: <small><?php echo $row->tez ?></small></label>
									<br>
									<label>Ojos: <small><?php echo $row->ojos ?></small></label>
									<br>
									<label>Cabello: <small> <?php echo $row->cabello ?></small></label>
							</div>
							<div class="col-md-4 text-justify">
									<label>Fecha Desaparicion: <small><?php echo $row->fecha_desaparicion ?></small></label>
									<br>
									<label>Señas Particulares: <small> <?php echo $row->señas_particulares ?></small></label>
									<br>
									<label>Vestimenta:<small> <?php echo $row->vestimenta ?></small></label>
									<br>
									<label>Circunstancia: <small><?php echo $row->circunstancia ?></small></label>
									<br>
									<label>Fecha Registro: <small><?php echo $row->fecha_registro ?></small></label>
							</div>
							<div class="col-md-2 text-center" >
									<a href="regDesaparecidoAdmin.php?setCod=<?php echo $row->cod_desaparecido ?>&&setNombre=<?php echo $row->nombre_desaparecido ?>&&setSexo=<?php echo $row->sexo ?>&&setEdad=<?php echo $row->edad ?>&&setEstatura=<?php echo $row->estatura ?>&&setTez=<?php echo $row->tez ?>&&setOjos=<?php echo $row->ojos ?>&&setCabello=<?php echo $row->cabello ?>&&setFechaDesaparicion=<?php echo $row->fecha_desaparicion ?>&&setSeñasParticulares=<?php echo $row->señas_particulares ?>&&setVestimenta=<?php echo $row->vestimenta ?>&&setCircunstancia=<?php echo $row->circunstancia ?>&&setImagen=<?php echo $row->imagen ?>&&setEstado=<?php echo $row->estado_desaparecido ?>&&setFechaRegistro=<?php echo $row->fecha_registro ?>"><button class="btn btn-primary" type="button" style="width: 100%; margin: 10px;">Editar</button></a>
									<a href="reportePersonaDesaparecidaAdmin.php?setCodDesaparecido=<?php echo $row->cod_desaparecido ?>"><button class="btn btn-primary " type="button" style="width: 100%; margin: 10px;">Mensaje</button></a>
							</div>
					</div>
				</div>
				</div>
			</div>
			<?php
			}
			?>


		<!-- EspacioAbAJO-->
		<section class="related">

		</section>


		<!--MENU CHIQUITO RESPONSIVE-->
		<div class="contenido">
			<div class="menu-wrap">
				<nav class="menu">
					<div class="profile"><img src="../img/users.png" alt="Matthew Greenberg"/ width="40" height="40"><span><?php echo $_SESSION['nombre_usuario'] ?></span></div>
					<div class="link-list" style="text-align: left; width: 100%;">
						<a href="regDesaparecidoAdmin.php"><span>Reg. Persona Desaparecida</span></a>
						<a href="regEncontradoAdmin.php"><span>Reg. Persona Encontrada</span></a>
						<a href="consultaSistemaAdmin.php"><span>Consultas</span></a>
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
		<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<!--BOOTSRAP-->
	</body>
</html>