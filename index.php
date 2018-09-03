<?php

$errores = '';
$enviado = '';

if (isset($_POST['form-inicio'])) {
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
      $titulo = 'Formulario de contacto(inicio)';
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
	<meta name="description" content="Expertos en Obra Metal-Mecánica, civil, automatización de procesos y Desarrollo de sistemas de gas y fuego.">
	<meta name="author" content="Construcciones Especializadas y Servicios Integrales S.A. de C.V."/>
	<meta http-equiv="cache-control" content="no-cache"/>	
	<meta name="robots" content="noodp">
	<meta property="og:locale" content="es_ES"/>
	<meta proporty="og:type" content="website" />
	<meta property="og:title" content="Construcciones Especializadas y Servicios Integrales S.A. de C.V." />
	<meta property="og:description" content="Expertos en Obra Metal-Mecánica, civil, automatización de procesos y Desarrollo de sistemas de gas y fuego." />
	<meta property="og:url" content="https://www.cesisa.net/" />
	<meta property="og:site_name" content="Cesisa (Construcciones Especializadas y Servicios Integrales S.A. de C.V.">
	<link rel="canonical" href="https://www.cesisa.net/index.html">
	<link rel="stylesheet" href="css/sitio.css">
	<link rel="stylesheet" href="css/fonts/style.css">
	<link rel="stylesheet" href="css/nivo-slider.css">
	<link rel="stylesheet" href="css/mi-slider.css">
	<link rel="shortcut icon" href="img/cesisa.png">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet"> 
	<script src="js/jquery-latest.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
		$(window).on('load' , function(){
			$('#slider').nivoSlider();
		});
	</script>
	<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
	<title>Cesisa | Construcciones Especializadas y Servicios Integrales S.A. de C.V.</title>
	<meta name="google-site-verification" content="Cadena_que_buscamos">
</head>
<body>
<div class="background">

<!--Menu-fondo-->
<div class="encabezado">
        	<!--Encabezado-->
        <header>
		<div class="header">
			<div class="marca">
				<div class="img">
					<a href="index.php"><img src="img/cesisalogo4.png" alt="logo"></a>
				</div>
				<div class="name"><h3>Construcciones especializadas y servicios integrales s.a. de c.v.<h3></div>
			</div>
			<div class="menu_bar">
				<a href="#" class="bt-menu"><span class="fa fa-bars"></span><div class="imgbt"><img src="img/cesisalogo.png" alt=""></div></a>
			</div>
			<nav>
				<ul>
					<li class="hover"><a href="index.php" class="home"><!--<span class="fa fa-home"></span>-->Inicio</a></li>
					<li class="submenu hover">
						<a href="#" class="home"><!--<span class="fa fa-window-restore"></span>-->Servicios<span class="caret fa fa-sort-desc"></span></a>
						<ul class="children">
							<!--Obra metal mecanica-->
							<li class="next hover"><a class="font-size" href="Servicios/Obra-Metal-Mecanica.php"><span class="icon-cog"></span>Obra Metal Mecánica</a>
							<ul class="two-children">
								<li><a href="Servicios/Obra-Metal-Mecanica.php#Fabricación de tanques y recipientes">Fabricación de tanques y recipientes</a></li>
								<li><a href="Servicios/Obra-Metal-Mecanica.php#Fabricación de estructuras metálicas">Fabricación de Estructuras metálicas</a></li>
								<li><a href="Servicios/Obra-Metal-Mecanica.php#Rehabilitación de tuberías de diversas especificaciones">Rehabilitación de tuberías</a></li>
								<li><a href="Servicios/Obra-Metal-Mecanica.php#Fabricación de haz de tubos para intercambiadores de calor">Fabricación de haz de tubos para intercambiadores de calor</a></li>
							</ul></li>
							<!--Obra civil y Edificación-->
							<li class="next hover"><a class="font-size" href="Servicios/Obra-Civil.php"><span class="icon-users"> </span>Obra Civil y Edificación</a>
								<ul class="two-children">
									<li><a href="Servicios/Obra-Civil.php#Mantenimiento a techumbres">Mantenimiento a techumbres</a></li>
									<li><a href="Servicios/Obra-Civil.php#Construcción de estructuras de concreto">Construcción de estructuras de concreto</a></li>
								</ul></li>
							<!--Automatización y control de procesos-->
							<li class="next hover"><a class="font-size" href="Servicios/Automatizacion.php"><span class="icon-steam2"></span>Automatización y Control de Procesos</a>
								<ul class="two-children">
									<li><a href="Servicios/Automatizacion.php#Diseño, implementación y consultoría">Diseño, implementación y consultoría</a></li>
									<li><a href="Servicios/Automatizacion.php#Redes contra-incendio">Redes contra incendio</a></li>
								</ul></li>
							<!--Desarrollo de proyectos de ingeniería-->
							<li class="next hover"><a class="font-size" href="Servicios/Ingenieria.php"><span class="icon-briefcase"></span>Desarollo de Proyectos de Ingeniería</a></li>
							
							
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
    <!--direccion y telefono-->
<!--Contenido-->
<div class="first">
	<!--banner-servicios-->
	<div class="banner-servicios">
		<div class="mas-detalles">
			<h2>Conoce nuestros diferentes servicios</h2>
			<a href="#servicios">Más detalles</a>
		</div>
		<img src="img/cesisapage.jpg" alt="servicios-cesisa">
    </div>
	<div class="slider-somos">
		<div class="slider-ser">
			<section class="main">
			     <div class="slider-wrapper theme-mi-slider">
				   <div id="slider" class="nivoSlider">
				   	<img src="img/metal.jpg" alt="Obra Metal-Mecanica" title="#htmlcaption1" />
				   	<img src="img/civil5.jpg" alt="Obra Civil y Edificación." title="#htmlcaption2" />
				   	<img src="img/control.jpg" alt="Diseño, Implementación y Consultoría de Sistemas de Control y de Procesos." title="#htmlcaption3" />
				   	<img src="img/ingenieria.jpg" alt="Desarrollo de Proyectos de Ingeniería" title="#htmlcaption4" />	
				   </div>
				   <div id="htmlcaption1" class="nivo-html-caption">
				     
				   	  <h2>Obra Metal Mecánica</h2>
				   	  
				   	  
				   </div>
				   <div id="htmlcaption2" class="nivo-html-caption">
				      
				   	  <h2>Obra Civil y Edificación.</h2>
				   </div>
				   <div id="htmlcaption3" class="nivo-html-caption">
				      
				   	  <h2>Automatización y Control de Procesos.</h2>
				   </div>
				   <div id="htmlcaption4" class="nivo-html-caption">
				      
				      <h2>Desarrollo de Proyectos de Ingeniería</h2>
			
				   </div>
				 </div>
			</section>
		</div>
		<div class="team1">
		        	<div class="conocenos1">
		        		
		        			<h2>Quienes somos</h2>
		        		
		        	</div>
		        				<div class="over2 ">
		        				<div class="text ">
		        				<p>Somos una Empresa 100% Mexicana, Fundada en el año 2008, Ubicada en la Ciudad de Coatzacoalcos, Ver. México. Dedicada en la mejora continua en la prestación de servicios y venta de Valvulas de Control Marca Inbal para la industria de la transformación.
		        				<br><br>Ofreciendo los servicios de:<br><br> Proyectos, Suministros e Instalación, Implementación y/o Actualización de la Automatización de las redes contra incendio, Protección con dispositivos de seguridad, Instalación de sistemas instrumentados de seguridad para protección de bombas y líneas de proceso entre otras, Apegado a las normas nacionales e internacionales vigentes.</p></div></div>
		        </div>
	</div>
	<div class="vision-new">
		    <section class="nosotros nos3">
			
			<div class="conocenos1">
			<h2>Visión</h2>
			</div>
			<div class="overlay over3">
			<div class="text">
			<p>Conoce nuestra visión</p><br><br>
			<p>Hacer mas próspera y Productiva la Inversión realizada de nuestros clientes  ofreciéndoles la más Moderna y actualizada Tecnología del Mercado por el mismo Capital de Inversión.</p></div></div>
		</section>
		<div class="imgvision">
			<div class="imguno">
				<img src="img/servicios/control.jpg" alt="">
			</div>
			<div class="imgdos">
				<img src="img/alarma.jpg" alt="">
			</div>
		</div>
	</div>
	<div class="mision-new">
		<div class="imgmision">
			<img src="img/slider-3.jpg" alt="">
		</div>
		<section class="nosotros nos1">
			
			<div class="conocenos1">
				<h2 class="mision">Misión</h2>
			</div>
			<div class="overlay over1">
	
	        <div class="text text1">
	        	<p>Conoce nuestra misión</p><br><br>
	            <p>REALIZAR TRABAJOS DE ALTA CALIDAD EN BENEFICIO DE LA SEGURIDAD DE NUESTROS CLIENTES EN SUS INSTALACIONES,  POBLACIÓN Y MEDIO AMBIENTE.</p></div>
			</div>
		</section>
	</div>
<!--Informacion de la empresa-->
   <!--<div class="informacion"> -->          
       <!--<div class="box">-->
	    <!--<section class="nosotros nos1">
			
			<div class="conocenos1">
				<h2>Misión</h2>
			</div>
			<div class="overlay over1">
	
	        <div class="text text1">
	        	<p>Conoce nuestra misión</p><br><br>
	            <p>REALIZAR TRABAJOS DE ALTA CALIDAD EN BENEFICIO DE LA SEGURIDAD DE NUESTROS CLIENTES EN SUS INSTALACIONES,  POBLACIÓN Y MEDIO AMBIENTE.</p></div>
			</div>
		</section>-->		    	     				
	    <!--<section class="nosotros nos2">
	    	<div class="cesisa">
	    		<h2>Construcciones Especializadas y Servicios Integrales S.A. de C.V.</h2>
	    	</div>
	    	<div class="team">
	    		<img src="img/Quemador-elevado.JPG" alt="Quemador-elevado">
	    	</div>
	        <div class="team1">
	        	<div class="conocenos1">
	        		
	        			<h2>Quienes somos</h2>
	        		
	        	</div>
	        				<div class="over2 ">
	        				<div class="text ">
	        				<p>Somos una Empresa 100% Mexicana, Fundada en el año 2008, Ubicada en la Ciudad de Coatzacoalcos, Ver. México. Dedicada en la mejora continua en la prestación de servicios y venta de Valvulas de Control Marca Inbal para la industria de la transformación.
	        				<br><br>Ofreciendo los servicios de:<br><br> Proyectos, Suministros e Instalación, Implementación y/o Actualización de la Automatización de las redes contra incendio, Protección con dispositivos de seguridad, Instalación de sistemas instrumentados de seguridad para protección de bombas y líneas de proceso entre otras, Apegado a las normas nacionales e internacionales vigentes.</p></div></div>
	        </div>-->
		<!--</section>-->
		<!--<section class="nosotros nos3">
			
			<div class="conocenos1">
			<h2>Visión</h2>
			</div>
			<div class="overlay over3">
			<div class="text">
			<p>Conoce nuestra visión</p><br><br>
			<p>Hacer mas próspera y Productiva la Inversión realizada de nuestros clientes  ofreciéndoles la más Moderna y actualizada Tecnología del Mercado por el mismo Capital de Inversión.</p></div></div>
		</section>-->
       <!--</div>-->
   <!--</div>-->


<!---------------------Servicios------------------>
 <div id="servicios" class="service">
 	<div class="service1">
 	<h2 class="alone">S</h2>
 	<div class="sig">
 		<h2>ervicios</h2>
 	</div>
 	<div class="EncuestaServ">
 		<div class="enccal">
 			<h5>¡Si has sido nuestro cliente y aun no respondes nuestra encuesta de satisfacción!</h5>
 			
 			<span class="icon-sad"></span>
 			<span class="icon-smile"></span>
 		</div>
 		<div class="dedo">
 			<span class="icon-point-down"></span>
 			<a href="cesisa-encuesta.php" target="_blank" class="button-enc">¡Ház click aqui!</a>
 		</div>
 	</div>
 </div></div>
<div class="servicios">
<div class="blanco">
	<div class="border">
		   <div class="cont">
						<div class="enlace" id="enlace">
							<a href="Servicios/Obra-Metal-Mecanica.php" itemprop="url">Obra Metal-Mecánica.</a>
						</div>
		                </div>
			<div class="caja"><!-------------------->
		            <div class="picture">
		            <a href="Servicios/Obra-Metal-Mecanica.php">
		            <img src="img/servicios/metal-mecanica2.jpg" alt="Obra Metal-Mecanica."></a>
		            </div>
					<div class="fabricacion">
		            <a href="Servicios/Obra-Metal-Mecanica.php"><img src="img/servicios/metal-mecanica.jpg" alt="Obra Metal-Mecanica."></a>
					</div>
				  
			</div>
	</div>
	
	<div class="border">
		<div class="cont">
		               <div class="enlace">
		               	<a href="Servicios/Obra-Civil.php" itemprop="url">Obra Civil y Edificación.</a>
		               </div>
		               </div>
		<div class="caja"><!-------------------->
		        <div class="picture">
		        <a href="Servicios/Obra-Civil.php"><img src="img/servicios/civil-2.jpg" alt="Obra Civil y Edificación."></a>
		        </div>
		            <div class="fabricacion">
		            <a href="Servicios/Obra-Civil.php"><img src="img/servicios/civil.jpg" alt="Obra Civil y Edificacón."></a>
		            </div>
		</div>
	</div>
	
	<div class="border">
	    <div class="cont">
			          <div class="enlace">
			          	<a href="Servicios/Automatizacion.php" itemprop="url">Automatización y Control de Procesos.</a>
			          </div>
			                </div>
			<div class="caja"><!-------------------->
			           <div class="picture">
			           <a href="Servicios/Automatizacion.php"><img src="img/servicios/control-2.jpg" alt="Automatización y Control de Procesos."></a>
			           </div>
			               <div class="fabricacion">
			                    <a href="Servicios/Automatizacion.php"><img src="img/servicios/control.jpg" alt="Automatización y Control de Procesos."></a>
			               </div>  

			</div>
		</div>
	
 <div class="border">
           <div class="cont">
	 			<div class="enlace">		
	 				<a href="Servicios/Ingenieria.php">Desarrollo de Proyectos de Ingeniería</a>
	 			</div>
	 				    </div>
	 	   <div class="caja"><!-------------------->
	 	                <div class="picture">
	 	                <a href="Servicios/Ingenieria.php"><img src="img/servicios/ingenieria-2.jpg" alt="Desarrollo de Proyectos de Ingeniería."></a>
	 					</div>	
	 				    <div class="fabricacion">
	 				    	<a href="Servicios/Ingenieria.php"><img src="img/servicios/ingenieria.jpg" alt="Desarrollo de Proyectos de Ingeniería."></a>
	 					</div>	
	 				    </div>
	 </div>
	 </div>
</div>
   </div>

			   
</div>

<!--Relacion de empresas-->
<div class="contenedor">
     <div class="fondo">
     	<section class="clientes">
     		    <h3 >Ellos Confian en Nosotros</h3>
     		        <div class="clientes-slider">
     		            
     		            
     		        	
     		        	<ul>
     		        	    <li><img  src="img/etilenob.png" alt=""></li>
     		        	
     		        
     		        		<li><img  src="img/vinilob.png" alt=""></li>
     		        	
     		        	
     		        		<li><img  src="img/transformacionb.png" alt=""></li>
     		        	
     		        
     		        	    <li><img  src="img/cyplusb.png" alt=""></li>
     	
     		        	    <li><img  src="img/kintelb.png" alt=""></li>
     		        
     		        	
     		        		<li><img  src="img/logisticab.png" alt=""></li>
     	
     		        		<li><img  src="img/comesab.png" alt=""></li>
     	
     		        		<li><img  src="img/sulzerb.png" alt=""></li>
     	
     		        		<li><img  src="img/tapia.png" alt=""></li>
     	
     	
     		        	</ul> 
     		         </div>
     	</section>
     </div>
</div>
<!--Pie de pagina-->
			<div class="map">
			    	<div id="map">
			      	</div>
			    		    	
			    		   <script>
			    		      function initMap() {
			         	     var uluru = {lat: 18.147958, lng: -94.482112};
	   				        var map = new google.maps.Map(document.getElementById('map'), {
	    			          zoom: 18,
			    		    	    center: uluru
		    		     	        });
			    		         var marker = new google.maps.Marker({
			    	    	       position: uluru,
			    		          map: map
			    		    	   });
			    		    	   }
			    		    </script>
			    		    <script async defer
			    		    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAptWCIxZ1JYrImuYzwI7Zb2Yrc4SVoST0&callback=initMap">
			    		   </script>	
			    		   </div>	
<section class="footer">

			<footer>
			<div class="datos">
<div class="miembros">
	<div class="activo">
		<span class="icon-info"></span><p>Actualmente miembros activos de la Cámara Nacional de la Industria de la Transformación.</p>
	</div>
	<div class="flogo">
		<img src="img/canacintra.png" alt="">
	</div>
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
			     <div class="columna">
			     	<h2><span class="icon-hipchat"></span>Envíanos un correo</h2>
			     	<form action="" class="form-inicio" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			     		<?php if(!empty($errores)):?>
			     			<div class="alert error">
			     				<?php echo $errores;?>
			     			</div>
			     		<?php elseif(!empty($enviado)):?>
			     			<div class="alert succes">
			     				<p>Mensaje enviado</p>
			     			</div>
			     		<?php endif?>
			     		<div class="col1">
			     			<input type="text" placeholder="Nombre:" name="nombre">
			     			<input type="email" placeholder="Correo:" name="correo">
			     		</div>
			     		<div class="col2">
			     			<textarea name="mensaje" id="mensaje" placeholder="Mensaje:" ></textarea>
			     			<input type="submit" value="Enviar" name="form-inicio" class="button">
			     		</div>
			     	</form>
			     </div>

			     
			</div>

	    </footer>
</section>
<div class="backfoo">
</div>
<div class="autor">
    <p class="copy">Construcciones Especializadas y Servicios Integrales S.A. de C.V. &copy; 2018</p>
</div>

<script src=""></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106437387-1', 'auto');
  ga('send', 'pageview');

</script>
        
        
</body>
</html>
