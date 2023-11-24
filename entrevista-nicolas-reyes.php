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
                    &nbsp;&nbsp;&nbsp;ENTREVISTA
                  </div>
        <a href="landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
        <br>
        <h3>NICOLÁS REYES AMAYA</h3>
        <br>
        <div style="text-align: center">
          <img src="img/entrevistas/nicolas-reyes.jpg" width="60%"><br>
        </div>
        <br><br>
Como biólogo de la Universidad Industrial de Santander (UIS) y con un doctorado en Ciencias Biológicas de la Universidad Nacional de Córdoba en Argentina, Nicolás se ha desempeñado como mastozoólogo, con una gran experiencia en curaduría de colecciones biológicas. Su vida, como él mismo la describe, ha estado marcada por la migración desde que partió de su tierra natal, Bucaramanga, hacia Bogotá y después hacia Buenos Aires, Argentina y San Miguel de Tucumán. Su migración, por supuesto voluntaria, le ha permitido explorar y conocer, algo que manifiesta le ha apasionado desde corta edad. 
<br><br>
Nicolás estuvo interesado en trabajar en el Instituto desde que conoció en 2019 la primera convocatoria para curación de mamíferos, que es un tema que le apasiona. Le  motiva pensar que es una colección con un inmenso potencial científico. Sin embargo, cuando la convocatoria se abrió, él no había culminado aún su doctorado y estuvo haciéndole seguimiento al cargo. En 2020, con gran entusiasmo aplicó a la segunda convocatoria que se abrió y para fortuna de Nicolás, y por supuesto del Instituto que hoy cuenta con su gran talento, ese cargo fue para él. 
Ha trabajado como asesor científico de la Fundación Wii y como investigador postdoctoral en el CONICET (Argentina). Sus líneas de investigación se enfocan en biología evolutiva del desarrollo, morfología funcional y evolución de pequeños mamíferos, campo en el que cuenta con 11 años de experiencia. Otros 14 años los dedicó a la ecología y la conservación del oso andino. 
<br><br>
Lo que Nicolás más disfruta de su trabajo es poder custodiar, mantener y mejorar una fuente de conocimiento tan ilimitada como una colección biológica, en este caso la colección de mamíferos. 
<br><br>
“Lo único que limita las posibilidades de uso de una colección científica es nuestra capacidad y creatividad para preguntarnos cosas, pensar en eso me emociona. Sentir que puedo ayudar a que este recurso sea cada vez más amplio y esté cada vez en mejor estado y más accesible a toda la comunidad científica y la comunidad en general, es lo que más disfruto de este trabajo”, agregó. 
<br><br>
<strong>¿Quién es Nicolás en el Instituto Humboldt?</strong>
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/nicolas-reyes2.jpg" width="60%"><br>
        </div>
        <br><br>
Es el nuevo curador de la colección de mamíferos, quien llega a organizar y posicionar una colección biológica que si bien en los últimos años ha recibido bastante atención y está en muy buen estado, requiere de mucho trabajo después de varios años de no tener un responsable directo específico.
<br><br>
<strong>¿Cuáles son tus expectativas en el Instituto?</strong>
<br><br>
Mis expectativas pasan por complementar mi formación como profesional, aprendiendo de aspectos administrativos que a veces no son el fuerte de las personas que hacemos investigación. Además de fortalecer mis capacidades investigativas mediante la generación de redes de trabajo y colaboración, no solo hacia adentro del Instituto y con los demás colegas sino hacia afuera con otras instituciones.
<br><br>
<strong>¿Cuál es el principal rasgo de tu carácter?</strong>
<br><br>
Yo creería que ser muy descompilado para algunas cosas y muy complicado para otras.
<br><br>
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/nicolas-reyes3.jpg" width="60%"><br>
        </div>
        <br><br>
<strong>¿Cuál es tu pasatiempo favorito?</strong>
<br><br>
Me gusta mucho escalar, aunque desde que empezó la pandemia solo me he dedicado a la tragación, dice entre risas. También me gusta mucho coser, como que me relaja, y recientemente me regalaron un kit de bordado, así que esa será una nueva distracción para relajarme. Ah…  y echar pola en un día caluroso con buena música.
<br><br>
<strong>¿Cuál es tu ideal de felicidad?</strong>
<br><br>
N.R.: Despegarme de las pequeñeces sin sentido que lo enredan a uno, las materiales y las no materiales, ver un poco más en paisaje las cosas de la vida y no tan en términos de lo inmediato y urgente.
<br><br>
<strong>¿Tienes un lema?</strong>
<br><br>
N.R.: La verdad, no.
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
