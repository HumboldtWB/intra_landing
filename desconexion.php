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
                <a class="dropdown-item" href="lis_car.php">Consultar CAR</a>
                <a class="dropdown-item" href="viaticos.php">Solicitud gastos de viaje</a>
                <a class="dropdown-item" href="consviatico2.php">Consultar gastos de viaje</a>
                <a class="dropdown-item" href="anticipo.php">Solicitud anticipo</a>
                <a class="dropdown-item" href="consanticipo.php">Consultar anticipo</a>
                <a class="dropdown-item" href="gastosinvitados_nuevo.php">Solicitud gasto invitado</a>
                <a class="dropdown-item" href="conscarta_nuevo.php">Consultar gasto invitado</a>
				<a class="dropdown-item" href="solicitud_salas.php">Reserva de salas</a>
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
                        &nbsp;&nbsp;&nbsp;ENTREVISTA
                    </div>
                    <a href="landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
                    <br>
                    <h3>Estuvimos hablando con Rafael Parra jefe de la oficina de Talento Humano, quién nos resuelve algunas dudas sobre la Ley de Desconexión Laboral. </h3>
                    <br>
                    <p>
                      <strong>1. ¿Qué es la Ley de Desconexión Laboral?</strong>
                    </p>
                    <p>
                      Es un derecho que tenemos todos los trabajadores a no ser contactados para fines laborales, salvo algunas excepciones, a través de ningún medio, 
                      mientras nos encontremos disfrutando del tiempo libre una vez hayamos terminado la jornada laboral, esto incluye licencias, vacaciones o permisos. 
                      Así las cosas, el empleador se abstendrá de formular órdenes u otros requerimientos por fuera de la jornada laboral. Ley 2191 de 2022. 
                    </p>
                    <p>
                      <strong>2. ¿Cuáles son esas excepciones que mencionaste anteriormente?</strong>
                    </p>
                    <p>
                      Las excepciones que están contenidas en la ley son:
                    </p>
                    <ol>
                      <li>Los trabajadores que desempeñen cargos de dirección, confianza y manejo.</li>
                      <li>Los trabajadores que por la naturaleza de sus actividades o funciones tengan disponibilidad permanente.</li>
                      <li>Los eventos de fuerza mayor o caso fortuito en los que se requiera cumplir deberes extra de colaboración con la empresa o institución, cuando sean necesarios para la continuidad del servicio o para solucionar situaciones difíciles o de urgencia en la operación de la empresa o la institución, siempre que se justifique la inexistencia de otra alternativa viable.</li>
                    </ol>
                    <p>
                      <strong>3. ¿Ya contamos con una Política de Desconexión Laboral en el Instituto?</strong>
                    </p>
                    <p>
                      Si, esta puede ser consultada en la intranet del Instituto, se encuentra alojada dentro de la política de administración del talento humano.
                    </p>
                    <p>
                      <strong>4. ¿Qué obligaciones para el empleador contiene la Ley de Desconexión Laboral?</strong>
                    </p>
                    <ul>
                      <li>
                        Todo empleador tendrá como obligación contar con una política de desconexión laboral. La cual deberá contener como mínimo: i) La forma cómo se garantizará 
                        y ejercerá tal derecho; ii) Un procedimiento que determine los mecanismos y medios para que los trabajadores puedan presentar quejas frente a la vulneración 
                        del derecho; iii) Un procedimiento interno para el trámite de las quejas.
                      </li>
                      <li>
                        Respetar la desconexión laboral de sus trabajadores y garantizar que los colaboradores disfruten de sus licencias, vacaciones, permisos y descansos.
                      </li>
                    </ul>
                    <p>
                      <strong>
                        5. ¿El empleador podría asignar tareas de trabajo, en un horario por fuera de la jornada laboral, haciendo la salvedad que la atención a las mismas deberá 
                        realizarse dentro de la jornada del día siguiente?
                      </strong>
                    </p>
                    <p>
                      No, el empleador debe respetar y garantizar la desconexión del trabajador en horas laborales, sin embargo, es preciso tener en cuenta las excepciones 
                      contempladas en la ley 2191 de 2022. Por lo que la sugerencia, es que las tareas se asignen dentro de la jornada laboral.
                    </p>
                    <p>
                      <strong>6. ¿Con la Ley de Desconexión Laboral se crean obligaciones para los trabajadores?</strong>
                    </p>
                    <p>
                      Específicamente la ley no las menciona. Sin embargo, en virtud de lo establecido y la finalidad de la ley, todos los trabajadores se obligan y 
                      comprometen a no contactar con fines laborales y a través de cualquier medio a sus compañeros, subalternos o superiores al finalizar su jornada 
                      laboral y durante el tiempo de descanso, licencias, permisos y vacaciones, así mismo, los trabajadores se obligan a destinar de forma exclusiva 
                      los tiempos de descanso,  vacaciones, incapacidades, licencias a su uso y goce efectivo.
                    </p>
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