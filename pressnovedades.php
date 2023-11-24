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
        <h3>PEM presenta novedades en sus herramientas ¡Conócelas!</h3>
        
        <br><br>
        <p class="parrafo">
          Desde el Programa de Evaluación y Monitoreo de la Biodiversidad del Instituto Humboldt se han desarrollado múltiples herramientas para dar a conocer y 
          gestionar la diversidad biológica de nuestro país, con el fin de lograr un mayor impacto en la regionalización-democratización de la información generada por el instituto.
        </p>
        <p class="parrafo">
          Particularmente, se presentaron novedades en dos herramientas que muchos de ustedes ya conocen: Biomodelos y Biotablero. Adicionalmente,  
          el equipo del PEM hizo el lanzamiento de una nueva herramienta llamada Regi0 que llega a fortalecer  los procesos de implementación del ciclo de monitoreo 
          que involucran la recolección de datos, el análisis y modelamiento a partir de los mismos, y la construcción de indicadores y escenarios. 
        </p>
        <p class="parrafo">
          Estas herramientas no solo apoyan los objetivos PICIA de sostenibilidad sino que también respaldan el conocimiento sobre los sistemas socioecológicos y 
          se convertirán en herramientas útiles para la implementación de las misiones.
        </p>
        <p class="parrafo">
          A continuación, les contaremos de qué se trata. 
        </p>
        <h4>Regi0</h4>

        <div class="d-block">
          <img src="img/noticias/2022/Regi0_1.png" alt="imagen descripcion regi0" class="mx-auto" style="max-width: 500px;margin: 1em auto; display: block;">
        </div>

        <p class="parrafo">
          Es una herramienta pensada a partir de la mesa de trabajo sobre datos de biodiversidad, para integrar las distintas metodologías que se han 
          desarrollado al interior del Instituto para publicar y manejar los datos primarios de biodiversidad, que son los registros de especies. Especialmente, 
          apoya a los investigadores en la verificación de la calidad de los registros, en los componentes geográfico y taxonómico, para su publicación a través de 
          la Infraestructura Institucional de Datos (I2D) y su uso en los diferentes propósitos de los proyectos de investigación institucionales relacionados 
          con la colecta y sistematización de datos de especies.
        </p>
        <p class="parrafo">
          La documentación detallada de cada una de las funciones se puede consultar en el siguiente enlace: <a href="https://regi0.readthedocs.io" target="_blank" rel="noopener noreferrer">https://regi0.readthedocs.io</a>. 
        </p>
        <p class="parrafo">
          Todas las funciones tienen sus respectivas pruebas unitarias para garantizar el funcionamiento esperado.
        </p>
        <p class="parrafo">
          <strong>¿Dónde encontrarla?</strong>
        </p>

        <p class="parrafo">
          Regi0 está publicado a través de conda-forge (<a href="https://anaconda.org/conda-forge/regi0" target="_blank" rel="noopener noreferrer">https://anaconda.org/conda-forge/regi0</a>)
          (repositorio de paquetes curado por la comunidad), 
          y todo el código fuente se encuentra en el repositorio del PEM en GitHub en el enlace: <a href="https://github.com/PEM-Humboldt/regi0" target="_blank" rel="noopener noreferrer">https://github.com/PEM-Humboldt/regi0</a> 
          (transparencia-código abierto), 
          donde también pueden descargar los manuales de usuario y datos de prueba para empezar a explorarlo.
        </p>
        <p class="parrafo">
          Para su instalación, hemos hecho un manual que se puede descargar en:  <a href="https://drive.google.com/file/d/1I4OEP6JdaEBR47EigLqFG0Ydn3zay268/view?usp=sharin" target="_blank" rel="noopener noreferrer">https://drive.google.com/file/d/1I4OEP6JdaEBR47EigLqFG0Ydn3zay268/view?usp=sharin</a>. 
          Allí se encuentran descritos los tipos de usuarios del paquete y el tipo de instalación correspondiente que debe seguir cada uno. 
        </p>

        <br>
        <h4>Novedades en BioModelos y BioTablero</h4>
        <h4>Biomodelos</h4>
        <div class="d-block">
          <img src="img/noticias/2022/biomodelos.jpg" alt="imagen descripcion biomodelos" class="mx-auto" style="max-width: 500px;margin: 1em auto; display: block;">
        </div>
        <p class="parrafo">
          También contamos con la plataforma web <strong>BioModelos</strong>, que permite la consulta y acceso libre a mapas de distribución de especies, 
          elaborados o publicados junto con más de 500 expertos de manera colaborativa. En los BioModelos los insumos principales son los datos primarios de 
          biodiversidad y las metodologías de machine learning para su procesamiento.
        </p>
        <p class="parrafo">
          <strong>¿Dónde encontrarla?</strong>
        </p>
        <ol>
          <li>
            El acceso a las rutinas de modelamiento es a través del repositorio en GitHub del PEM. En esa plataforma se encuentran links que explican las rutinas, 
            los flujos de trabajo y un ejemplo para ejecutar (<a href="https://github.com/PEM-Humboldt/biomodelos-sdm" target="_blank" rel="noopener noreferrer">https://github.com/PEM-Humboldt/biomodelos-sdm</a>).
          </li>
          <li>
            Por otra parte, los 4000 modelos (presente y futuro) estarán disponibles a través de la I2D. Actualmente, los modelos están alojados en el servidor 
            VN-Aves-2338-ET del Instituto Alexander Von Humboldt, disco duro LAE1 con la siguiente dirección: G:\set16_modelos_Julio. 
          </li>
          <li>
            Finalmente, los BioModelos regionalizados de las aves de Colombia se encuentran almacenados en la nube de GEE, 
            y en el servidor interno del Programa de Evaluación y Monitoreo, proyecto BioModelos (VN-Aves-WS-2338.humboldt.local; ocupando un espacio de aprox. 460 gigas) 
            siguiendo la ruta: D:\biomodelosGEE.
          </li>
        </ol>
        <br>
        <h4>Biotablero</h4>
        <div class="d-block">
          <img src="img/noticias/2022/huellahumanaBT.png" alt="imagen descripcion biotablero" class="mx-auto" style="max-width: 500px;margin: 1em auto; display: block;">
        </div>
        <p class="parrafo">
          Por último, implementamos la plataforma web BioTablero, donde se pueden consultar cifras e indicadores sobre la biodiversidad de Colombia. Actualmente, 
          cuenta con diferentes módulos que brindan contextos específicos para dar soporte a la toma de decisiones ambientales, mediante la visualización 
          gráfica de las cifras y patrones más relevantes para la gestión de la biodiversidad.
        </p>
        <p class="parrafo">
          <strong>¿Dónde encontrarla?</strong>
        </p>
        
        <p class="parrafo">
          A BioTablero podemos acceder a través de este link <a href="http://biotablero.humboldt.org.co" target="_blank" rel="noopener noreferrer">http://biotablero.humboldt.org.co</a>, o simplemente buscando BioTablero en Google y 
          abriendo la primera opción que nos aparece en el navegador. 
        </p>
        <p class="parrafo">
          Con las tres herramientas poseemos un flujo que parte de los datos primarios de biodiversidad en Regi0, la obtención de mapas de especies y conjuntos de especies 
          en BioModelos, y luego la síntesis de datos sobre biodiversidad y otros productos generados por el Instituto como la huella espacial humana, a través de BioTablero.
          Nuestro principal objetivo es que los y las investigadoras del Instituto conozcan esta información y se apropien de ella mediante su consulta, divulgación y 
          uso para formular y fortalecer los proyectos que buscan responder a las misiones que se ha planteado el Instituto. 
        </p>
        <br>
        <span>Video presentación de las novedades:</span>
        <div>
          <div>                         
              <div>
                 <div class="media-wrapper" align="center">
                   
                   <video src="videos/video1108236187.mp4" poster="img/noticias/2022/multitemporales.png" width="924" height="582" controls>
                  </video>
              </div>
              </div>
          </div>
        </div>
        <p class="parrafo">
          Encuentra la presentación <a href="documentos/PresNovedades.pdf" target="_blank" rel="noopener noreferrer">aquí</a>
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