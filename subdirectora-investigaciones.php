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
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>  
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
      <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">MENÃš
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
                <a class="dropdown-item" href="gastosviaje.php">Solicitud gastos de viaje</a>
                <a class="dropdown-item" href="cons_comision.php">Consultar gastos de viaje</a>
                <a class="dropdown-item" href="servlgyanticipo.php">Eventos/anticipo</a>
                <a class="dropdown-item" href="cons_servlgyanticipo.php">Consultar Eventos/anticipo</a>
                <a class="dropdown-item" href="consanticipo.php">Consultar anticipo</a>                
                <a class="dropdown-item" href="evaluacion_proveedores.php">Reevaluación de proveedores</a>
                <a class="dropdown-item" href="consviatico2.php">Consultar gastos viaje</a>
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
                <a class="dropdown-item">Bienestar Humboldt</a>
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
        <h3 style="text-align: center;">“Pensar la institución desde grandes retos de país”: Gisele Didier, nueva Subdirectora de Investigaciones</h3>
        <div class="img-container">
          <img src="img/noticias/2022/INTE1507_.jpg" class="img-fluid">
          <i style="text-align: center; display: block;">Foto: Felipe Villegas</i>
        </div>
        <br>     

        <ul>
          <li>
            <i>
              Tras un año de trabajo en la Dirección General a cargo del proceso de transformación institucional, a partir del 17  de enero de 2022, 
              Gisele Didier asume el cargo de Subdirectora de Investigaciones.
            </i>
          </li>
        </ul>
        <p class="parrafo">
          Sin lugar a dudas una de las caras más reconocidas al interior del Instituto es la de Gisele. Su primera vinculación a la entidad se remonta a 1995. 
          Para entonces fue Asistente de Dirección, cargo que desempeñó por cinco años. Su regreso fue sólo hasta el 2016. En esta ocasión, 
          lo haría como líder de la Unidad de Desarrollo en la Subdirección de Investigaciones. 
        </p>
        <p class="parrafo">
          En el medio tiempo, Gisele trabajó para entidades en Panamá como el Instituto Smithsonian de Investigaciones Tropicales (STRI), 
          la Secretaría Nacional de Ciencia, Tecnología e Innovación (SENACYT) y el Programa de Naciones Unidas para el Desarrollo (PNUD) en donde se 
          desempeñó como Analista de Programa del área de ambiente logrando conformar un portafolio con presupuesto cercano a los 10 millones de 
          dólares en las áreas de cambio climático, conservación de biodiversidad, procesos de diálogo con pueblos indígenas y su relación con el desarrollo humano. 
        </p>
        
        <p class="parrafo">
          <strong style="font-size: 1.2em;">
            Retos para el 2022
          </strong>
        </p>

        <p class="parrafo">
          De acuerdo con Gisele, “como Instituto debemos estar cada vez en mejor capacidad para responder a los grandes retos del país. 
          Es determinante que nuestras agendas científica y de gestión estén orientadas y estructuradas, justamente, hacia el posicionamiento de las misiones”.  
        </p>

        <p class="parrafo">
          Preguntas como, qué necesita el país para replantearse un efectivo tránsito hacia un desarrollo sostenible, 
          deberán ser abordadas desde la misionalidad del Instituto, a lo que se suma un tema clave: la innovación. 
        </p>
        <p class="parrafo">
          “Es innovador pensar alrededor de estos retos y dejar un poco de lado las estructuras orgánicas o cuadriculadas de programas que pueden sentirse rígidos 
          y alejados de los retos que se plantea nuestra sociedad. El objetivo será plantear rutas de investigación para cada una de estas cuestiones”, indicó Gisele. 
        </p>
        <p class="parrafo">
          Otro de los temas estratégicos que tendrá por delante la nueva Subdirectora de Investigaciones será seguir avanzando en la transformación 
          organizacional desde varios frentes, en donde cada una de las personas que trabajamos en el Instituto seamos capaces de alinearnos con el 
          propósito institucional. Esto permitirá, según explica Gisele, tener un norte claro hacia el cual avanzar y poder enfocar los esfuerzos a 
          mejores resultados. “En este camino, el reto será además mantenernos en una búsqueda constante de nuevo conocimiento y nuevas formas de hacer las cosas”. 
        </p>
        <p class="parrafo">
          Finalmente, y no menos importante, se plantea como meta avanzar en la construcción de relaciones más empáticas y auténticas, 
          caracterizadas por una comunicación efectiva en donde prácticas como la retroalimentación a tiempo y de calidad, permita a los equipos 
          fortalecerse y avanzar en las resultados y metas a los cuales nos debemos como entidad. 
        </p>
        <p class="parrafo">
          Como bien indica, “entre todos debemos superar el daño colateral de la pandemia por COVID19 como lo es la sensación de división y separación como equipos, 
          especialmente a través de un esfuerzo por combinar agendas y conformar equipos dinámicos dependiendo de los requerimientos puntuales 
          de cada proyecto e investigación. Sabemos que el tema de la comunicación y la divulgación serán nuestros más grandes aliados”. 
        </p>
        <p class="parrafo">
          A partir del 17 de enero de 2022, llegará por primera vez una mujer al cargo de la Subdirección de Investigaciones del Instituto, 
          dando continuidad al extraordinario trabajo que hizo Óscar Gualdrón y su equipo. 
        </p>
        <p class="parrafo">
          <strong style="font-size: 1.2em;">
            Sobre Gisele Didier 
          </strong>
        </p>
        <p class="parrafo">
          Gisele es bióloga de la Universidad de los Andes (1991), con maestría en administración de empresas con énfasis en banca y finanzas del INCAE en 
          Costa Rica (2009).
        </p>
        <p class="parrafo">
          Su formación en biología combinada con más de 15 años de experiencia en la gestión de proyectos tanto en el sector de cooperación al desarrollo 
          como en el de investigación, desarrollo e innovación la convierten en una profesional con capacidad de comprender los retos de la 
          gestión institucional contemporánea. 
        </p>
        <p class="parrafo">
          Gisele se define como una mujer entusiasta, proactiva y persistente. La caracterizan sus altos niveles de energía, exigencia y su capacidad de 
          análisis y negociación. 
        </p>
        <p class="parrafo">
          Disfruta del trabajo en equipo y cuenta con una gran capacidad para  buscar soluciones innovadoras para atender situaciones complejas.
        </p>
        <p class="parrafo">
          ¡Le deseamos muchos éxitos en este nuevo reto!
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $('.slide-noticia').slick({
      autoplay:true,
      arrows: true,
      prevArrow:"<img src='img/prev.png' width='40'>",
      nextArrow:"<img src='img/next.png' width='40' class='next'>",
      adaptiveHeight: true,
      responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false
        }
      },
      ]
    });
  </script>
</body>

</html>