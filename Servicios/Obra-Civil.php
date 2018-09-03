<?php

$errores = '';
$enviado = '';

if (isset($_POST['form-civil'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	//Validación de nombre del formulario inicio 
	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	}elseif (empty($nombre)) {
		$errores .= '<p>* Por favor ingrese un nombre</p>';
	}
	//validacion de correo del fomulario inicio
	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		if (!filter_var($correo, FILTER_SANITIZE_EMAIL)) {
			$errores .= '<p>* Correo invalido</p>';
		}
	}elseif (empty($correo)) {
		$errores .= '<p>* Por favor ingrese un correo</p>';
	}

	//validacion de mensaje en fomulario inicio
	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);

	}elseif (empty($mensaje)) {
		$errores .= '<p>* Por favor escribe tu mensaje</p>';
	}

	if (empty($errores)) {

		$texto=       
		"<html> 
            <head></head>
            <body>
                  <h1>Formulario de Contacto</h1> 
                  <p><b>De: </b>$nombre</p> 
                  <p><b>Correo: </b>$correo</p> 
                  <p><b>Mensaje: </b> $mensaje</p> 
            </body>
      </html>";
      $cabeceras = "MIME-Version: 1.0" . "\r\n";
      $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $para = 'info@cesisa.net';
      $titulo = 'Formulario de contacto(Obra civil)';
	  $enviado = 'true';
	  mail($para,$titulo,$texto,$cabeceras);
	}

}



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="../img/cesisa.png">
	<meta name="description" content="Mantenimiento a Techumbres, Tuberias, Estructuras y Montajes.">
	<meta property="og:description" content="Mantenimiento a Techumbres, Construcción de Estructuras de concreto y Montajes.">
	<meta property="og:title" content="Servicios | Obra-civil">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.cesisa.net/Servicios/Obra-Civil.html">
	<meta name="robots" content="noodp">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/sitio.css">
	<link rel="stylesheet" href="css/Automatizacion.css">
	<link rel="stylesheet" href="../css/fonts/style.css">
	<link rel="stylesheet" href="css/Obra-Civil.css">
	<link rel="stylesheet" href="css/Obra-Metal-Mecanica.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<script src="../js/jquery-latest.js"></script>
	<script src="../js/menu.js"></script>
	<title>Servicios | Obra-Civil.</title>
</head>
<body>
<div class="encabezado">
        	<!--Encabezado-->

        <header>
		<div class="header">
			<div class="marca">
				<div class="img">
					<a href="../index.php"><img src="../img/cesisalogo.png" alt="logo"></a>
				</div>
				<div class="name"><h3>Construcciones especializadas y servicios integrales s.a. de c.v.<h3></div>
			</div>
			<div class="menu_bar">
				<a href="#" class="bt-menu"><span class="fa fa-bars"></span><div class="imgbt"><img src="../img/cesisalogo.png" alt=""></div></a>
			</div>
			<nav>
				<ul>
					<li class="hover"><a href="../index.php" class="home"><!--<span class="fa fa-home"></span>-->Inicio</a></li>
					<li class="submenu hover">
						<a href="#" class="home"><!--<span class="fa fa-window-restore"></span>-->Servicios<span class="caret fa fa-sort-desc"></span></a>
						<ul class="children">
							<!--Obra metal mecanica-->
							<li class="next hover"><a class="font-size" href="Obra-Metal-Mecanica.php"><span class="icon-cog"></span>Obra Metal Mecánica</a>
							<ul class="two-children">
								<li><a href="Obra-Metal-Mecanica.php#Fabricación de tanques y recipientes">Fabricación de tanques y recipientes</a></li>
								<li><a href="Obra-Metal-Mecanica.php#Fabricación de estructuras metálicas">Fabricación de Estructuras metálicas</a></li>
								<li><a href="Obra-Metal-Mecanica.php#Rehabilitación de tuberías de diversas especificaciones">Rehabilitación de tuberías</a></li>
								<li><a href="Obra-Metal-Mecanica.php#Fabricación de haz de tubos para intercambiadores de calor">Fabricación de haz de tubos para intercambiadores de calor</a></li>
							</ul></li>
							<!--Obra civil y Edificación-->
							<li class="next hover"><a class="font-size" href="Obra-Civil.php"><span class="icon-users"> </span>Obra Civil y Edificación</a>
								<ul class="two-children">
									<li><a href="#Mantenimiento a techumbres">Mantenimiento a techumbres</a></li>
									<li><a href="#Construcción de estructuras de concreto">Construcción de estructuras de concreto</a></li>
								</ul></li>
							<!--Automatización y control de procesos-->
							<li class="next hover"><a class="font-size" href="Automatizacion.php"><span class="icon-steam2"></span>Automatización y Control de Procesos</a>
								<ul class="two-children">
									<li><a href="Automatizacion.php#Diseño, implementación y consultoría">Diseño, implementación y consultoría</a></li>
									<li><a href="Automatizacion.php#Redes contra-incendio">Redes contra incendio</a></li>
								</ul></li>
							<!--Desarrollo de proyectos de ingeniería-->
							<li class="next hover"><a class="font-size" href="Ingenieria.php"><span class="icon-briefcase"></span>Desarollo de Proyectos de Ingeniería</a></li>
							
							
						</ul>
					</li>
					
					<li class="hover"><a href="#" class="home"><!--<span class="fa fa-sitemap"></span>-->Válvulas INBAL</a></li>
					
			
				</ul>
			</nav>
			 <div class="sociales">
				<p>Sigue todas nuestras redes</p>
				<a href="https://www.facebook.com/CesisaCoatzacoalcos/" target="_blank"><span class="icon-facebook"></span></a>
				<a href="https://plus.google.com/u/0/b/108573607257751533162/108573607257751533162" target="_blank"><span class="icon-googleplus"></span></a>
			</div>
		</div>
	</header></div>
		
		
<div class="banner-servicioC">
		<div class="title-fab">
		<h2>Obra Civil y Edificación.</h2>
	    <div class="contacto">
	    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
	    	<div class="contacto-form">
	    		<div class="chat">
	    			<p>Para mayor información comunícate con nosotros.</p>
	    			<span class="icon-hipchat"></span>
	    		</div>
	    		<?php if(!empty($errores)):?>
			     			<div class="alert error">
			     				<?php echo $errores;?>
			     			</div>
			     		<?php elseif(!empty($enviado)):?>
			     			<div class="alert succes">
			     				<p>Mensaje enviado</p>
			     			</div>
			     		<?php endif?>
			     		<a class="tel" href="tel:+529211644535"><span class="icon-phone"></span>
	    								<span>9211644535</span></a>
	    				<div class="col3">
	    					<input type="text" placeholder="Nombre:" name="nombre">
	    				</div>
	    				<a class="tel" href="tel:+529211644535">
	    								<span>9212105619</span></a>
	    					    		        <div class="col3">
	    		        <input type="email" placeholder="Correo:" name="correo">
	    		        </div>
	    				<a class="mail" href="mailto:info@cesisa.net"><span class="icon-envelop"><span class="icon-highly"></span></span>
	    		        <span>info@cesisa.net</span></a>
	    		        <div class="col4">
	    		        	<textarea name="mensaje" id="mensaje" placeholder="Mensaje:"></textarea>
	    		        </div>
	    		        <input type="submit" value="Enviar" name="form-civil" class="button">
	    	</div>
	    </form>
	</div>

		<h4 class="galeria">Podemos acometer el proyecto que se nos encomiende, gracias a la sinergia de nuestros recursos, herramientas y equipos de profesionales.</h4>
	</div>
</div>

<div class="contenedor">
	<div class="main" id="Mantenimiento a techumbres">
        <h4>Mantenimiento <br>a Techumbres.</h4>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Obra-Civil/Rehabilitado a Techumbres/1.jpg">
		      <img src="img/Obra-Civil/Rehabilitado a Techumbres/1.jpg" alt="" width="300" height="200">
		    </a>
		   
		  </div>
		</div>	
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Obra-Civil/Rehabilitado a Techumbres/2.JPG">
		      <img src="img/Obra-Civil/Rehabilitado a Techumbres/2.JPG" alt="" width="600" height="400">
		    </a>
		   
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Obra-Civil/Rehabilitado a Techumbres/techumbre.jpg">
		      <img src="img/Obra-Civil/Rehabilitado a Techumbres/techumbre.jpg" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Obra-Civil/Rehabilitado a Techumbres/rehabilitado.jpg">
		      <img src="img/Obra-Civil/Rehabilitado a Techumbres/rehabilitado.jpg" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
		<div class="clearfix"></div>
	</div>
		<div class="main" id="Construcción de estructuras de concreto">
        <h4>Construcción de Estructuras de Concreto.</h4>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Obra-Civil/Construccion/2012-11-21 16.42.23.jpg">
		      <img src="img/Obra-Civil/Construccion/2012-11-21 16.42.23.jpg" alt="" width="300" height="200">
		    </a>
		   
		  </div>
		</div>	
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Obra-Civil/Construccion/DSC02288.JPG">
		      <img src="img/Obra-Civil/Construccion/DSC02288.JPG" alt="" width="600" height="400">
		    </a>
		   
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Obra-Civil/Construccion/DSC02111.JPG">
		      <img src="img/Obra-Civil/Construccion/DSC02111.JPG" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Obra-Civil/Construccion/DSC02498.JPG">
		      <img src="img/Obra-Civil/Construccion/DSC02498.JPG" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
		<div class="clearfix"></div>
	</div>

</div>
<!--<section class="footer">
			<footer>
			<div class="datos">
			     <div class="flogo">
			     	<img src="img/cesisalogo4.png" alt="">
			     </div>
			     <div class="columna">
			     	<h2>Contacto</h2>
			     	<ul>
			     		<li><a href=""><span class="icon-map"></span></a><p>Calle Ciprés 101, Col. Pensiones del Estado.C.P. 96530 Coatzacoalcos, Veracruz.</p></li>
			     	    
			            <li><a href="mailto:info@cesisa.net"><span class="icon-envelop"></span><span class="icon-highly inicio"></span><span>info@cesisa.net</span></a></li>
			      		<li><a href="tel:+529211644535"><span class="icon-phone"></span><span>01-921-210-5619</span></a></li>
			      		<li><a href="tel:+529211644535"><span class="icon-phone"></span><span>01-921-164-4535</span></a></li>
			     	
			     		
			     	</ul>
			     </div>

			</div>
	    </footer>
</section>-->
<div class="backfoo">
</div>
<div class="autor">
    <p class="copy">Construcciones Especializadas y Servicios Integrales S.A. de C.V. &copy; 2017</p>
</div>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106437387-1', 'auto');
  ga('send', 'pageview');

</script>
</html>