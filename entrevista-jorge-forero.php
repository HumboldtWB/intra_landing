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
                    &nbsp;&nbsp;&nbsp;ENTREVISTA
                  </div>
        <a href="landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
        <br>
        <h3>Capitalino, deportista, embajador, y el experto del Instituto en Gestión Documental - ¡Conócelo!</h3>
        <br>
        <div style="text-align: center">
          <img src="img/entrevistas/jorge-forero1.jpg" width="60%"><br>
        </div>
        <br><br>
Con más de 13 años de experiencia en gestión documental y trabajando la mayor parte para entidades como el Archivo General de la Nación y el Ministerio de Cultura, Jorge llegó a ser parte del equipo Humboldt. Es profesional en Sistemas de Información, Bibliotecología y Archivística, con especialización en Gerencia de Proyectos. Entre otros cursos y diplomados realizados destaca Proyectos de Desarrollo, Inducción a los Gerentes Públicos de la Administración Colombiana, Estructura del Estado, Resolución de Conflictos, Política Pública en Gestión del Riesgo, Gestión Documental, Marcos de Referencia y Elementos de Clasificación Documental y Metodología para la Elaboración del Programa de Gestión Documental.
<br><br>
Ha trabajado también para empresas privadas, ejecutando proyectos para entidades públicas como la Agencia Nacional de Tierras y la Superintendencia de Notariado y Registro.
<br><br>
Una de las experiencia que más recuerda fue en la que lideró un proyecto de gestión documental en Santander de Quilichao (Cauca), porque fue una de las más enriquecedoras tanto profesional como personalmente.
<br><br>
Conoce al artífice de nuestra gestión documental en esta entrevista. 
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/jorge-forero2.jpg" width="60%"><br>
        </div>
        <br><br>
<strong>¿Cómo llegaste al Instituto?</strong>
<br><br>
JF: Llegué al Instituto por medio de un compañero del pregrado, quien me informó de la vacante laboral para el cargo de Profesional Junior responsable del proceso de gestión documental.
<br><br>
<strong>¿Qué es lo que más disfrutas de tu trabajo?</strong>
<br><br>
JF: El poder aplicar y poner en práctica todo lo aprendido en la academia es una de las cosas que más disfruto y que a su vez, me motivan a seguir en el proceso de formación académica.
<br><br>
<strong>¿Quién es Jorge en el Instituto Humboldt?</strong>
<br><br>
JF: Jorge es uno de los responsables de apoyar y aportar desde la formación académica y la experiencia laboral para implementar buenas prácticas de gestión documental en el Instituto.
<br><br>
<strong>¿Cuáles son tus expectativas en el Instituto?</strong>
<br><br>
JF: Mis expectativas están orientadas a seguirme formando profesionalmente, además de poder aportar para que el proceso de gestión documental en el Instituto sea un ejemplo para otros Institutos o entidades.
<br><br>
<strong>¿Cuál es el principal rasgo de tu carácter?</strong>
<br><br>
JF: Puedo mencionar la responsabilidad y lo apasionado por hacer lo que me gusta.
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/jorge-forero4.jpg" width="40%"><br>
        </div>
        <br><br>
<strong>¿Qué esperas de tus amigos?</strong>
<br><br>
JF: Responderé a esta pregunta diciendo que espero de mis amigos lo que yo les entrego a ellos: lealtad, sinceridad, incondicionalidad y diversión.
<br><br>
<strong>¿Cuál es tu ocupación favorita?</strong>
<br><br>
JF: Me gustan los videojuegos, salir a montar en bici, caminar con mi fiel compañera (Kira), estar con mi familia, ir a fútbol (capitalino y embajador), ir a conciertos (de rock and roll).
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/jorge-forero5.jpg" width="40%"><br>
        </div>
        <br><br>
<strong>¿Cuál es tu ideal de felicidad?</strong>
<br><br>
JF: Pienso que la felicidad está en uno mismo, en hacer lo que te gusta, ir a donde te gusta, comer lo que te gusta, estar con quien te gusta, vestir como te gusta y no depender de alguien para ser feliz.
<br><br>
<strong>¿Cuáles son tus intereses?</strong>
<br><br>
JF: Mis intereses en temas académicos están relacionados con gestión documental y proyectos, de otra parte, en temas de deportes me encanta el fútbol y el ciclismo, finalmente en temas de música me gustan géneros como el punk, el Oi, el punkrock, el rock and roll, el rocksteady, el jazz y el ska entre otros.
<br><br>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
