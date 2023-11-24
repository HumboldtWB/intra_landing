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
                        &nbsp;&nbsp;&nbsp;Entrevista 
                    </div>
                    <a href="landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
                    <br>
                    <h3>Entrevista Sisrespuesta</h3>
                    <br>
                    <div style="text-align: center">
                        <img src="img/entrevistas/greta-martinez.jpg" class="img-fluid"><br>
                    </div>
                    <br><br>
                    <p class="parrafo">
                        Hablamos con Gretta Martínez, la persona encargada de Sisrespuesta, quien nos explica cómo funciona el sistema, 
                        por qué cambió el proceso y cuál es la nueva herramienta que debemos usar en el Instituto.
                    </p>
                    <p class="parrafo">
                        1. ¿Qué es Sisrespuesta? <br>
                        <strong>Rta:</strong> Es el sistema de gestión de PQRS que maneja el Instituto desde el año 2018 para responder solicitudes. 
                    </p>
                    <p class="parrafo">
                        2. ¿Qué se considera como una PQRFS? <br>                        
                        <strong>Rta:</strong> Una PQRFS es la sigla generalmente utilizada para referirse a las peticiones, quejas, 
                        reclamos y sugerencias que son recibidas por entidades públicas y privadas en el marco del derecho fundamental de petición. 
                        Este derecho está consagrado en la Constitución Política y ha tenido un desarrollo legal y jurisprudencial. <br>
                        Adicionalmente, es una de las formas en las que los ciudadanos se relacionan con el Instituto.
                    </p>
                    <p class="parrafo">
                        3. ¿Por qué es importante responder estas solicitudes? <br>
                        <strong>Rta:</strong> Es importante atender estas solicitudes porque, a raíz de su carácter de derecho fundamental, legalmente existen plazos determinados para responder, 
                        además de exigir calidad en la respuesta. Cuando no se responde a un derecho de petición o se responde sin llenar los requisitos que la Corte Constitucional exige, 
                        se pueden interponer acciones de tutela,  que es el mecanismo judicial para atender las vulneraciones a los derechos fundamentales consagrados en la Constitución. <br>
                        Cuando se llega a la acción de tutela el juez puede ordenar que se de respuesta en plazos muy cortos (horas) 
                        y si no se responde en este plazo, puede desencadenar que nuestro director se vea inmerso en un desacato por incumplir una orden judicial, 
                        lo cual conlleva a la privación de la libertad. <br>
                        Además, es importante mantener una relación cercana y transparente con los ciudadanos y las entidades que nos hacen solicitudes. 
                    </p>
                    <p class="parrafo">
                        4. ¿Qué es un enlace?¿Cómo sé quién es el enlace de mi oficina? <br>
                        <strong>Rta:</strong> Un enlace es el término que utilizamos al interior del Instituto para referirnos a las personas que asignan las solicitudes 
                        al interior de su oficina y que hacen seguimiento en conjunto con la Dirección a esas solicitudes. <br>
                        <br>
                        Actualmente tenemos un enlace para cada oficina:
                    </p>                    
                    <ul>
                        <li>Subdirección Financiera y Administrativa: Marcelo Betancur.</li>
                        <li>Asuntos Internacionales, Política y Cooperación: Erika Silva.</li>
                        <li>Auditoría Interna: Erica Pineda</li>
                        <li>Dirección General: Gretta Martínez</li>
                        <li>Jurídica: Paola Carolina Pinto</li>
                        <li>SiB Colombia: Dairo Escobar</li>
                        <li>Subdirección de Investigaciones: Jessica Nieto</li>
                        <li>Planeación Seguimiento y Evaluación: Claudia Villa</li>
                        <li>Comunicaciones: Carolina Marín</li>
                        <li>RNC: Erika Salazar.</li>
                        <li>Subdirección de Servicios Científicos y Proyectos Especiales: Juliana Agudelo.</li>
                    </ul>
                    
                    <p class="parrafo">
                        5. ¿Por qué se vió la necesidad de cambiar el sistema? <br>
                        <strong>Rta:</strong> Lo que cambiamos no fue el sistema sino la herramienta que utilizamos para dar trámite a las PQRFS. Anteriormente, 
                        teníamos una plataforma en donde debíamos ingresar y cerrar manualmente todas las solicitudes, hacer seguimiento y recibir 
                        insumos para responder a los ciudadanos y a las entidades mediante correo electrónico. Con el crecimiento del Instituto, 
                        la cantidad de solicitudes iba en aumento y sobrepasaba la capacidad del equipo para hacer seguimiento. Por estas razones, 
                        vimos la necesidad de automatizar ciertos procesos, como el envío y recepción de solicitudes y, además, tener la trazabilidad en tiempo real.
                    </p>
                    <p class="parrafo">
                        6. ¿Cuáles son los principales cambios? <br>
                        <strong>Rta:</strong> El principal cambio con la nueva herramienta, Orfeo, se desarrolla en términos de <strong>interacción con el usuario. </strong>
                        Con el sistema anterior únicamente teníamos acceso las personas de Dirección General y cada cambio de estado en la solicitud tenía que ser actualizado manualmente. 
                    </p>
                    <p class="parrafo">
                        En la nueva plataforma, Orfeo, esto no es así, ya que todos podemos interactuar con ella. Se pueden brindar instrucciones dentro de los equipos 
                        de trabajo sin tener que copiar a todos en la cadena de correos y adicionalmente informar a la Dirección. Esto se refleja en el histórico de cada radicado, 
                        no hay riesgo de que alguien no pueda ver el documento o los anexos y nos da mayor seguridad en cuanto a lo que está pasando con cada solicitud  
                        únicamente verificando el número del radicado. 
                    </p>
                    <p class="parrafo">
                        El segundo cambio importante se dio en términos de automatización, antes teníamos que ingresar todas las solicitudes al sistema 2 veces: 
                        una para centralizar las solicitudes en el correo de <a href="mailto:sisrespuesta@humboldt.org.co">sisrespuesta@humboldt.org.co</a>  y otra para ingresar al sistema el canal de recepción inicial 
                        (correo electrónico, sedes o en la página web). Con la nueva plataforma, las PQRS recibidas a través de la página web son ingresadas de manera automática, 
                        las recibidas por el correo electrónico <a href="mailto:atencionalciudadano@humboldt.org.co">atencionalciudadano@humboldt.org.co</a> ingresan de manera semiautomática y las que se reciben en físico tienen un ingreso manual. 
                    </p>
                    <p class="parrafo">
                        Por otro lado, el envío de la respuesta anteriormente se realizaba por correo electrónico. Con el nuevo sistema, se puede realizar desde la plataforma optimizando los tiempos.
                    </p>
                    <p class="parrafo">
                        Por último, cambió el correo electrónico para centralizar las solicitudes: ahora tenemos el correo de <a href="mailto:atencionalciudadano@humboldt.org.co">atencionalciudadano@humboldt.org.co.</a>
                    </p>
                    <p class="parrafo">
                        7. ¿Qué es Orfeo? <br>
                        <strong>Rta:</strong> Es una plataforma para gestionar todo tipo de solicitudes que se puede adaptar a los requerimientos específicos de cada organización. A partir del 1 de abril de 2022 el Instituto decidió adoptarlo para la gestión de PQRFS.
                    </p>
                    <p class="parrafo">
                        8. ¿Existe un manual o procedimiento para usar el nuevo sistema? <br>
                        <strong>Rta:</strong> Los documentos de transición que existen actualmente pueden ser consultados en el Sistema Integrado de Gestión ubicado en la Intranet:  
                        <a href="http://intranet.humboldt.org.co/sgc/EDP-P-11%20Gesti%C3%B3n%20y%20seguimiento%20a%20las%20peticiones,%20quejas,%20reclamos%20y%20sugerencias.pdf" target="_blank" rel="noopener noreferrer">
                            EDP-P-11 Gestión y seguimiento a las peticiones, quejas, reclamos y sugerencias.
                        </a>
                         En cuanto sea aprobado el nuevo procedimiento, 
                        les informaremos por correo electrónico.  El nuevo documento contará con un anexo que recoge el manual del usuario. Por el momento, 
                        si tienen dudas sobre el manejo de la herramienta, pueden consultar el video de la 
                        <a href="https://drive.google.com/u/0/open?id=1Lo3o9lpLAnkEK94opgrUKq7AgRMgAZdI" target="_blank" rel="noopener noreferrer">capacitación general.</a>                         
                    </p>
                    <p class="parrafo">
                        Si tienen inquietudes, no duden en escribirme al correo <a href="mailto:sisrespuesta@humboldt.org.co">sisrespuesta@humboldt.org.co</a> o contactarme por hangouts.
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