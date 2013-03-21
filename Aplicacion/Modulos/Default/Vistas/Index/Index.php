
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>.:: Neural Framework [ Marco de Trabajo en PHP ] ::.</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<?php echo NeuralScriptAdministrador::OrganizarScript(array('CSS' => array('BOOSTRAP', 'RESPONSIVE', 'DOCS')), false, 'DEFAULT'); ?>	
			<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->			
		</head>
		<body data-spy="scroll" data-target=".bs-docs-sidebar">
		<!-- Navbar ================================================== -->
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="brand" href="http://www.neuralframework.com/" target="_blank" style="color: white;">Neural Framework</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li class=""></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<!-- #Navbar ================================================== -->
			<header class="jumbotron subhead" id="overview">
				<div class="container">
					<h1>Neural Framework</h1>
					<p class="lead">Bienvenidos a Neural Framework Marco de Trabajo en PHP.</p>
				</div>
			</header>
			
			<div class="container">
				<div class="row">
					<div class="span3 bs-docs-sidebar">
						<ul class="nav nav-list bs-docs-sidenav">
							<li><a href="#Requerimientos"><i class="icon-chevron-right"></i> Requerimientos Básicos</a></li>
							<li><a href="#Validacion-Automatica"><i class="icon-chevron-right"></i>  Validación Automática</a></li>
						</ul>
					</div>
					<div class="span9">
						
						<section id="Requerimientos">
							<div class="page-header">
								<h1>Funciona!!!!</h1>
							</div>
							<p class="lead">Neural Framework funciona en tu servidor, ahora podras iniciar el desarrollo de las aplicaciones que desee crear, el cielo es el limite.</p>
							<h4><a>Documentación</a></h4>
							<p>No olvides consultar la <a href="http://www.NeuralFramework.com/Documentacion" target="_blank">documentación Oficial</a> si requieres una Guía!!!!!</p>
							<h4><a>Experiencia con Neural Framework</a></h4>
							<p>Cuentanos tu experiencia al crear aplicaciones web con <strong>Neural Framework</strong>, describe tu experiencia y que te gustaria que se implementara como actualizaciones o ayudas!!!!! <a href="http://neuralframework.com/Web/Contacto" target="_blank">Comenta Aquí!!!!!!</a></p>
						</section>
						
						<section id="Requerimientos">
							<div class="page-header">
								<h1>1. Requerimientos Básicos</h1>
							</div>
							<p class="lead">Para el buen funcionamiento de Neural Framework se requieren las siguientes condiciones:</p>
							<h2>Condiciones</h2>
							<h4><a>Versión de PHP:</a></h4>
							<p>El Framework requiere una versión de PHP igual ó superior a <code>5.2.3</code>.</p>
							<h4><a>Librerias Necesarias:</a></h4>
							<p>Se requieren las Librerias <code>ctype_alpha</code> y <code>Mcrypt</code>.</p>
							<h4><a>Carpeta de Cache</a></h4>
							<p>Si requiere utilizar la libreria de cache simple es necesario que la carpeta de cahce tenga permisos de lectura y escritura <code>777</code>.</p>
							<h4><a>Extensión PDO</a></h4>
							<p>Se requiere la extensión PDO para poder realizar las conexiones a las bases de datos, adicionalmente debe tener activo el driver correspondiente al motor de bases de datos correcto.</p>
							<h4><a>Apache Mod_Rewrite</a></h4>
							<p>Es requerido y obligatorio tener activa la opción del <code>Mod_Rewrite</code> de Apache.</p>
						</section>
						
						<section id="Validacion-Automatica">
							<div class="page-header">
								<h1>2. Validación Automática</h1>
							</div>
							<p class="lead">Se realizara la validación automatica del servidor actual.</p>
							<dl class="dl-horizontal">
								<dt><a>Versión de PHP</a></dt>
								<dd><?php AyudasRequerimientos::ValidarVersionPHP(); ?></dd>
								<dt><a>Extensión ctype_alpha</a></dt>
								<dd><?php AyudasRequerimientos::ValidarCtypeAlpha(); ?></dd>
								<dt><a>Extensión MCrypt</a></dt>
								<dd><?php AyudasRequerimientos::ValidarMCrypt(); ?></dd>
								<dt><a>Directorio Cache</a></dt>
								<dd><?php AyudasRequerimientos::EscribirEnCache(); ?></dd>
								<dt><a>Extensión PDO</a></dt>
								<dd><?php AyudasRequerimientos::ValidarPDO(); ?></dd>
							</dl>
						</section>
					</div>
				</div>
			</div>
		</body>
	</html>