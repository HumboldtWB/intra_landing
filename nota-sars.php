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
        <h3>El Instituto Nacional de Salud otorgó reconocimiento al Instituto Humboldt por su contribución a la caracterización genómica del SARS-CoV-2</h3>
        
        <br><br>
        <div class="img-container">
          <img src="img/noticias/2022/nicolas.jpg" alt="foto nicolas">
          <figcaption>Nicolás Franco</figcaption>
        </div>
        
        
        <p class="parrafo">
          Cuando la pandemia por covid-19 llegó a Colombia, pocas instituciones estaban provistas con las instalaciones y los equipos para ayudar a contrarrestar 
          esta problemática de salud pública. El Instituto Humboldt era una de las entidades que contaba con los recursos que permitían la secuenciación del 
          ADN en periodos cortos de tiempo y puso su capacidad para realizar dicha labor.
        </p>
        <p class="parrafo">
          En marzo del 2020,  transitaba por el primer confinamiento, el cierre de fronteras y la escasez de insumos de biología molecular y era necesario empezar los 
          estudios genómicos a nivel nacional de SARS-CoV-2 (agente causal del Covid-19).Por está razón, el Instituto Nacional de Salud (INS), 
          se contactó con el Instituto para solicitar apoyo técnico-científico para esta tarea. 
        </p>
        <p class="parrafo">
          El Instituto Humboldt atendió el llamado, y puso a disposición del INS los equipos de secuenciación MinION (Oxford Nanopore Technologies), 
          insumos y personal de investigación del equipo de genética. De este modo el Instituto Humboldt contribuyó, junto con el INS y la UCC en la 
          generación de la primera secuencia genómica de SARS-CoV-2 del país, y de esta manera aportar a los primeros reportes,  
          sobre los linajes de este virus en el país. Además, nuestro equipo investigador fue pionero en el proceso de secuenciación y nuestro investigador 
          Nicolás Franco capacitó al personal de salud al inicio de la pandemia en el uso de la tecnología de secuenciación MinION.
        </p>
        <div class="img-container">
          <img src="img/noticias/2022/diploma1.jpg" alt="foto certificado al instituto humboldt">
          <figcaption>Instituto Humbold - Socio colaborador</figcaption>
        </div>
        <p class="parrafo">
          Es importante resaltar que en la secuenciación de material genético se determina el orden de los componentes básicos del ADN, 
          llamados nucleótidos, los cuales son: adenina, citosina, guanina, y timina. En el caso del SARS-CoV-2, este trabajo permite reconocer las 
          mutaciones e identificar los linajes en circulación y, además, brinda información para la toma de decisiones en salud pública.
        </p>
        <p class="parrafo">
          El Instituto Humboldt y su equipo de investigación en genética participó de lo que hoy se conoce como La Red de Vigilancia Genómica de SARS-CoV-2, 
          liderada por el INS y junto con otras 21 entidades, entre las que se encuentran centros de investigación, universidades y 
          laboratorios departamentales de salud pública trabajan en la  generación periódica de genomas de SARS-CoV-2 en el país. 
          Desde noviembre del 2021 hasta el momento, el Instituto Humboldt reportó 490 genomas en la base de datos pública internacional GISAID, 
          dentro del marco de la red,  y continúa hasta el día de hoy con más procesamientos de muestras.
        </p>
        <p class="parrafo">
          El pasado 5 de abril, en conmemoración a los 2 años de la generación de la primera secuencia de SARS-CoV-2, 
          el Instituto Nacional de Salud inauguró su laboratorio de genómica, con el apoyo del Ministerio de Salud, Ministerio de Ciencias y otras entidades. 
          En esta ceremonia el Instituto Humboldt fue reconocido por su aporte al inicio de la pandemia y su trabajo dentro de la red.
        </p>
        <div class="img-container">
          <img src="img/noticias/2022/diploma2.jpg" alt="foto certificado al instituto humboldt - miembro de programa">
          <figcaption>Instituto Humbold - Miembro del Programa Nacional de caracterización Genómica</figcaption>
        </div>
        <p class="parrafo">
          Gracias a este arduo trabajo, durante esta ceremonia,el Instituto Humboldt recibió tres reconocimientos por parte del INS. 
          El primero al Laboratorio de Genética del Instituto como miembro del Programa Nacional de Caracterización Genómica del SARS-CoV-2. 
          El segundo, por su contribución como socio colaborador en la implementación del Laboratorio Nacional de Genómica del Instituto Nacional de Salud. 
          Y finalmente, el tercer reconocimiento fue para el investigador Nicolás Franco por su aporte en la primera secuenciación de marzo del 2020. 
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