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
                        <img src="img/columnas/oscar.png" style="padding-right:10px">
                        <span><strong>Oscar Javier Castaño</strong> <br> <small></small></span>
                    </div>
                    <br>
                    <h3>El propósito</h3>
                    <p class="parrafo">
                        Desde hace ya unos meses venimos trabajando al interior del Instituto en el descubrimiento de los 
                        propósitos de área enmarcados en nuestro propósito superior, el cual está definido de la siguiente manera: 
                        <i>
                            “Como instituto de investigación del Sistema Nacional Ambiental - aportamos a la construcción de país movilizando datos, 
                            información, conocimiento y narrativas que posicionan y conectan la biodiversidad y sus diversas contribuciones en la transición 
                            hacia una sociedad y economía basada en la naturaleza como centro de nuestro desarrollo sostenible”.
                        </i>
                    </p>
                    <p class="parrafo">
                        Este trabajo lo hemos venido realizando basados en el Círculo de Oro de Simon Sinek, quien expone un estilo de liderazgo organizacional 
                        basado en la inspiración según el cual las personas no se vinculan o conectan con lo que hacen, sino con el por qué lo hacen y define el 
                        "Por Qué"  como un propósito, aquel elemento que trasciende la individualidad de la organización y nos permite, como individuos, 
                        identificar por qué hacemos lo que hacemos. Esta invitación, a mi parecer, se orienta hacia el despertar de conciencia organizacional 
                        que podemos fácilmente extrapolar a nuestra vida personal y dejar de vivir en automático: hacernos las preguntas correctas que le dan 
                        razón a nuestro actuar. Esta metodología del Círculo de Oro contempla la revisión y análisis de tres elementos: El qué, El cómo y finalmente El por qué. 
                    </p>
                    <p class="parrafo">
                        Normalmente conocemos <i>Qué</i> hacemos, nuestra misión, lo que entregamos. También, incluso, sabemos <i>Cómo</i> lo hacemos, nuestra propuesta de valor, 
                        la forma única y especial de cómo trabajamos dentro de la organización, pero pocas veces sabemos <i>Por qué</i> lo hacemos, por supuesto no se refiere al dinero o 
                        logros u objetivos (esos son resultados finitos), sino que esto tiene que ver con cuál es el propósito, y normalmente confundimos estos conceptos propósito y 
                        objetivo, pero la diferencia es fundamental para la comprensión de su impacto: los objetivos o metas tienen siempre un punto de destino definido y final, 
                        se cumple y ya, hasta ahí llegó y nos planteamos luego otro más retador. Así se repite el ciclo. El propósito es constante, invariable, permanente, 
                        no tiene un final, es esa profunda convicción, la razón por la cual realizamos lo que realizamos todos los días, la razón de la existencia de la organización, 
                        la razón para levantarnos cada mañana y por qué debería importarle a alguien.  Cuando el por qué no es claro, normalmente pensamos, 
                        actuamos y nos comunicamos de afuera hacia adentro de lo más definido a lo más difuso, desde lo superficial hacia lo trascendental o profundo, 
                        bajo una visión de inspiración se piensa, se actúa y se comunica de adentro hacia afuera. Simon Sinek dice: 
                        <i>”El objetivo no es atraer a los que necesitan lo que uno tiene, sino a los que crean en lo mismo”,</i> 
                        por esto un propósito común nos une de manera auténtica, desde el interior de nuestras motivaciones, nos permite vincularnos con ello, porque creemos en lo mismo.
                    </p>
                    <p class="parrafo">
                        Es justo esto lo que buscamos, explicitar tanto nuestro propósito superior institucional como nuestros propósitos de área, identificando cómo lo 
                        que hacemos día a día contribuye de manera directa al propósito superior del instituto, con ello buscamos alinear los objetivos estratégicos, 
                        bajando en cascada hacia los indicadores y actividades de cada área, que deben contribuir e ir en línea con este propósito superior.
                    </p>
                    <p class="parrafo">
                        ¿Te has preguntado, cuál es tu propósito personal?
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
