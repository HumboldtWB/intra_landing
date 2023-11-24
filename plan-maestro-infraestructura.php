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
                <a class="dropdown-item" href="lis_car.php">Solicitar gastos de viaje</a>
                <a class="dropdown-item" href="consviatico2.php">Consulta gastos de viaje</a>
                <a class="dropdown-item" href="anticipo.php">Solicitar anticipo</a>
                <a class="dropdown-item" href="consanticipo.php">Consultar anticipo</a>
                <a class="dropdown-item" href="gastosinvitados_nuevo.php">Solicitar gastos invitado</a>
                <a class="dropdown-item" href="conscarta_nuevo.php">Consulta gastos invitado</a>
                <a class="dropdown-item" href="sol_apolog.php">Otras solicitudes</a>

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
        <h3>PLAN MAESTRO DE INFRAESTRUCTURA</h3>
        <br>
        <strong>LA NUEVA APUESTA DEL INSTITUTO EN BIENESTAR Y SEGURIDAD</strong>
        <br><br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/febrero/plan_maestro1.jpg" width="60%"><br>
         Edificio Federico Medem- Sede Venado de Oro
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/febrero/plan_maestro2.jpg" width="60%"><br>
          Edificio Federico Medem- Sede Venado de Oro
        </div>
        <br>
Muy pronto podrás disfrutar los nuevos espacios que te ofrecerá el Instituto que actualmente se encuentran en trabajos de remodelación para contribuir con tu bienestar y generar espacios colaborativos con tus compañeros. 
<br><br>
En la sede insignia de nuestro Instituto, El Venado de Oro, se adelantan obras en el edificio Federico Medem con el objetivo de incentivar el deporte y el ciclismo entre los miembros del equipo Humboldt. Esta edificación contará con duchas que podrás utilizar en cualquier momento del día y que serán de utilidad si decides usar tu bicicleta como medio de transporte.
        <br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/febrero/plan_maestro3.jpg" width="40%"><br>
          Duchas del Edificio Federico Medem- Sede Venado de Oro
        </div>
        <br>
        Además, el año 2020 fue un año que marcó un antes y un después en los hábitos de trabajo y el Instituto no fue la excepción. Hemos acomodado nuestros espacios para invitarte a volver a nuestras sedes, bajo un refrescante ambiente colaborativo y amable para tus jornadas laborales.
        <br><br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/febrero/plan_maestro4.jpg" width="60%"><br>
          Sala de coworking - Piso 2 del Edificio Federico Medem- Sede Venado de Oro
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/febrero/plan_maestro5.jpg" width="60%"><br>
          Sala de coworking - Piso 2 del Edificio Federico Medem- Sede Venado de Oro
        </div>
		<br><br>
        De igual manera, se han dispuesto los más modernos espacios de coworking en las sedes Calle 72 y Venado de Oro en donde podrás programar reuniones presenciales o sesiones de trabajo individual, atendiendo todos los protocolos de bioseguridad.
        <br><br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/febrero/plan_maestro12.jpg" width="60%"><br>
        Sala de juntas (principal)- Sede Calle 72 
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/febrero/plan_maestro13.jpg" width="60%"><br>
        Sala de juntas 2- Sede Calle 72
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/febrero/plan_maestro6.jpg" width="60%"><br>
        Sala de Coworking 1- Sede Venado de Oro
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/febrero/plan_maestro7.jpg" width="60%"><br>
        Lockers de la sala de coworking 1- Sede Venado de Oro
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/febrero/plan_maestro8.jpg" width="60%"><br>
        Sala de Coworking 1- Sede Venado de Oro
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/febrero/plan_maestro9.jpg" width="60%"><br>
        Sala de Coworking- Edificio Mono Hernández (SUFA)
        </div>
<br>
La nueva apuesta del Instituto también incluye en la sede El Venado de Oro la adecuación del centro de almacenamiento del laboratorio e hidrobiológicos, un centro de acopio de residuos, la ampliación de nuestro laboratorio de genética y la adecuación de las duchas institucionales.  
        <br><br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/febrero/plan_maestro10.jpg" width="60%"><br>
        Laboratorios- Edificio Gloria Galeano- Sede Venado de Oro
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/febrero/plan_maestro11.jpg" width="60%"><br>
        Centro de Acopio- Sede venado de Oro
        </div>
        <br>
Todos estos proyectos se encuentran actualmente en etapa de ejecución. Más adelante se construirá el almacén institucional y el proyecto de bibliotecas y áreas lúdicas en el exterior. 
<br><br>
<div style="text-align: center; font-size:11px">
<img src="img/noticias/2021/febrero/plan_maestro14.png" width="60%"><br>
Claustro San Agustín- Sede Villa de Leyva
</div>
<br>
<div style="text-align: center; font-size:11px">
<img src="img/noticias/2021/febrero/plan_maestro15.jpg" width="60%"><br>
Claustro San Agustín- Sede Villa de Leyva
</div>
<br>
Y para nuestro claustro en Villa de Leyva, tendremos próximamente obras que prometen mejorar los espacios y contribuir a la seguridad de todos nuestros trabajadores. Próximamente, se iniciarán obras complementarias como el sistema de detección y extinción de incendios, el dermestario, la ampliación del área de conservación de alcohol y la adecuación del centro de acopio. Por supuesto, el claustro también se renovará para ofrecerte las nuevas y renovadas salas de coworking, con espacios adecuados para disfrutar plenamente de tus sesiones de trabajo. 
<br><br>
Te estaremos informando cuando las remodelaciones estén listas y puedas hacer uso del nuevo espacio Humboldt ¡Te esperamos! 
<br><br>
No olvides registrar tu visita en la intranet para autorizar tu ingreso a las sedes, y reportar tus síntomas en este <a href="sol_apolog.php">enlace</a>.



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