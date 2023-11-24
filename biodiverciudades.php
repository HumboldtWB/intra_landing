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
      <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">MENÚ
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
                <a class="dropdown-item" href="viaticos.php">Solicitud gastos de viaje</a>
                <a class="dropdown-item" href="consviatico2.php">Consultar gastos de viaje</a>
                <a class="dropdown-item" href="anticipo.php">Solicitud anticipo</a>
                <a class="dropdown-item" href="consanticipo.php">Consultar anticipo</a>
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
                <a class="dropdown-item" href="bienestar.php">Bienestar Humboldt</a>
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
        <h3>El Instituto Humboldt, comprometido con la iniciativa global de Biodiverciudades al 2030</h3>
        
        <br><br>
        <div class="img-container">
          <img src="img/noticias/2021/octubre/bio1.jpg" class="img-fluid">
        </div>
        <p class="parrafo">
          El Instituto Humboldt, desde hace aproximadamente ocho años, viene trabajando en el fortalecimiento, investigación y movilización de conocimiento 
          sobre la biodiversidad en contextos urbanos, donde se han desarrollado diferentes proyectos, publicaciones, alianzas y eventos.
        </p>
        <p class="parrafo">
          De esta manera, a inicios del 2021 se lanzó la iniciativa global de Biodiverciudades al 2030, coordinada por el Instituto Humboldt y el Foro 
          Económico Mundial, en el marco del convenio 040-2, por encargo del Departamento Administrativo de Presidencia de la República de Colombia (Dapre).
        </p>
        <p class="parrafo">
          En el marco del seguimiento de este convenio, una delegación del Instituto encabezada por el director, Hernando García, la jefe de Asuntos 
          Internacionales, Política y Cooperación, Sandra Perdomo y la profesional Senior, Cristina Gómez, visitó la sede del Foro en la ciudad de Ginebra, 
          Suiza, entre el 14 y el 16 de septiembre. 
        </p>
        <p class="parrafo">
          La reunión contó con la participación de Marina Ruta, quien es líder de la Iniciativa por parte del Foro y de Akanksha khatri, directora de la Agenda 
          Ambiental del Foro. Además se sumaron algunos jefes de otras agenda, incluyendo la jefatura de Planeación Urbana. Nicole Schwab y el fundador del Foro, 
          Klaus Schwab, fueron partícipes de esta comisión. 
        </p>
        <p class="parrafo">
          El objetivo de las sesiones fue hacer el seguimiento de cuatro temas principales:
        </p>
        <ol>
          <li>
            Publicación: documento que está en proceso de construcción con el apoyo de la Comisión Asesora Global de la iniciativa de Biodiverciudades al 2030, 
            creada en mayo del 2021 en el marco de este convenio y que reúne al menos 25 expertos internacionales alrededor de este tema.
          </li>
          <li>
            Transformation map: herramienta que describe y analiza las interdependencias del concepto de Biodiverciudades entre una amplia gama de temas, 
            ilustrando cómo los desarrollos en un área pueden impactar en otros. En este tema el Instituto ha desarrollado la estructura preliminar del Mapa de BiodiverCities.
          </li>
          <li>
            Uplink Challenge, como una herramienta que estamos desarrollando con el Foro que nos permitirá vincular a los ciudadanos en las soluciones a través de retos 
            sobre biodiversidad urbana.
          </li>
          <li>
            Posicionamiento: una estrategia de comunicaciones para promover la participación de Colombia en espacios estratégicos.
          </li>
        </ol>
        <div class="img-container">
          <img src="img/noticias/2021/octubre/bio2.jpg" class="img-fluid">
        </div>
        <p class="parrafo">
          Esta comisión dejó algunas reflexiones de importancia para quienes participaron y que desean compartir con los lectores de Ecosistema Humboldt:
        </p>
        <ol>
          <li>
            El Instituto como socio de conocimiento del Foro Económico Mundial para la iniciativa de Biodiverciudades al 2030 ha tenido un posicionamiento importante a nivel global.
          </li>
          <li>
            Hemos respondido desde el conocimiento a los retos que nos ha traído la iniciativa, pero nos han surgido nuevos. Esto nos obligan a mantener nuestros sistemas de información 
            actualizados, a hacernos nuevas preguntas de investigación, a pensar en la movilización del conocimiento y a fortalecer nuestra estrategia de relacionamiento.
          </li>
          <li>
            El Instituto debe innovar permanentemente sobre los caminos para movilizar el conocimiento y lograr un mayor impacto en la sociedad.
          </li>
          <li>
            El Instituto debe pensar siempre en cómo mejorar en su propósito de un conocimiento transformativo, un conocimiento que parte de una ciencia robusta, 
            independiente, con alto impacto e incidencia, y fácilmente apropiada. Se ha identificado que, entre otros, debemos abordar nuevas interacciones con grupos 
            de interés, que puedan recoger ese conocimiento, y mediante procesos de transformación y creación, movilizarlos como productos con alto valor 
            para la sensibilización y la transformación de la sociedad en su conexión con la naturaleza. 
          </li>
          <li>
            Esta visita fue una inspiración para seguir construyendo juntos un Instituto que esté cada vez más y mejor conectado con:
            <ol type="a">
              <li>
                Grupos de interés, tanto nacionales como globales de alto nivel y valor para la ciencia.
              </li>
              <li>
                Centros de ciencia de otros sectores.
              </li>
              <li>
                Empresa privada.
              </li>
              <li>
                Construcción de nuevos retos, nuevas preguntas de investigación desde nuevos actores y sus necesidades y la búsqueda de soluciones. 
              </li>
              <li>
                Nuevos modelos de financiación y acceso a recursos.
              </li>
            </ol>
          </li>
        </ol>

        <p class="parrafo">
          <strong>
            Por: Sandra Perdomo, jefe de la Oficina de Asuntos Internacionales, Política y Cooperación. 
          </strong>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>