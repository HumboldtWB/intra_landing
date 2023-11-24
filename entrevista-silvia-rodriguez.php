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
                    <h3>ENTUSIASTA Y ENAMORADA DE LA VIDA: ASÍ ES LA NUEVA JEFE DE PLANEACIÓN</h3>
                    <br>
                    <div style="text-align: center">
                        <img src="img/entrevistas/silvia-rodriguez.jpg" width="60%"><br>
                    </div>
                    <br><br>
                    De origen santandereano y radicada en Bogotá hace 21 años, Silvia se considera una feliz mamá y esposa. Es ingeniera industrial, especialista en Gestión de Proyectos y tiene un máster en Dirección Estratégica. Durante su trayectoria laboral ha desempeñado distintos roles de consultoría. Trabajó durante casi seis años en una empresa integradora de servicios relacionados con tecnología y luego otros diez años para PwC, liderando Desarrollo de Negocio y apoyando el desarrollo de proyectos. También trabajó por cinco años en una firma de servicios legales, liderando para Latinoamérica la estrategia de desarrollo de negocios y apoyando el proceso de fusión que se dio en la región.
                    <br><br>
                    <div style="text-align: center">
                        <img src="img/entrevistas/silvia-rodriguez2.jpg" width="40%"><br>
                    </div>
                    <br><br>
                    Desde hace 15 años es docente de maestrías, posgrados y diplomados en Gerencia de Proyectos en reconocidas universidades como la Javeriana, Sergio Arboleda y Jorge Tadeo Lozano. Te invitamos a conocer más detalles de su vida en esta entrevista.
                    <br><br>
                    <div style="text-align: center">
                        <img src="img/entrevistas/silvia-rodriguez3.jpg" width="40%"><br>
                    </div>
                    <br><br>
                    <strong>EH:  ¿Cómo llegaste al Instituto?</strong>
                    <br>
                    SR: Llegué al Instituto por amor a primera vista.  Vi un post en Linkedin y decidí que quería hacer parte de esta historia, así que me postulé y luego de un proceso intenso me eligieron y yo elegí al Instituto para aportar mis capacidades.
                    <br><br>
                    <strong>EH: ¿Qué es lo que más disfrutas de tu trabajo?</strong>
                    <br>
                    SR: Me apasiona lo que hago, encontré retos muy interesantes y poder aportar mi experiencia y conocimientos a un propósito como el del Instituto es lo máximo para mi.
                    <br><br>
                    <strong>EH: ¿Quién es Silvia en el Instituto Humboldt?</strong>
                    <br>
                    SR: Me dijeron que venía a poner ‘orden’ a muchos temas, así que vine a liderar la Oficina de Planeación, un gran reto porque sola no podré lograr nada, así que aprovecho para pedirles a todos que me ayuden. Tengo un gran equipo, pero los necesitamos a todos poniendo su granito de arena en los temas que vayamos proponiendo.
                    <br><br>
                    <div style="text-align: center">
                        <img src="img/entrevistas/silvia-rodriguez4.jpg" width="60%"><br>
                    </div>
                    <br><br>
                    <strong>EH: ¿Cuáles son tus expectativas en el Instituto?</strong>
                    <br>
                    SR: Aportar en el fortalecimiento de la Institución es mi más grande expectativa, pero quizás la más importante es aprender sobre nuestra Biodiversidad y conocer más sobre los proyectos que hacemos y su efecto en nuestra sociedad.
                    <br><br>
                    <strong>EH: ¿Cuál es el principal rasgo de tu carácter?</strong>
                    <br>
                    SR: Soy súper entusiasta, le pongo color a la vida.
                    <br><br>
                    <strong>EH: ¿Qué esperas de tus amigos?</strong>
                    <br>
                    SR: Encontrar siempre en ellos una voz de aliento para compartir los momentos difíciles y una sonrisa sincera para disfrutar los triunfos juntos. Mis amigos son luz en mi camino.
                    <br><br>
                    <div style="text-align: center">
                        <img src="img/entrevistas/silvia-rodriguez5.jpg" width="60%"><br>
                    </div>
                    <br><br>
                    <strong>EH: ¿Cuál es tu ocupación favorita?</strong>
                    <br>
                    SR: Las manualidades, como por ejemplo tejer en crochet, pintar en puntillismo y mientras lo hago voy cantando.
                    <br><br>
                    <strong>EH: ¿Cuál es tu ideal de felicidad?</strong>
                    <br>
                    SR: Lograr equilibrar las emociones de la vida, para saborear todos los momentos, lugares y personas que nos acompañan en el camino, y tener paz en el corazón.
                    <br><br>
                    <strong>EH: ¿Tienes un lema?</strong>
                    SR: Menos es más.
                    <br><br>
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