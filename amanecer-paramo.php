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
  <link href="https://fonts.googleapis.com/css2?family=LAto" rel="stylesheet">
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


  <!-- Columna -->
  <section style="padding-bottom:200px; text-align: justify">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 prologo">
          <div style="background-color: #696969; color: #ffffff!important; padding:5px; margin: 0px; margin-bottom:20px">
                    &nbsp;&nbsp;&nbsp;EVENTOS
                  </div>
        <a href="landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
        <br>
        <h3>AMANECER EN EL PÁRAMO</h3>

        <br><br>
        <div style="text-align: center">
          <img src="img/noticias/2021/febrero/paramos2.jpg" width="100%"><br>
        </div>
        <br><br>

Amanecer en la alta montaña puede ser frío y nublado, pero el encanto de sus paisajes hará que valga la pena. Este es un ecosistema del que solemos estar muy orgullosos… 
<br><br>
Hablamos de los páramos. ¿Qué tanto los conocemos y por qué debemos conservarlos? 
<br><br>
Conservamos lo que conocemos, por eso desde el Instituto Humboldt hemos hecho de los páramos uno de los mejores escenarios para redescubrir entre todos su biodiversidad y riqueza cultural que nos sorprende cada día más.
<br><br>
Lo invitamos a un viaje por los páramos de nuestro país. Serán tres días en los que nos sumergiremos en las particularidades de su flora, así como en su magia a la hora de garantizar, entre otras cosas, nuestro suministro de agua. Sin dejar de lado el papel de las comunidades que históricamente los han habitado. 
<br><br>
Son 37 complejos de páramos que debemos cuidar, garantizando su adecuada conservación. Aquí le contaremos todo lo que tiene que saber sobre estos estratégicos ecosistemas.  
<br><br>
¡Póngase la ruana y acompáñenos a hablar de páramos en Colombia!
<br><br>

<STRONG>Agenda </STRONG>
<br><br>
Día 1<BR> 
En qué vamos con los páramos en Colombia<br>
Miércoles 10 de marzo de 2021<br>
Hora: 3:00 p.m.<br>
<br><br>
Invitados:
<br>
Hernando García - Director General del Instituto Humboldt<br>
Fabio Guerrero - Secretario de Ambiente y Desarrollo Sostenible de Boyacá<br>
Tobias Biermann - Agregado para Ambiente, Clima y Empleo en la Delegación de la Unión Europea en Colombia<br>
Mónica Trujillo - Investigadora asociada en bioeconomía del Stockholm Environment Institute - SEI<br>
<br><br>
Modera: Ruby Marcela Pérez - Directora de la Oficina de Comunicaciones del Instituto Humboldt 
<br><br>

Día 2 <br>
Experiencias de conservación: Habla la gente del páramo<br>
Jueves 11 de marzo de 2021<br>
Hora: 10:00 a.m. <br>
<br>
Invitados: 
<br>
Patricia Velasco-Linares - Bióloga. CEO de Bosques y Semillas S.A. <br>
Luz Marina Martínez - Viverista: Nativo de Ticha, municipio de Guachetá, Cundinamarca.<br>
Camilo Rodríguez - Investigador del proyecto Páramos, Biodiversidad y Recursos Hídricos en las Andes del Norte<br>
<br><br>

Modera: Carolina Soto - Líder de la línea de diálogo de saberes y ciencia participativa del Instituto Humboldt. <br>
<br><br>

Día 3<br>
¿Frailejón o quiche? Conozca la flora del páramo y arme su expedición<br>
Viernes 12 de marzo de 2021<br>
Hora: 10:00 a.m. 
<br><br>
Invitados:
<br>
Amalia Díaz - Líder del Herbario del Instituto Humboldt <br>
Carolina Castellanos - Líder de la línea de gestión de especies de interés del Instituto Humboldt <br>
Camila Pizano - Profesora Asociada y Directora del Herbario Icesi <br>
<br><br>
Modera: Sindy Martínez - Investigadora de la línea de Ciencias Sociales y Saberes de la Biodiversidad del Instituto Humboldt.
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
