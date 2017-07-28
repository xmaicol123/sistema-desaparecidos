<?php 
/*CODIGO PARA EL COMPARTIR DE FACEBOOK*/
include_once('../php/PhpregDesaparecido.php');
$obj = new Desaparecido();
$reg = $obj->mostrarDesaparecido($_GET['setCod']);
$row = mysqli_fetch_array($reg);

$mostrar_imagen = $row['imagen'];

/*CODIGO DE ENVIO PARA PHP*/
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
/*CODIGO DE ENVIO PARA PHP*/
/*CODIGO PARA PHP SI EXISTE LA IMAGEN*/
$archivo = "../img_upload/". $mostrar_imagen;
if (file_exists($archivo))
{
	$facebook_imagen=$archivo;
}
else 
{
		
}
/*CODIGO PARA PHP SI EXISTE LA IMAGEN*/


/*CODIGO PARA EL COMPARTIR DE FACEBOOK*/
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
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="loginUsuario.php"><span>Iniciar Session</span></a></span>
			</div>
			<header class="codrops-header">
				<h1>¿Has Visto A....?<span>Sistema De Difusion Para Personas Desaparecidas</span></h1>
			</header>
			</div>
		</div><!-- /container -->

		<!--CONTENIDO DESAPARECIDO-->
		<!--CONTENIDO PHP-->
		<?php 
			include_once('../php/PhpregDesaparecido.php');
			$obj = new Desaparecido();
			$reg = $obj->mostrarDesaparecido($_GET['setCod']);
			while ($row = mysqli_fetch_object($reg)) 
			{?>
			<div class="container" style="height: auto;">
				<div class="row">
					<h2 class="text-center bg-primary"><strong>¡AYUDALE A REGRESAR A CASA!</strong></h2>
					<h2 class="text-center text-capitalize"><?php echo $row->nombre_desaparecido ?></h2>
					<div class="col-md-6 text-center">
						<img src="../img_upload/<?php echo $row->imagen ?>" class="img-responsive img-thumbnail">
					</div>
					<div class="col-md-5 text-center">
						<h4 class="text-left"><label>Sexo: <?php echo $row->sexo ?></label></h4>
						<h4 class="text-left"><label>Edad: <?php echo $row->edad ?></label></h4>
						<h4 class="text-left"><label>Estatura: <?php echo $row->estatura ?></label></h4>
						<h4 class="text-left"><label>Tez: <?php echo $row->tez ?></label></h4>
						<h4 class="text-left"><label>Ojos: <?php echo $row->ojos ?></label></h4>
						<h4 class="text-left"><label>Cabello: <?php echo $row->cabello ?></label></h4>
						<h4 class="text-left"><label>Fecha De Desaparicion: <?php echo $row->fecha_desaparicion ?></label></h4>
						<h4 class="text-left"><label>Señas Particulares: <?php echo $row->señas_particulares ?></label></h4>
						<h4 class="text-left"><label>Vestimenta: <?php echo $row->vestimenta ?></label></h4>
						<h4 class="text-left"><label>Circunstancia: <?php echo $row->circunstancia ?></label></h4>
						<h4 class="text-left"><label>Fecha de Registro: <?php echo $row->fecha_registro ?></label></h4>
					</div>
					<div class="col-md-1">
							<a href="regMensajeDesaparecido.php?setCod=<?php echo $_GET['setCod'] ?>"><img src="../img/mensaje.png" class="" width="50" style="margin: 15px;"></a>

							<a href=""><img src="../img/impre.png" width="50" onclick="window.print();" style="margin: 15px;"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 bg-primary">
						<h2 class="text-center">Te Agradecemos Compartir Cualquier Informacion....!</h2>
					</div>
				</div>
			</div>
			<?php
			}
		?>
		<!--CONTENIDO PHP-->

		<!--CONTENIDO DESAPARECIDO-->

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