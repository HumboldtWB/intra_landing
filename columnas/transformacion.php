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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="icon" type="image/png" href="../img/favicon.png">
  <link href="../css/full-width-pics.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30877272-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-30877272-1');
  </script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>  
</head>

<body style="font-size: 1.5em">

<!-- Top menu-->
<div class="top-menu">
  <div class="col-lg-5">
  </div>
  <div class="col-12 col-md-12 col-lg-5" style="text-align:center; text-align:right">
    <a href="http://humboldt.org.co/">&#x2b60; Volver al portal institucional</a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <a href="../index.php">Cerrar sesión</a>
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
          <img src="../img/logo_intranet.png" width="300px">
        </div>
        <div class="col-lg-4 logo-humboldt" style="text-align: right">
          <img src="../img/logo_humboldt.png" width="80px"> 
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
            <a class="nav-link Enlace" href="../portada.php" style="font-weight:400; font-size:1.2em;">Intranet</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Sistema Integrado de Gestión</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="../macroprocesos.php">Sistema Integrado de Gestión</a>                
                <a class="dropdown-item" href="../sgc_listado_maestro.php">Listados maestros</a>
                <a class="dropdown-item" href="../sgc_organigrama.php">Organigrama</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Servicios</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="../servicios.php">Consultar TOR</a>
                <a class="dropdown-item" href="../mi_perfil.php?sec=mi perfil">Mi perfil</a> 
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Trámites</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="../car.php">Solicitud CAR</a>
                <a class="dropdown-item" href="../lis_car.php">Consultar CAR</a>
                <a class="dropdown-item" href="../gastosviaje.php">Solicitud gastos de viaje</a>
                <a class="dropdown-item" href="../cons_comision.php">Consultar gastos de viaje</a>
                <a class="dropdown-item" href="../servlgyanticipo.php">Eventos/anticipo</a>
                <a class="dropdown-item" href="../cons_servlgyanticipo.php">Consultar Eventos/anticipo</a>
                <a class="dropdown-item" href="../consanticipo.php">Consultar anticipo</a>                
                <a class="dropdown-item" href="../evaluacion_proveedores.php">Reevaluación de proveedores</a>
                <a class="dropdown-item" href="../consviatico2.php">Consultar gastos viaje</a>
                <a class="dropdown-item" href="../gastosinvitados_nuevo.php">Solicitud gasto invitado</a>
                <a class="dropdown-item" href="../conscarta_nuevo.php">Consultar gasto invitado</a>
				        <a class="dropdown-item" href="../solicitud_salas.php">Reserva de salas</a>
                <a class="dropdown-item" href="../cons_salas.php">Consultar salas</a>
                <a class="dropdown-item" href="../sol_apolog.php">Solicitudes</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Novedades</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="../nuevos_com.php">Compañeros</a>
                <a class="dropdown-item" href="../cumple.php">Cumpleaños</a>
                <a class="dropdown-item" href="../eventos_bienestar.php">Eventos bienestar</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Bienestar</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item">Bienestar Humboldt</a>
                <a class="dropdown-item" href="../convivencia.php">Cómite de convivencia</a>
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
        <a href="../landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
        <br>
        <h3>Conocimiento transformativo: la nueva estrategia del Instituto Humboldt para la gestión de la biodiversidad desde la ciencia</h3>
        
        <br>

        <p class="parrafo">
          <img src="../img/IAvH-1962.jpg" alt="humboldt" width="600" style="display: block;margin:0 auto">
          <span style="display:block; text-align: center;">Foto por: Felipe Villegas</span>
        </p>
        
        <ul>
          <li>
            <i>Para alcanzar el nuevo marco estratégico al 2030, el Instituto requiere un diseño organizacional que se adapte a las necesidades y retos del contexto global actual. </i>
          </li>
        </ul>
       
        <p class="parrafo">
          El planeta enfrenta una crisis climática derivada de la contaminación, el cambio climático y la pérdida de biodiversidad que pone en riesgo la supervivencia de la humanidad. Colombia aunque es uno de los países con mayor biodiversidad en el mundo, hace parte de los 11 países más vulnerables a los efectos del cambio climático. Este escenario es un reto para la conservación de los ecosistemas presentes en el territorio y en la adaptación del país a estos efectos. 
        </p>
        <p class="parrafo">
          Para afrontar estos desafíos, el Instituto Humboldt, ha puesto en marcha un nuevo marco estratégico a 2030, que, enmarcado en el nuevo Marco Global de Biodiversidad, adoptado por más de 130 países en diciembre de 2022 (Que busca asegurar la conservación de al menos el 30 % por ciento de las áreas naturales del mundo a 2030) tiene como propósito movilizar datos, información y conocimiento que posicionen y conecten la biodiversidad y sus contribuciones con la transición del país, hacia la sostenibilidad y el bienestar de las personas. 
        </p>
        <p class="parrafo">
          Para lograr este propósito, el Instituto ha reorganizado su enfoque hacia seis misiones que representan grandes retos para el país, con metas muy ambiciosas pero razonables, alcanzables y medibles para asegurar que Colombia conserve, restaure y gestione adecuadamente su diversidad biológica.
        </p>
        <p class="parrafo">
          Las misiones propuestas son:
        </p>
        <ul>
          <li>
            <strong class="d-block">Misión 1: áreas de singularidad ecológica: </strong>
            Meta: Vincular el 50 % de las áreas continentales de importancia y singularidad ecológica del país a estrategias efectivas de conservación.
          </li>
          <li>
            <strong class="d-block">Misión 2: Paisajes productivos sostenibles: </strong>
            Meta: Promover que los actores de los subsectores agropecuario, minero-energético e infraestructura incorporen en su modelo de negocio y ciclo de vida, la gestión de la biodiversidad y servicios ecosistémicos en 5 millones de hectáreas.
          </li>
          <li>
            <strong class="d-block">Misión 3: Ciudades resilientes: </strong>
            Meta: Impactar los modelos de ocupación urbano-regional de al menos seis centros urbanos a partir de la incorporación de elementos de resiliencia y biodiversidad.
          </li>
          <li>
            <strong class="d-block">Misión 4: Bioeconomía / negocios bio-basados: </strong>
            Meta: Impulsar la generación de US$600 millones en ventas por negocios innovadores basados en usos sostenibles de la biodiversidad y servicios ecosistémicos.
          </li>
          <li>
            <strong class="d-block">Misión 5: Apropiación social: </strong>
            Meta: Un tercio de la población será alcanzada por los datos, el conocimiento y las narrativas resultado de la agenda institucional para generar cambios transformativos.
          </li>
          <li>
            <strong class="d-block">Misión 6: Instrumentos de política pública y sectoriales: </strong>
            Meta: Promover la incorporación e implementación de la gestión de la biodiversidad en el 20 % de los instrumentos normativos, de planeación y ordenamiento, financieros y de gobernanza, con un impacto crítico o relevante para la reducción de sus motores de pérdida.
          </li>
        </ul>

        <p class="parrafo">
          Para que el Instituto pueda alcanzar estas misiones al 2030 y enfrentar los retos que supone la gestión de la biodiversidad desde la investigación y la ciencia, además de  generar cambios de comportamiento en la sociedad, es fundamental contar con una institución diseñada para generar conocimiento transformativo. Con esto en mente el Instituto a partir del 2020, planteó la estrategia para un nuevo diseño organizacional, que se ajustara a las necesidades y misiones institucionales. 
        </p>

        <p class="parrafo">
          Para implementar esta estrategia se siguieron los siguientes pasos:
        </p>

        <ol>
          <li>
            Generar un cambio cultural en el Instituto. Para esto se contó con los servicios de Stuart Spencer, quienes evaluaron la cultura organizacional para proponer cambios hacia una cultura más orientada a resultados, con personal altamente motivado. Como resultado de este ejercicio, se ha venido transitando hacia una entidad en la que se promueve un ambiente de constante aprendizaje, innovación y trabajo colaborativo, donde se construyen relaciones basadas en la coherencia, la empatía y la sinceridad, teniendo siempre presente las metas y resultados logrados con eficiencia, aportando así en la construcción de país.
          </li>
          <li>
            Crear un diseño organizacional que se ajustara a los nuevos objetivos estratégicos. Para esto se contó con los servicios de Mercer, una compañía con más de 75 años de experiencia en asesoramiento y soluciones de capital humano. Durante los últimos 6 meses, Mercer ha estudiado diferentes modelos de diseño nacional e internacional, ha llevado a cabo docenas de entrevistas y ha trabajado colectivamente con el equipo directivo. Como resultado, entregó un diagnóstico de los aciertos y oportunidades de mejora del actual organigrama y nuevas propuestas de diseño organizacional. 
          </li>
        </ol>

        <p class="parrafo">
          Una vez finalizado este proceso, la Junta Directiva aprobó el nuevo diseño organizacional, el modelo de gobernanza y los macroprocesos estructurados. Durante los próximos 10 meses, el Instituto implementará este nuevo diseño organizacional que traerá varios retos para el Instituto como mejorar la conexión entre áreas, ser más funcionales para la innovación y la adaptación, ser más estratégicos en la búsqueda de fuentes de financiación, promover la interdisciplinariedad y mejorar el funcionamiento de la organización.
        </p>


        
        
        <div style="right: 10px; bottom:10px; position: fixed; opacity:0.8"><a href="#"><img src="../img/botonSubir.png" width="80px"></a></div>
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
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  
</body>

</html>