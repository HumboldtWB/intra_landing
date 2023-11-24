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
    <link href="https://fonts.googleapis.com/css2?family=LAto" rel="stylesheet">
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

<body>

<!-- Top menu-->
<div class="top-menu">
    <div class="col-lg-5">
    </div>
    <div class="col-12 col-md-12 col-lg-5" style="text-align:center; text-align:right">
        <a href="http://humboldt.org.co/">&#x2b60; Volver al portal institucional</a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <a href="http://intranet.humboldt.org.co/index.php">Cerrar sesión</a>
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


    <!-- Columna -->
    <section style="padding-bottom:200px; text-align: justify">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 prologo">
                    <div style="background-color: #69BECA; color: #ffffff!important; padding:5px; margin: 0px; margin-bottom:20px">
                        &nbsp;&nbsp;&nbsp;COLUMNA
                    </div>
                    <a href="landing.php">&#x2b60; Volver</a><br><br>
                    <div class="LineaBoletin" style="padding:15px; display: flex; align-items:center;">
                        <img src="img/columnas/diego.png" style="padding-right:10px">
                        <span><strong>Diego Ochoa</strong> <br> <small></small></span>
                    </div>
                    <br>
                    <h3>La comunicación de la ciencia: entre la exactitud y el aburrimiento</h3>
                    <br>
                    El autor, cineasta y oceanógrafo Randy Olson PhD. en su libro Don’t be such a scientist hace una comparación muy interesante para proponer límites en la comunicación de la ciencia con dos conceptos que sorprenden: la exactitud y el aburrimiento. Olson compara dos documentales que fueron estrenados en 2006 sobre los efectos del cambio climático. El primero es Too Hot Not to Handle (algo así como “muy caliente para no manejarlo”), un ‘esfuerzo impersonal y objetivo’ basado en hechos y resultados de investigaciones combinados con entrevistas a científicos de talla mundial. El segundo, An Inconvenient Truth (Una verdad incómoda), es una película narrada desde una óptica personal y emotiva del ex-vicepresidente de los Estados Unidos Al Gore sobre los efectos del cambio climático. Esta última ganó un Oscar y se convirtió en un referente para la opinión pública sobre el problema climático.
                    <br><br>
                    Olson se preguntaba qué hacía que una fuera completamente aceptada en la cultura popular mientras la otra se desvaneciera en el bajo rating. La respuesta es controversial: El documental de Gore no es 100% exacto pero es totalmente entretenido. La película le otorga mayor importancia a la narración, a la historia y a la estética, pero tiene imprecisiones y omisiones, que no cambian la sustancia ni rigurosidad del mensaje principal sobre la urgencia climática. Sin embargo, no pasaría una revisión por pares. Y Olson se pregunta ¿Qué van a hacer los científicos cuando se den cuenta que hay muchas más cosas que la sola exactitud cuando se trata de comunicar la ciencia de forma masiva?
                    <br><br>
                    No estoy proponiendo que la investigación y la ciencia dejen de ser exactas, o que cometamos omisiones o inexactitudes en el ejercicio de la investigación. La rigurosidad científica es un valor central del instituto. Lo que propongo es que desde la comunicación consideremos otros enfoques, no únicamente la exactitud, para generar contenidos y mensajes que influyan de manera directa sobre los comportamientos y decisiones de los colombianos.
                    <br><br>
                    La verdad es que la comunicación es la pieza clave para lograr que la ciencia y la investigación en biodiversidad tengan efectos transformadores en la manera como la sociedad se relaciona con la naturaleza. Hoy más que nunca la divulgación, la conciencia pública, la educación (formal o informal) y el entretenimiento juegan un papel fundamental en la apropiación y democratización del conocimiento científico y cimientan las bases para formar una ciudadanía capaz de gestionarlo para su desarrollo sostenible.
                    <br><br>
                    Pero este conocimiento científico debe ser recontextualizado y adaptado a lenguajes y formas propias de diferentes grupos de interés. Es tarea de los comunicadores pensar cómo el saber científico se convierte en historias, acciones y actividades de comunicación que trascienden los modelos clásicos de divulgación y propongan nuevas formas, nuevas narrativas, nuevos canales y nuevas comunicaciones. Una comunicación disruptiva y propositiva, que cuente las historias de la biodiversidad y transformen nuestro país.
                    <br><br>
                    Quizás debamos escuchar más a autores como Olson y ¡no ser tan científicos!
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
