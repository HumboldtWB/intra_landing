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
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>  
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
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>  
</head>

<body style="font-size: 1.5em">

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
              </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- CONTENIDO DE LA ENTREVISTA -->
  <section style="padding-bottom:200px; text-align: justify">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 prologo">
          <div style="background-color: #696969; color: #ffffff!important; padding:5px; margin: 0px; margin-bottom:20px">
                    &nbsp;&nbsp;&nbsp;NOTICIAS
                  </div>
        <a href="landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
        <br>
        <h3>Descubre cómo el quehacer del Instituto Humboldt aportó en la gestión integral de la biodiversidad en 2021</h3>
        
        <br>
                
        <p class="parrafo">
          <i>En el portal ¿En qué anda el Humboldt? usted podrá conocer los proyectos e iniciativas desarrollados por el Instituto en el 2021 y 
            que generaron conocimiento sobre biodiversidad para la toma de decisiones informada.
          </i>
        </p>
        <p class="parrafo">
          El conocimiento científico generado desde el Instituto Humboldt entrega insumos, información y datos para el desarrollo sostenible del país. 
          Un trabajo que no solo contempla la biodiversidad, sino también aspectos sociales, económicos y culturales que sirven para la toma de decisiones 
          y la gestión integral de los ecosistemas.
        </p>
        <p class="parrafo">
          En el portal <a href="http://humboldt.org.co/enqueandaelhumboldt/index.html" target="_blank" rel="noopener noreferrer">¿En qué anda el Humboldt?</a> usted podrá conocer algunos de los proyectos desarrollados desde el Instituto el año pasado y cómo 
          estos se articulan con los objetivos del Plan Institucional Cuatrienal de Investigación Ambiental (PICIA) y a su vez contribuyen con la configuración 
          del Plan Estratégico Nacional de Investigación Ambiental (PENIA), el plan de trabajo proyectado al 2030 propuesto por el Sistema Nacional Ambiental (SINA). 
        </p>
        
        <video src="http://humboldt.org.co/enqueandaelhumboldt/videos/informe.mp4" poster="img/portada.jpg" width="50%" height="480" controls style="margin:0 auto;display:block">
        </video>
        
        <p class="parrafo">
          Durante el 2021, el Instituto firmó 31 nuevos convenios y celebró contratos con más de 80 organizaciones en el país. 
          Estos convenios sumados a los 29 proyectos existentes, consolidaron un total de 60 proyectos, los cuales movilizaron más de 60.000 millones de pesos. 
          En cuanto a la  producción científica, técnica y divulgativa el Instituto generó 83 artículos científicos y 44 libros.
        </p>
        <p class="parrafo">
          Lo invitamos a navegar el portal, explorar cada uno de los objetivos y conocer los proyectos e iniciativas desarrollados 
          desde el Instituo Humboldt que generaron conocimiento sobre biodiversidad para la toma de decisiones informada. 
        </p>
        <h3>Objetivos:</h3>

        <ol>
          <li>Sostenibilidad <br>
              <ul>
                <li>Proyecto Expedición BIO: Alas, cantos y colores. </li>
                <li>Red Nacional de Viveros.</li>
                <li>Metas en restauración.</li>
              </ul>
          </li>
          <li>Competitividad y bioeconomía <br>
              <ul>
                <li>Proyecto Plantas y hongos útiles de Colombia</li>
                <li>Innovación social en torno a la biodiversidad - Samper Mendoza</li>
                <li>El Naidí y sus redes asociadas de valor.</li>
              </ul>
          </li>
          <li>Ética y apropiación social del conocimiento <br>
              <ul>
                <li>Somos historias.</li>
                <li>Días de cámaras trampa.</li>
                <li>Monitoreo participativo de la biodiversidad en Río Claro, Antioquia.</li>
              </ul>
          </li>
          <li>Regionalización <br>
              <ul>
                <li>Seaflower Plus 2021.</li>
                <li>Moniteoreo de Biodiversidad en Lizama (Santander).</li>
                <li>Encuentro con Corporaciones Autónomas Regionales.</li>
              </ul>
          </li>
          <li>Democratización del conocimiento <br>
              <ul>
                <li>SiB Colombia.</li>
                <li>BioModelos.</li>
                <li>Red eBird.</li>
              </ul>
          </li>
          <li>Desarrollo organizacional <br>
              <ul>
                <li><strong>#ElHumboldtSoyYo:</strong> A partir del 2020, el Instituto inició un proceso de transformación organizacional que incluye un cambio cultural, 
                  creación de nuevos cargos, procedimientos y áreas que soportan el engranaje que requiere esta transformación. 
                  Para conocer este proceso  en el portal se encuentran videos de los trabajadores del Instituto hablando sobre su participación en cada una de las áreas.  
                </li>                
              </ul>
          </li>
        </ol>
        <p class="parrafo">
          Puedes revisar el <a href="http://humboldt.org.co/enqueandaelhumboldt/" target="_blank" rel="noopener noreferrer">informe completo aqui</a>
        </p>
                        
                
        
        
        
        <div style="right: 10px; bottom:10px; position: fixed; opacity:0.8"><a href="#"><img src="img/botonSubir.png" width="80px"></a></div>
    </div>
  </section>

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $('.slide-noticia').slick({
      autoplay:true,
      arrows: true,
      prevArrow:"<img src='img/prev.png' width='40'>",
      nextArrow:"<img src='img/next.png' width='40' class='next'>",
      adaptiveHeight: true,
      responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false,          
        }
      },
      ]
    });
  </script>
</body>

</html>