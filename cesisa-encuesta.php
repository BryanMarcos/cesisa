<?php
    $enviado = '';
    $reenviar = '';
    $errores0 = '';
    $errores1 = '';
    $errores2 = '';
    $errores3 = '';
    $errores4 = '';
    $errores5 = '';
    $errores6 = '';
    $errores7 = '';
    $errores8 = '';
    $errorescorreo = '';
    $erroresnombrecliente = '';
    $erroresempresacliente = '';
    $errorescargocliente = '';
    $erroresorden = '';



    //Datos enviados correctamente 
    if (isset($_POST['Encuesta']) 
    	&& !empty($_POST['numero'])
        && ($_POST['opcion'] != 'null')
        && ($_POST['opcion1'] != 'null')
        && ($_POST['opcion2'] != 'null')
        && ($_POST['opcion3'] != 'null')
        && !empty($_POST['respuesta0'])
        && !empty($_POST['respuesta1'])
        && ($_POST['opcion4'] != 'null')
        && ($_POST['opcion5'] != 'null')
        && ($_POST['opcion6'] != 'null')
        && !empty($_POST['nombrecliente'])
        && !empty($_POST['correocliente'])
        && !empty($_POST['empresacliente'])
        && !empty($_POST['cargocliente'])
        && !empty($_POST['orden']) 
        ){
        
        $nombrecliente = $_POST['nombrecliente'];
        $correocliente = $_POST['correocliente'];
        $empresacliente = $_POST['empresacliente'];
        $cargocliente = $_POST['cargocliente'];
        $orden = $_POST['orden'];
    	$numero = $_POST['numero'];
        $seleccion0 = $_POST['opcion'];
        $seleccion1 = $_POST['opcion1'];
	    $seleccion2 = $_POST['opcion2'];
	    $seleccion3 = $_POST['opcion3'];
	    $respuesta0 = $_POST['respuesta0'];
	    $respuesta1 = $_POST['respuesta1'];
	    $seleccion4 = $_POST['opcion4'];
	    $seleccion5 = $_POST['opcion5'];
	    $seleccion6 = $_POST['opcion6'];
    	
        ///////////validacion de nombre del cliente 
        if(!empty($nombrecliente)){
            $nombrecliente = trim($nombrecliente);
            $nombrecliente = filter_var($nombrecliente, FILTER_SANITIZE_STRING);
            $nombrecliente = htmlspecialchars($nombrecliente);
        }

        //////////validacion de correo
        if(!empty($correocliente)){
            $correocliente = filter_var($correocliente, FILTER_SANITIZE_EMAIL);
        }elseif(!filter_var($correocliente, FILTER_VALIDATE_EMAIL)){
            $errorescorreo .= 'Por favor ingresa un correo valido';
        }
        /////////validacion de empresa 
        if(!empty($empresacliente))
        {
            $empresacliente = trim($empresacliente);
            $empresacliente = filter_var($empresacliente, FILTER_SANITIZE_STRING);
            $empresacliente = htmlspecialchars($empresacliente);
        }
        ////////validacion del puesto de quien responde la encuesta 
        if (!empty($cargocliente)) {
            $cargocliente = trim($cargocliente);
            $cargocliente = filter_var($cargocliente, FILTER_SANITIZE_STRING);
            $cargocliente = htmlspecialchars($cargocliente);
        }
        ////////Validacion del numero de orden de la obra
        if (!empty($orden)) {
            $orden = trim($orden);
            $orden = filter_var($orden, FILTER_SANITIZE_STRING);
            $orden = htmlspecialchars($orden);
        }
        //tratamiento de texto en respuesta numero cinco
        if(!empty($respuesta0)){
        	$respuesta0 = htmlspecialchars($respuesta0);
        	$respuesta0 = trim($respuesta0);
        	$respuesta0 = stripcslashes($respuesta0);
        }
        //tratamiento de texto en respuesta numero seis
        if(!empty($respuesta1)){
        	$respuesta1 = htmlspecialchars($respuesta1);
        	$respuesta1 = trim($respuesta1);
        	$respuesta1 = stripslashes($respuesta1);

        }

        if(isset($_POST['Encuesta'])
           ){

        $cabecera = "MIME-Version: 1.0" . "\r\n";
        $cabecera .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $para = 'info@cesisa.net';
        $titulo = 'Encuesta de Satisfacción';
        
        //Creación de formato de correo
        $mensaje = 
        "<html>
        <head><title></title></head>
        <body>
        <h1>Encuesta de Calidad</h1>
        
        <p><b>Nombre:</b> $nombrecliente</p>
        
        <p><b>Correo:</b> $correocliente</p>
        
        <p><b>Empresa:</b> $empresacliente</p>
        
        <p><b>Cargo:</b> $cargocliente</p>

        <p><b>N°. Orden de compra</b> $orden</p>
        <br><br>
        <p><b>1. ¿Por cuánto tiempo ha estado usando nuestro producto o servicio?</b></p>
        <p>$numero $seleccion0</p>
        <p><b>2. ¿Cuan satisfecho se encuentra con el producto o servicio?</b></p>
        <p>$seleccion1</p>
        <p><b>3. ¿Qué lo impresiono más acerca de nuestro producto o servicio?</b></p>
        <p>$seleccion2</p>
        <p><b>4. Donde el 1 es la calificación más baja y 5 la más alta
        Califique nuestro servicio o producto.</b></p>
        <p>$seleccion3</p>
        <p><b>5. ¿Qué es lo que le gusta de nuestro producto o servicio?</b></p>
        <p>$respuesta0</p>
        <p><b>6. ¿El personal da la imagen de estar totalmente cualificado para las tareas que tiene que realizar?
         Escribe el por qué de tu respuesta.</b></p>
        <p>$respuesta1</p>
        <p><b>7. Comparado con productos similares ofrecidos por otras organizaciones
        ¿como considera nuestro producto o servicio?</b></p>
        <p>$seleccion4</p>
        <p><b>8. ¿Usaría nuestro producto o servicio en el futuro?</b></p>
        <p>$seleccion5</p>
        <p><b>¿Recomendaría nuestro producto o servicio a otra gente?</b></p>
        <p>$seleccion6</p>
        </body>
        </html>";


       //Enviarlo

         mail($para,$titulo,$mensaje,$cabecera);
         $enviado .= 'Datos enviados correctamente! <br><br><br>Gracias por responder nuestra encuesta y ser nuestro cliente.';

        }

       
      

    }
    //mensaje de formulario incompleto
    if(
    	(isset($_POST['Encuesta']) && empty($_POST['numero']))
    ||  (isset($_POST['Encuesta']) && ($_POST['opcion'] == 'null'))
    ||  (isset($_POST['Encuesta']) && ($_POST['opcion1'] == 'null'))
    ||  (isset($_POST['Encuesta']) && ($_POST['opcion2'] == 'null'))
    ||  (isset($_POST['Encuesta']) && empty($_POST['opcion3']))
    ||  (isset($_POST['Encuesta']) && empty($_POST['respuesta0']))
    ||  (isset($_POST['Encuesta']) && empty($_POST['respuesta1']))
    ||  (isset($_POST['Encuesta']) && ($_POST['opcion4'] == 'null'))
    ||  (isset($_POST['Encuesta']) && ($_POST['opcion5'] == 'null'))
    ||  (isset($_POST['Encuesta']) && ($_POST['opcion6'] == 'null'))
    ||  (isset($_POST['Encuesta']) && empty($_POST['nombrecliente']))
    ||  (isset($_POST['Encuesta']) && empty($_POST['correocliente']))
    ||  (isset($_POST['Encuesta']) && empty($_POST['empresacliente']))
    ||  (isset($_POST['Encuesta']) && empty($_POST['cargocliente']))
    ||  (isset($_POST['Encuesta']) && empty($_POST['orden'])) 

       ){

       	$reenviar .= 'Se ha detectado que no dio respuesta a una o varias preguntas, intente de nuevo por favor.';
    }
    //mensaje de error de datos cliente 
    if(empty($_POST['nombrecliente'])){
        $erroresnombrecliente .= '<br> * Por favor ingrese su nombre';
    }
    if (empty($_POST['correocliente'])){
        $errorescorreo .= '<br> * Por favor ingrese un correo valido';
        
    }
    if(empty($_POST['empresacliente'])){
        $erroresempresacliente .= '<br> * Por favor ingrese el nombre de la empresa';
    }
    if (empty($_POST['cargocliente'])) {
        $errorescargocliente .= '<br> * Por favor ingrese su cargo dentro de la empresa';
    }
    if (empty($_POST['orden'])) {
        $erroresorden .= '<br> * Por favor ingrese el numero de orden';
    }
    //mensaje de error en seleccion de numero primera pregunta
    if(
    	    (isset($_POST['Encuesta']) && empty($_POST['numero']) && ($_POST['opcion'] == 'null'))
    	 || (isset($_POST['Encuesta']) && ($_POST['opcion']) == 'null') && !empty($_POST['numero'])
         || (isset($_POST['Encuesta']) && empty($_POST['numero']) && ($_POST['opcion'] != 'null'))
            ){

    	    $errores0 .= 'Selecciona una opción';
    }
    //mensaje de error de seleccion primera pregunta
    if(
    	isset($_POST['Encuesta']) && ($_POST['opcion1'] == 'null')
      ){
    	$errores1 .= 'Selecciona una opción';
    }
    //mensaje de error de seleccion de segunda pregunta
    if(
    	isset($_POST['Encuesta']) && ($_POST['opcion2'] == 'null'))
          {
    	$errores2 .= 'selecciona una opción';

    }
    //mensaje de error de seleccion de tercera respuesta
    if(
          isset($_POST['Encuesta']) && empty($_POST['opcion3'])
          ){
    	$errores3 .= 'Selecciona una opción';

    }
    //mensaje de error de escritura de respuesta cuarta pregunta
    if(
    	  isset($_POST['Encuesta']) && empty($_POST['respuesta0'])
          ){
    	$errores4 .= 'Selecciona una opción';
    }
    //mensaje de error de escritura de respuesta de quinta pregunta 
    if (
    	  isset($_POST['Encuesta']) && empty($_POST['respuesta1'])
           ) {
    	$errores5 .= 'Selecciona una opción';
    	
    }
    //mensaje de error de seleccion sexta pregunta
    if(
    	isset($_POST['Encuesta']) && ($_POST['opcion4'] == 'null')
       ){
       	$errores6 .= 'Selecciona una opción';
    }
    //mensaje de error de selección de septima pregunta
    if(
    	isset($_POST['Encuesta']) && ($_POST['opcion5'] == 'null')
      ){
      	$errores7 .= 'Selecciona una opción';
    }
    //mensaje de error de selección de octava pregunta
    if(
    	isset($_POST['Encuesta']) && ($_POST['opcion6'] == 'null')
       ){
       	$errores8 .= 'Selecciona una opción';
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="cache-control" content="no-cache"/>	
	<meta name="robots" content="noodp">
	<meta property="og:locale" content="es_ES"/>
	<link rel="shortcut icon" href="img/cesisa.png">
	<title>Encuesta de satisfacción al cliente</title>
	<link rel="stylesheet" type="text/css" href="css/encuesta.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/style.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
    <script src="js/jquery-latest.js"></script>
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    <script src="js/menu.js"></script>
    <script type="text/javascript">
        $(window).on('load' , function(){
            $('#slider').nivoSlider();
        });
    </script>
	
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
                    <a class="logo-ces" href="index.php"><img src="img/cesisalogo4.png" alt="logo"></a>
                </div>
                <div class="name"><h3>Construcciones especializadas y servicios integrales s.a. de c.v.<h3></div>
            </div>
            <div class="menu_bar">
                <a href="#" class="bt-menu"><span class="fa fa-bars"></span><div class="imgbt"><img src="img/cesisalogo.png" alt=""></div></a>
            </div>
            <!--Menu-->
            <nav id="main-c">
                <ul>
                    
                    <li class="submenu hover inicio-main"><a href="#" class="home start">Inicio<span class="caret fa icon-chevron-thin-up"></span></a>
                        <ul class="children">
                            <li class="start-main inicio-submain"><a href="index.php" class="translate-inicio"><span class="fa fa-home"></span>Pagina principal<span class="icon-chevrons-left"></span></a></li>
                            <li class="start-main"><a href="index.php#quienes-somos" class="translate-inicio">Quienes somos<span class="icon-chevrons-left"></span></a>     </li>
                            <li class="start-main"><a href="index.php#misión" class="translate-inicio">Nuestra Misión<span class="icon-chevrons-left"></span></a></li>
                            <li class="start-main"><a href="index.php#visión" class="translate-inicio">Nuestra Visión<span class="icon-chevrons-left"></span></a></li>
                            <li class="start-main"><a href="index.php#trabajamos-con-ellos" class="translate-inicio">Con quienes hemos trabajado<span class="icon-chevrons-left"></span></a></li>
                            <li class="start-main"><a href="index.php#donde-nos-ubicamos" class="translate-inicio">Donde nos ubicamos<span class="icon-chevrons-left"></span></a></li>
                            <li class="start-main"><a href="index.php#contactanos" class="translate-inicio">Contáctanos<span class="icon-chevrons-left"></span></a></li>

                            
                            
                        </ul>
                    </li>
                    
                    <li class="submenu hover main-serv">
                        <a href="#" class="home serv"><!--<span class="fa fa-window-restore"></span>-->Servicios<span class="caret fa icon-chevron-thin-up"></span></a>
                        <ul class="children">
                            <!--Obra metal mecanica-->
                            <li class="next hover">
                            <a class="font-size" href="Servicios/Obra-Civil.php"><span class="icon-users"> </span>Obra Civil y Edificación</a>
                                <ul class="two-children">
                                    <li><a href="Servicios/Obra-Civil.php#Mantenimiento a techumbres">Mantenimiento a techumbres</a></li>
                                    <li class="margin-bottom"><a href="Servicios/Obra-Civil.php#Construcción de estructuras de concreto">Construcción de estructuras de concreto</a></li>
                                </ul>
                            <a class="font-size" href="Servicios/Obra-Metal-Mecanica.php"><span class="icon-cog"></span>Obra Metal Mecánica</a>
                            <ul class="two-children">
                                <li><a href="Servicios/Obra-Metal-Mecanica.php#Fabricación de tanques y recipientes">Fabricación de tanques y recipientes</a></li>
                                <li><a href="Servicios/Obra-Metal-Mecanica.php#Fabricación de estructuras metálicas">Fabricación de Estructuras metálicas</a></li>
                                <li><a href="Servicios/Obra-Metal-Mecanica.php#Rehabilitación de tuberías de diversas especificaciones">Rehabilitación de tuberías</a></li>
                                <li><a href="Servicios/Obra-Metal-Mecanica.php#Fabricación de haz de tubos para intercambiadores de calor">Fabricación de haz de tubos para intercambiadores de calor</a></li>
                            </ul>
                            </li>
                            <!--Obra civil y Edificación-->
                            <!--<li class="next hover"></li>-->
                            <!--Automatización y control de procesos-->
                            <li class="next hover"><a class="font-size" href="Servicios/Automatizacion.php"><span class="icon-steam2"></span>Automatización y Control de Procesos</a>
                                <ul class="two-children">
                                    <li><a href="Servicios/Automatizacion.php#Diseño, implementación y consultoría">Diseño, implementación y consultoría</a></li>
                                    <li class="margin-bottom"><a href="Servicios/Automatizacion.php#Redes contra-incendio">Redes contra incendio</a></li>
                                </ul>
                                <a class="font-size" href="Servicios/Ingenieria.php"><span class="icon-briefcase"></span>Desarollo de Proyectos de Ingeniería</a>
                            </li>
                            <!--Desarrollo de proyectos de ingeniería-->
                            <!--<li class="next hover"></li>-->
                            
                            
                        </ul>
                    </li>
                    
                    <li class="hover"><a href="valvulas.php" class="home"><!--<span class="fa fa-sitemap"></span>-->Válvulas INBAL</a></li>
                    <li class="hover"><a href="cesisa-encuesta.php" class="home">Encuesta</a></li>
                                
                </ul>
            </nav>
            <div class="sociales" id="social-main">
                <p id="text-social">Sigue todas nuestras redes</p>
                <a id="social-face" href="https://www.facebook.com/CesisaCoatzacoalcos/"><span class="icon-facebook-with-circle"></span></a>
                <a id="social-g" href="https://plus.google.com/u/0/b/108573607257751533162/108573607257751533162" target="_blank"><span class="icon-google-with-circle"></span></a>
            </div>
        </div>
    </header></div>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
	<div class="body">

        <div class="headbox">
        <!--Mensaje de envio exitoso-->
        <?php if(!empty($enviado)):?>
            <div class="alert succes"><span class="icon-checkmark2"></span>
                    <?php
                     echo $enviado . '<br>Puede cerrar esta ventana.'; 
                    ?>
            </div>
        <?php endif; ?>
        <!--Mensaje de error-->
        <?php if(!empty($reenviar)):?>
            <div class="reenviar"><span class="icon-highly"></span><?php echo $reenviar; ?>
            <!--error nombre del cliente-->
            <?php if(!empty($erroresnombrecliente)):?>
                <p><?php echo $erroresnombrecliente; ?></p>
            <?php endif;?>
            <!--error de correo-->
            <?php if(!empty($errorescorreo)):?>
                <p><?php echo $errorescorreo; ?></p>
            <?php endif; ?>

            <!--error en el nombre de la empresa-->
            <?php if(!empty($erroresempresacliente)): ?>
                <p><?php echo $erroresempresacliente; ?></p>
            <?php endif; ?>
            <!--eror en el cargo de quien responde la encuesta-->
            <?php if(!empty($errorescargocliente)): ?>
                <p><?php echo $errorescargocliente; ?></p>
            <?php endif; ?>
            <!--error en la orden de compra-->
            <?php if(!empty($erroresorden)):?>
                <p><?php echo $erroresorden; ?></p>
            <?php endif; ?>
        </div>
        <?php endif;?>
        <div class="nameencuesta">
            <h2>Encuesta de Satisfacción al Cliente</h2>
            <div class="instrucciones">
            <h3>Como parte de nuestro trabajo para asegurar la satisfacción total de nuestros clientes, lo invitamos a tomar parte en nuestra breve Encuesta.</h3>
        </div>
        </div>
        <div class="datoscliente">
            <input type="text" placeholder="Nombre" name="nombrecliente">
            <input type="email" placeholder="Correo" name="correocliente">
            <input type="text" placeholder="Empresa" name="empresacliente">
            <input type="text" placeholder="Cargo" name="cargocliente">
            <input type="text" placeholder="N°. Orden de compra" name="orden">

        </div>
    </div>

        
        <h3>Le agradecemos por usar nuestros servicios y esperamos que responda con entera confianza.</h3>

		<div class="pregunta" id="pregunta"><h4>1. ¿Por cuánto tiempo ha estado usando nuestro producto o servicio?</h4></div>
            <!--name="numero"-->
        	<input type="number" value="selecciona" name="numero" min="1" max="1000">
        	<!--name="opcion"-->
        	<select name="opcion">
        		<option value="null">Seleccione una opci&oacute;n</option>
        		<option value="semana">Semana</option>
        		<option value="semanas">Semanas</option>
        		<option value="mes">Mes</option>
        		<option value="meses">Meses</option>
        		<option value="Año">Año</option>
        		<option value="Años">Años</option>
        	</select>
        	    <!--Mensaje de error -->
        	    <?php if(!empty($errores0)):?>
        			<div class="alert error"><span class="icon-cancel"></span></div>
        		<?php  endif; ?>
  

     
		<div class="pregunta"><h4>2. ¿Cuan satisfecho se encuentra con el producto o servicio?</h4></div>
	
			<select name="opcion1" id="respuesta2">
				<option value="null">Seleccione una opci&oacute;n</option>
				<option>Muy satisfecho</option>
				<option>Satisfecho</option>
				<option>Indiferente</option>
				<option>Insatisfecho</option>
				<option>Muy insatisfecho</option>
			</select>
			<!--Mensaje de error-->
			<?php if(!empty($errores1)):?>
				<div class="alert" error><span class="icon-cancel"></span></div>
			<?php endif;?>

		<div class="pregunta"><h4>3. ¿Qué lo impresiono más acerca de nuestro producto o servicio?</h4></div>
			<select name="opcion2" id="respuesta3">
				<option value="null">Seleccione una opci&oacute;n</option>
				<option>Calidad</option>
				<option>Precio</option>
				<option>Experiencia de compra</option>
				<option>Instalación o Primer uso</option>
				<option>Usabilidad</option>
				<option>Servicio al cliente</option>
			</select>
			<!--Mensaje de error-->
			<?php if(!empty($errores2)):?>
				<div class="alert error"><span class="icon-cancel"></span></div>
			<?php endif;?>

		<div class="pregunta"><h4>4. Donde el 1 es la calificación más baja y 5 la más alta<br>Califique nuestro servicio o producto.</h4></div>
             <label for="uno">
             <input type="radio" value="uno" name="opcion3" id="uno"> 1
             </label>
             <label for="dos">
                 <input type="radio" value="dos" name="opcion3" id="dos"> 2
             </label>
             <label for="tres">
                 <input type="radio" value="tres" name="opcion3" id="tres"> 3
             </label>
             <label for="cuatro">
                 <input type="radio" value="cuatro" name="opcion3" id="cuatro"> 4
             </label>
             <label for="cinco">
                 <input type="radio" value="cinco" name="opcion3" id="cinco"> 5
             </label>

			<!--Mensaje de error-->
			<?php if(!empty($errores3)):?>
				<div class="alert error"><span class="icon-cancel"></span></div>
			<?php endif;?>

		<div class="pregunta"><h4>5. ¿Qué es lo que le gusta de nuestro producto o servicio?</h4></div>
		
			<textarea placeholder="Escribe tu respuesta aqui" name="respuesta0"></textarea>
			<!--Mensaje de error-->
			<?php if(!empty($errores4)):?>
				<div class="alert error"><span class="icon-cancel"></span></div>
			<?php endif;?>
	
		<div class="pregunta"><h4>6. ¿El personal da la imagen de estar totalmente cualificado para las tareas que tiene que realizar?<br>Escribe el por qué de tu respuesta.</h4></div>
		
			<textarea placeholder="Escribe tu respuesta aqui" name="respuesta1"></textarea>

			<!--Mensaje de error-->
			<?php if(!empty($errores5)):?>
				<div class="alert error"><span class="icon-cancel"></span></div>
			<?php endif;?>
	

		
		<div class="pregunta"><h4>7. Comparado con productos similares ofrecidos por otras organizaciones <br>¿como considera nuestro producto o servicio?</h4></div>
			<select name="opcion4" id="respuesta7">
				<option value="null">Seleccione una opci&oacute;n</option>
				<option>Excelente</option>
				<option>Bueno</option>
				<option>Malo</option>
				<option>Pesimo</option>
			</select>
			<!--Mensaje de error-->
			<?php if(!empty($errores6)):?>
				<div class="alert error"><span class="icon-cancel"></span></div>
			<?php endif;?>
	
		<div class="pregunta"><h4>8. ¿Volvería a usar nuestro producto o servicio en el futuro?</h4></div>

	
			<select name="opcion5" id="respuesta8">
				<option value="null">Seleccione una opci&oacute;n</option>
				<option>Definitivamente</option>
				<option>Probablemente</option>
				<option>No estoy seguro</option>
				<option>Probablemente no</option>
				<option>Definitivamente no</option>
			</select>
		    <!--Mensaje de error-->
		    <?php if(!empty($errores7)):?>
		    	<div class="alert error"><span class="icon-cancel"></span></div>
		    <?php endif;?>
		
		<div class="pregunta"><h4>9. ¿Recomendaría nuestro producto o servicio a otras personas?</h4></div>

			<select name="opcion6" id="respuesta9">
				<option value="null">Seleccione una opci&oacute;n</option>
				<option>Definitivamente</option>
				<option>Probablemente</option>
				<option>No estoy seguro</option>
				<option>Probablemente no</option>
				<option>Definitivamente no</option>
			</select>
			<!--Mensaje de error-->
			<?php if(!empty($errores8)):?>
				<div class="alert error"><span class="icon-cancel"></span></div>
			<?php endif;?>

    <div class="enviarbox">
	<div class="espacio"></div>
	<div class="enviar">
		<input class="button" type="submit" value="Enviar" name="Encuesta">

	</div>
    </div>

	</form>
	<h5>* Sus comentarios son importantes para nosotros, agradecemos el tiempo tomado para dar respuesta a esta encuesta.</h5>
</div>
<div class="autor">
	<p class="copy">Construcciones Especializadas y Servicios Integrales S.A. de C.V. &copy; 2018</p>
</div>
</body>
</html>