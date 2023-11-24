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
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-L78B6Q2D4D"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-L78B6Q2D4D');
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
        <h3>Entrevista Gestión por Competencias </h3>
        
        <br>

        <p class="parrafo">
          <img src="../img/noticias/2022/competencias.jpg" alt="gestion" class="img-fluid" style="max-width: 600px; display:block; margin:auto">
          <figcaption style="display: block;margin:auto;text-align:center">Rafael Parra y Angela Perez, Instituto Humboldt</figcaption>
        </p>
        
        <p class="parrafo">
            Hablamos con Rafael Parra y Angela Perez sobre la Gestión por Competencias, una herramienta que Talento Humano implementará como parte del 
            proceso de transformación del Instituto y que nos ayudará a tener un mejor desarrollo personal y profesional.
        </p>
        <p class="parrafo">
            <strong>1. ¿Qué es la Gestión por Competencias? </strong>
        </p>
        <p class="parrafo">
            La gestión por competencias es una herramienta que permite marcar una ruta clara en relación al desarrollo del talento humano y a la forma en 
            la que a través de las contribuciones de cada rol se pueden alcanzar y afrontar los retos planteados por la estrategia organizacional del Instituto. 
            Esta herramienta además, permite al Instituto, identificar en las personas lo intangible (sus expectativas, sus metas, sus motivaciones y sus proyecciones) 
            para hacerlo evidente y potenciar de esta manera el talento, a través de la  articulación de todos los procesos de gestión humana. 
        </p>
        <p class="parrafo">
            <strong>2. ¿Por qué surgió esta iniciativa?</strong>
        </p>   
        <p class="parrafo">
            Desde Gestión Humana con el propósito de conocer las bases organizacionales de estructura organizacional, 
            que permitieran que el  Instituto se consolide y sea reconocido por ser una organización moderna, ligera y sostenible financiera, 
            ecológica y socialmente; se inicia un trabajo enfocado al reconocimiento e identificación de la manera en que las distintas áreas 
            y sus estructuras aportan al funcionamiento del Instituto. Luego de esta identificación, del reconocimiento de la capacidad técnica 
            y operativa del talento humano y de la manera como se relacionan entre sí las estructuras y subestructuras para la gestión eficiente de 
            la administración del talento humano, se generan  siete iniciativas:
        </p>
        <ul>
            <li>
                <strong>Actualización del organigrama</strong>, para identificar cómo operan las estructuras y su respectivo relacionamiento con las demás áreas de la organización.
            </li>
            <li>
                <strong>Identificación de roles basado en el análisis objetivo</strong> del aporte que hace cada uno de los miembros del equipo.
            </li>
            <li>
                <strong>Actualización del perfil de cargo</strong> con funciones específicas, apoyando la gobernanza, seguimiento y administración objetiva y equitativa de las personas que desempeñan el rol.
            </li>
            <li>
                <strong>Implementación de competencias por cada rol</strong>, que permita apoyar el buen desempeño de las personas en sus respectivos roles.
            </li>
            <li>
                Establecimiento de mecanismos de <strong>evaluación de desempeño.</strong>
            </li>
            <li>
                Generación <strong>diferenciada de compensación y beneficios.</strong> 
            </li>
            <li>
                Establecimiento del <strong>plan de carrera</strong> y crecimiento profesional para cada uno de los roles del Instituto.
            </li>
        </ul>      
             
        <p class="parrafo">
            Como se puede ver la Gestión por competencias es la cuarta iniciativa de Gestión Humana y hace parte de todo el proceso de transformación, 
            crecimiento y fortalecimiento del Talento humano del Instituto.
        </p>
        <p class="parrafo">
            <strong>3. ¿Qué fases tiene esta iniciativa y en cuál nos encontramos en este momento?</strong>
        </p>
        <p class="parrafo">
            Como lo mencionamos anteriormente, esta iniciativa se encuentra articulada con los procesos que se han adelantado en el área y por ello, 
            los insumos que se han utilizado para estructurarla han sido producto de otros esfuerzos,  como por ejemplo: el reconocimiento de la estrategia 
            y filosofía organizacional, la revisión y comprensión de la estructura organizacional, la identificación de los roles, entre otros. Con esta información 
            logramos definir  las  competencias que  se ajustaban al Instituto y construimos nuestro propio diccionario, el cual contiene las competencias 
            institucionales (aquellas que todos los miembros del instituto debemos poseer), las competencias por nivel de cargo ( las cuales responden 
            al nivel que ocupamos en esa estructura organizacional) y finalmente las competencias específicas (aquellas que nos permiten ser más exitosos 
            en el rol que desempeñamos).  
        </p>
        <p class="parrafo">
            El siguiente paso en este proceso es socializar con todos los miembros del Instituto esta iniciativa, contarles de qué se trata, cómo funcionará 
            y posteriormente identificar  el nivel de desarrollo que tenemos en las competencias, esto nos permite conocer esas grandes fortalezas que posee 
            el talento humano y además nos invita  generar los planes de desarrollo individual - PID que tienen como finalidad potenciar el talento  de los trabajadores. 
        </p>
        <p class="parrafo">
            Finalmente, este Sistema de Gestión por Competencias, se irá integrando en otros subprocesos de gestión humana.
        </p>
        <p class="parrafo">
            <strong>4. ¿Cómo se articula esta iniciativa con el proceso de transformación Institucional?</strong>
        </p>
        <p class="parrafo">
            El Instituto tiene como misión promover, coordinar y realizar investigación que contribuya al conocimiento, la conservación y el uso sostenible de la biodiversidad 
            como un factor de desarrollo y bienestar de la población colombiana. Para cumplir con éxito esta misión, internamente estamos llamados a trabajar en procesos 
            que nos permitan conocernos como Instituto pero también como personas y reconocer cómo cada uno de nosotros se alinea con el propósito superior del instituto. 
        </p>
        <p class="parrafo">
            Por ello, se han planteado diversas estrategias que apoyan ese proceso de conocimiento interno, por ejemplo, en cultura organizacional, 
            conocer qué dimensiones  nos caracterizan e identificar si se adecuan a las necesidades del Instituto, no ayuda a comprender cuál es la cultura 
            objetivo en la que debemos trabajar. Otro ejemplo es el proceso de liderazgo, permitir que los líderes reconozcan sus fortalezas, pero también sus 
            oportunidades de mejora y que identifiquen su estilo de liderazgo, nos ayudará a construir equipos de trabajo más cohesionados. 
        </p>
        <p class="parrafo">
            Desde Gestión Humana, trabajamos con el DISC, una herramienta que  nos permite   reconocer el perfil comportamental de nuestros colaboradores, 
            sus motivaciones, su estilo de comunicación, su forma de resolver problemas, pero además, su forma de relacionarse con los miembros del equipo  
            y la manera de apoyarse para alcanzar esos objetivos  que se han planteado. Con la Gestión por Competencias, buscamos seguir aportando a ese 
            conocimiento interno,  que dentro del Instituto identifiquemos cómo estamos en relación a los requerimientos  que tiene cada rol 
            y de esta manera asegurar que el talento humano sea un factor que aporta al logro de los objetivos estratégicos. Ahora bien, seguramente encontraremos 
            en el ejercicio muchos colaboradores con sus competencias desarrolladas en un nivel óptimo,  que posteriormente nos podrian apoyar en el apalancamiento 
            de otros talentos, pero también puede pasar que  necesitemos trabajar en el fortalecimiento de alguna competencia y es nuestro compromiso ayudar 
            a los colaboradores, primero, a reconocer las ventajas y beneficios que traerá a su vida  el trabajar en fortalecer esa competencia y segundo,  
            brindar diversas herramientas que pueden apoyar su proceso de desarrollo. 
        </p>
        <p class="parrafo">
            La forma en la que nos articulamos con esa transformación cultural, es la generación de nuevas herramientas e insumos objetivos, medibles, que nos permitan 
            trabajar y  ayudar a los colaboradores a ser mejores  personas y profesionales, porque  las competencias blandas y el DISC, no solo se aplican en el instituto, 
            sino en la cotidianidad de cada uno de nosotros.
        </p>
        <p class="parrafo">
            <strong>5. ¿Cómo afecta mi trabajo esta iniciativa?</strong>
        </p>
        <p class="parrafo">
            Esta iniciativa, es una oportunidad para reconocer el gran aporte de valor que cada persona realiza a partir del desarrollo de sus funciones. 
            Pero además se convierte en un modelo que nos ayuda a fortalecer el autoconocimiento, la autogestión y el desarrollo personal, pues es la invitación 
            a reconocer qué es eso que nos hace exitosos y qué debemos hacer para seguir creciendo personal y profesionalmente. Así que  el impacto que puede 
            tener en nuestro trabajo,  está orientado realmente a identificar qué cosas podemos hacer de manera más efectiva y las estrategias que necesitamos 
            implementar para conseguir los objetivos que nos hemos planteado. 
        </p>
        <p class="parrafo">
            Recordemos que la visión que tenemos en esta iniciativa, es que se convierta en un beneficio no solo para el Instituto, sino que además contribuya con el 
            crecimiento integral de los colaboradores, a través de la planeación e implementación de planes de formación y desarrollo. 
        </p>
        <p class="parrafo">
            <strong>6. ¿Cuáles son las fases que siguen después de la Gestión por Competencias?</strong>
        </p>
        <p class="parrafo">
            Una vez se hayan identificado  el nivel de desarrollo de las competencias, desde Gestión Humana se realizará un plan individual  de desarrollo PID encaminado 
            a cerrar las posibles brechas que se detecten para cada trabajador, proceso en el que el líder tendrá un rol clave para el éxito del mismo. 
            Es importante resaltar que la responsabilidad de desarrollar y alcanzar el nivel adecuado de cada competencia recae en el trabajador contando 
            con el apoyo de su líder, del grupo de Gestión Humana y de las demás áreas del Instituto.      
        </p>
        <p class="parrafo">
            El proceso de Gestión por Competencias se irá involucrando paulatinamente a cada uno de los subprocesos que se adelantan desde Gestión Humana; 
            para el 2022 el reto es implementarlo en el proceso de selección y reclutamiento, buscando que los nuevos trabajadores cuenten con las competencias 
            requeridas para su rol. Para esto, se formularán entrevistas estructuradas y semiestructuradas, así como pruebas que permitan conocer la presencia 
            de los comportamientos observables de las competencias en cada candidato.
        </p>
        <p class="parrafo">
            <strong>7. ¿Con quién puedo hablar o comunicarme para conocer mi proceso en esta iniciativa?</strong>
        </p>
        <p class="parrafo">
            Quién está liderando está iniciativa es Angela Pérez,  ella es psicóloga, especialista en Gestión del desarrollo humano y bienestar social empresarial, 
            con experiencia profesional en el diseño e implementación de modelos de gestión por competencias y la creación de programas de desarrollo y formación de competencias; 
            con ella  se pueden comunicar y dialogar acerca de esta iniciativa para conocer más y profundizar en aquellos aspectos que llaman la atención.
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