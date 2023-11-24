<?php
header("Access-Control-Allow-Origin: '*' ");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
//session_start();

//$correo=$_SESSION["correo"]; 
//include_once("includes/session.php");
//include_once("includes/conectar_ext.php");
date_default_timezone_set('America/Bogota');
setlocale(LC_TIME, 'es_CO.UTF-8');
$bus_por = 0;
$bus_inv = 0;
//$bus_por = $_POST["bus_por"];
//$bus_inv = $_POST["bus_inv"];

//$res = mysql_query("SELECT * FROM investigadores WHERE str_cor = '$correo' LIMIT 0 , 1");
//$row_usu = mysql_fetch_array($res);
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
  <link rel="stylesheet" id="mec-select2-style-css" href="http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/packages/select2/select2.min.css?ver=6.1.6" media="all">
  <link rel="stylesheet" id="mec-font-icons-css" href="http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/css/iconfonts.css?ver=5.8.2" media="all">
  <link rel="stylesheet" id="mec-frontend-style-css" href="http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/css/frontend.min.css?ver=6.1.6" media="all">
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
        
        <br><br>
        
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="img/noticias/2021/diciembre/amable.jpeg" alt="" class="img-fluid d-block mx-auto" style="max-width: 400px;">              
            </div>
            <div class="col-md-6">
              <img src="img/noticias/2021/diciembre/bondad.jpeg" alt="" class="img-fluid d-block mx-auto" style="max-width: 400px;">
            </div>
            
          </div>
        </div>

        <h3 class="text-center">Calendario de planeación Institucional</h3>

        <div id="calendario"></div>
       
        <div class="container">
          <div class="row">
            
          </div>
        </div>

        
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/js/mec-general-calendar.js?ver=6.2.0' id='mec-general-calendar-script-js'></script>
  <script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/js/frontend.js?ver=6.2.0' id='mec-frontend-script-js'></script>
<script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/js/events.js?ver=6.2.0' id='mec-events-script-js'></script>
<script id='mec-frontend-script-js-extra'>
var mecdata = {"day":"d\u00eda","days":"d\u00edas","hour":"hora","hours":"horas","minute":"minuto","minutes":"minutos","second":"segundo","seconds":"segundos","elementor_edit_mode":"no","recapcha_key":"","ajax_url":"http:\/\/186.155.244.59:575\/intranet\/wp-admin\/admin-ajax.php","fes_nonce":"b380fe9dd3","current_year":"2021","current_month":"12","datepicker_format":"yy-mm-dd"};
</script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src='http://186.155.244.59:575/intranet/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script src='http://186.155.244.59:575/intranet/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.12.1' id='jquery-ui-datepicker-js'></script>
<script id='jquery-ui-datepicker-js-after'>
$(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Cerrar","currentText":"Hoy","monthNames":["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"],"monthNamesShort":["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],"nextText":"Siguiente","prevText":"Previo","dayNames":["domingo","lunes","martes","mi\u00e9rcoles","jueves","viernes","s\u00e1bado"],"dayNamesShort":["dom","lun","mar","mi\u00e9","jue","vie","s\u00e1b"],"dayNamesMin":["D","L","M","X","J","V","S"],"dateFormat":"d MM, yy","firstDay":1,"isRTL":false});});
</script>
<script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/js/jquery.typewatch.js?ver=6.2.0' id='mec-typekit-script-js'></script>
<script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/packages/featherlight/featherlight.js?ver=6.2.0' id='featherlight-js'></script>
<script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/packages/select2/select2.full.min.js?ver=6.2.0' id='mec-select2-script-js'></script>
<script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/packages/tooltip/tooltip.js?ver=6.2.0' id='mec-tooltip-script-js'></script>
<script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/packages/lity/lity.min.js?ver=6.2.0' id='mec-lity-script-js'></script>
<script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/packages/colorbrightness/colorbrightness.min.js?ver=6.2.0' id='mec-colorbrightness-script-js'></script>
<script src='http://186.155.244.59:575/intranet/wp-content/plugins/modern-events-calendar-lite/assets/packages/owl-carousel/owl.carousel.min.js?ver=6.2.0' id='mec-owl-carousel-script-js'></script>
  <script>
    $( "#calendario" ).load( "http://186.155.244.59:575/intranet/ .entry-content" );
  </script>
  <script src='http://186.155.244.59:575/intranet/wp-content/themes/generatepress/assets/js/menu.min.js?ver=3.1.0' id='generate-menu-js'></script>
  <script src='http://186.155.244.59:575/intranet/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>
  
  
</body>

</html>