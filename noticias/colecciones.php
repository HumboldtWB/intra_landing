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
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-L78B6Q2D4D"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-L78B6Q2D4D');
  </script>
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
        <h3>Conoce el trabajo de divulgación científica de las Colecciones Biológicas del Instituto Humboldt y el Registro Único Nacional de Colecciones Biológicas durante el último trimestre del 2022</h3>
        
        <br>
        
        
        <p class="parrafo">
          <i>Las colecciones biológicas son primordiales para  la investigación científica, sin embargo, el trabajo que realizan de educación y divulgación del conocimiento es fundamental para la conservación y manejo de especies a largo plazo. </i>
        </p>
        <p class="parrafo">
          Los registros biológicos en una colección son útiles en diferentes áreas del conocimiento. Por ejemplo, pueden ser usados para identificar la distribución geográfica de las especies, estimar el estado de las poblaciones presentes en el territorio e incluso identificar causas posibles asociadas a sus declinaciones. Gracias a esta información es posible iniciar procesos de seguimiento y conservación de la biodiversidad.
        </p>
        <p class="parrafo">
          En el país, actualmente existen 269 colecciones biológicas ubicadas en 27 departamentos del país <sup>1</sup>, entre las cuales se encuentran también las Colecciones Biológicas del Instituto Humboldt, quienes desarrollan estas y muchas otras labores que aportan a la comunidad científica y a la sociedad en general. Tanto las colecciones del Instituto, como otras administradas por diferentes instituciones (e.g. Universidades, institutos y centros de investigación, etc.) se encuentran registradas en  el Registro Único Nacional de Colecciones Biológicas (RNC), la cual es una herramienta administrada por el Instituto Humboldt que  busca consolidar y difundir la información básica sobre las colecciones biológicas del país. Para alcanzar este objetivo, durante el 2022 Colecciones Biológicas del Instituto Humboldt y el RNC han liderado varias iniciativas. A continuación te las presentamos:
        </p>

        <p class="parrafo">
          <strong style="font-size:1.1em;"> Red Dosel</strong>
        </p>
        <p class="parrafo">
          Desde el año pasado Colecciones Biológicas participa como cofundador de la <strong>Red Dosel Colombia</strong>, un espacio de articulación para diferentes actores interesados en la investigación y conservación de los bosques tropicales y la biodiversidad asociada a su dosel, liderada en conjunto con aliados estratégicos como Canopy Watch International y la Fundación Alianza Natural.
        </p>
        <p class="parrafo">
          Recientemente, la Red desarrolló una jornada de transferencia de conocimientos en la sede Venado de Oro que se denominó <strong>“Taller básico de ascenso al dosel, con miras a la investigación y conservación de los bosques neotropicales”</strong>. En este taller se capacitaron diferentes actores pertenecientes a universidades, organizaciones sin ánimo de lucro e investigadores del Instituto Humboldt. Allí,los participantes aprendieron sobre los diferentes métodos seguros de acceso al dosel, inspección de árboles aptos para la trepa y reconocimiento de equipos, concluyendo con una sesión práctica de lo aprendido
        </p>
        <p class="parrafo">
          <img src="../img/noticias/colecciones/ASA_2222_Felipe Villegas.jpg" alt="escalada en arbol" width="600" style="display: block;margin:0 auto">
          <small style="display: block;text-align:center; padding-top:10px">Foto por: Felipe Villegas</small>
        </p>
        <p class="parrafo">
          <img src="../img/noticias/colecciones/ASA_2099_Felipe Villegas.jpg" alt="escalada en arbol" width="600" style="display: block;margin:0 auto">
          <small style="display: block;text-align:center; padding-top:10px">Foto por: Felipe Villegas</small>
        </p>

        <p class="parrafo">
          <strong style="font-size:1.1em;">Segundo taller de Curaduría de Tejidos</strong>
        </p>

        <p class="parrafo">
          Otra de las actividades desarrolladas fue el <strong>Segundo Taller de Curaduría de Tejidos</strong>, la cual se realizó el 26 de agosto en el Centro Internacional de Agricultura Tropical -CIAT. Este taller dirigido a estudiantes universitarios contó con la participación de 11 estudiantes pertenecientes a instituciones como la Universidad de Nariño, Universidad del Cauca, Universidad del Quindío, Universidad del Tolima, Universidad Icesi, Universidad Javeriana Cali y la Universidad Nacional de Colombia, sedes Bogotá y Palmira. 
        </p>

        <p class="parrafo">
          En este evento, investigadores de las colecciones biológicas y de la línea de genética del Instituto Humboldt y del CIAT compartieron sus conocimientos sobre colecciones biológicas, colecciones de tejidos, la importancia de preservar los recursos genéticos de nuestra biodiversidad y los procesos asociados a su recolección, curaduría y preservación. También, se hicieron sesiones demostrativas y prácticas para que los participantes pudieran conocer de primera mano las técnicas de crioconservación de germoplasma y de recolección y curaduría de tejidos de insectos y plantas. Por último, se guió a los estudiantes a través de un recorrido por los laboratorios e instalaciones del centro de innovación global para la conservación y el uso de la diversidad de cultivos conocido como Semillas del Futuro del CIAT.
        </p>
        <p class="parrafo">
          <img src="../img/noticias/colecciones/Sesion_practica_2_Foto_LML.JPG" alt="practica en laboratorio" width="600" style="display: block;margin:0 auto">
          <small style="display: block;text-align:center; padding-top:10px">Foto por: Luis Miguel Leyton</small>
        </p>
        <p class="parrafo">
          <img src="../img/noticias/colecciones/Amalia_plantas_2_Foto_LML.JPG" alt="practica en salon" width="600" style="display: block;margin:0 auto">
          <small style="display: block;text-align:center; padding-top:10px">Foto por: Luis Miguel Leyton</small>
        </p>
        <p class="parrafo">
          <strong style="font-size:1.1em;"> IV Encuentro de la Red Nacional de Museos de Ciencias, Historia Natural y Colecciones Biológicas</strong>
        </p>
        <p class="parrafo">
          Durante el mes de septiembre, los días 13, 14 y 15, se realizó el <strong>IV Encuentro de la Red Nacional de Museos de Ciencias, Historia Natural y Colecciones Biológicas</strong>, en la sede del anfitrión del año 2022, la Universidad El Bosque. Este evento surge a partir de una iniciativa del año 2014, en el que, entre diferentes instituciones, se conformó la Red Nacional de Museos de Ciencias, Historia Natural y Colecciones Biológicas. Esta red es concebida como una propuesta de reunión libre conformada por colecciones biológicas y museos del país que albergan el invaluable patrimonio nacional. Actualmente, cerca de 20 entidades museales y colecciones biológicas conforman esta red. 
        </p>
        <p class="parrafo">
          En esta oportunidad, se contó con la participación de diferentes instituciones y colecciones biológicas; el Instituto, por su parte, participó con las Colecciones del Instituto y el Registro Único Nacional de Colecciones Biológicas, quienes hicieron parte activa del proceso de planeación y estructuración de este importante espacio de encuentro a nivel nacional. 
        </p>
        <p class="parrafo">
          Durante el encuentro se realizó una exhibición museográfica en donde las Colecciones Biológicas del Instituto Humboldt, junto con otras colecciones y museos provenientes de varias partes del país, tuvieron la oportunidad de mostrar algunos de sus ejemplares más interesantes y contar las historias naturales detrás de estos. 
        </p>
        <p class="parrafo">
          En el evento participaron desde estudiantes de jardín infantil hasta universitarios, investigadores y ciudadanos que tuvieron la oportunidad de viajar por la riqueza natural del país en “La biodiversidad colombiana en un solo espacio”. La muestra de algunos ejemplares por parte de Colecciones Biológicas incluyó:
        </p>
        <p class="parrafo" style="padding-left: 30px;">
          <strong>Entomología:</strong>  el escarabajo terciopelo (<i>Lycomedes ramosus</i>) y <i>Chalcohlamys dorhni</i>          
        </p>
        <p class="parrafo" style="padding-left: 30px;">
          <strong>Herpetos:</strong>   la rana arlequín de la noche estrellada (<i>Atelopus arsyecue</i>) y el caimán negro del Amazonas (<i>Melanosuchus niger</i>)
        </p>
        <p class="parrafo" style="padding-left: 30px;">
          <strong>Peces:</strong> el blanquillo (<i>Sorubim cuspicaudus</i>) y la cachama (<i>Piaractus orinoquensis</i>)
        </p>
        <p class="parrafo" style="padding-left: 30px;">
          <strong>Aves:</strong> El copetón (<i>Zonotrichia capensis</i>), el chamón (<i>Molothrus bonariensis</i>) y una nidada del primer
        </p>
        <p class="parrafo" style="padding-left: 30px;">
          <strong>Plantas:</strong> la tagua (<i>Phytelephas macrocarpa</i>) y el frailejón (<i>Espeletia paipana</i>)
        </p>
        <p class="parrafo">
          Adicionalmente, las Colecciones Biológicas del Instituto Humboldt participaron con dos charlas en el marco de diferentes simposios que tuvieron como propósito 
          conectar a las diferentes colecciones y museos con los trabajos que se adelantan actualmente en estas temáticas.La primera de estas charlas se tituló 
          <i>“El poder de las colecciones más allá del museo”</i> y la segunda <i>“Colecciones Biológicas: la digitalización de especímenes como herramienta para estudios 
          de la biodiversidad”</i>. Así mismo, dentro del espacio dirigido a público especializado, el RNC impartió la charla titulada <i>“RNC: Una herramienta que 
          consolida y difunde la información de las colecciones biológicas”</i>. 
        </p>

        <p class="parrafo">
          <img src="../img/noticias/colecciones/94FB85EA-A35A-46A4-B5E8-C5F2076DFA56.JPG" alt="practica en laboratorio" width="600" style="display: block;margin:0 auto">
          <small style="display: block;text-align:center; padding-top:10px">Foto por: Sandra Galeano</small>
        </p>

        <p class="parrafo">
          <img src="../img/noticias/colecciones/1666985311410.jpg" alt="practica en laboratorio" width="600" style="display: block;margin:0 auto">
          <small style="display: block;text-align:center; padding-top:10px">Foto por: Angela Gutierrez</small>
        </p>

        <p class="parrafo">
          <strong style="font-size:1.1em;"> Tercer taller de fortalecimiento de capacidades en el manejo de colecciones biológicas</strong>
        </p>
        <p class="parrafo">
          El <strong>Tercer taller de fortalecimiento de capacidades en el manejo de colecciones biológicas</strong> se llevó a cabo del 19 al 23 de septiembre. Este espacio, liderado por el RNC, en alianza con el equipo de Colecciones Biológicas del Instituto Humboldt y el Instituto de Ciencias Naturales de la Universidad Nacional de Colombia, tuvo la finalidad de capacitar a las colecciones biológicas registradas en el RNC en aspectos técnicos, científicos y administrativos con la finalidad de que contribuyan al  manejo e implementación de buenas prácticas de curaduría, buscando así aportar a la gestión del patrimonio biológico de la Nación.
        </p>
        <p class="parrafo">
          El taller contó con la participación de curadores de 18 colecciones biológicas ubicadas en los departamentos de Huila, Antioquia, Valle del Cauca, La Guajira, Bogotá D.C., Amazonas, Cundinamarca, Nariño, Risaralda y Quindío; además de la asistencia de diferentes instituciones, como universidades, institutos, centros de investigación, ONG’s y jardínes botánicos. También contó con el apoyo de la Autoridad Nacional de Licencias Ambientales-ANLA, el Ministerio de Ambiente y Desarrollo Sostenible, la Universidad Militar Nueva Granada y la Universidad Estatal de Arizona, quienes hicieron parte del equipo de capacitadores.
        </p>
        <p class="parrafo">
          Esta iniciativa ha logrado el intercambio de conocimientos y transferencia de capacidades a 56 colecciones biológicas, que representan el 20% del total de las colecciones biológicas registradas en el país en los últimos tres años.
        </p>

        <p class="parrafo">
          <img src="../img/noticias/colecciones/Charas_Erika Salazar.jpg" alt="charla erika" width="600" style="display: block;margin:0 auto">
          <small style="display: block;text-align:center; padding-top:10px">Foto por: RNC</small>
        </p>
        <p class="parrafo">
          <img src="../img/noticias/colecciones/Sociacion-yaneth.jpeg" alt="charla erika" width="600" style="display: block;margin:0 auto">
          <small style="display: block;text-align:center; padding-top:10px">Foto por: RNC</small>
        </p>

        <p class="parrafo">
          <strong style="font-size:1.1em;">Casa Abierta</strong>
        </p>
        <p class="parrafo">
          Del 1 al 3 de noviembre se realizó la <strong>“Casa Abierta”</strong>. En este evento la Alianza Bioversity international, CIAT y el Instituto Humboldt abrieron las puertas de sus sedes en Palmira a más de 150 estudiantes de Universidades Colombianas. Los investigadores del Instituto Humboldt y del CIAT compartieron sus conocimientos sobre cómo y para qué realizar investigación en biodiversidad y agrobiodiversidad y la importancia de preservar los recursos genéticos y los procesos asociados a su recolección, curaduría y preservación.
        </p>

        <p class="parrafo">
          Síguenos en las redes sociales de colecciones y visítanos en la sede de Villa de Leyva para mantenerte conectado con todos los talleres, eventos y contenidos que compartimos desde las Colecciones Biológicas y el RNC.
        </p>















                        
        <div id="referencias">
          <p class="parrafo">
            <sup>1</sup> Fuente: Registro Único Nacional de Colecciones Biológicas. Fecha de consulta: 4 de noviembre de 2022
          </p>          
        </div> 
        
        
        
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