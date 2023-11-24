<?php
session_start();
$correo=$_SESSION["correo"]; 
include_once("includes/session.php");
include_once("includes/conectar_ext.php");
date_default_timezone_set('America/Bogota');
setlocale(LC_TIME, 'es_CO.UTF-8');
$bus_por = 0;
$bus_inv = 0;
$bus_por = $_POST["bus_por"];
$bus_inv = $_POST["bus_inv"];
$res = mysql_query("SELECT * FROM investigadores WHERE str_cor = '$correo' LIMIT 0 , 1");
$row_usu = mysql_fetch_array($res); 

?>
<!DOCTYPE html>
<html lang="es">

<!-- NO TOCAR--->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Intranet Humboldt">
  <meta name="author" content="Instituto Humboldt">
  <meta name="robots" content="noindex" />


  <title>Intranet - Instituto Humboldt</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.css" integrity="sha256-jLWPhwkAHq1rpueZOKALBno3eKP3m4IMB131kGhAlRQ=" crossorigin="anonymous">
  
  <!-- Custom styles for this template -->
  <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="icon" type="image/png" href="img/favicon.png">
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.4/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/web-component@6.1.4/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.4/index.global.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.4/locales-all.global.min.js"></script>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script type="text/javascript">        
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30877272-1']);
    _gaq.push(['_setDomainName', 'humboldt.org.co']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-L78B6Q2D4D"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-L78B6Q2D4D');
  </script>
  <link rel="stylesheet" href="css/full-width-pics.css" >
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>

<body>

<!-- Top menu-->
<div class="top-menu">
  <div class="col-lg-5">
  </div>
  <div class="col-12 col-md-12 col-lg-5" style="text-align:center; text-align:right">
    <a href="http://humboldt.org.co/">&#x2b60; Volver al portal institucional</a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <a href="index.php">Cerrar sesión</a>
  </div>
  <div class="col-lg-2">
  </div>
</div>

<!-- Header -->
 <header class="bg-image-full-header">
    <div class="row" style="padding-top:50px; padding-bottom: 50px;">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4 logo-intranet" style="text-align: left">
          <img src="img/logo_intranet.png" width="300px">
        </div>
        <div class="col-lg-4 logo-humboldt" style="text-align: right">
          <img src="img/logo_humboldt.png" width="80px"> 
        </div> 
        <div class="col-lg-2">        
        </div> 
      </div>
    <div class="borde-gradiente"></div>
  </div>
</header>

<!-- menu -->
<div class="menuPrincipal">
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">MENÃš
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link Enlace" href="portada.php" style="font-weight:400; font-size:1.2em;">Intranet</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Sistema Integrado de Gestión</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="macroprocesos.php">Sistema Integrado de Gestión</a>                
                <a class="dropdown-item" href="sgc_listado_maestro.php">Listados maestros</a>
                <a class="dropdown-item" href="sgc_organigrama.php">Organigrama</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Servicios</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="servicios.php">Consultar TOR</a>
                <a class="dropdown-item" href="mi_perfil.php?sec=mi perfil">Mi perfil</a> 
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Trámites</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="car.php">Solicitud CAR</a>
                <a class="dropdown-item" href="lis_car.php">Consultar CAR</a>
                <a class="dropdown-item" href="gastosviaje.php">Solicitud gastos de viaje</a>
                <a class="dropdown-item" href="cons_comision.php">Consultar gastos de viaje</a>
                <a class="dropdown-item" href="servlgyanticipo.php">Eventos/anticipo</a>
                <a class="dropdown-item" href="cons_servlgyanticipo.php">Consultar Eventos/anticipo</a>
                <a class="dropdown-item" href="consanticipo.php">Consultar anticipo</a>                
                <a class="dropdown-item" href="evaluacion_proveedores.php">Reevaluación de proveedores</a>
                <a class="dropdown-item" href="consviatico2.php">Consultar gastos viaje</a>
                <a class="dropdown-item" href="gastosinvitados_nuevo.php">Solicitud gasto invitado</a>
                <a class="dropdown-item" href="conscarta_nuevo.php">Consultar gasto invitado</a>
				        <a class="dropdown-item" href="solicitud_salas.php">Reserva de salas</a>
                <a class="dropdown-item" href="cons_salas.php">Consultar salas</a>
                <a class="dropdown-item" href="sol_apolog.php">Solicitudes</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Novedades</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="nuevos_com.php">Compañeros</a>
                <a class="dropdown-item" href="cumple.php">Cumpleaños</a>
                <a class="dropdown-item" href="eventos_bienestar.php">Eventos bienestar</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Bienestar</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item">Bienestar Humboldt</a>
                <a class="dropdown-item" href="convivencia.php">Cómite de convivencia</a>
                <a class="dropdown-item" href="http://intranet.humboldt.org.co/banco_hv.php">Banco de hojas de vida</a>
              </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 <!-- FIN DE NOTAR -->

<!-- Slider -->
<!-- NO TOCAR -->
    <style type="text/css">    
      #myCarousel .nav a small {display: block;}
      #myCarousel .nav {background: #eee;}     
      .nav-pills > li > a  {border-radius: 0px; color: #828282;}
      .nav-pills>li {width: calc(99% / 4);}
      .nav-pills>li[data-slide-to="0"].active a { background-color: #ffffff; color: #828282;}
      .nav-pills>li[data-slide-to="1"].active a { background-color: #ffffff; color: #828282;}
      .nav-pills>li[data-slide-to="2"].active a { background-color: #ffffff; color: #828282;}
      .nav-pills>li[data-slide-to="3"].active a { background-color: #ffffff; color: #828282;}
	  @media screen and (max-width: 980px) {
        .nav-pills>li {width: calc(100% / 1);}
      }    
    </style>
<!-- FIN NO TOCAR -->

    <div class="container">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span> Noticias</h3>
        <br>
        ¿Tienes algo para contarnos? Novedades de tu área, de lo que haces, que sean de interés general, las podrás compartir en este espacio. Envía tus noticias y propuestas a <a href="mailto:comunicacionesinternas@humboldt.org.co">comunicacionesinternas@humboldt.org.co</a>
        <br><br>

      </div>
      

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border: 1px solid #B5B5B5;">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        	<!-- PRIMER SLIDE-->
          <div class="item active" style="background-image: url('img/noticias/integridad.png'); background-position: center center">
            <div class="caption">
                <small>Noticias</small><br>
                <strong>Línea de integridad</strong><br>
                <a href="https://teescuchamoshumboldt.ethicsglobal.com/?l=es#modal" style="color:#93BF1F !important">Acceder</a>
            </div>
          </div>
                                          
           <!-- FIN PRIMER SLIDE-->

			    <!-- SEGUNDO SLIDE--> 
          <div class="item" style="background-image: url('img/noticias/2022/Pararparacompartir.jpg'); background-position: center center">
            <div class="caption">
                <small>Noticias</small><br>
                <strong>Parar para respirar</strong><br>
                <a href="noticias/parar.php" style="color:#93BF1F !important">Ver más</a>
            </div>
          </div>
                    
            
          <!-- TERCERO SLIDE--> 
          <div class="item" style="background-image: url('img/noticias/colecciones/ASA_2099_Felipe\ Villegas.jpg'); background-position: center center">
            <div class="caption">
                <small>Noticias</small><br>
                <strong>Colecciones Biológicas y el Registro Único Nacional de Colecciones Biológicas</strong><br>
                <a href="noticias/colecciones.php" style="color:#93BF1F !important">Ver más</a>
            </div>
          </div>                
            
          <!-- FIN TERCERO SLIDE-->

          <!--  CUARTO SLIDE--> 
          <div class="item" style="background-image: url('img/noticias/maleta/home.jpg'); background-position: center center">
            <div class="caption">
                <small>Noticias</small><br>
                <strong>Historia Natural y Colecciones Biológicas</strong><br>
                <a href="noticias/maleta-viajera.php" style="color:#93BF1F !important">Ver más</a>
            </div>
          </div> 
                                
          <!-- FIN CUARTO SLIDE-->

        </div>

        <!-- BOTONES SLIDER-->
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-fill">
          <li data-target="#myCarousel" data-slide-to="0" class="active activadorBanner"><a href="#" style="padding:20px">Línea de integridad</a></li>
        	<li data-target="#myCarousel" data-slide-to="1"><a href="#" style="padding:20px">Parar para respirar</a></li>
          <li data-target="#myCarousel" data-slide-to="2"><a href="#" style="padding:20px">Colecciones Biológicas y RNC</a></li>
          <li data-target="#myCarousel" data-slide-to="3"><a href="#" style="padding:20px">Historia Natural</a></li>                                   
        </ul>
    </div>
    <!-- End Carousel -->
</div>
 
<!-- End Slider -->
</div>
<!-- FIN DEL SLIDER-->



<!-- OPINIÓN --->
<div class="container mt-5">
  
  <div class="título">
    <h3>
      <span style="color:#113545; font-weight:800">|</span>&nbsp; Estructura Organizacional
    </h3>
    
  </div>
  <a href="noticias/estructura.php">
    <img src="img/estructura.jpg" alt="estructura organizacional" class="img-fluid">
  </a>
</div>

<!-- GESTIÓN HUMANA--->
<div class="container" style="margin-top:20px;">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Gestión humana</h3>
      </div>

    <div class="row" style="display: flex; padding: 5px">
          
          <!-- CAJÓN 1-->
          <div class="col-12 col-md-4 col-lg-4 p-3">
            <div class="Contentlanding">
              <a href="noticias/iniciativas.php" target="_blank">
                <div class="cajonlandingleft" style="background-image: url('img/noticias/INICIATIVAS-HUMBOLD.jpg');background-position: center center; background-size: cover !important">
                  <br><br><br><br><br><br><br><br><br><br><br><br><br>
                  
                  <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                    Iniciativas Humboldt
                  </div>
                   
                </div>
              </a>
          </div>

          <!-- CAJÓN 2-->
          <div class="col-12 p-3" style="padding: 0px !important; margin-top: 20px !important; margin-left: 0px !important; margin-right: 0px !important; ">
                <!-- <div class="Contentlanding">
                    <a href="https://drive.google.com/file/d/1y9rv9QGL8gd7sAUGfchudI7ZKovLQ9j6/view?usp=sharing" target="_blank">            
                    <div class="cajonlandingleft" style="background-image: url('img/noticias/2021/junio/bienestarcurrents.jpg');background-position: center center; background-size: cover !important">
                      <br><br><br><br><br><br><br><br><br><br><br><br><br>
                      
                      <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                        Comunidad Humboldt
                      </div>
                       
                    </div>
                  
                </div> -->
          </div>
        </div>

        <!-- CALENDARIO -->
        <div class="col-12 col-md-8 col-lg-8 p-3">
          <a href="convenios-humboldt.php">
            <img src="img/noticias/2022/PIEZA-PLAN-DE-BENEFICIOS---INTRANET.jpg" alt="">
          </a>
            <!-- <div>
            	¿Quieres compartir eventos con nosotros? ¿Vas a participar en alguno evento y crees que es de interés para la comunidad Humboldt? Envíanos toda la información con 15 días de anticipación y lo compartiremos en nuestro calendario: <a href="mailto:comunicacionesinternas@humboldt.org.co">comunicacionesinternas@humboldt.org.co</a><br>
              <a href="https://calendar.google.com/calendar/u/2?cid=Y19mMmkwbjByaHQ2b2liajZwdXRjYXI0bjNpZ0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t" target="_blank">              
                <div>                	
                  <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=America%2FBogota&amp;src=Y19mMmkwbjByaHQ2b2liajZwdXRjYXI0bjNpZ0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23C0CA33&amp;showTitle=0&amp;showDate=1&amp;showNav=0&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=1&amp;showTz=0&amp;mode=MONTH" style="border-width:0" width="100%" height="540" frameborder="0" scrolling="no"></iframe><br>Suscríbete a este calendario con tu cuenta institucional para ver todos los eventos.                                  
                </div>
              </a>
            </div> -->
        <!-- CALENDARIO--->


      </div>
    </div>

    <div class="row">
      <p>
        <strong style="padding-left: 15px;">
          <a href="documentos/Pausas-activas.pdf" target="_blank" rel="noopener noreferrer" style="color: #333;">Tómate una pausa</a>
        </strong>
      </p>
    </div>
  </div>

<!-- Conozcámonos --->
<div class="container" style="margin:30px auto;">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Eventos institucionales</h3>
        <br>
        <div class="row">
          <div class="col-md-7">
            <full-calendar/>
          </div>
          <div class="col-md-5">
            <!-- <a href="https://www.youtube.com/watch?v=9btAQp2psz4" target="_blank" rel="noopener noreferrer">
              <img src="img/eventos/genomica.jpg" alt="redin" class="img-fluid">
            </a>             -->
            <a href="https://humboldt.us4.list-manage.com/track/click?u=8b7b6e645360b5ca05e9feecf&id=98147ae8fc&e=20fb64d2c3" target="_blank" rel="noopener noreferrer">
              <img src="img/fest.jpg" alt="evento dirección" class="img-fluid">
            </a>
            <p style="padding-top:20px ;">
              Recuerda que en el Humboldt Fest tendrás la oportunidad de apoyar algunas de las comunidades con las cuales tuvimos la fortuna de trabajar durante el 2022. Aprovecha para conocer y comprar sus productos gastronómicos y artesanales.
            </p>
          </div>
        </div>
      </div>
      
      <!-- ENTREVISTA 1-->  
      <!-- <div class="row" style="display: flex; padding: 5px">
            <div class="col-12 col-md-4 col-lg-4 p-3">
                  <div class="Contentlanding">
                    <a href="entrevista-miguel-leyton.php">
                      <div class="cajonlandingleft" style="background-image: url('img/entrevistas/luis-m-leyton.jpg');background-position: center top; background-size: contain;">
                        <br><br><br><br><br><br><br><br>
                        <div style="background-color: #696969; color: #ffffff; padding-left:10px; width:40%">
                          Entrevista
                        </div>
                        
                        <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                          Miguel Leyton<br>
                        </div>
                         
                      </div>
                    </a>
                </div>
            </div>
			
            <div class="col-12 col-md-4 col-lg-4 p-3">
                  <div class="Contentlanding">
                    <a href="entrevista-sara-gomez.php">              
                      <div class="cajonlandingleft" style="background-image: url('img/entrevistas/sara-gomez-portada.jpg');background-position: center center">
                        <br><br><br><br><br><br><br><br>
                        <div style="background-color: #696969; color: #ffffff; padding-left:10px; width:40%">
                          Entrevista
                        </div>
                        
                        <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                          Sara Gómez                          
                        </div>
                         
                      </div>
                    </a>
                </div>
            </div>
             
            <div class="col-12 col-md-4 col-lg-4 p-3">
                  <div class="Contentlanding">
                    <a href="entrevista-eduardo-tovar.php">              
                      <div class="cajonlandingleft" style="background-image: url('img/entrevistas/eduardo-tovar.jpg');background-position: center top; background-size: contain;">
                        <br><br><br><br><br><br><br><br>
                        <div style="background-color: #696969; color: #ffffff; padding-left:10px; width:40%">
                          Entrevista
                        </div>
                        
                        <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                          Eduardo Tovar<br>
                        </div>
                         
                      </div>
                    </a>
                </div>
            </div>
      </div> -->
    </div>
  </div>
</a>

<div class="container">
  
    
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <p>
        Conoce <a href="documentos/MM-Instituto-Humboldt-Julio-2022.pdf" target="_blank" rel="noopener noreferrer">AQUÍ</a> el informe completo de medios
      </p>
    </div>
  </div>
</div>


        <!-- Recomendados--->
        <div class="container" style="margin-top:20px;">
          <div class="título">
            <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Proyectos</h3>
            <br>
            
            
          </div>
                
          <div class="row proyectos" style="display: flex; padding: 5px">
                  
            <div class="col-12 col-md-4 col-lg-4 p-3" style="margin-bottom:20px;">
              <div class="Contentlanding">
                <a href="https://drive.google.com/file/d/1cZVqXKVjYLak5jYCNuJWKNpBBwPodbbB/view" target="_blank">
                  <div class="cajonlandingright" style="width:100%;">                        
                    <div style="width:100%; padding:10px; float: left;">                        
                      <strong>Nariño BIO</strong>
                      <br><br>
                      Subdirección de investigaciones
                    </div>
                    <img src="img/proyectos/bio.jpg" alt="">
                  </div>
                </a>
              </div>
            </div>


                <div class="col-12 col-md-4 col-lg-4 p-3" style="margin-bottom:20px;">
                  <div class="Contentlanding">
                    <a href="proyectos/restauracion.php">
                      <div class="cajonlandingright" style="width:100%;">                        
                        <div style="width:100%; padding:10px; float: left;">                        
                          <strong>Ejercicio de restauración en la sede del Venado de Oro</strong>
                          <br><br>
                          Esta historia nos sirve para tener más información cuando recibimos visitantes en la sede
                        </div>
                        <img src="img/proyectos/restauracion.jpg" alt="">
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 p-3" style="margin-bottom:20px;">
                  <div class="Contentlanding">
                    <a href="proyectos/grupo-energia.php">
                      <div class="cajonlandingright" style="width:100%;">                        
                        <div style="width:100%; padding:10px; float: left;">                        
                          <strong>Grupo energía de Bogotá - Tominé</strong>
                          <br><br>
                          Mauricio Aguilar
                        </div>
                        <img src="img/proyectos/energia.jpg" alt="">
                      </div>
                    </a>
                  </div>
                </div>
               
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>

  
<!-- Leamonos --->
<div class="container" style="margin-top:10px;">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Leámonos</h3>
        <br>
        Reconocemos el valor de lo que haces en el Instituto. En esta sección encontrarás una selección de nuestras publicaciones más leídas. Para que no te pierdas los logros de la gente Humboldt.
        <br><br>
      </div>
        
      <div class="row" style="display: flex; padding: 5px">
              
            

            <div class="col-12 col-md-4 col-lg-4 p-3" style="height: 200px; margin-bottom:20px; font-size: 90%;">
              <div class="Contentlanding">
                <a href="http://humboldt.org.co/es/boletines-y-comunicados/item/1806-en-la-colombia-birdfair-toma-vuelo-la-estrategia-nacional-para-la-conservacion-de-las-aves-enca-2030" target="_blank">
                  <div class="cajonlandingright" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('http://humboldt.org.co/images/imagenes/prensa/header.jpg'); background-repeat: no-repeat; background-size: cover; ; height: 200px">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px">                        
                        <strong>En la Colombia BirdFair toma vuelo la Estrategia Nacional para la Conservación de las Aves ENCA 2030</strong>
                        <br> <br>
                        La ENCA 2030 es resultado de un año y medio de un amplio proceso...
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <div class="col-12 col-md-4 col-lg-4 p-3" style="height: 200px; margin-bottom:20px; font-size: 90%;">
              <div class="Contentlanding">
                <a href="http://humboldt.org.co/es/boletines-y-comunicados/item/1812-dia-internacional-para-la-proteccion-de-los-osos-del-mundo" target="_blank">
                  <div class="cajonlandingright" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('http://humboldt.org.co/images/imagenes/prensa/tremarctos_ornatus_7457_nieto_montano_francisco.jpg'); background-repeat: no-repeat; background-size: cover; ; height: 200px">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px">                        
                        <strong>Día Internacional para la Protección de los Osos del Mundo</strong> 
                        <br> <br>
                        Para conocer un poco más sobre este majestuoso animal conversamos con Nicolás Reyes Amaya...
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4 p-3" style="height: 200px; margin-bottom:20px; font-size: 90%;">
              <div class="Contentlanding">
                <a href="http://humboldt.org.co/es/boletines-y-comunicados/item/1813-escuchar-para-resguardar-los-bosques" target="_blank">
                  <div class="cajonlandingright" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('http://humboldt.org.co/images/imagenes/Comunicados/HUAW0312_Felipe%20Villegas.jpg'); background-repeat: no-repeat; background-size: cover; ; height: 200px">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px">                        
                        <strong>Escuchar para resguardar los bosques
                        </strong>
                        <br> <br>
                        El monitoreo de los bosques se ha convertido en una herramienta estratégica...
                    </div>
                  </div>
                </a>
              </div>
            </div>


      </div>
    </div>
  </div>


<!-- Multimedia --->
<div class="container" style="margin-top:10px;">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Multimedia</h3>
        <br>
        Aquí encontrarás videos sobre tu trabajo además de temas de interés del Instituto y las galerías fotográficas de nuestros mejores momentos. Conócete y conoce un poco más del Humboldt.  En esta ocasión te invitamos a ver la presentación que se le hizo a la Asamblea del Informe de Gestión 2020. <BR>
		¿Quieres compartir tus fotografías con nosotros o postular algún video? Envía tu material a <a href="mailto:comunicacionesinternas@humboldt.org.co">comunicacionesinternas@humboldt.org.co</a>
      </div>
      <div class="row" style="display: flex; padding: 5px">
        <!-- video-->
        <div class="col-12 col-md-8 col-lg-8 p-3">
            <div>                         
                <div>
                 	<div class="media-wrapper">
                 		<!-- <video src="https://drive.google.com/file/d/1a-imt5JpXAwmCEk70tXCUnnUjhPES84L/view?usp=sharing" poster="img/portada.jpg" width="100%" height="480" controls>
                		</video> -->
                    <iframe src="https://drive.google.com/file/d/1uBqcDbre-uP1Zz5XREsqH5sGfO93NSee/preview" frameborder="0" width="100%" height="460" ></iframe>                    
                    <i>Café del conocimiento - Lecciones aprendidas - Lisama</i>
            		</div>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-4 p-3">
            <div class="Contentlanding">
            <a href="galeria-humboldt.php">              
                    <div class="cajonlandingright" style="background-image: url('img/galerias/humfest/6.jpg');background-position: center center; background-size: cover">
                      <br><br><br><br><br><br><br><br><br><br>
                      
                      <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                        <i>Galería Humboldt Fest</i>
                      </div>
                    </div>
                  </a>
          	</div>
            <div class="col-12 p-3" style="padding: 0px !important; margin-top: 20px !important; margin-left: 0px !important; margin-right: 0px !important;">
                <div class="Contentlanding">
                <a href="galeria-montes-maria.php">              
                    <div class="cajonlandingright" style="background-image: url('img/galerias/montes/MONT0315.jpg');background-position: center center; background-size: cover">
                      <br><br><br><br><br><br><br><br><br><br>              
                      <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                        <i>Galería expedición Montes de María</i>
                      </div>
                    </div>
              </a>  
                </div>
             </div>
        </div>
        
      </div>
    </div>
  </div>

  
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <img src="img/clasificados/reposteria.jpeg" alt="reposteria" srcset="" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <img src="img/clasificados/ventasudaderas.jpg" alt="bolsos" srcset="" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">        
        <img src="img/clasificados/Globoflexia y Pintucaritas.jpg" alt="globoflexia" srcset="" class="img-fluid">        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>

<!-- Podcast --->
<div class="container" style="margin-top:10px; margin-bottom: 20px;">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Podcast</h3>
      </div>    

      <div class="row" style="display: flex; padding: 5px">

        <div class="col-12">
          <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/6V7Fl5kh8svQbegbTzYFqo?utm_source=generator&theme=0" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
          <br>
        </div>
      </div>
</div>


<!-- Redes suscribete --->
<div class="container" style="margin-top:10px; margin-bottom: 20px;">

      <div class="row" style="display: flex; padding: 5px">

        <div class="col-12 col-md-6 col-lg-6 p-3"  style=" margin-bottom: 20px;">
          <div class="título">
            <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Nuestras redes</h3>
          </div>
          <div>
            Síguenos en nuestras redes:
            <br><br>
            <a href="https://www.facebook.com/instituto.humboldt/" target="_blank">
              <img src="img/facebook.png" width="40px">&nbsp;&nbsp;
            </a>

            <a href="https://twitter.com/inst_humboldt" target="_blank">
              <img src="img/twitter.png" width="40px">&nbsp;&nbsp;
            </a>

            <a href="https://www.instagram.com/instituto_humboldt/" target="_blank">
              <img src="img/instagram.png" width="40px">&nbsp;&nbsp;
            </a>

            <a href="https://www.linkedin.com/company/institutohumboldt/mycompany/" target="_blank">
              <img src="img/linkedin.png" width="40px">&nbsp;&nbsp;
            </a>

            <a href="https://www.youtube.com/user/InstHumboldt" target="_blank">
              <img src="img/youtube.png" width="40px">&nbsp;&nbsp;
            </a>
            
            <a href="https://open.spotify.com/show/6V7Fl5kh8svQbegbTzYFqo?si=1cWp-q5iR1m_us7lgomS-A&nd=1" target="_blank">
              <img src="img/spotify.png" width="40px">&nbsp;&nbsp;
            </a>
          </div>
        </div>

          <div class="col-12 col-md-6 col-lg-6 p-3">
            <div class="título">
              <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; ¡Noticias de la biodiversidad!</h3>
            </div>
            <div>
            <!-- Begin MailChimp Signup Form -->
              <style scoped type="text/css">
              #mc_embed_signup form {padding:10px 0 10px 0;}
              .mc-field-group { display: inline-block; } /* positions input field horizontally */
              #mc_embed_signup input.email {font-family:"Open Sans","Helvetica Neue",Arial,Helvetica,Verdana,sans-serif; font-size: 15px; border: 1px solid #113545; color: #113545; background-color: #fff; box-sizing:border-box; height:32px; padding: 0px 0.4em; display: inline-block; margin: 0; width:350px; vertical-align:top;}
              #mc_embed_signup label {display:block; font-size:16px; padding-bottom:10px; font-weight:bold;}
              #mc_embed_signup .clear {display: inline-block;} /* positions button horizontally in line with input */
              #mc_embed_signup .button {font-size: 13px; border: none; letter-spacing: .03em; color: #fff; background-color: #aaa; box-sizing:border-box; height:32px; line-height:32px; padding:0 18px; display: inline-block; margin: 0; transition: all 0.23s ease-in-out 0s;}
              #mc_embed_signup .button:hover {background-color:#777; cursor:pointer;}
              #mc_embed_signup div#mce-responses {float:left; top:-1.4em; padding:0em .5em 0em .5em; overflow:hidden; width:90%;margin: 0 5%; clear: both;}
              #mc_embed_signup div.response {margin:1em 0; padding:1em .5em .5em 0; font-weight:bold; float:left; top:-1.5em; z-index:1; width:80%;}
              #mc_embed_signup #mce-error-response {display:none;}
              #mc_embed_signup #mce-success-response {color:#529214; display:none;}
              #mc_embed_signup label.error {display:block; float:none; width:auto; margin-left:1.05em; text-align:left; padding:.5em 0;}
              @media (max-width: 768px) {
                  #mc_embed_signup input.email {width:100%; margin-bottom:5px;}
                  #mc_embed_signup .button {width: 100%; margin:0; }
              }
              ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                color: #113545}

              input[type="email"]
              {                  
                  max-width: 100% !important;  
              } 

              #mc_embed_signup form {
                  padding: 0px auto;
              }

              #mc_embed_signup .button {
                  max-width: 100px;
                  width: 100%;  
              }

              </style>
              <div id="jnews_module1" class=" newsletter" style="margin-top: 15px;margin-bottom:15px">
              <!-- Begin MailChimp Signup Form -->
              <style type="text/css">
                #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
              </style>
              Suscríbete para recibir nuestras noticias:




              <div id="mc_embed_shell">    
                <div id="mc_embed_signup">
                  <form action="https://humboldt.us4.list-manage.com/subscribe/post?u=8b7b6e645360b5ca05e9feecf&amp;id=89ba7c353a&amp;f_id=001298ebf0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self" novalidate="">
                                             
                        <br>
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDQiIGhlaWdodD0iNDciIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik00Mi4zMzggMjkuNTQ5bC0uMDAxLS4wMDNjLS4wNDkgMC0uMDguMDAzLS4wOC4wMDNzLS4xNS0uNjAzLS4zMzItMS4xODdjLS4xODItLjU4My0uMzczLS45NDctLjM3My0uOTQ3bC4xMTMtLjE3NC0uMDAyLS4wMDRjLjYxNy0xLjAyLjYzMi0xLjg5Mi41MzUtMi40NDZhMy4zNjMgMy4zNjMgMCAwMC0uOTM4LTEuODQ4bC0uMDI3LS4wMjdjLS43MzQtLjcxOS0xLjc1My0xLjIyMy0zLjQwOC0xLjY4OC0uMTktLjA1My0uMzU5LS4wOTctLjUwOC0uMTM1YTE0LjQ4IDE0LjQ4IDAgMDEtLjM2LS4xMDZsLS4wMTUtLjEyOWMtLjAwNi0uNDM3LS4wMzEtMS45MTgtLjA2OS0yLjc4Mi0uMDI3LS42MjQtLjA4MS0xLjU5OC0uMzgzLTIuNTU4LS4zNi0xLjI5OS0uOTg4LTIuNDM2LTEuNzcyLTMuMTYzIDIuMTYyLTIuMjQxIDMuNTEyLTQuNzEgMy41MS02LjgyOS0uMDA3LTQuMDc0LTUuMDEtNS4zMDYtMTEuMTc2LTIuNzUzbC0uMDE5LjAwOGE5Ljg2NiA5Ljg2NiAwIDAwLTEuMjU5LjUzM2wtLjAyOC4wMTNBMTMwOC4yIDEzMDguMiAwIDAwMjMuMzQ5Ljk4Yy03LjAzLTYuMTMxLTI5LjAwOCAxOC4yOTgtMjEuOTggMjQuMjMybDEuNTM1IDEuM2MtLjM5OCAxLjAzMi0uNTU1IDIuMjE1LS40MjcgMy40ODYuMTY0IDEuNjMzIDEuMDA2IDMuMTk4IDIuMzcxIDQuNDA4IDEuMjk2IDEuMTQ4IDIuOTMgMS44MyA0LjQ5IDEuODcybC4xMzcuMDAySDkuNTAyYzIuNzM0IDYuMyA4LjgwOCAxMC4wMTcgMTYuMDE2IDEwLjM3MmwuMjg1LjAxMnYuMDAyaC4wMDd2LS4wMDJjNy43MTQuMjczIDE0LjQ1NC0zLjQ1NCAxNy4yMTktMTAuMDc4LjM0OC0uODk2IDIuMjktNi4yNzUtLjY5MS03LjAzNnptLTMyLjIzMiA0Ljk2Yy0uMjM5LjA0LS40ODIuMDU2LS43MjguMDUtMi4zNzMtLjA2My00LjkzNy0yLjItNS4xOTItNC43MzQtLjI4MS0yLjggMS4xNS00Ljk1NiAzLjY4NC01LjQ2N2E0LjMxMyA0LjMxMyAwIDAxMS4wNjQtLjA3NmMxLjQyLjA3OCAzLjUxMSAxLjE2OCAzLjk5IDQuMjYuNDIzIDIuNzQtLjI1IDUuNTI4LTIuODE4IDUuOTY2em0tMi42Ni0xMS44MjVsLjAxLS4wMDJjMS45NTMtNS4zNDcgNS4zNi0xMC4zNTYgOS43OTgtMTMuNzczLjA4NC0uMDcuMTctLjE0LjI2LS4yMSAyLjE4Ny0xLjc4NSA0LjQyOC0zLjMwNSA2LjU4NS00LjUwOCAwIDAtMS45MTMtMi4yMTgtMi40OS0yLjM4MUMxOC4wNTYuODUgMTAuMzggNi4xNDMgNS40NzkgMTMuMTM2Yy0xLjk4MiAyLjgzLTQuODIgNy44NC0zLjQ2MyAxMC40MTguMTY3LjMyIDEuMTE0IDEuMTQgMS42MjIgMS41NjQuODUtMS4yMzUgMi4xNS0yLjEgMy44MDgtMi40MzR6bTkuMDQtOS41NTNjMS43NDYtMi4wMjMgMy45LTMuNzgzIDUuODI5LTQuNzcuMDY2LS4wMzQuMTM3LjAzOC4xLjEwMy0uMTUzLjI4LS40NS44NzgtLjU0MSAxLjMyOC0uMDEzLjA2Ni4wNi4xMTQuMTE2LjA3NiAxLjE5OC0uODE4IDMuMzY0LTEuNTQ4IDUuMTk1LTEuNjU2LjA3OC0uMDA1LjExMS4wOTguMDQ1LjE0LS4yODUuMTc3LS43MjkuNDgyLS45MzIuNzc4YS4wNzYuMDc2IDAgMDAuMDU1LjExOWMxLjI2OC4xMTcgMy4wNjcuNDUgNC4zMjUgMS4wNDYuMDgyLjAzOS4wMzguMTYyLS4wNS4xNDItMS43NzctLjQxLTQuNzA1LS43MjctNy43NDYuMDE1LTIuNzE3LjY2My00Ljc4OCAxLjY4OS02LjI5NSAyLjc5LS4wNzIuMDUzLS4xNi0uMDQzLS4xMDEtLjExek0zOS42NCAzOC4wOTJjMS40NzctMS41NDMgMi4zNTYtMy4yMjEgMi42OTctNS4yODkuMTY4LTEuMTA2LS4wNzgtMS41MzQtLjQxMi0xLjc0LS4zNTQtLjIxOC0uNzc4LS4xNDItLjc3OC0uMTQycy0uMTkzLTEuMzI0LS43NC0yLjUyNmMtMS42MjMgMS4yOC0zLjcxMiAyLjE4LTUuMzAzIDIuNjM3LTEuODM2LjUyNy00LjMyLjkzMi03LjA5MS43NjctLjMwMi0uMDI0LS41ODQtLjA2MS0uODQ1LS4wOTUtMS4wNjgtLjE0LTEuNzg1LS4yMzQtMi4wOTMuNzY1YTUuMTM3IDUuMTM3IDAgMDAuMjkyLjExYy4xNDMuMDQ4LjI5LjA5My40MzguMTM1YTE1LjAzMSAxNS4wMzEgMCAwMDEuODIuNDAxYy4zMDguMDQ5LjYxNy4wOTMuOTI4LjEyNWExNC41MDMgMTQuNTAzIDAgMDAxLjQwMi4wOCAxMy4wOTIgMTMuMDkyIDAgMDAxLjExNS0uMDJjLjA5OC0uMDA0LjE5Ni0uMDA4LjI5NC0uMDE0LjMxMy0uMDIyLjYyNi0uMDUuOTQyLS4wODFhLjEzMS4xMzEgMCAwMS4wNjQuMjVsLS4wMDkuMDA0Yy0uMzAyLjEyOC0uNjE1LjIzLS45MzMuMzFhOC4zODQgOC4zODQgMCAwMS0xLjQ1Ny4yMjYgMTQuNDEgMTQuNDEgMCAwMS0xLjQ3Ny4wMTkgMTMuODIyIDEzLjgyMiAwIDAxLS45ODMtLjA3NiAxNS43NDUgMTUuNzQ1IDAgMDEtMS40Ni0uMjQ3IDEwLjA3NiAxMC4wNzYgMCAwMS0xLjA3NC0uMzA3Yy4xMjUgMS4wNjQgMS4xNjIgMS41NDEgMS42NTggMS43MzRhNy40NzggNy40NzggMCAwMDEuMzA2LjM1NGM1LjYyLjk2NyAxMC44NzUtMi4yNDYgMTIuMDU4LTMuMDU2LjA4OC0uMDYuMTQ3LS4wMDEuMDc2LjEwNmExLjk2IDEuOTYgMCAwMS0uMTE2LjE2NWMtMS40NDggMS44NjgtNS4zNCA0LjAzLTEwLjQwNCA0LjAzLTIuMjEgMC00LjQxNy0uNzc5LTUuMjI3LTEuOTc0LTEuMjU4LTEuODU1LS4wNjItNC41NjMgMi4wMzMtNC4yODEuMDAyIDAgLjcxNy4wOC45MTguMTA0IDQuNDA4LjQ5MyA5LjczLS45NTkgMTIuMDk0LTMuMTQybC4xMTYtLjA4M2MuODE5LS43NzIgMS4yMzYtMS41NyAxLjEwMi0yLjI3MWExLjcgMS43IDAgMDAtLjQ5My0uOTY3Yy0uNTEzLS41MDMtMS4zMjgtLjg5NC0yLjcwMi0xLjI4bC0uMTE0LS4wMzItLjE0NS0uMDRjLS4zMi0uMDktLjU3LS4xNTktLjgzNS0uMjQ2LS41OS0uMTk0LS44ODItLjM1LS45NDgtMS40Ni0uMDMtLjQ4Ni0uMTE0LTIuMTc2LS4xNDQtMi44NzUtLjA1NC0xLjIyNC0uMjAxLTIuODk4LTEuMjQtMy41ODhhMS43NCAxLjc0IDAgMDAtLjg4Ny0uMjg0Yy0uMjU1LS4wMTItLjQwNS4wMjMtLjQ4NS4wNDJsLS4wNDIuMDFjLS41Ni4wOTQtLjkwNC4zODItMS4zMS43MmwtLjA3LjA2Yy0xLjI5NSAxLjA3OS0yLjM4OSAxLjI1NS0zLjYwNCAxLjIwMy0uMzgtLjAxNi0uNzctLjA1NC0xLjE4My0uMDk1LS4zNzgtLjAzNy0uNzc0LS4wNzYtMS4xOTctLjEwMWwtLjEtLjAwNmMtLjEzOS0uMDA4LS4yNzctLjAxNy0uNDE2LS4wMjQtMi4wMzYtLjEwNC00LjIyIDEuNjU1LTQuNTg0IDQuMTUzLS40MDUgMi43ODcgMS4xMzMgNC40OTQgMi4xMzMgNS42MDUuMjQ4LjI3NS40NjIuNTEzLjYwNy43MjJhLjc1Ni43NTYgMCAwMS0uMDYuOTdsLjAwMS4wMDFjLTIuMDc4IDIuMTM3LTIuNzQyIDUuNTMyLTEuOTYgOC4zNi4wOTkuMzU0LjIyMi42OTIuMzcgMS4wMTQgMS44MzYgNC4yOTQgNy41MzUgNi4yOTMgMTMuMTAzIDQuNDc0YTEzLjY3NyAxMy42NzcgMCAwMDIuMTE1LS44OTMgMTEuMTEyIDExLjExMiAwIDAwMy4yNC0yLjQyem0tNi41Ni0xNi4wMzdjLjM0LS4wNC42NjctLjA0Mi45NjcgMCAuMTczLS4zOTguMjAzLTEuMDg0LjA0Ny0xLjgzMS0uMjMyLTEuMTExLS41NDYtMS43ODMtMS4xOTUtMS42NzgtLjY1LjEwNC0uNjczLjkwOS0uNDQxIDIuMDIuMTMuNjI0LjM2MyAxLjE1OS42MjIgMS40OXptLTUuNTcyLjg4Yy0xLjAwMS0uNDMyLTEuNzc3LS41NjUtMy4yNC0uMDk0bC0uMTE1LjAzOGMtLjI5MS4wOTUtLjQ5NC4xNjEtLjYyMy4xNTVhLjI2LjI2IDAgMDEtLjA0LS4wMDVjLS4wNjktLjAxNC0uMTE2LS4wNTctLjEzLS4xMTktLjA0Mi0uMTkxLjI1My0uNTA3LjU2NC0uNzM0Ljk0LS42NzcgMi4xNi0uODIzIDMuMTg0LS4zODMuNS4yMTMuOTcxLjU5MyAxLjIuOTY3LjExMS4xODEuMTMzLjMyMS4wNjEuMzk1LS4xMTIuMTE4LS4zMzUuMDE3LS43NC0uMTY2aC0uMDAxbC0uMTItLjA1NXptLS45MzUuNTMyYy0uMDk0LjAxLS4xODEuMDMtLjI2Ni4wNWwtLjAwNi4wMDFhNC45NTIgNC45NTIgMCAwMS0uMDc1LjAxNyAyLjAxIDIuMDEgMCAwMC0uODA1LjQxM2MtLjE4My4xNi0uMjk2LjMzNi0uMjk1LjQ2IDAgLjA2LjAyNi4wOTMuMDQ2LjExLjAyOC4wMjUuMDYuMDM2LjEuMDM4LjA4My4wMDQuMTk2LS4wMzYuMzUxLS4wOWwuMDkxLS4wMzJhMy43NzcgMy43NzcgMCAwMTEuOTEtLjIwN2wuMDM4LjAwNWMuMjc5LjAzMy40NDcuMDUzLjUxNC0uMDUyLjAyLS4wMy4wNDQtLjA5NS0uMDE3LS4xOTMtLjE0Mi0uMjMtLjc1My0uNjE4LTEuNTg2LS41MnptNS42MzUgMS43OGMtLjE0Ny4zLS42LjM3OS0xLjAxLjE3Ny0uNDEtLjIwMi0uNjI0LS42MDgtLjQ3Ny0uOTA3LjE0Ny0uMy42LS4zOCAxLjAxLS4xNzcuNDEuMjAxLjYyNC42MDguNDc3LjkwN3ptMS42My0yLjEzYy0uMzMzLS4wMDYtLjYxLjM2LS42MTguODE4LS4wMDguNDU4LjI1Ny44MzMuNTkuODM5LjMzNC4wMDYuNjEtLjM2LjYxOC0uODE4LjAwOC0uNDU4LS4yNTYtLjgzMy0uNTktLjgzOXptLTIyLjc2MSA4LjIwOGMuMTMyLS4wMy4yNjgtLjA2Mi4zNTEuMDQyLjAzLjAzNC4wNzguMTEzLjAyMi4yNDItLjA5NS4yMi0uNDY4LjUyLTEuMDAyLjUtLjU1LS4wNDMtMS4xNi0uNDQzLTEuMjQ0LTEuNDM3LS4wNC0uNDkuMTQ1LTEuMDg5LjI2LTEuNDAxLjIyLS42MDUuMDItMS4yMzgtLjQ5Ni0xLjU3N2ExLjM0IDEuMzQgMCAwMC0xLjg1OC4zODdjLS4xNTguMjQ3LS4yNTUuNTU1LS4zMDYuNzItLjAxNC4wNDUtLjAyNS4wOC0uMDM0LjEwMi0uMTE2LjMxMy0uMzAyLjQwNS0uNDI3LjM4OC0uMDYtLjAwOC0uMTQyLS4wNDgtLjE5NC0uMTkxLS4xNDMtLjM5Mi0uMDI3LTEuNS43MS0yLjMxNGEyLjIzMyAyLjIzMyAwIDAxMS45MTUtLjY5Yy43NDIuMDk0IDEuMzU5LjU0MyAxLjczNyAxLjI2My41MDMuOTU4LjA1NSAxLjk2My0uMjEyIDIuNTYzbC0uMDA1LjAxYTguNSA4LjUgMCAwMC0uMDc0LjE2OWMtLjE2Ny4zOTgtLjE3Ni43NDYtLjAyNC45OC4xMTcuMTc5LjMyNC4yODQuNTcuMjg4LjExNC4wMDIuMjE4LS4wMjIuMzEtLjA0M2guMDAxeiIgZmlsbD0iIzAwMCIvPjwvc3ZnPg==" alt="">
                        <br><br>
                          <div class="mc-field-group"><label for="mce-EMAIL" style="font-size: 1.2em;font-weight: lighter;">
                            Confirme su correo electrónico <span style="color: red;">*</span></label>
                            <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="" style="background-color:#e6e6e6;border-radius: 5px 5px 5px 5px;">
                          </div>
                          <div hidden=""><input type="hidden" name="tags" value="6599234,6602074"></div>
                          <div id="mce-responses" class="clear">
                              <div class="response" id="mce-error-response" style="display: none;"></div>
                              <div class="response" id="mce-success-response" style="display: none;"></div>
                          </div>
                          <div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_8b7b6e645360b5ca05e9feecf_89ba7c353a" tabindex="-1" value=""></div>
                          <br><br>
                          <div class="clear"><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Suscribirse" style="background-color:#113545;text-transform: capitalize; border-radius: 5px 5px 5px 5px;"></div>
                          
                  
                </form>
                </div>
              </div>





              
              <hr>
              <!--End mc_embed_signup-->
            También puedes invitar a tus amigos en redes para que se suscriban y reciban nuestras noticias:
            <br>
              <a href="https://twitter.com/intent/tweet?text=Recibe%20las%20mejores%20noticias%20de%20la%20biodiversidad%20en%20tu%20correo%3A%0A%0Ahttp%3A//eepurl.com/gK1gS5"  target="_blank">Twitter</a> | <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//eepurl.com/gK1gS5" target="_blank">Facebook</a> | <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//eepurl.com/gK1gS5&title=Recibe%20las%20noticias%20de%20la%20biodiversidad%20&summary=Suscr%C3%ADbete%20al%20boletin%20del%20Instituto%20Humboldt&source=" target="_blank">LinkedIn</a>
              <!--End mc_embed_signup-->


          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="footerIntranet">
    <div class="container">
      <div class="row">
      	
        <div class="col-lg-12" style="text-align:center; font-size:1.2em">
          COPYRIGHT 2020
          <br>
          <small>INSTITUTO DE INVESTIGACIÓN DE RECURSOS BIOLÓGICOS ALEXANDER VON HUMBOLDT</small>
          <br><br>
          Escríbenos:<br>
          <a href="mailto:comunicacionesinternas@humboldt.org.co" target="_blank">comunicacionesinternas@humboldt.org.co</a>

        </div>

      </div>
    </div>
    <!-- /.container -->
  </footer>

  <div class="modal aviso" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: #eee; border-radius: 10px;">  
          <p class="text-center">
            <br>
            <strong style="font-size: 1.2em;">Recuerda las fechas de cierre del año 2023</strong>
          </p>        
          <a class="btn btn-primary" style="color: #fff;margin: 0 auto; display: block; max-width: max-content;" href="documentos/circular-2023.pdf" target="_blank">Consulta la circular aquí</a>
          <br>
          <p class="text-center">¿No recibes los correos del boletín de Mailchimp?</p>
          <a href="#mc_embed_signup" class="btn btn-primary"  style="color: #fff;margin: 0 auto; display: block; max-width: max-content;">
            Registrate
          </a>
          <br>
                           
        </div>        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://humboldt.org.co/newjs/eventos.js"></script>
  
       
  <script>
    $(document).ready( function() {
      $('#myCarousel').carousel({
        interval:   4000
      });
  
      var clickEvent = false;
      $('#myCarousel').on('click', '.nav a', function() {
          clickEvent = true;
          $('.nav li').removeClass('active');
          $(this).parent().addClass('active');    
      }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
          var count = $('.nav').children().length -1;
          var current = $('.nav li.active');
          current.removeClass('active').next().addClass('active');
          var id = parseInt(current.data('slide-to'));
          if(count == id) {
            $('.nav li').first().addClass('active');  
          }
        }
        clickEvent = false;
      });

      $('#myModal').modal('show');
  });

 
  </script>
  
</body>

</html>