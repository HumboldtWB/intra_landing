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
        <h3>Identificación de especies con el MinION de Oxford Nanopore en el Instituto Humboldt</h3>
        
        <br><br>
        <div class="slide-noticia">
          <div>
            <div class="img-container">
              <img src="img/noticias/2021/octubre/minion/minion1.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/noticias/2021/octubre/minion/minion3.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/noticias/2021/octubre/minion/minion4.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/noticias/2021/octubre/minion/minion5.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>

        <p class="parrafo">
          El equipo de genética, a cargo de Mailyn González para el POA 2021, está trabajando en la evaluación e implementación de un método de 
          secuenciación a gran escala para códigos de barras de insectos en el Instituto, con el fin de contribuir al crecimiento de la base de 
          datos de referencia genética de este grupo de organismos en el país y dejar esta capacidad instalada de secuenciación en el Instituto con el MinION.
        </p>
        <p class="parrafo">
          El Instituto lidera y apoya la iniciativa nacional de códigos de barras de ADN (iBOL Colombia) enmarcada dentro del programa mundial BIOSCAN, 
          que busca mejorar el entendimiento de la biodiversidad y su manejo basado en la obtención de información genética de códigos de barras para 
          más de dos millones de especies biológicas en los próximos años. 
        </p>
        <p class="parrafo">
          Los códigos de barras de ADN funcionan como una herramienta desarrollada para identificar de forma rápida y precisa las especies a 
          partir de una secuencia corta y estándar de ADN. Es una metodología que complementa a la taxonomía tradicional, la cual se basa en caracteres 
          morfológicos, ya que generalmente el desarrollo de un código de barras requiere relacionar la información genética con ejemplares 
          “vouchers” depositados en museos o colecciones biológicas.
        </p>
        <p class="parrafo">
          Este concepto no es nuevo y lleva mucho más de una década siendo utilizado como una forma confiable y rápida de aportar a la identificación de especies. 
          La obtención del código de barras se realiza mediante la amplificación por PCR de una región marcador que tiene, por su nivel de variación, 
          la propiedad de ser usado para discriminar a nivel de grupo o especie.
        </p>
        <p class="parrafo">
          Típicamente se obtiene la información a través de secuenciación tipo Sanger, que es altamente confiable, pero está restringida a unas condiciones 
          de infraestructura y costos de los equipos en cuanto a su operación, lo que hace que aún en el país no muchos cuenten con dicha capacidad instalada 
          y sea necesario contratarlo como servicio externo, por la baja rentabilidad.   
        </p>
        <p class="parrafo">
          El surgimiento de nuevas tecnologías de secuenciación, más accesibles, rápidas y competitivas en costo, como el MinION de Oxford Nanopore, 
          abre una ventana de posibilidad para muchos estudios en biología molecular aplicados a diferentes áreas: medicina, biotecnología, genómica básica, 
          biodiversidad y conservación. Esta tecnología en particular ha permitido lo que ha sido denominado en diferentes ámbitos como la democratización 
          de la secuenciación de ADN, debido a que puede realizarse en condiciones de laboratorio más sencillas que las tecnologías tradicionales.
          Además, abre también una puerta para la generación masiva de códigos de barras en tiempos y costos mucho más bajos.
        </p>
        <p class="parrafo">
          Algunos grupos de investigación ya han realizado avances para implementar una metodología que empleando el MinION pueda generar de 
          forma masiva códigos de barras de insectos en un solo experimento de secuenciación (hasta 9216 individuos en una única corrida de secuenciación). 
          Con tecnología Sanger, dependiendo del equipo, pueden procesarse alrededor de 100 por corrida. Los autores de este estudio (Srivathsan et al., 2021) 
          estiman que el costo por individuo con esta metodología optimizada puede bajar de $0.5 USD, siendo bastante prometedora para la generación masiva de 
          información genética.
        </p>
        <p class="parrafo">
          El Instituto cuenta con el equipo de secuenciación MinION (<a href="https://nanoporetech.com/" target="_blank" rel="noopener noreferrer">https://nanoporetech.com/</a>) 
          desde 2019, adquirido en el marco del proyecto Boyacá BIO, y ha sido utilizado para la generación de información genética de especies de interés 
          y para identificación molecular. Esta capacidad instalada en el Instituto también aportó en la coyuntura de la pandemia de COVID-19 apoyando al 
          Instituto Nacional de Salud con el equipo y conocimiento de la técnica para generar los primeros genomas de SARS-CoV-2 (virus causal del COVID-19) del país.
        </p>
        <p class="parrafo">
          El equipo de genética del Instituto, dentro de su misión de aportar a las iniciativas de generación de información genética para el estudio de 
          biodiversidad se encuentra actualmente trabajando en la implementación y adaptación de esta metodología de generación de códigos de barras 
          utilizando el MinION con el fin de explorar su efectividad en relación costo-calidad de la información para evaluar si puede utilizarse con 
          éxito en futuros proyectos para tener una alternativa a los procesos tradicionales.
        </p>
        <p class="parrafo">
          Para este experimento de secuenciación separaron muestras de trampas Malaise provenientes de Boyacá, Cundinamarca, Meta y Santander que se han 
          recolectado a través de proyectos con participación del equipo de Genética. Posteriormente se seleccionaron insectos de los órdenes Coleoptera, 
          Diptera, Hemiptera, Hymenoptera, Lepidoptera (cucarrones, moscas, chinches, avispas y mariposas) y otros con menor representación como agrupaciones 
          de polineópteros (grillos, cucarachas, tijeretas) e insectos acuáticos (plecópteros y tricópteros). La prioridad fueron las muestras de tierras altas 
          (> 2000 msnm), sin embargo, para completar la representación de ciertos órdenes de insectos también se tomaron muestras de menor altura (> 600 msnm).
        </p>
        <p class="parrafo">
          “Durante varios meses se hicieron revisiones de literatura sobre métodos eficientes y económicos, con potencial de escalabilidad para extracción de ADN, 
          amplificación, preparación de geles y secuenciación. Encontramos varios métodos en particular para la extracción de ADN que reducen tiempo y costos”, 
          agregó Nathalie Baena, una de las participantes de este proceso. 
        </p>
        <p class="parrafo">
          <b>Por Nicolás Franco y Nathalie Baena</b>
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