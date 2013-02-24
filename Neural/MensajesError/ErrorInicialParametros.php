<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="iso-8859-1">
			<title>.:: Neural Framework - Error  Mod_ReWrite No Activo ::.</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="Public/css/bootstrap.css" rel="stylesheet">
			<style>
				body {
					padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
				}
			</style>
			<link href="Public/css/bootstrap-responsive.css" rel="stylesheet">
		</head>
		<body>
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand">Neural Framework</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li class="active"><a>Error de Requerimientos de Servidor</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<h1>Requerimientos de Servidor</h1>
				<p>Los siguientes son los requerimientos b�sicos del Framework.</p>
				<dl class="dl-horizontal">
					<dt><a>Versi�n de PHP</a></dt>
					<dd><div class="alert <?php echo (version_compare(phpversion(), '5.3.2', '>=')) ? 'alert-success' : 'alert-error'; ?>"><strong>Versi�n de PHP Mayor � Igual a 5.3.2</strong></div></dd>
					<dt><a>Extensi�n ctype_alpha</a></dt>
					<dd><div class="alert <?php echo (function_exists('ctype_alpha')) ? 'alert-success' : 'alert-error'; ?>"><strong>Extensi�n Ctype_Alpha Disponible</strong></div></dd>
					<dt><a>Extensi�n MCrypt</a></dt>
					<dd><div class="alert <?php echo (extension_loaded('mcrypt')) ? 'alert-success' : 'alert-error'; ?>"><strong>Extensi�n Mcrypt Disponible</strong></div></dd>
					<dt><a>Extensi�n PDO</a></dt>
					<dd><div class="alert <?php echo (extension_loaded('PDO')) ? 'alert-success' : 'alert-error'; ?>"><strong>Extensi�n PDO Disponible</strong></div></dd>
				</dl>
			</div>
		</body>
	</html>