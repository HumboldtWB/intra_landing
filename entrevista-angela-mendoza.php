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
        <h3>UNA VIDA DEDICADA A LA INVESTIGACIÓN DE SONIDOS DE ANFIBIOS: CONOCE A ÁNGELA MARÍA MENDOZA</h3>
        <br>
        <div style="text-align: center">
          <img src="img/entrevistas/angela-mendoza1.jpg" width="40%"><br>
        </div>
        <br><br>
Ángela es una bióloga caleña interesada en múltiples temas relacionados con ecología y evolución de vertebrados terrestres. Es egresada de la Universidad del Valle (Cali), viajó a México dos veces para hacer sus estudios de posgrado en Ciencias Biológicas en la Universidad Nacional Autónoma de México, hizo su maestría con énfasis en Ecología sobre patrones de diversidad y endemismo en ranas de cristal entre el 2011 y el 2013, y el doctorado en Biología Evolutiva sobre la relación entre las relaciones filogenéticas y el ambiente en los cantos reproductivos de ranas entre 2016 y 2020. 
<br><br>
Por cosas del destino terminó adquiriendo más experiencia en anfibios y ese ha sido su grupo de estudio para la mayoría de su investigación.
<br><br>
En 2018 fundó, con otras cuatro compañeras, el colectivo Mujeres en la Ciencia Colombia, con quienes ha aprendido sobre el tema de ciencia y género, y ha organizado y participado en varios eventos a nivel nacional y regional. 
<br><br>
Conoce un poco más sobre ella y sus experiencias en esta entrevista de Ecosistema Humboldt.  
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/angela-mendoza2.jpg" width="60%"><br>
        </div>
        <br><br>
<strong>¿Cómo llegaste al Instituto?</strong>
<br><br>
AM: Esta es mi segunda vez en el instituto. La primera vez, entre el 2013 y 2015, estuve trabajando en el Laboratorio de Genética de la Conservación en la sede Palmira (sí, Humboldt tiene una sede en Palmira) por medio de una convocatoria abierta que salió en las fechas que estaba terminando mi Maestría. Recuerdo que la entrevista fue la misma semana que mi defensa de tesis, así que estaba súper nerviosa. Ahora hago parte del equipo de la Colección de Sonidos, en donde estoy vinculada como investigadora posdoctoral.
<br><br>
<strong>¿Qué es lo que más disfrutas de tu trabajo?</strong>
<br><br>
AM: La diversidad de oportunidades en las que puedo trabajar. Una cosa que me gusta mucho es poder participar en proyectos de múltiples organismos de estudio. No solo las ranas con las que he venido trabajando mayormente sino con temas de aves, mamíferos e insectos (por mencionar algunos) me parece muy enriquecedor. También me gusta mucho saber que puedo participar de manera directa en temas de divulgación desde Colecciones Biológicas.
<br><br>
<strong>¿Quién es Ángela en el Instituto Humboldt?</strong>
<br><br>
AM: Soy la primera investigadora posdoctoral que hace parte de la Colección de Sonidos y dentro del equipo podría decir que soy una persona dispuesta a brindar todo el apoyo posible en múltiples temas.
<br><br>
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/angela-mendoza3.jpg" width="60%"><br>
        </div>
        <br><br>
<strong>¿Cuáles son tus expectativas en el Instituto?</strong>
<br><br>
AM: Me gustaría hacer todo lo posible por fortalecer la colección de sonidos, que no solo en el instituto sino por fuera aprecien lo que tenemos salvaguardado.
<br><br>
<strong>¿Cuál es el principal rasgo de tu carácter?</strong>
<br><br>
AM: Podría considerarme una persona calmada, fácil de tratar y decidida.
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/angela-medonza4.jpg" width="60%"><br>
        </div>
        <br><br>
<strong>¿Cuál es tu ocupación favorita?</strong>
<br><br>
AM: Me gustan muchas cosas asociadas a la tecnología y me gusta poder aplicar esos conocimientos en mi trabajo. Me encanta viajar (cosa que se me ha limitado mucho por la pandemia) y tomar fotos. Me encantan las historias, provengan de series, películas, libros o anécdotas.
<br><br>
<strong>¿Cuál es tu ideal de felicidad?</strong>
<br><br>
AM: Sonreír de manera espontánea cuando estás en un momento donde realmente no está pasando nada particular o excepcional. Por ejemplo, caminando al trabajo o descansando en casa. Si en ese momento uno sonríe “porque sí” significa que las cosas van por buen camino.
<br><br>
<strong>¿Tienes un lema?</strong>
<br><br>
AM: El “hubiera” no existe.
<br><br>
Ángela está interesada en temas de mascotas, naturaleza, cocina y tecnología, así que aprovechamos para invitarla e invitarte a ti, que lees esta entrevista, a buscar los grupos de currents que son de tu interés, donde estaremos enviando información y haciendo nuevas actividades de integración ¡Te esperamos!
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
