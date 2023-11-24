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
                        <img src="img/columnas/silviar.png" style="padding-right:10px">
                        <span><strong>Silvia Rodríguez</strong> <br> <small></small></span>
                    </div>
                    <br>
                    <h3>Trazando la ruta de planificación estratégica para el Humboldt</h3>
                    <p class="parrafo">
                        En el marco de la transformación institucional que está viviendo el Instituto Humboldt desde hace un par de años, 
                        uno de los ejes fundamentales es la <i><strong>Planeación Institucional</strong></i>, proceso que llevó a establecer un <i><strong>Direccionamiento estratégico</strong></i>, 
                        el cual se plasmó en el Mapa Estratégico Institucional  que marca la ruta hacia la cual se dirige la Institución. 
                    </p>
                    <p class="parrafo">
                        Posteriormente, se generaron  espacios de trabajo para revisar el esquema de gestión institucional, 
                        en donde se definieron los aspectos relevantes sobre el gobierno corporativo del Instituto Humboldt, 
                        entre ellos las instancias de decisión y las políticas institucionales. Estas se encuentran actualmente en proceso de consolidación y, 
                        de esta manera, contaremos con reglas de juego claras que faciliten el proceso de toma de decisiones a nivel institucional.  
                    </p>

                    <video src="videos/GMT20220301-135831_Recording_1686x768.mp4" width="500px" height="400px" controls style="display: block; margin: 0 auto;"></video>
                    <small style="text-align: center; display: block;">Direccionamiento estratégico</small>
                    
                    <p class="parrafo">
                        Así mismo, se inició la conceptualización del Modelo de Gestión y Desempeño institucional enmarcado en las definiciones estratégicas institucionales, 
                        que reúne los elementos críticos para la planeación y gestión. Los pilares que sustentan la gestión y el desempeño institucional se ilustran a continuación: 
                    </p>

                    <img src="img/procesos.png" alt="diagrama de procesos" style="margin: 20px auto; display: block;">
                    <small style="text-align: center; display: block;">Modelo de gestión y desempeño institucional</small>

                    <p class="parrafo">
                        Desde el pilar de <i><strong>Planes</strong></i>, el Instituto tiene retos muy importantes, entre ellos, la evaluación del Plan Institucional Cuatrienal de 
                        Investigación Ambiental (PICIA) vigente que inició en 2019 y finaliza este 2022; y la formulación del nuevo PICIA para el periodo 2023-2026, 
                        alineado al Plan sectorial, el Plan Estratégico Nacional de Investigación Ambiental (Penia) correspondiente al ciclo 2021-2030. 
                        Partiendo de lo anterior, en el segundo semestre de 2021 se realizó un ejercicio de formulación del Plan Anual Institucional (PAI), convirtiéndose,  
                        en el primer ejercicio de planeación anual que incorpora la planeación de los diferentes proyectos que ejecuta el Instituto Humboldt, 
                        incluído el proyecto de inversión POA.
                    </p>

                    <p class="parrafo">
                        Por su parte, desde el pilar <i><strong>Proyectos</strong></i>, el Instituto Humboldt se encuentra desde finales del 2021 en el proceso de formulación de los proyectos 
                        de investigación y fortalecimiento institucional financiados por recursos de inversión del Presupuesto General de la Nación (PGN) para el período 2023-2026, 
                        los cuales han sido concebidos desde las necesidades institucionales para atender la dinámica de la agenda de investigación basada en misiones y 
                        fortalecer la capacidad institucional. Otro reto fundamental, será la consolidación de mecanismos de seguimiento y medición del portafolio de proyectos 
                        institucionales que faciliten la toma de decisiones.
                    </p>
                    <p class="parrafo">
                        Finalmente, el pilar <i><strong>Procesos</strong></i> trae al Instituto Humboldt el desafío de consolidar un Sistema Integrado de Gestión Institucional (SIGI), 
                        que se compone de los subsistemas de Gestión de Calidad, Seguridad y Salud en el trabajo, Ambiental, Seguridad de la Información y Control Interno. 
                        Lograr una  articulación adecuada para fortalecer los procesos de gestión del Instituto tomará cerca de 3 años y se incorporará 
                        como elemento fundamental la gestión de riesgos, con el fin de apuntar al logro de los objetivos institucionales.
                    </p>

                    <p class="parrafo">
                        Tú eres el protagonista de estos cambios, apoya desde tu rol las acciones que nos llevarán a cumplir las metas y, 
                        por supuesto, a fortalecer el Instituto Humboldt que todos queremos.
                    </p>
                    

                    <p class="parrafo">
                        Descarga la <a href="documentos/Direccionamiento_Estrategico_y_Planeacion_Institucional_v3.pdf">presentación del Direccionamiento Estratégico aquí</a>
                    </p>

                    <small>Por Silvia Marcela Rodríguez, Jefe Oficina de Planeación, Seguimiento y Evaluación</small>
                   
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
