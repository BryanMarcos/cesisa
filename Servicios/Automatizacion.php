<?php

$errores = '';
$enviado = '';

if (isset($_POST['form-auto'])) {
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
      $titulo = 'Formulario de contacto(Automatización)';
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
	<meta name="description" content="Automatización y Control de Procesos.">
	<meta property="og:description" content="Diseño, Implementación y Consultoría de Sistemas de Control.Automatización de Redes Contra Incendio.Armado de Gabinetes de Control,Instalaciones de Campo: Eléctrico e Instrumentos.">
	<meta property="og:title" content="Servicios | Automatización.">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.cesisa.net/Servicios/Automatizacion.html">
	<meta name="robots" content="noodp">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/sitio.css">
	<link rel="stylesheet" href="../css/fonts/style.css">
	<link rel="stylesheet" href="css/Obra-Metal-Mecanica.css">
	<link rel="stylesheet" href="css/Obra-Civil.css">
	<link rel="stylesheet" href="css/Automatizacion.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<script src="../js/jquery-latest.js"></script>
	<script src="../js/menu.js"></script>
	<title>Servicios | Automatización.</title>
</head>
<body>
	<div class="encabezado">
        	<!--Encabezado-->
        <header>
		<div class="header">
			<!--Logo cesisa-->
			<div class="marca" id="logo-ces">
				<div class="img" id="divimg">
					<div class="skewx" id="divskew"></div>
					<a class="logo-ces" href="../index.php"><img src="img/cesisalogo4.png" alt="logo"></a>
				</div>
				<div class="name"><h3>Construcciones especializadas y servicios integrales s.a. de c.v.<h3></div>
			</div>
			<div class="menu_bar">
				<a href="#" class="bt-menu"><span class="fa fa-bars"></span><div class="imgbt"><img src="../img/cesisalogo.png" alt=""></div></a>
			</div>
			<!--Menu-->
			<nav id="main-c">
				<ul>
					
					<li class="submenu hover inicio-main"><a href="#" class="home start">Inicio<span class="caret fa icon-chevron-thin-up"></span></a>
						<ul class="children">
							<li class="start-main inicio-submain"><a href="../index.php" class="translate-inicio"><span class="fa fa-home"></span>Pagina principal<span class="icon-chevrons-left"></span></a></li>
							<li class="start-main"><a href="../index.php#quienes-somos" class="translate-inicio">Quienes somos<span class="icon-chevrons-left"></span></a>     </li>
							<li class="start-main"><a href="../index.php#misión" class="translate-inicio">Nuestra Misión<span class="icon-chevrons-left"></span></a></li>
							<li class="start-main"><a href="../index.php#visión" class="translate-inicio">Nuestra Visión<span class="icon-chevrons-left"></span></a></li>
							<li class="start-main"><a href="../index.php#trabajamos-con-ellos" class="translate-inicio">Nuestros clientes<span class="icon-chevrons-left"></span></a></li>
							<li class="start-main"><a href="../index.php#donde-nos-ubicamos" class="translate-inicio">Donde nos ubicamos<span class="icon-chevrons-left"></span></a></li>
							<li class="start-main"><a href="../index.php#contactanos" class="translate-inicio">Contáctanos<span class="icon-chevrons-left"></span></a></li>

							
							
						</ul>
					</li>
					
					<li class="submenu hover main-serv">
						<a href="#" class="home serv"><!--<span class="fa fa-window-restore"></span>-->Servicios<span class="caret fa icon-chevron-thin-up"></span></a>
						<ul class="children">
							<!--Obra metal mecanica-->
							<li class="next hover">
							<a class="font-size" href="Obra-Civil.php"><span class="icon-users"> </span>Obra Civil y Edificación</a>
								<ul class="two-children">
									<li><a href="Obra-Civil.php#Mantenimiento a techumbres">Mantenimiento a techumbres</a></li>
									<li class="margin-bottom"><a href="Obra-Civil.php#Construcción de estructuras de concreto">Construcción de estructuras de concreto</a></li>
								</ul>
							<a class="font-size" href="Obra-Metal-Mecanica.php"><span class="icon-cog"></span>Obra Metal Mecánica</a>
							<ul class="two-children">
								<li><a href="Obra-Metal-Mecanica.php#Fabricación de tanques y recipientes">Fabricación de tanques y recipientes</a></li>
								<li><a href="Obra-Metal-Mecanica.php#Fabricación de estructuras metálicas">Fabricación de Estructuras metálicas</a></li>
								<li><a href="Obra-Metal-Mecanica.php#Rehabilitación de tuberías de diversas especificaciones">Rehabilitación de tuberías</a></li>
								<li><a href="Obra-Metal-Mecanica.php#Fabricación de haz de tubos para intercambiadores de calor">Fabricación de haz de tubos para intercambiadores de calor</a></li>
							</ul>
						    </li>
							<!--Obra civil y Edificación-->
							<!--<li class="next hover"></li>-->
							<!--Automatización y control de procesos-->
							<li class="next hover"><a class="font-size" href="Automatizacion.php"><span class="icon-steam2"></span>Automatización y Control de Procesos</a>
								<ul class="two-children">
									<li><a href="#Diseño, implementación y consultoría">Diseño, implementación y consultoría</a></li>
									<li class="margin-bottom"><a href="#Redes contra-incendio">Redes contra incendio</a></li>
								</ul>
								<a class="font-size" href="Ingenieria.php"><span class="icon-briefcase"></span>Desarollo de Proyectos de Ingeniería</a>
							</li>
							<!--Desarrollo de proyectos de ingeniería-->
							<!--<li class="next hover"></li>-->
							
							
						</ul>
					</li>
					
					<li class="hover"><a href="../valvulas.php" class="home"><!--<span class="fa fa-sitemap"></span>-->Válvulas INBAL</a></li>
					<li class="hover"><a href="../cesisa-encuesta.php" class="home">Encuesta</a></li>
								
				</ul>
			</nav>
			<div class="sociales" id="social-main">
				<p id="text-social">Sigue todas nuestras redes</p>
				<a id="social-face" href="https://www.facebook.com/CesisaCoatzacoalcos/" target="_blank"><span class="icon-facebook-with-circle"></span></a>
				<a id="social-g" href="https://plus.google.com/u/0/b/108573607257751533162/108573607257751533162" target="_blank"><span class="icon-google-with-circle"></span></a>
			</div>
		</div>
	</header></div>
		
		
<div class="banner-servicioA">
	<div class="title-fab">
		<h2>Automatización y Control de Procesos.</h2>
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
	    		        <input type="submit" value="Enviar" name="form-auto" class="button">
	    	</div>
	    </form>
	</div>

		<h4 class="galeria">Contamos con la infraestructura necesaria para el diseño, implementación y puesta en marcha de proyectos de automatización en diferentes especialidades.</h4>
	</div>
</div>
<div class="contenedor">
	<div class="main" id="Diseño, implementación y consultoría">
	 <div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/PLC.jpg">
		      <img src="img/Automatización/Instrumentos/PLC.jpg" alt="" width="300" height="200">
		    </a>
		   
		  </div>
		</div>
     <div class="aspersion">
     <h5>Diseño, Implementación y Consultoría.<span class="icon-codeschool"></span></h5>
         	<ul>
    		<li><span class="icon-display"></span>Interfase de Operación-HMI.</li>
    		<li><span class="icon-wrench"></span>Instalacion de Campo: Eléctrico e Instrumentos.</li>
    		<li><span class="icon-servers"></span>Armado de Gabinetes de Control.</li>
    		<li><span class="icon-folder-open"></span>Entrenamiento, Servicio y Documentación.</li>
     </ul>

    </div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/Fuente.jpg">
		      <img src="img/Automatización/Instrumentos/Fuente.jpg" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/P1030074.JPG">
		      <img src="img/Automatización/Instrumentos/P1030074.JPG" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
	    <div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/alarma.jpg">
		      <img src="img/Automatización/Instrumentos/alarma.jpg" alt="" width="300" height="200">
		    </a>
		   
		  </div>
		</div>	
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/INSTRUMENTOS.jpg">
		      <img src="img/Automatización/Instrumentos/INSTRUMENTOS.jpg" alt="" width="300" height="200">
		    </a>
		   
		  </div>
		</div>	
		<div class="aspersion">
    	<h5><span class="icon-codeschool"></span></h5>
        <div class="POB">
	 	<ul>
	 			<li><span class="icon-checkmark"></span>Programación Estructurada.</li>
	 			<li><span class="icon-checkmark"></span>Diseño Orientado a Objetos.</li>
	 			<li><span class="icon-checkmark"></span>Condiciones de Procesos (Eventos).</li>
	 			<li><span class="icon-checkmark"></span>Acciones Secuenciales (Batch).</li>
	 		</ul>
	    </div>
	    <div class="POB">
		<ul>
		    <li><span class="icon-checkmark"></span>Interlocks de Equipos y de Operación.</li>
			<li><span class="icon-checkmark"></span>Alarmas Inteligentes.</li>
			<li><span class="icon-checkmark"></span>Control por Lógica de Estados.</li>
			<li><span class="icon-checkmark"></span>Control Analogico - Registro en Línea.</li>
		</ul>
	    </div>
    </div>	
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/SISTEMA.jpg">
		      <img src="img/Automatización/Instrumentos/SISTEMA.jpg" alt="" width="600" height="400">
		    </a>
		   
		  </div>
		</div>
	    <div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/IMG_4776.JPG">
		      <img src="img/Automatización/Instrumentos/IMG_4776.JPG" alt="" width="300" height="200">
		    </a>
		   
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/P1000947.JPG">
		      <img src="img/Automatización/Instrumentos/P1000947.JPG" alt="" width="300" height="200">
		    </a>
		   
		  </div>
		</div>	

	   <div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/Instrumentos/GIRON .jpg">
		      <img src="img/Automatización/Instrumentos/GIRON .jpg" alt="" width="300" height="200">
		    </a>
		   
		  </div>
		</div>	

         
		<div class="clearfix"></div>
	</div>
		<div class="main" id="Redes contra-incendio">
        <h4>Automatización de Redes Contra Incendio.</h4>
    <div class="aspersion">
    <h5>Sistema de Aspersión para Mitigación de Fuego.<span class="icon-codeigniter"></span></h5>
	<ul>
		<li><span class="icon-loop2"></span>Dispone de un Sistema de Supervisión Automático.</li>
		<li><span class="icon-feed"></span>Cuenta con dispositivos de alarma remotos,visuales y/o sonoros.</li>
		<li><span class="icon-podcast"></span>Tiene un sistema de localización de la señal de alarma.</li>
		<li><span class="icon-power"></span>Opera con suministro de energía eléctrica de corriente alterna y cuenta con un respaldo de baterías.</li>
	</ul>
    </div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/red contra incendio/montaje.jpg">
		      <img src="img/Automatización/red contra incendio/montaje.jpg" alt="" width="600" height="400">
		    </a>
		   
		  </div>
		</div>	
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/red contra incendio/P1040098.JPG">
		      <img src="img/Automatización/red contra incendio/P1040098.JPG" alt="" width="600" height="400">
		    </a>|
		   
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/red contra incendio/sistema.jpg">
		      <img src="img/Automatización/red contra incendio/sistema.jpg" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/red contra incendio/IMG_6609.JPG">
		      <img src="img/Automatización/red contra incendio/IMG_6609.JPG" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
		<h5></h5>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/red contra incendio/P1050023.JPG">
		      <img src="img/Automatización/red contra incendio/P1050023.JPG" alt="Anillos de Enfriamiento." width="600" height="400">
		    </a>
		   
		  </div>
		</div>	
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/red contra incendio/IMG_20141111_142506.jpg">
		      <img src="img/Automatización/red contra incendio/IMG_20141111_142506.jpg" alt="" width="600" height="400">
		    </a>
		   
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/red contra incendio/20141111_150547.jpg">
		      <img src="img/Automatización/red contra incendio/20141111_150547.jpg" alt="" width="600" height="400">
		    </a>
		    
		  </div>
		</div>
		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="img/Automatización/red contra incendio/P1050059.JPG">
		      <img src="img/Automatización/red contra incendio/P1050059.JPG" alt="" width="600" height="400">
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
<!--<div class="backfoo">
</div>-->
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