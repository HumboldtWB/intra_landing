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

  <!-- Custom styles for this template -->
  <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link href="css/full-width-pics.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=LAto" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-80925639-1']);
  _gaq.push(['_setDomainName', 'humboldt.org.co']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
  </script>
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
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">SIG</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="macroprocesos.php">SGC</a>
                <a class="dropdown-item" href="saludocupacional.php">SGSST</a>
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
                <a class="dropdown-item" href="viaticos.php">Solicitud gastos de viaje</a>
                <a class="dropdown-item" href="consviatico2.php">Consultar gastos de viaje</a>
                <a class="dropdown-item" href="anticipo.php">Solicitud anticipo</a>
                <a class="dropdown-item" href="consanticipo.php">Consultar anticipo</a>
                <a class="dropdown-item" href="gastosinvitados_nuevo.php">Solicitud gasto invitado</a>
                <a class="dropdown-item" href="conscarta_nuevo.php">Consultar gasto invitado</a>
				<a class="dropdown-item" href="solicitud_salas.php">Reserva de salas</a>
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
      .nav-pills > li > a  {border-radius: 0px; color: #color: #828282;}
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
        	<div class="item active" style="background-image: url('img/noticias/2021/junio/acopio4.jpeg')">
                <div class="caption">        
                  <small>Actualidad Humboldt</small><br>
                  <strong>Conoce nuestros nuevos centros de acopio</strong><br>
                  <a href="acopio.php" style="color:#93BF1F !important">Ver más</a>
              	</div>
             </div>
            
            <!-- FIN PRIMER SLIDE-->
			<!-- SEGUNDO SLIDE--> 
            <div class="item" style="background-image: url('img/noticias/2021/agosto/nota_villa3.jpg');">
                <div class="caption">           
                      <small>Actualidad Humboldt</small><br>
                      <strong>Inducciones en Villa de Leyva</strong><br>
                      <a href="notavilla.php" style="color:#93BF1F !important">Ver más</a>
                </div>
            </div>
            <!-- TERCERO SLIDE--> 
            <div class="item" style="background-image: url('img/noticias/2021/agosto/cartilla_1.png'); background-position: center center">
                <div class="caption">
                    <small>Noticias</small><br>
                    <strong>Cartilla Otras Medidas Efectivas de Conservación Basadas en Áreas (OMECs)</strong><br>
                    <a href="omecs.php" style="color:#93BF1F !important">Ver más</a>
                </div>
            </div>
            <!-- FIN TERCERO SLIDE-->

            <!--  CUARTO SLIDE--> 
            <div class="item" style="background-image: url('img/noticias/2021/agosto/ggnb_ggi.png'); background-position: center center">
                <div class="caption">
                    <small>Noticias</small><br>
                    <strong>El nuevo proyecto financiado del Instituto Humboldt</strong><br>
                    <a href="ggnb-ggi.php" style="color:#93BF1F !important">Ver más</a>
                </div>
            </div>
            <!-- FIN CUARTO SLIDE-->
        </div>

        <!-- BOTONES SLIDER-->
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-fill">
            <li data-target="#myCarousel" data-slide-to="0" class="active activadorBanner"><a href="#" style="padding:20px">Centros de acopio</a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#" style="padding:20px">Inducciones en Villa de Leyva</a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#" style="padding:20px">Cartilla OMECs</a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#" style="padding:20px">GGNB-GGI 2021</a></li>
        </ul>
    </div>
    <!-- End Carousel -->
</div>
  <script type="text/javascript">
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
}); </script>
<!-- End Slider -->
</div>
<!-- FIN DEL SLIDER-->



<!-- OPINIÓN --->
<div class="container" style="margin-top:20px;">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Opinión</h3>
        <br>
        Tu opinión siempre cuenta y este es tu espacio. Si estás interesado en escribir una columna, contáctanos  a <a href="mailto:comunicacionesinternas@humboldt.org.co">comunicacionesinternas@humboldt.org.co</a>
        <br><br>
      </div>
    
    <!-- COLUMNA DE LA SEMANA -->
      <div class="row" style="display: flex; padding: 5px; font-size: 95%;">        
        <div class="col-12 col-md-4 col-lg-4 p-3">
            <div class="Contentlanding">
                <a href="columna-grupogenero.php">
                    <div class="cajonlandingleft" style="height:230px;">
                       <div style="background-color: #113545; color: #ffffff!important; padding:5px; margin: 0px;">
                       &nbsp;&nbsp;&nbsp;COLUMNA
                    </div>
                    <div class="LineaBoletin" style="padding:15px; display: flex; align-items:center;">
                       <img src="img/columnas/foto_columna.png" style="padding-right:10px">
                       <span><strong>Grupo de Género y Equidad - Instituto Humboldt</strong> <br> <small></small></span>
                    </div>
                    <div class="ContenidoColumnaHome" style="padding-left:20px; padding-right:20px; padding-bottom:20px;">
                       <div>
                        <strong></strong>
                        <br><br>
                           El Grupo Género y Equidad lo conformamos más de 50 personas del Instituto. No tod@s participamos ...
                       </div>

                    </div>
                  </div>
              </a>
            </div>
          </div>
          <!--- FIN COLUMNA DE LA SEMANA -->


          <!--- FORO HUMBOLDT -->
          <div class="col-12 col-md-4 col-lg-4 p-3">
            <div class="Contentlanding">
              <a href="foro-humboldt.php">              
                <div class="cajonlandingmiddle" style="height:230px;">
                  <div style="background-color: #113545; padding: 30px; text-align: center">
                    <img src="img/foro.png" width="150px">
                  </div>
                  <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                    Participa y danos tu opinión.
                  </div>
                   
                </div>
              </a>
            </div>
          </div>
          <!-- FIN FORO HUMBOLDT -->

          <!-- PQRS --->
          <div class="col-12 col-md-4 col-lg-4 p-3">
            <div class="Contentlanding">
              <a href="contactenos.php" target="_blank">              
                <div class="cajonlandingright" style="height:230px;">
                  <div style="background-color: #F78015; padding: 30px; text-align: center">
                    <img src="img/pqrf.png" width="150px">
                  </div>
                  <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                    ¿Tienes algo que contarnos? ¡Ayúdanos a mejorar!
                  </div>
                   
                </div>
              </a>
            </div>
          </div>
          <!--- FIN PQRS-->

      </div>
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
              <a href="http://intranet.humboldt.org.co/banco_hv.php" target="_blank">
                <div class="cajonlandingleft" style="background-image: url('img/noticias/2021/agosto/ofertas_laborales.jpg');background-position: center center; background-size: cover !important">
                  <br><br><br><br><br><br><br><br><br><br><br><br><br>
                  
                  <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                    Banco Hojas de Vida
                  </div>
                   
                </div>
              </a>
          </div>

          <!-- CAJÓN 2-->
          <div class="col-12 p-3" style="padding: 0px !important; margin-top: 20px !important; margin-left: 0px !important; margin-right: 0px !important; ">
                <div class="Contentlanding">
                    <a href="https://drive.google.com/file/d/1y9rv9QGL8gd7sAUGfchudI7ZKovLQ9j6/view?usp=sharing" target="_blank">            
                    <div class="cajonlandingleft" style="background-image: url('img/noticias/2021/junio/bienestarcurrents.jpg');background-position: center center; background-size: cover !important">
                      <br><br><br><br><br><br><br><br><br><br><br><br><br>
                      
                      <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                        Comunidad Humboldt
                      </div>
                       
                    </div>
                  
                </div>
          </div>
        </div>

        <!-- CALENDARIO -->
        <div class="col-12 col-md-8 col-lg-8 p-3">
            <div>
            	¿Quieres compartir eventos con nosotros? ¿Vas a participar en alguno evento y crees que es de interés para la comunidad Humboldt? Envíanos toda la información con 15 días de anticipación y lo compartiremos en nuestro calendario: <a href="mailto:comunicacionesinternas@humboldt.org.co">comunicacionesinternas@humboldt.org.co</a><br>
              <a href="https://calendar.google.com/calendar/u/2?cid=Y19mMmkwbjByaHQ2b2liajZwdXRjYXI0bjNpZ0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t" target="_blank">              
                <div>                	
                  <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=America%2FBogota&amp;src=Y19mMmkwbjByaHQ2b2liajZwdXRjYXI0bjNpZ0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23C0CA33&amp;showTitle=0&amp;showDate=1&amp;showNav=0&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=1&amp;showTz=0&amp;mode=MONTH" style="border-width:0" width="100%" height="540" frameborder="0" scrolling="no"></iframe><br>Suscríbete a este calendario con tu cuenta institucional para ver todos los eventos.                                  
                </div>
              </a>
            </div>
        <!-- CALENDARIO--->


      </div>
    </div>
  </div>

<!-- Conozcámonos --->
<div class="container" style="margin-top:20px;">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Conozcámonos</h3>
        <br>Esta sección está dedicada a todos los trabajadores del Instituto. Un espacio para conocernos y reconocernos. Postula a tu candidato para entrevista en: <a href="mailto:comunicacionesinternas@humboldt.org.co">comunicacionesinternas@humboldt.org.co</a>
        <br><br>
      </div>
      
      <!-- ENTREVISTA 1-->  
      <div class="row" style="display: flex; padding: 5px">
            <div class="col-12 col-md-4 col-lg-4 p-3">
                  <div class="Contentlanding">
                    <a href="entrevista-silvia-rodriguez.php">
                      <div class="cajonlandingleft" style="background-image: url('img/entrevistas/silvia-rodriguez-portada.png');background-position: center center">
                        <br><br><br><br><br><br><br><br>
                        <div style="background-color: #696969; color: #ffffff; padding-left:10px; width:40%">
                          Entrevista
                        </div>
                        
                        <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                          Silvia Rodríguez<br>
                        </div>
                         
                      </div>
                    </a>
                </div>
            </div>
			<!-- ENTREVISTA 2-->
            <div class="col-12 col-md-4 col-lg-4 p-3">
                  <div class="Contentlanding">
                    <a href="entrevista-angela-mendoza.php">              
                      <div class="cajonlandingleft" style="background-image: url('img/entrevistas/angela-medonza-portada.jpg');background-position: center center">
                        <br><br><br><br><br><br><br><br>
                        <div style="background-color: #696969; color: #ffffff; padding-left:10px; width:40%">
                          Entrevista
                        </div>
                        
                        <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                          Ángela María Mendoza                          
                        </div>
                         
                      </div>
                    </a>
                </div>
            </div>
             <!-- ENTREVISTA 3-->
            <div class="col-12 col-md-4 col-lg-4 p-3">
                  <div class="Contentlanding">
                    <a href="entrevista-jorge-forero.php">              
                      <div class="cajonlandingleft" style="background-image: url('img/entrevistas/jorge-forero5.jpg');background-position: center center">
                        <br><br><br><br><br><br><br><br>
                        <div style="background-color: #696969; color: #ffffff; padding-left:10px; width:40%">
                          Entrevista
                        </div>
                        
                        <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                          Jorge Forero<br>
                        </div>
                         
                      </div>
                    </a>
                </div>
            </div>
      </div>
    </div>
  </div>
</a>

<!-- Recomendados--->
<div class="container" style="margin-top:20px;">
      <div class="título">
        <h3><span style="color:#113545; font-weight:800">|</span>&nbsp; Recomendados</h3>
        <br>
        Aquí podrás encontrar reseñas de artículos, películas y series además de entrevistas y reportajes relacionados con nuestro quehacer.  Recibimos tus propuestas de recomendados en: <a href="mailto:comunicacionesinternas@humboldt.org.co">comunicacionesinternas@humboldt.org.co</a>
        <br><br>
      </div>
        
      <div class="row" style="display: flex; padding: 5px">
              
            <div class="col-12 col-md-4 col-lg-4 p-3" style="height: 200px; margin-bottom:20px; font-size: 90%;">
              <div class="Contentlanding">
                <a href="http://humboldt.org.co/es/actualidad/item/1646-postales-de-la-biodiversidad" target="_blank">
                  <div class="cajonlandingright" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('http://humboldt.org.co/images/imagenes/fondos_pantalla_2021/cinaga-de-zapatosa-foto-felipe-villegas.png'); background-repeat: no-repeat; background-size: cover; height: 200px; background-position: top center">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px;">                        
                      <strong>POSTALES DE LA BIODIVERSIDAD</strong>
                      <br><br>
                      Compositores y poetas han encontrado en los ríos, humedales y ciénagas del Caribe su mayor inspiración. José Barros fue uno de ellos,...
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <div class="col-12 col-md-4 col-lg-4 p-3" style="height: 200px; margin-bottom:20px; font-size: 90%;">
              <div class="Contentlanding">
                <a href="http://humboldt.org.co/es/boletines-y-comunicados/item/1566-los-sonidos-de-la-fauna-una-herramienta-poderosa-para-monitorear-la-biodiversidad" target="_blank">
                  <div class="cajonlandingmiddle" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('http://humboldt.org.co/images/noticias/boletin_prensa/2021/130121/nota2.JPG'); background-repeat: no-repeat; background-size: cover; height: 200px; background-position: left center">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px;">                        
                        <strong>Los sonidos de la fauna: una herramienta poderosa para monitorear la biodiversidad.</strong> ï»¿
                          <br> <br>
                         Conozca el más reciente volumen de la revista Biota Colombiana.
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4 p-3" style="height: 200px; margin-bottom:20px; font-size: 90%;">
              <div class="Contentlanding">
                <a href="http://humboldt.org.co/es/boletines-y-comunicados/item/1655-convocatoria-a-jovenes-universitarios-para-monitoreo-de-la-biodiversidad" target="_blank">
                  <div class="cajonlandingright" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('http://humboldt.org.co/images/noticias/boletin_prensa/08062021/1.jpg'); background-repeat: no-repeat; background-size: cover; height: 200px; background-position: center center">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px;">                        
                        <strong>Convocatoria a jóvenes universitarios para monitoreo de la biodiversidad</strong>
                          <br> <br>
                      Esta será la segunda cohorte de estudiantes universitarios que participe del Programa Apoyos a la Investigación, el cual se desarrolla desde 2020..
                    </div>
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
                <a href="http://humboldt.org.co/es/boletines-y-comunicados/item/1662-como-crear-un-negocio-basado-en-la-naturaleza-en-colombia" target="_blank">
                  <div class="cajonlandingright" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('http://humboldt.org.co/images/documentos/pdf/300721/Foto%20portada.jpg'); background-repeat: no-repeat; background-size: cover; ; height: 200px">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px">                        
                        <strong>¿Cómo crear un negocio basado en la naturaleza en Colombia?</strong>
                        <br> <br>
                         El Real Jardín Botánico de Kew y el Instituto Humboldt lanzan hoy, en el marco del proyecto “Plantas y Hongos Útiles de Colombia”, una guía donde encontrará...
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4 p-3" style="height: 200px; margin-bottom:20px; font-size: 90%;">
              <div class="Contentlanding">
                <a href="paramos.php">
                  <div class="cajonlandingright" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('img/noticias/2021/agosto/paramos_1.png'); background-repeat: no-repeat; background-size: cover; ; height: 200px">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px">                        
                        <strong>Campaña radial Expedición Páramos</strong>
                        <br> <br>
                        El Instituto Humboldt apoya la iniciativa de Caracol Radio y Bavaria de recorrer algunos páramos de Colombia para explicar de forma sencilla....
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <div class="col-12 col-md-4 col-lg-4 p-3" style="height: 200px; margin-bottom:20px; font-size: 90%;">
              <div class="Contentlanding">
                <a href="http://humboldt.org.co/es/boletines-y-comunicados/item/1658-grave-deterioro-de-la-biodiversidad-nacional-pone-en-riesgo-la-vida-en-colombia" target="_blank">
                  <div class="cajonlandingright" style="width:100%; height: 200px">
                    <div style="width:50%; float: left; background-image: url('http://humboldt.org.co/images/noticias/boletin_prensa/290621/1%20(2).jpg'); background-repeat: no-repeat; background-size: cover; ; height: 200px">
                    </div>
                    <div style="width:50%; padding:10px; float: left; height: 200px">                        
                        <strong>Grave deterioro de la biodiversidad nacional pone en riesgo la vida en Colombia</strong> 
                        <br> <br>
                        A esta conclusión llegó un grupo de más de 100 expertos temáticos y sabedores de pueblos y comunidades indígenas...
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
        <h3><span style="color:#93BF1F; font-weight:800">|</span>&nbsp; Multimedia</h3>
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
                 		<video src="reposteria_canina.mp4" poster="images/alimentacion_canina.png" width="100%" height="480" controls>
                		</video>
            		</div>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-4 p-3">
            <div class="Contentlanding">
            <a href="galeria-insectos.php">              
                    <div class="cajonlandingright" style="background-image: url('img/galerias/insectos/insectos_2.jpg');background-position: center center; background-size: cover">
                      <br><br><br><br><br><br><br><br><br><br>
                      
                      <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                        <i>Galería AGUAZUL - Insectos</i>
                      </div>
                    </div>
                  </a>
          	</div>
            <div class="col-12 p-3" style="padding: 0px !important; margin-top: 20px !important; margin-left: 0px !important; margin-right: 0px !important;">
                <div class="Contentlanding">
                <a href="galeria_aves.php">              
                    <div class="cajonlandingright" style="background-image: url('img/galerias/aves/aves_4.jpg');background-position: center center; background-size: cover">
                      <br><br><br><br><br><br><br><br><br><br>              
                      <div style="background-color: #ffffff; color: #363636!important; padding:5px; margin: 0px;">
                        <i>Galería AGUAZUL - Aves</i>
                      </div>
                    </div>
              </a>  
                </div>
             </div>
        </div>
        <div style="background-color: #ffffff; color: #363636!important; padding:20px; margin: 0px;">Agregar texto  ¿Te perdiste las píldoras de TRANSFORMACIÓN INSTITUCIONAL? <a href="https://drive.google.com/file/d/1pJD5iBqt4ZVPmQ781hF_sZqVXXhK0F3T/view?usp=sharing" target="_blank"> Haz clic aquí y descarga el video</a>
          </div>
        <div style="background-color: #ffffff; color: #363636!important; padding:20px; margin: 0px;">Agregar texto  ¿Te perdiste las iniciativas de TRANSFORMACIÓN INSTITUCIONAL? <a href="https://drive.google.com/file/d/1agkyTcfB-ekiJgPyU7kXgJ0_Th3ot5Lj/view?usp=sharing" target="_blank"> Haz clic aquí y descarga el video</a>
          </div>
        <div style="background-color: #ffffff; color: #363636!important; padding:20px; margin: 0px;">Agregar texto  ¿Te perdiste la primera clase de repostería canina y felina? <a href="https://drive.google.com/file/d/1jzODRyNhqV6jorj_Xz94wxZ9a6muESJ8/view?usp=sharing" target="_blank"> Haz clic aquí y descarga el video</a>
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
          <iframe src="https://open.spotify.com/embed-podcast/episode/3W1as0hB8T7899o7nfV33H" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          <br><a href="https://open.spotify.com/episode/3W1as0hB8T7899o7nfV33H" target="_blank">Ver la lista de podcast completa</a>
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
                  width: 60% !important;
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
              <div id="mc_embed_signup">
              <form action="http://eepurl.com/cujs7P" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                  <div id="mc_embed_signup_scroll">
                
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Correo electrónico" required style="background-color:#e6e6e6;border-radius: 5px 5px 5px 5px;">
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8b7b6e645360b5ca05e9feecf_89ba7c353a" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color:#113545;text-transform: capitalize; border-radius: 5px 5px 5px 5px;padding-left: 10px;"></div>
                  </div>
              </form>
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

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
