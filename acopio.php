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
        <h3>Palmira, el custodio de riqueza natural del Instituto Humboldt</h3>
        <br><br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/septiembre/tejidos8.png" width="60%"><br>
        </div>
        <br>
El área de Logística, con el apoyo de Gestión Humana y la  Oficina de Planeación, lleva desde 2019 trabajando en el proyecto para la disposición adecuada y el aprovechamiento de los residuos y ahora pueden verse los resultados con la instalación de los nuevos centros de acopio en la sede Venado de Oro.
<br><br>
Estos centro de acopio están disponibles desde marzo de 2020 y, ahora que estamos en proceso de retorno a nuestras sedes físicas, se ha desarrollado una serie de capacitaciones sobre el uso de los centros con nuestro proveedor de aseo y cafetería (Mundo Limpieza), el área de Salud y Seguridad en el Trabajo de Gestión Humana y la Oficina de Planeación. Próximamente estará disponible para todos los colaboradores del Instituto, con el objetivo de que conozcamos el uso correcto de los espacios y cómo podemos aprovechar mejor los que son reutilizables.
        <br><br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/junio/acopio2.jpeg" width="60%">
        </div>
        <br>
        En cada centro de acopio podrás encontrar debidamente marcado el lugar correcto para depositar los residuos aprovechables y no aprovechables, y aquellos que son de riesgo biológico para seguir cuidándonos de la COVID-19.
        <br><br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/junio/acopio3.jpeg" width="60%">
        </div>
		<br><br>
        Así como se llevó a cabo este proyecto en Bogotá, la sede de Villa de Leyva se alista para contar también con estos espacios que nos permiten cumplir con nuestro objetivo institucional de cuidar la biodiversidad y aprovechar nuestros recursos, explotando al máximo el potencial de todos los elementos que empleamos en función de nuestro trabajo.
        <br><br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/junio/acopio4.jpeg" width="60%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/junio/acopio5.jpeg" width="60%">        </div>
<br>
Te estaremos comunicando todas las novedades sobre este y otros proyectos que hacen parte nuestro <strong> Plan Maestro de infraestructura.</strong>
            <br></br>
                <div style="right: 10px; bottom:10px; position: fixed; opacity:0.8"><a href="#"><img src="img/botonSubir.png" width="80px"></a></div>
            <div class="media-wrapper">
                <video src="centro_acopio.mp4" poster="images/centro_acopio.png" width="100%" height="480" controls>
                </video>
            </div>
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
