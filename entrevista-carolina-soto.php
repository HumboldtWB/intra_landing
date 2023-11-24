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
        <h3>Tejiendo la biodiversidad con las comunidades</h3>
        <br>
        <div style="text-align: center">
          <img src="img/entrevistas/carolina-soto.jpg" width="60%"><br>
        </div>
        <br><br>
<strong>Tratar de vincular al público no científico en la construcción de conocimiento de la biodiversidad y visibilizar a las personas que conservan los territorios, es el reto que tiene Carolina Soto desde hace tres años como líder de la línea de Diálogo de Saberes y Ciencia Participativa del Instituto Humboldt.</strong>
<br><br>
La flora y fauna colombiana siempre han hecho parte de su ser. Desde muy pequeña quedó maravillada con el revoloteo de las aves y luciérnagas que visitaban la finca que su familia tiene en Armenia, capital del departamento de Quindío, un terruño que mezcla cafetales con bosques andinos y muchas orquídeas.
<br><br>
“Tengo una estrecha relación con la biodiversidad y la parte agrícola. En el colegio, que cursé en Manizales y Medellín, no hacía más que hablar de los animales que veía en la finca y los que encontraba en los libros. Ya tenía claro que de grande me dedicaría a algo relacionado con la naturaleza”, dice Carolina Soto, hoy con 36 años de vida.
<br><br>
Al terminar el bachillerato, Carolina tomó la decisión de abandonar el Eje Cafetero para estudiar biología en la Pontificia Universidad Javeriana de Bogotá. “Yo estaba dichosa por aprender a profundidad sobre los animales y plantas como las orquídeas, en especial las que conocí en la finca de mi familia. Todo ese conocimiento en biodiversidad lo relacionaba con la historia de vida de las comunidades campesinas”.
<br><br>
Los últimos dos semestres de biología los cursó en la Universidad Federal de Río de Janeiro, gracias a un convenio suscrito con la Javeriana. “Nos dieron la opción de buscar otras universidades para terminar la carrera y a mí me llamó mucho la atención irme a vivir a Brasil”.
<br><br>
En 2008, luego de graduarse como bióloga, encontró su primer trabajo en una empresa que elaboraba mapas por medio de Sistemas de Información Geográfica. Al poco tiempo, una fundación estadounidense dedicada a la conservación de uno de los grupos de animales más carismáticos y enigmáticos del mundo, le cambió la vida.
<br><br>
“Empecé a trabajar con la fundación Panthera liderando los proyectos de la oficina del norte de Sudamérica. Fueron cinco años maravillosos aprendiendo sobre los grandes felinos, en especial el jaguar y el puma, y la relación que tienen con las comunidades campesinas y la cultura de los indígenas”.
<br><br>
En Panthera, Carolina abordó temas como el conflicto que se presenta entre la ganadería y el misterioso jaguar. “Hay grandes tensiones por el avance de la frontera agrícola en zonas donde habita el jaguar, un felino increíble que presenta grandes retos para su conservación. En la fundación pude mezclar dos de mis pasiones: la biodiversidad y la relación con las comunidades”.
<br><br>
Luego de conocer la lucha del jaguar, Carolina trabajó como asesora ambiental de la Mesa Regional Amazónica, un espacio de concertación con los indígenas que habitan en la densa manigua.
<br><br>
“Además de conocer las culturas de los indígenas y su relación con la biodiversidad, aprendí mucho sobre el mundo de las relaciones políticas, algo que nunca había abordado, y las dinámicas de las mesas de negociación entre indígenas y los diferentes gobiernos. Siempre me ha gustado asumir retos y cosas desconocidas”.
<br><br>
En esos espacios, Carolina comprendió que el estudio de la biodiversidad debe involucrar a las comunidades. “Los indígenas, afrodescendientes y campesinos nos pueden enseñar mucho para dar marcha a diferentes proyectos. Por eso empecé a trabajar en los diálogos de saberes, intercambios de conocimientos con las comunidades para conocer la mirada de diversas culturas respecto a la biodiversidad”.
<br><br>
<strong>Llegada al Humboldt</strong>
<br><br>
Cuando estuvo en la fundación Panthera, esta quindiana aprendió bastante sobre las cámaras trampa, instrumentos ubicados en medio de las zonas boscosas para identificar a las diferentes especies que allí habitan.
<br><br>
“En 2016, el Instituto Humboldt estaba buscando a una persona para hacer una consultoría sobre cámaras trampa, un tema que en esa época manejaba Angélica Díaz. El reto era grande, como organizar más de 100.000 fotos de diversos sitios en las bases de datos. Como me gustan los retos, decidí enviar mi hoja de vida y me contrataron”.
<br><br>
Hernando García Martínez, que en esa época era coordinador de ciencias biológicas, fue el encargado de hacerle la inducción. “Me contó toda la historia del instituto y me pareció una nota porque es el mayor referente en biodiversidad del país. Como iba a tener un contrato, podía manejar más mi tiempo para poder ir a Medellín a visitar a la familia”.
<br><br>
Al terminar la consultoría con el Humboldt, Carolina volvió a cambiar de rumbo. Una maestría sobre liderazgo de la conservación en la Universidad de Cambridge, en Inglaterra, sería su nuevo reto.
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/carolina-soto2.jpg" width="60%"><br>
        </div>
        <br><br>
Aunque no se postuló a ninguna beca, la universidad decidió hacerlo. Antes de ingresar en el avión que la llevaría a Inglaterra, una tormenta retrasó el vuelo. En esa espera, Carolina conversó con una de las pasajeras, quien para sorpresa suya trabaja en temas ambientales y tenían una amiga en común.
<br><br>
“Sindy Martínez, que en esa época trabajaba en la Fundación Omacha, me contó que conocía a Angélica Díaz, con quien yo trabajé en la consultoría de cámaras trampa en el Humboldt. Mientras estaba estudiando la maestría no la volví a ver, pero después el destino nos volvió a juntar”.
<br><br>
En Inglaterra Carolina estuvo todo 2017, un año que define como una experiencia increíble. “Pude interactuar con muchas personas de distintos países y me enfrenté a nuevos proyectos y temas desconocidos relacionados con la biodiversidad y las comunidades”.
<br><br>
<strong>Regreso a casa</strong>
<br><br>
En diciembre de 2017, Carolina regresó a Colombia. A los pocos días, una amiga que trabajaba en el Instituto Humboldt la llamó y le dijo que en la entidad la estaban buscando para que participara en un nuevo proyecto.
<br><br>
“Para sorpresa mía, la persona que me estaba buscando era Sindy Martínez, a quien había conocido en el avión que me llevó a Inglaterra y que ahora trabajaba en un tema de ciencias participativas en el Humboldt. El tema me llamó mucho la atención y les envié mi hoja de vida”.
<br><br>
En plena Navidad, cuando estaba reunida con su familia en Medellín, Carolina recibió una llamada del Humboldt para hacer una entrevista grupal. “Hablé durante más de tres horas con Sindy, Jose Manuel Ochoa y la psicóloga y me hicieron una prueba. Al final me dijeron que si podía empezar ya, pero yo estaba en modo vacaciones”.
<br><br>
Días después, cuando estaba en la casa de su hermana, el Instituto Humboldt le comunicó que se había ganado el puesto. “Ahora trabajaría con Sindy en la línea de Diálogo de Saberes y Ciencia Participativa de la entidad, que hoy cuenta con un equipo de 10 personas”.
<br><br>
En 2018 arrancó el nuevo reto de Carolina: tratar de vincular al público no científico en la construcción de conocimiento de la biodiversidad, además de visibilizar a esas personas que están contribuyendo desde los territorios a conservar e investigar.
<br><br>
“Queremos conectar y generar espacios de cocreación y redes con las comunidades. Para eso realizamos diálogos de saberes en los territorios, encuentros que arrojan intercambios con las poblaciones, y apoyamos los monitoreos comunitarios para construir conocimientos de una manera mancomunada”.
<br><br>
<strong>Escuchando a la comunidad</strong>
<br><br>
En los tres años que lleva la línea de Diálogo de Saberes y Ciencia Participativa del Instituto Humboldt, la cual también participa en las diferentes expediciones sobre biodiversidad que realiza la entidad, Carolina atesora varias experiencias.
<br><br>
“Una de ellas fue el inventario participativo en el oriente antioqueño, donde los campesinos fueron coinvestigadores. Fue muy bonito ver cómo construían información desde sus saberes y la participación cada vez más activa de las mujeres. Fue un proyecto muy incluyente donde participaron abuelos, adultos, jóvenes y niños, y logramos varios acuerdos con las comunidades”.
<br><br>
Carolina recuerda mucho a un campesino que no ocultaba su molestia por la presencia de felinos cerca de su predio. “Con cámaras trampa le mostramos todos los animales que hacían presencia en el territorio, algo que lo dejó maravillado. Trabajamos de la mano en estrategias para no impactar a los felinos que merodeaban cerca de la finca”.
<br><br>
La pandemia del coronavirus es uno de los mayores preocupantes para el trabajo social de Carolina y su equipo. “Pasamos de hacer eventos con más de 100 personas en los territorios a encuentros virtuales en la ruralidad, algo que es bastante complicado por el poco acceso que tienen algunas poblaciones”.
<br><br>
A pesar de las limitaciones por las restricciones de la covid-19, el año pasado el equipo pudo hacer un curso virtual con los líderes del Pacífico. “Fue un gran reto porque la idea era estar en el Chocó dialogando con las comunidades. Muchas personas no pudieron participar por no tener herramientas tecnológicas”.
<br><br>
Otra cosa que la inquieta es cómo será la relación con la población de la tercera edad en los territorios. “Los abuelos son grandes protagonistas en los diálogos de saberes. Cuando podamos regresar a campo, tenemos que ser muy estratégicos y cuidadosos con ellos, ya que son la población más vulnerable al virus. Innovar y ver cómo vamos a abordar este tema será el mayor reto que tendremos este año”.


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
