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
                        <img src="img/columnas/ana-rueda.png" style="padding-right:10px">
                        <span><strong>Ana Maria Rueda</strong> <br> <small></small></span>
                    </div>
                    <br>
                    <h3>Trabajar en el Humboldt</h3>
                    <p class="parrafo">
                    Sabemos que Colombia es uno de los países más biodiversos de la Tierra y que alberga el 10% del total de la biodiversidad del planeta. 
                    Estamos acostumbrados a oír que somos los primeros en orquídeas, aves y mariposas, los segundos en plantas, anfibios y peces dulceacuícolas, 
                    los terceros en plantas y reptiles… (<a href="https://bit.ly/31i6aVu" target="_blank" rel="noopener noreferrer">https://bit.ly/31i6aVu</a> ) la lista sigue. 
                    </p>
                    <p class="parrafo">
                    No importa cómo se realice una búsqueda o cuáles son los criterios para indagar sobre la riqueza biodiversa del país, 
                    los datos son sorprendentes y basta con sentarse en calma un par de minutos para entender la dimensión de la responsabilidad que 
                    todos los trabajadores del Instituto Humboldt tenemos en nuestras manos, pues las amenazas a la biodiversidad, a nivel global, son también latentes en Colombia.
                    </p>
                    <p class="parrafo">
                    Disminuir las cifras de deforestación, alteración o deterioro de hábitats y sobreexplotación de recursos, entre otros, 
                    se logra si todos en el Instituto cumplimos con nuestra misión. Con frecuencia se piensa que el Instituto son los investigadores, y sí, 
                    pero no exclusivamente. Hemos crecido en los últimos años y cada vez lideramos y participamos en más proyectos que exigen de todos un esfuerzo mayor. 
                    Si hay más trabajo para los investigadores también lo hay para las oficinas y áreas de apoyo. 
                    </p>
                    <p class="parrafo">
                    Se habla de que en ocasiones no se tiene en cuenta a trabajadores que no son investigadores, pero el congreso interno del año pasado nos mostró lo contrario. 
                    En un esfuerzo porque el congreso fuera institucional, y no de investigación, se diseñaron actividades y trataron temáticas del interés de todos. 
                    La asistencia de personas de todas las dependencias fue el resultado de este esfuerzo interdisciplinario (<a href="http://hdl.handle.net/20.500.11761/35798" target="_blank" rel="noopener noreferrer">http://hdl.handle.net/20.500.11761/35798</a> ). 
                    </p>
                    <p class="parrafo">
                    Si pensamos en el Instituto como un rompecabezas, significa que cada uno de nosotros es una ficha indispensable para que quede bien armado. 
                    Estamos viendo cómo el Instituto se amplía y responde cada vez más, y mejor, a los retos de investigar la biodiversidad en un país como el nuestro. 
                    Este crecimiento implica un volumen de trabajo mayor, pero también resulta en la satisfacción de traducir en hechos concretos nuestro aporte
                    a la conservación de la biodiversidad. 
                    </p>
                    <p class="parrafo">
                    Si la biodiversidad es de todos entonces su estudio, conservación y cuidado nos corresponde también a todos. Este texto es una invitación a 
                    seguir trabajando con entusiasmo, con la certeza de que nuestro rol en el Instituto es importante y nuestro aporte personal y profesional es 
                    la base para el cumplimiento de metas institucionales, del país y de la humanidad.
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
