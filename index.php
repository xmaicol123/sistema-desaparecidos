<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>¿Has Visto A...?</title>
		<meta name="description" content="Sistema De Difusion Para Personas Desaparecidas" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
		<link rel="stylesheet" type="text/css" href="css/set2.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="index.php"><span>Inicio</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="interfaz/loginUsuario.php"><span>Iniciar Session</span></a></span>
			</div>
			<header class="codrops-header">
				<h1>¿Has Visto A....?<span>Sistema De Difusion Para Personas Desaparecidas</span></h1>
				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">Buscamos A....</a>
					<a href="index2.php">Encontramos A....</a>
				</nav>
			</header>
			<div class="content">
				<div class="grid">
				<?php 
				include_once('php/PhpregDesaparecido.php');
				$obj = new Desaparecido();
				$reg = $obj->mostrarDesaparecidoIndex();
				while ($row = mysqli_fetch_object($reg)) 
				{?>
					<figure class="effect-terry">
					<div style="height:350px; overflow: visible; width: 100%; max-height: 100%;">
						<img src="img_upload/<?php echo $row->imagen; ?>" alt="img16" style="width: 500px; height: auto;">
						<figcaption>
							<h2 style='font-size: 20px;'><?php echo $row->nombre_desaparecido ?></h2>
							<p>
							<?php 
								if ($row->estado_desaparecido == "Desaparecido") 
								{
								?>
								<a href="interfaz/verDesaparecido.php?setCod=<?php echo $row->cod_desaparecido ?>"><i class="fa fa-fw fa-share"></i></a>
								<a href="interfaz/regMensajeDesaparecido.php?setCod=<?php echo $row->cod_desaparecido ?>"><i class="fa fa-fw fa-envelope-o"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<?php
								}
								else
								{
								?>
									<h3 style="background: deepskyblue; color: black;">Persona Aparecida</h3>
								<?php
								}
								?>

							</p>
						</figcaption>
					</div>			
					</figure>
				<?php
				}
				?>
				</div>
			</div>
			<nav class="codrops-demos">
				<a class="current-demo" href="index.php">Buscamos A....</a>
				<a href="index2.php">Encontramos A....</a>
			</nav>
			<!-- Related demos -->
			<section class="related">

			</section>
		</div><!-- /container -->
		<script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
	</body>
</html>