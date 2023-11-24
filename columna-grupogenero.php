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
                        <img src="img/columnas/foto_columna.png" style="padding-right:10px">
                        <span>Grupo de Género y Equidad - Instituto Humboldt<br> <small></small></span>
                    </div>
                    <br>
                    <br>
                    <p style="font-size:18px;">El Grupo Género y Equidad lo conformamos más de 50 personas del Instituto. No tod@s participamos en todas
las reuniones; nos vamos sumando cuando podemos, de manera que en cada reunión somos alrededor de diez
personas. En este texto, algunas de nosotras respondimos las preguntas que aparecen abajo, con el ánimo de contarle al Instituto lo que hacemos y de invitar a que se unan a nosotr@s, para que esta conversación
sea cada vez más amplia e interesante. 
                    <br><br>
                    Si quieres unirte a nuestras sesiones, por favor envía un correo a <strong>generoyequidad@humboldt.org.co </strong></p>
                    <br><br>
                    <p style="font-size:18px; color:#042528;"><strong>¿Por qué el grupo Género y Equidad ha sido importante para ti?</strong></p>
                    <p style="font-size:18px; color:#042528;"><strong>¿Qué es lo que más te ha gustado de participar en este grupo?</strong></p>
                    <p style="font-size:18px; color:#042528;"><strong>¿Por qué crees que es importante que exista?</strong></p>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    <strong>El grupo surgió casi sin que nos diéramos cuenta. </strong>Nos tomamos un café en agosto de 2020 y descubrimos que teníamos muchas preguntas
sobre qué es ser mujer en el Instituto, qué es ser hombre, cómo nos relacionamos entre nosotrxs y con nuestro trabajo desde esas identidades
de género en las que estamos matriculadxs. Nos dimos cuenta de que teníamos muchas historias que contarnos y muchísimas reflexiones
pendientes.<br>
Nos hemos reunido cada dos o tres semanas desde entonces. Hemos respondido algunas preguntas y (sobre todo) nos han surgido muchas
más. Hemos oído algunas historias y queremos seguir contándonos historias y que este sea un espacio para oír a lxs que faltan y pensar juntxs
cómo hacer del Instituto, y de nuestros mundos más allá del trabajo, lugares un poco más cuidadosos y justos, más polifónicos, donde se oigan
igual de claras y seguras las voces de todxs. <strong>¡Lo que hay es trabajo y ganas de hacerlo...!</strong>
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/paula_ungar.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    A través del grupo, hemos logrado una especie de catarsis colectiva sobre temas que nos han afectado, ya sea puntualmente o en
nuestra cotidianidad. <strong>Ha sido liberador haber encontrado este espacio de confianza para hablar de estas cosas en el ámbito institucional.</strong>
Este espacio se ha ido transformando en un tejido desde el cual, poco a poco, nos fuimos encaminando hacia un rumbo cada vez
más nítido, orientado a acciones concretas para mejorar el bienestar de los investigadores desde lo individual y desde lo colectivo.<br>
Nos dimos cuenta que detrás de un ambiente laboral sano, en el Instituto se pueden esconder historias relacionadas con la discriminación y la inequidad. Estas incluyen anécdotas, que para muchos pueden parecer anodinas, hasta relatos mucho más serios que
necesitan mucha más atención de la que se le ha prestado. <strong>¡Queremos crear rutas que permitan visibilizar estos problemas!</strong>
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/natalia_norden.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    Había deseado un espacio como el que ofrece el grupo de género y equidad desde hace varios años, cuando empecé a escuchar
historias que tristemente se relacionaban con discriminación y acoso. Por eso cuando surgió, de manera tan orgánica, no dudé un
solo instante en unirme. Ha sido maravilloso encontrar un lugar no solo para hablar, compartir y reflexionar, sino para lograr acciones que buscan frenar la continuación de esos relatos y de esas situaciones al interior del Instituto. <strong>Creo que es un paso sumamente
importante, para reconocer nuestra propia diversidad, fortalecerla y protegerla.</strong> Tanto como individuos como comunidad, creo que este
grupo nos une en un tejido poderoso y heterogéneo de conocimiento, experiencias y acciones para el bienestar de todxs. Es un espacio sin jerarquías, sin señalamientos de quien sabe más o menos; un espacio para escuchar y aprender, pero también para hablar y
denunciar sin miedo ni prejuicios. Ha sido un ejercicio de diálogo, de unión y reconocimiento (hacia dentro y hacia afuera). El sueño
es que este grupo crezca, que por supuesto lleguen más voces (y por voces creo que no sólo nos referimos a las palabras, sino incluso
a diversos lenguajes como la imagen, la música, etc.) desde diferentes contextos y regiones a compartir su conocimiento, desde lo
teórico o desde la experiencia, para continuar cerrando las profundas brechas que vivimos desde el concepto de género, raza, clase,
etc. <strong>y nos acerquemos más a una verdadera equidad en nuestro trato personal y en nuestro quehacer profesional.</strong> 
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/maria_olaya.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    Pasé por casi toda mi vida sin ser realmente consciente de las inequidades e injusticias que enfrentamos las mujeres. En el último
año, empecé a interesarme por el tema, y encontré un par de podcasts super interesantes y que de forma sencilla explicaban el problema. Sentí que había vivido en una burbuja todo este tiempo, mi mamá siempre nos dijo a mi hermana y a mi que podíamos ser lo que quisiéramos y que desde que tuviéramos la pasión seríamos las mejores en ello. Lo que mi mamá tampoco sabía, es que solo por ser mujeres enfrentaríamos barreras a veces invisibles, a veces obvias, <strong>producto de prejuicios internalizados en lo más profundo de todos nosotros.</strong> Para mi, el grupo de Género y Equidad es una oportunidad para aprender más sobre género y su interseccionalidad, y a partir de ese aprendizaje contribuir a la construcción de estrategias que como Institución podamos adoptar para <strong>asegurar
la equidad de género en todo lo que somos y en todo lo que hacemos.</strong> 
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/diana_diaz.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    El surgimiento de un grupo de Género y Equidad en el instituto nos brinda la oportunidad de identificar en nuestra propia realidad como individuos y como investigadores esas brechas que a veces se tornan tan invisibles en nuestro quehacer diario y que sin embargo abordamos como parte de nuestra labor en proyectos y con comunidades, <strong>como si los problemas relacionados con Género, Equidad e Igualdad fueran simplemente cifras y datos ajenos,</strong> a los que aportamos en indicadores y en estrategias para reducir sus riesgos y efectos como aporte a las estrategias del desarrollo sostenible de un país, olvidando que nosotr@s mismos somos parte del escenario donde las relaciones de Género confluyen y donde además se cimientan orientaciones que deben ser consecuentes con nuestra misión institucional y de quienes lo constituimos. Tener la oportunidad de participar de la construcción colectiva y diversa en género y en pensamiento de un grupo como éste, abre una gran puerta para conocernos, evaluarnos y apoyarnos, ser mejores personas en una sociedad que nos necesita como excelentes científicos pero más aún como grandes seres humanos empáticos, solidarios, amorosos y respetuosos por el Otro. Este grupo es la ventanita para expresar nuestros miedos, alivianar nuestras batallas silenciosas y respirar profundo porque nos sabemos distintos y semejantes, en las condiciones que nos convocan, aprendiendo y compartiendo de tantos y tantas provenientes de un contexto social, económico y de formación educativa tan diversa, pero con experiencias y motivaciones que nos unen sin mayor pretensión que acercarnos y entendernos con mucho respeto y <strong>dando pasos en un colectivo de humanos- creativos- pensantes- sintientes.</strong>
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/klaudia_cardenas.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    El grupo Género y Equidad es un espacio seguro para la reflexión y el aprendizaje, en donde dialogamos sobre temas que podrían parecer anécdotas, historias personales o hechos alejados, pero no lo son, y al contrario <strong>son historias colectivas en donde muchxs nos sentimos identificadxs.</strong> El reconocimiento de estos hechos nos ha llevado a construir caminos para dar solución a problemáticas que podrían estar invisibles y que requieren ser vistas y solucionadas. Ojalá participen en este grupo más personas del Instituto, para seguir nutriendo la reflexión y poder encontrar respuestas que reflejen la diversidad de pensamiento, <strong>¡nos faltan voces!</strong>
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/ana_hurtado.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    El grupo de Género y Equidad <strong>ha sido para mí un espacio para aprender, compartir y proponer acciones </strong>para hacer del Instituto un mejor lugar, y para establecer vínculos entre personas que puedan fortalecer lazos de solidaridad y cuidado. Me ha permitido conocer y aprender de personas con quienes quizás no habría tenido la oportunidad de interactuar en los tiempos del trabajo presencial que hoy parecen muy remotos. Sueño con que el grupo se mantenga y amplíe su alcance, <strong>abordando otras inequidades que puedan estar presentes en nuestros diferentes entornos.</strong>
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/gisele_didier.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    Cuando hablamos de género, casi que de inmediato debemos asumir el hecho de que SI, ha existido una brecha histórica de desigualdad, entre hombres y mujeres. Este solo hecho, puede generar todo tipo de emociones y opiniones encontradas, implica que no será
bien recibido en todos los escenarios ni por todos los actores implicados. Pero como miembros activos interesados en la construcción de una sociedad más democrática, sostenible e incluyente, debemos asumir posiciones frente a hechos que son irrefutables, primero como colombianos, y luego, como habitantes planetarios, porque no podría existir sostenibilidad sin igualdad de género.<br>
Propiciar espacios que nos permitan identificar, cuestionar y reflexionar sobre nuestros propios paradigmas frente a la identidad de género, nos permitirá develar nuestros propios puntos ciegos, <strong>para así poder ser agentes de cambio en nuestros hogares, en nuestra institución y en la sociedad. </strong>Por ello, aplaudo que existan grupos como este que nos ayuden a <strong>SER mejores en nuestro quehacer.</strong> 
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/laura_castellanos.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    No he podido participar en las reuniones, pero he estado atenta a los documentos y a los correos compartidos. La creación de este espacio, a través de las reuniones, así como la información compartida en documentos, mensajes de correo electrónico y más recientemente la película, me han permitido <strong>preguntarme acerca del rol de las mujeres en la ciencia </strong>y permitirme observar y visibilizar comportamientos, patrones que tal vez pasaba por alto. Que este espacio exista es súper importante, para hablar sobre temas que pueden ser incómodos y sobre todo, hacerlo en confianza. <strong>Ha sido un canal que ha propiciado la reflexión.</strong>
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/bibiana_gomez.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    Mis inquietudes sobre las discusiones en temas de género y equidad empezaron a hacerse mucho más evidentes a nivel institucional y desde mi quehacer como investigadora enfrentándome a la formulación de proyectos en los que se exigía explícitamente la inclusión de
miradas y actores diversos, o participando en eventos en los que sentía que las reflexiones provenían casi siempre de los mismos sectores y roles. Me di cuenta de que, aunque en teoría entendía la importancia de abordar la conservación de la biodiversidad considerando las diferentes formas en las que nos relacionados con la naturaleza desde nuestro lugar en la sociedad, o de lo políticamente correcto que es tener un panel con igual número de hombres y mujeres, tenía una infinidad de preguntas al respecto. ¿Es suficiente con la igualdad numérica?<strong>¿Qué implica realmente la igualdad de género en el desarrollo de una sociedad?</strong>¿Cómo se incluye efectivamente la equidad en el ámbito personal, institucional o en la formulación de un proyecto de investigación? Me emocionó entonces hacer parte de este grupo, sin contar con que sería un espacio mucho más enriquecedor que eso, además de un cierre ligero para una semana pesada o <strong>la oportunidad para relacionarme de otra forma con mis colegas.</strong> 
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/diana_ruiz.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    Un dia llegó a mi correo una invitación que decía algo así como “en vista que hemos recibido nuevas personas en el Instituto, te invitamos a que participes en nuestras reuniones de equidad y género”, eso me causó una mezcla entre emoción y curiosidad, lo
confieso, pues yo venía de un sector donde estos temas se dan por sentado y no es tan así. Es un espacio que me ha nutrido mucho, y aunque llegué tardíamente, estar allí aportando, ver los diferentes puntos de vista bajo un común que es el papel de la equidad de género en el Instituto, me lleva a evaluarme inclusive como parte de él, y a preguntarme <strong>qué estoy haciendo desde mi quehacer para mejorarlo.</strong> Creo -y pienso que los miembros del grupo así lo ven- tenemos un papel importante bajo esta estrategia, que sin lugar a dudas ha empezado a cobrar más fuerza día con día y nos permitirá tener mayores lazos y puntos de encuentro donde <strong>la opinión y las posiciones frente a temas tan medulares como la equidad de género, cobran mayor importancia.</strong> 
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/diana_barreto.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    Me ha gustado mucho conocer los diferentes puntos de vista de las otras compañeras y compañeros que se han sumado, conocer sus percepciones y conversar sobre un tema en común que vemos desde distintos lugares. Hablar de Género y Equidad es entrar en un sin fin de conversaciones y es un tema que es realmente apasionante en varios niveles: académicos, sociales, políticos, cotidianos, personales porque da nuevas miradas para ver temas, la vida personal, las investigaciones y los contextos en general. <strong>Creo que poner en común y confiar en un espacio seguro es otro aspecto positivo,</strong> no sentirse juzgado sino poder expresar las ideas de forma tranquila y profunda. A esto se suma la necesidad urgente de estos tiempos de replantearse las posiciones de género que han reproducido violencias, negaciones, arrasamientos, y que necesitan ser interpeladas para ser entendidas y transformadas. El grupo es una oportunidad para seguir aprendiendo de forma conjunta y <strong>descubrir de forma colectiva cuál es la mejor manera de incluir estos temas a nivel institucional.</strong>
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/laura_giraldo.png">
        </div>
                    <br>
                    <div style="text-align: left; font-size:11px">
          <img src="img/linea.png">
        </div>
        			<br>
                    <strong>Nunca había participado en un espacio “institucional” como este de género y equidad.</strong> Una experiencia enriquecedora donde he podido aprender y distinguir esas actitudes que algunas veces asumimos “normales” pero en realidad son discriminatorias. Todo esto en el marco de un espacio seguro donde no eres juzgada y donde siempre hay apoyo y comprensión de estas situaciones. En el marco de esta pandemia era un momento maravilloso para encontrarse con muchas personas con las que se tiene poco contacto y se hacen más fuertes los lazos laborales. Me encantaría que muchos más de nuestros compañeros hombres se unieran y nos aportaran desde su visión y experiencia. <strong>Este espacio muestra la diversidad y multiculturalidad que tenemos.</strong>
                    <br>
                    <div style="text-align: right; font-size:11px">
          <img src="img/columnas/olga_hernandez.png">
        </div>
                    <br>
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
