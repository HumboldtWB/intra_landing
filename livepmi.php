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
        <h3>LIVE PMI</h3>

        <br>
        <strong>Así se vivió el primer LIVE del Instituto Humboldt: Plan Maestro de Infraestructura</strong>
        <br><br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/mayo/live_1.jpeg" width="60%"><br>
        </div>
        <br>
Desde una de las salas remodeladas de coworking de la Sede Venado de Oro en Bogotá, nuestro director General, Hernando García y el subdirector Financiero y Administrativo, Marcelo Betancur, dieron a conocer el pasado 29 de abril, a través de un live, el propósito del Plan Maestro de Infraestructura y los cambios que se avecinan en las diferentes sedes del Instituto, tanto en Bogotá como en Villa de Leyva. 
<br><br>
El objetivo de convocar a los colaboradores fue darles a conocer la manera en la que funcionarán los nuevos espacios y resolver todas las inquietudes que pudieran tener acerca de los procesos, elementos, mobiliarios y funcionamiento de las salas, duchas, laboratorios, centros de acopio, entre otros. La mayoría de las preguntas estuvieron relacionadas con el aforo y ubicación de los puestos de trabajo, con la famosa huerta de la Sede Venado de Oro, que será un objetivo común en temas de su ubicación y nuevo propósito, las nuevas duchas, los parqueaderos, los equipos y la cabaña.
        <br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/mayo/Comentarios-01.png" width="40%">
        </div>
        <br>
        Con la participación de más de 150 trabajadores, los directivos hablaron de nuestro propósito en la organización y sobre cómo algo tan básico, pero fundamental como la infraestructura nos ayuda a encaminarnos y a conectar todas las áreas del  Instituto, objetivo al que le apuntaba Hernando García desde sus inicios como director del Humboldt y un sueño al que se han unido los colaboradores del Instituto y quienes han trabajado arduamente en la construcción de nuestros nuevos espacios de innovación, cocreación y trabajo interdisciplinar.
        <br><br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/mayo/Comentarios-02.png" width="40%">
        </div>
        <br>
        <div style="text-align: center; font-size:11px">
          <img src="img/noticias/2021/mayo/Comentarios-03.png" width="40%">
        </div>
		<br><br>
        Entre otros temas, se habló también de las rutas que llevarán al Instituto, los lockers de las sedes, el destino de la sede calle 28 y el mecanismo de reserva de las salas y puestos de trabajo. Ten en cuenta que este último podrás hacerlo a través de la Intranet en: <a href="http://intranet.humboldt.org.co/ingreso_sedes.php" target="_blank">http://intranet.humboldt.org.co/ingreso_sedes.php</a>
        <br><br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-04.png" width="40%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-05.png" width="50%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-06.png" width="20%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-07.png" width="20%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-08.png" width="20%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-09.png" width="20%">        </div>
<br>
Durante el evento se recibieron varios mensajes positivos por parte de los colaboradores y que significan una gran recompensa para los equipos involucrados en este gran proyecto que impacta a todo el Instituto, que motiva a seguir trabajando en la consecución de las metas que hoy nos plantea este plan maestro de infraestructura, y que tiene la misión de volver a reunirnos para trabajar articulados en el cumplimiento de nuestros objetivos institucionales.  
        <br><br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-10.png" width="20%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-11.png" width="20%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-12.png" width="40%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-13.png" width="20%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-14.png" width="20%">        </div>
        <br>
        <div style="text-align: center; font-size:11px">
        <img src="img/noticias/2021/mayo/Comentarios-15.png" width="20%">        </div>
        <br>
Adicionalmente, los directivos respondieron las preguntas que surgieron a lo largo de nuestro encuentro. Te dejamos algunas para que conozcas más sobre este gran proyecto: 
<br>
<br>
<strong> P: ¿Qué pasa con las personas que no optan por el teletrabajo? </strong>
<br>
<strong>R:</strong> Las sedes del Instituto están siendo diseñadas con espacios para coworking, de manera que aquellos que vayan a trabajar a la oficina tengan la opción de encontrar puestos de trabajo en cualquiera de las zonas que hemos habilitado bajo esta modalidad. En cada uno de estos espacios podrán encontrar mesas para trabajos que requieran mayor personalización o mesas con capacidad para una mayor cantidad de personas. Las mesas fueron diseñadas con una mayor amplitud que permiten usar varios elementos de trabajo al mismo tiempo y las zonas de coworking están habilitadas con tableros y televisores rodantes, de manera que sean espacios interactivos que permitan trabajar de forma individual y colectiva.
<br><br>
<strong> P: ¿Cómo funcionará la ruta al Venado de Oro? </strong>
<br>
<strong>R:</strong> Una vez las condiciones de la emergencia económica por el tema del COVID-19 mejoren y
podamos estar tranquilos para que el retorno a las oficinas del personal del Instituto sea seguro, se habilitará la ruta hacia la sede Venado de Oro. El objetivo es tener dos rutas en la mañana y dos en la tarde y, dependiendo de la demanda, las organizaremos para que salgan desde la sede de la Calle 72 y desde la sede de la Calle 28.
<br>
En el live que hicimos hablamos de la sede de la Calle 28 y notificamos a todos los trabajadores que se encuentra en proceso de venta, teniendo en cuenta que existe un riesgo implícito para tomar el transporte público por temas de seguridad y movilidad, y así mismo para quienes salen al parqueadero a buscar su automóvil. Adicionalmente, la sede no cuenta con los espacios adecuados para temas de almacenamiento, lo que pone en riesgo los elementos y documentos que allí se albergan, cuando en épocas de lluvia se producen inundaciones que también tienen incidencia en la planta eléctrica, poniendo en riesgo el funcionamiento adecuado del Datacenter. La venta de la sede es un proceso que toma tiempo, de manera que estaremos informando oportunamente las decisiones que se tomen sobre este inmueble y el avance del proceso. Una vez se materialice, reorganizaremos la ruta hacia la sede del venado para que salga desde la Calle 72. 
<br><br>
<strong> P: ¿El uso de las rutas sólo están habilitadas para funcionarios de planta o cómo sería el ingreso para contratistas que no tienen carnet? </strong>
<br>
<strong>R:</strong> El uso de la ruta hacia el Venado de Oro es para todos aquellos que están trabajando para el Instituto en su calidad de empleados o por contrato de prestación de servicios. Es un servicio que tiene como objetivo que las personas que estén trabajando con o para el Instituto puedan desplazarse hacia la sede a realizar su trabajo.
<br><br>
<strong> P: Para los contratistas que no tiene acceso a intranet ¿cómo se podrían registrar para un espacio? ¿Cómo se controlaría o mantendría el aforo? </strong>
<br>
<strong>R:</strong> Para los contratistas que requieran ir a las sedes del Instituto, tendrán que registrar sus datos en el siguiente link <a href="hhtp://intranet.humboldt.org.co/ingreso_sedes_contratistas.php" target="_blank">Ingreso sedes contratistas</a>indicando su nombre, cédula, correo electrónico, empresa y la sede a las que va a asistir y la fecha.
<br><br>
<strong> P: Cómo una de las acciones es el desmonte de puestos individuales de trabajo y equipos de escritorio ¿el instituto tiene previsto proveer de equipos portátiles como parte de los insumos de trabajo, o esto será de responsabilidad de los empleados? </strong>
<br>
<strong>R:</strong> El Instituto entrega a cada uno de sus funcionarios un equipo de cómputo que de acuerdo con su trabajo puede ser de escritorio o portátil, de manera que ese equipo puede estar ubicado en el espacio de la casa que habilite para trabajar.
<br><br>
<strong> P: Para algunos la siesta (los 15 minutos de "power nap") es muy importante,  no sé si han pensado en un espacio para eso... </strong>
<br>
<strong>R:</strong> Dentro de todo el diseño de espacios de trabajo que hemos venido adelantando siempre hay lugar a pensar en cosas innovadoras que promuevan la productividad y la creatividad. De manera que, sin comprometernos a hacerlo, si nos comprometemos a evaluar su viabilidad.
<br><br>
¡Te esperamos pronto para disfrutar de nuestras sedes y nuestros nuevos espacios completamente remodelados!
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