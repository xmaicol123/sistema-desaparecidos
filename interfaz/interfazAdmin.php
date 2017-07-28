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

		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="../index.php"><span>Inicio</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" <?php if ($_SESSION['loggedin_usuario'] == true) { echo "href='LogoutAdmin.php'><span>Salir</span></a></span>"; } else { echo "href='interfaz/loginUsuario.php'><span>Iniciar Session</span></a></span>";} ?> 
			</div>
			<header class="codrops-header">
				<h1>¿Has Visto A....?<span>Sistema De Difusion Para Personas Desaparecidas</span></h1>
			</header>
			<center>
				<div class="" style="width: 80%; max-width: 600px; text-align: justify;">
				<h3>Presentacion :</h3>
				<p>Este portal es un sistema de seguimiento y de apoyo a familiares de personas desaparecias como tambien para dar a conocer personas extraviadas, este portal genera carteles, como tambien tiene un sector de reportes de las personas desaparecias u encontradas para dar a conocer rapidamente el paradero de las personas. </p>
				</div>
			</center>
			</div>
		</div><!-- /container -->

		<!--MENU CHIQUITO RESPONSIVE-->
		<div class="container">
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
	</body>
</html>