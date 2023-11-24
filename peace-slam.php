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

  <style>
    .first-letter {
      font-size: 35px;
      line-height: 1.1;
    }
    h3{
      font-size: 3em;
    }
    h4{
      font-style: italic;
      font-size: 1.2em;
      font-weight: lighter;
    }
    .img-height{
      display: flex;
      flex: 0 1 auto;
      object-fit: contain;
    }
    p{
      font-size: 1.1em;
    }
  </style>

  <!-- CONTENIDO DE LA ENTREVISTA -->
  <section style="padding-bottom:50px; text-align: justify">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 prologo">
          <div style="background-color: #696969; color: #ffffff!important; padding:5px; margin: 0px; margin-bottom:20px">
                    &nbsp;&nbsp;&nbsp;NOTICIAS
                  </div>
        <a href="landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
        <br>
        <h3 class="text-center">PEACE SLAM</h3>
        <h4 class="text-center">Poesía, gestión ambiental y construcción de paz.</h4>
        

        
        <div class="py-3"></div>

        <img src="img/slam/pace.jpg" alt="escribiendo en cuaderno" class="d-block mx-auto img-fluid">

        
        <p class="parrafo text-center">
          <i>
            ¿Cómo la poesía puede aportar a la construcción de paz en un país megadiverso? Nos dimos a la tarea de averiguarlo. El 2 de junio de 2023 llevamos a cabo el Peace Slam, 
            un evento diferente y novedoso sobre gestión de la biodiversidad y construcción de territorios de paz, en Florencia, Caquetá.
          </i>
        </p>

        <div class="py-3"></div>

        <p class="parrafo">
          <span class="first-letter">A</span> través de un trabajo conjunto entre la Dirección de Conocimiento (Centro de Apropiación Social y Centro de Soluciones Basadas en la Naturaleza) y 
          la Dirección de Relacionamiento del Instituto Humboldt, con el Instituto Colombo Alemán para la Paz (CAPAZ); la Oficina de Paz de la Universidad de la 
          Amazonia y Slam Poético Colombia; construimos un espacio para compartir reflexiones y experiencias en torno a la relación entre gestión ambiental y 
          construcción de paz en los territorios.
        </p>
        <p class="parrafo">

        </p>
        
        <div class="row" style="align-items: center;">
          <div class="col-lg-6">
            <p class="parrafo">
              Al comenzar el proceso nos encontramos con la pregunta más obvia: ¿Qué es un Poetry Slam? ¿Qué es lo que vamos a hacer? No teníamos muy claro el concepto 
              de este encuentro ¿Es una metodología? ¿Es un show? ¿Es un concurso? Nuestras preguntas fueron resolviéndose poco a poco mientras participábamos activamente.
            </p>
            <p class="parrafo">
              Descubrimos que el Poetry Slam es un estilo de la poesía escénica que consiste en presentar, ante un auditorio, un poema, canción o reflexión, 
              incorporando algunos elementos del teatro y la expresión oral. En su concepción original, un número indefinido de presentadores –slammers–, 
              actúan frente un público y jueces, quienes emiten calificaciones, convirtiendo el espacio en un concurso y dando por ganador a quien logre transmitir 
              su mensaje de manera clara y poderosa. Todo esto, haciendo uso del arte, la oralidad y la expresión corporal para transmitir emociones y sentimientos.
            </p>
          </div>
          <div class="col-lg-6">
            <img src="img/slam/hilo.jpg" alt="hilo rojo" class="img-fluid img-height">
          </div>
        </div>

        <div class="py-lg-5"></div>

        <div class="row" style="align-items: center;">
          <div class="col-lg-6">
            <img src="img/slam/actividad.jpg" alt="actividades slam" class="img-fluid img-height">
          </div>
          <div class="col-lg-6">
            <p class="parrafo">          
              En nuestro caso, el Peace Slam debía ir más allá de la expresión personal y rebasar las limitaciones de interacción y construcción participativa que 
              implica un escenario competitivo. El Slam clásico fue transformado en una metodología más estructurada que nos permitió presentar un contenido 
              –los resultados de una investigación, proyecto o experiencia personal– sobre gestión ambiental y paz territorial y transformarlo de forma creativa –a 
              través de canciones, poemas u otros–, en un nuevo producto capaz de democratizar el conocimiento y en el que las emociones y los sentimientos son el 
              hilo narrativo para la comunicación.
            </p>
            <p class="parrafo">
              Algunos de los slammers fueron convocados abiertamente, otros fueron elegidos por su liderazgo y reconocimiento en el territorio. Contamos con la 
              participación de estudiantes de pregrado de diferentes carreras de la Uniamazonia, lideresas de comunidades indígenas, representantes de organizaciones 
              campesinas y colectivos de mujeres jóvenes del Caquetá.
            </p>  
          </div>
        </div>

        <div class="py-lg-5"></div>

        
        
        <div class="py-lg-5"></div>

        <div class="row" style="align-items: center;">
          <div class="col-lg-6">
              
            <p class="parrafo">
              La metodología le permitió a los participantes construir narrativas desde la poesía para comunicar sus saberes y experiencias. Al final del día, jóvenes y 
              adultos -que quizás poco habían explorado el mundo de la expresión oral y el arte-, lograron construir y presentar ante el público una obra de poesía escénica 
              construida desde lo personal para hablar de paz y biodiversidad.
            </p>
            <p class="parrafo">          

              Esta experiencia nos permitió avanzar en la consolidación de la alianza entre el Humboldt y el Instituto CAPAZ para la construcción de una agenda de 
              trabajo en temas de paz ambiental. También nos deja como conclusión que debemos continuar con la búsqueda y el desarrollo de metodologías novedosas 
              que faciliten la generación de conexiones emocionales con temas de importancia como la gestión de la biodiversidad y la paz territorial, convocando 
              a otros actores a participar y aportar desde sus visiones.
            </p>
          </div>
          <div class="col-lg-6">
            <img src="img/slam/participante.jpg" alt="participante slam" class="img-fluid img-height">
          </div>
        </div>

        

        

        <p class="parrafo">
          Igualmente, pudimos evidenciar cómo el arte, en este caso la poesía y las artes escénicas, son un lenguaje que permite la comunicación y 
          expresión de las visiones personales en espacios no convencionales, con el objetivo de generar reflexión y apropiación sobre los temas antes 
          mencionados dirigiéndose a públicos diversos pero menos técnicos.
        </p>

        <div class="py-3"></div>

        <div class="slide-slam">
          <div>
            <div class="img-container2">
              <img src="img/slam/slam1.jpg" alt="">
            </div>
          </div>
          <div>
            <div class="img-container2">
              <img src="img/slam/slam2.jpg" alt="">
            </div>
          </div>
          <div>
            <div class="img-container2">
              <img src="img/slam/slam3.jpg" alt="">
            </div>
          </div>
          <div>
            <div class="img-container2">
              <img src="img/slam/slam4.jpg" alt="">
            </div>
          </div>
          <div>
            <div class="img-container2">
              <img src="img/slam/slam5.jpg" alt="">
            </div>
          </div>
          <div>
            <div class="img-container2">
              <img src="img/slam/slam6.jpg" alt="">
            </div>
          </div>
        </div>

        <p class="parrafo">
          
            El Peace Slam es una invitación para pensar fuera de la caja y proponer estrategias que propicien la apropiación social del conocimiento y de los saberes 
            en torno a la biodiversidad, a través de nuevas narrativas, que contribuyen a alcanzar la meta trazada para la misión institucional número 5 de apropiación 
            social: A 2030 alcanzar un tercio de la población del país, a partir de los datos, el conocimiento y las narrativas lideradas por el Instituto, que impulse 
            un cambio transformativo en la apropiación y la toma de decisiones informada.

        </p>

        
        

        <div style="right: 10px; bottom:10px; position: fixed; opacity:0.8"><a href="#"><img src="img/botonSubir.png" width="80px"></a></div>
    </div>
  </section>
  <div class="container-fluid">
    <img src="img/slam/grupo.jpg" alt="" class="img-fluid">
  </div>

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
    $('.slide-slam').slick({
      autoplay:true,
      arrows: true,
      prevArrow:"<img src='img/prev.png' width='40'>",
      nextArrow:"<img src='img/next.png' width='40' class='next'>",
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