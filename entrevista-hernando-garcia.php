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
                    <h3>Agricultura y ganadería</h3>
                    <br>
                    <div style="text-align: center">
                        <img src="img/entrevistas/hernando-g.jpg" width="60%"><br>
                    </div>
                    <br><br>
                    <i>
                        “TENEMOS UNA MISIÓN QUE ESTÁ CENTRADA EN TRABAJAR CON VARIOS SECTORES PRODUCTIVOS, PARA QUE EN SUS MODELOS DE INTERVENCIÓN Y TRANSFORMACIÓN DEL TERRITORIO
                        INCORPOREN LAS VARIABLES ECOLÓGICAS CRÍTICAS”
                    </i>                    
                    <br><br>
                    El director Hernando García concedió una entrevista a CECODES en donde expone qué papel cumple el instituto en el Desarrollo Regenerativo del país, 
                    habla sobre los esfuerzos que realiza el instituto en la ganadería para que se practique de manera más sostenible y brinda algunos consejos sobre qué pueden hacer 
                    las empresas privadas para impulsar la creación de un entorno bioeconómico.
                    <br><br>
                    <strong>¿Cómo definen y asumen el concepto de Desarrollo Regenerativo?</strong>
                    <br><br>
                    <strong>H.G:</strong> Estuve pensando sobre el concepto de desarrollo regenerativo, he escuchado y hemos trabajado con el sector agropecuario mucho desde la
                    agricultura y la ganadería regenerativa. Cómo interpreto el desarrollo regenerativo es un modelo de desarrollo, donde la ecuación de generación
                    de riqueza incorpora otras variables que están relacionadas con la recuperación y el estado de salud de un territorio. Su modelo de desarrollo
                    donde cómo está ese territorio, cómo está la base de soporte del funcionamiento del territorio en términos del agua, de los suelos de la vida, de la biodiversidad, es parte de esa ecuación
                    de generación de riqueza, y es un modelo de desarrollo donde se mueve precisamente, en caso tal, en recuperar una condición de estado de salud
                    de ese territorio, para que la riqueza se pueda generar pero se pueda sostener en el tiempo.
                    <br><br>
                    <strong>¿Qué papel cumple una organización como el Instituto
                        Humboldt en el desarrollo regenerativo, a nivel local, país
                        y el mundo?</strong>
                    <br><br>
                    <strong>H.G:</strong> El Instituto Humboldt es una organización de base científica, su core es generación de conocimiento científico. Un conocimiento que además trabajamos con muchas
                    organizaciones a través de redes en el país, trabajamos con las universidades, trabajamos con las ONGs, con los centros de investigación empresarial
                    también. El propósito nuestro es que ese conocimiento tenga una incidencia, tenga un propósito en los cambios de modelo de pensamiento,
                    en las discusiones de país y en los cambios en los modelos de desarrollo del sector empresarial en Colombia. Y ese es el propósito frente
                     a todo el tema de desarrollo regenerativo, nosotros tenemos la capacidad de entendercómo está un territorio desde
                     esa perspectiva de estado de salud ecológico, cómo están sus bosques, cómo está su agua, cómo están las especies que hacen parte de su
                     territorio, pero en territorios productivos, esto no es solamente en áreas protegidas, esto es donde la gente está
                     viviendo y donde la gente está actuando dentro de ese territorio, lo que nosotros hemos llamado transiciones hacia la
                     sostenibilidad. Ahí es donde nuestro conocimiento tiene que ser útil, en estas conversaciones con el sector privado,
                     tiene que ser útil para que  lleguemos a esos acuerdos y pactemos cómo es posible un
                     desarrollo dentro del territorio, pero que mantengamos estas condiciones óptimas y esas condiciones de un estado de salud ecológico del territorio y
                     ahí está nuestra ciencia conectada con ese propósito.
                     <br><br>
                     <iframe width="560" height="315" style="display:block;margin: 0 auto;" src="https://www.youtube.com/embed/zrECcMa5XNE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <br><br>
                     <strong>Ya conocemos el propósito del Instituto Humboldt,
                        ¿cómo trabaja en ese momento el Instituto en el Desarrollo Regenerativo?</strong>
                    <br><br>
                    <strong>H.G:</strong> El Instituto Humboldt se mueve hoy a través de 6 grandes misiones. Esas misiones tienen una relación directa con
                    el desarrollo regenerativo, en algunos de sus componentes. Tenemos una misión que está centrada precisamente en trabajar con varios sectores
                    productivos del país, para que en sus modelos de intervención y transformación del territorio incorporen las variables ecológicas críticas
                    para mantener el estado de salud de ese territorio, eso es desarrollo regenerativo. Con eso estamos trabajando con el sector agropecuario en Colombia, estamos trabajando con el
                    sector minero energético y estamos trabajando con el sector de infraestructura. Lo que pretendemos es que estos sectores cuando intervienen un territorio
                    con ese propósito de desarrollo y generación de riqueza, dentro de ese territorio, mantengan esas condiciones mínimas, esas condiciones óptimas de un
                    estado de salud ese territorio. Igualmente estamos trabajando con la bioeconomía, es una misión que está centrada en cómo vamos a trabajar con el capital
                    natural de este país y desde ese capital, desde esa gran biodiversidad generar una mayor competitividad, esa es una misión
                    que claramente tiene una conexión con el sector empresarial en Colombia y donde igualmente pretendemos que sea un desarrollo regenerativo, en el sentido
                    que los modelos de negocio de  estas empresas, incorporen ese capital natural pero desde una perspectiva de sostenibilidad.
                    <br>
                    Las otras cuatro misiones tienen que ver claramente con un desarrollo sostenible en el país. Otra de las misiones es cómo vamos a trabajar desde
                    la generación de conocimiento y con el Gobierno nacional, en esa meta de un 30% de las áreas ecológicas de mayor importancia en el país efectivamente conservadas.
                    Esto claramente va a vincular también el compromiso de la empresa privada. Estamos tratando hoy con Ecopetrol en las eco reserva y quisiéramos trabajar con
                    muchas otras empresas, para que se comprometan en la conservación de áreas, en el manejo efectivo de esas áreas con propósitos de conservación de biodiversidad como parte
                    de su desarrollo organizacional. Otra de las misiones es la biodiversidad, cómo vamos a trabajar las ciudades, dónde está el 75% de la población en
                    Colombia y donde más del 80% de lo que demandamos y transformar nuestros territorios lo demandan las ciudades, como las ciudades van a
                    ser espacios que vinculan la  naturaleza, pero además que se movilizan hacia la conservación de la naturaleza. Tenemos otra misión que es incidir
                    sobre la conciencia pública. Necesitamos que Colombia sea el país de la biodiversidad,  que su gente entienda que depende fundamentalmente
                    de la naturaleza para cada uno de los elementos claves de su  bienestar y de su seguridad,    que entiendan e incorporen el valor de la naturaleza en
                    un país megadiverso como Colombia. Finalmente, nuestra última misión, es seguir movilizándonos a una toma de decisiones en política pública y
                    a una discusión pública sobre temas ambientales informada.
                    <br><br>
                    <i>“Necesitamos
                        que Colombia
                        sea el país de la
                        biodiversidad, que
                        su gente entienda
                        que depende
                        fundamentalmente
                        de la naturaleza
                        para cada uno de
                        los elementos claves
                        de su bienestar y de
                        su seguridad”</i>
                    <br><br>
                    <strong>El Instituto Humboldt
                        tiene como objetivo
                        la investigación de la
                        biodiversidad (capital natural)
                        ¿Cómo incluyen otro tipo de
                        capitales (económico, social,
                        cultural, intelectual) en sus
                        investigaciones?</strong> 
                    <br><br>   
                    <strong>H.G:</strong> Cuando hablamos de desarrollo regenerativo, de desarrollo sostenible como este gran paraguas, estamos
                    pensando no solamente en la naturaleza y en esa condición óptima de naturaleza, estamos entendiendo cómo esa naturaleza es la base de ese
                    bienestar de la población y es fundamental como una medida de respuesta a todos los factores de riesgo que podemos tener, por ejemplo, frente al
                    cambio climático. Nosotros trabajamos los territorios desde una perspectiva muy integral: tenemos grupos de trabajo dentro del Humboldt
                    de biólogos, economistas, antropólogos, sociólogos, abogados, geógrafos, de muchísimas disciplinas. Nos acercamos a los territorios
                    y a ese reto del desarrollo regenerativo, entendiendo todos los componentes que requiere una sociedad. Así lo estamos trabajando,
                    siempre desde la base del conocimiento, desde la ciencia, pero una ciencia que se  moviliza para que los diferentes
                    actores de un territorio puedan construir esas soluciones y puedan construir esos pactos para el desarrollo regenerativo.
                    <br><br>
                    <iframe width="560" height="315" style="display: block;margin: 0 auto;" src="https://www.youtube.com/embed/mlLM5ppUNK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br><br>
                    <strong>¿Qué es la ganadería regenerativa y cómo se está desarrollando en Colombia?</strong>
                    <br><br>
                    <strong>H.G:</strong> Uno de los grandes retos en Colombia para conseguir una conservación efectiva de la biodiversidad, es trabajar con el sector agropecuario. Son el sector
                    que mayor ocupación de tierras tienen en el país, un sector que históricamente ha estado muy relacionado con la pérdida de biodiversidad, pero es un sector
                    que se está moviendo a pensar las cosas de forma distinta. Es un sector que necesitamos en el desarrollo del país, por tanto tenemos un gran 
                    reto de innovación para que sea posible pero haciéndolo aún mejor de lo que se ha venido haciendo.
                    <br>
                    En ese sentido hemos venido trabajando con el sector ganadero, con algunos finqueros, con algunos ganaderos, que están pensando las
                    cosas de una manera distinta. Estamos trabajando, por ejemplo, con ganadería de ladera, una de las ganaderías más sensibles, que está
                    muy asociada a las áreas de bosques andinos y bosques altoandinos en Colombia. Es una ganadería que puede estar muy relacionada con la
                    producción de leche y que está asociada a los territorios donde hemos perdido más del 70% de los bosques y donde lo que nos queda debemos mantenerlo,
                    preservarlo y trabajar también  en la recuperación. Con ese sector ganadero, venimos trabajando desde una perspectiva de entender
                    la protección de los suelos y la protección de la biodiversidad, a través de un grupo de  animales muy especial que son los escarabajos coprófagos:
                    Son los escarabajos que son los encargados de reciclar toda la materia Orgánica, producto de las deposiciones  del del ganado al suelo, a
                    trabajar en la fertilidad de los suelos y mejorar la condición de fertilidad a los suelos. 
                    <br>
                    Resulta que la ganadería y en un manejo tradicional de la ganadería, se utilizan ciertas productos químicos como la ivermectinas, que una vez caen
                    al suelo a través de las excretas matan a estos invertebrados, matan a estos animales, a estos escarabajos coprófagos y se empiezan a generar
                    una cantidad de problemas dentro de estos territorios, porque el estiércol permanece en los suelos, no se degrada empieza a generar problemas
                    incluso de inseguridad para el mismo ganado y los suelos empiezan a perder fertilidad y empiezan a aumentar también la presencia de moscos y
                    mosquitos relacionados con transmisión de enfermedades al mismo ganado. Todo eso simplemente porque no está este animal, que incorpora
                    el estiércol al suelo. Lo que estamos trabajando son con mecanismos alternativos a la ivermectina, con productos biológicos, donde permiten
                    que se mantengan estos escarabajos dentro del ciclo de productividad de los suelos o incluso donde ya se han perdido por una ganadería con
                    ivermectina de mucho tiempo, se vuelven y se introducen estos escarabajos a través de su propia producción con todo un paquete tecnológico. Eso lo
                    estamos haciendo hoy realidad y con ganaderos altamente competitivos en el país. Lo que estamos encontrando  es que con la eliminación de
                    esta mala práctica, asociado obviamente al mantenimiento de cercas vivas, con vegetación nativa, de protección de suelos,
                    de protección de fuentes de agua, está mejorando de nuevo la fertilidad de los suelos y el ganadero tiene que meter menos fertilizantes a
                    los pastos para aumentar su productividad, han disminuido las enfermedades del ganado e incluso han disminuido los accidentes dentro del
                    ganado simplemente por fracturas, por la no descomposición de estiércol dentro del suelo. Estamos trabajando con ganaderos aquí en Cundinamarca, en
                    Boyacá y en el Magdalena medio, esperamos con todo esto construir un paquete tecnológico, construir un modelo realmente de ganadería regenerativa para
                    que podamos mantener esas condiciones ecológicas, en este caso relacionadas con mantenimiento de bosques, qué es el hábitat también de estos escarabajos y aumentar
                    la competitividad del sector en la producción de carne y la producción de leche.
                    <br><br>
                    <iframe width="560" height="315" style="display: block;margin: 0 auto;" src="https://www.youtube.com/embed/Z1f_PUFsIPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br><br>
                    <strong>Con su amplio conocimiento,
                        ¿Es posible adoptar
                        tecnológica o científicamente
                        los procesos naturales de
                        regeneración a los negocios?</strong>
                    <br><br>
                    <strong>H.G:</strong> Es importante que este conocimiento de base científica que lidera el Instituto Humboldt y que lidera también en articulación con
                    muchas organizaciones, sea un conocimiento que además entre dentro del pensamiento tecnológico y desarrollo del país, es fundamental y es
                    claramente posible. Con la  historia de los escarabajos coprófagos estamos viendo una pequeña historia, de cómo una información ecológica,
                    una información de un componente ecológico del sistema, está completamente relacionado con el ciclo de producción y cómo puede
                    llevar incluso a toda la construcción de un nuevo modelo de territorio, en este caso de un territorio bajo el contexto de desarrollo
                    regenerativo. Y es parte de lo que estamos haciendo también con temas de restauración ecológica en el país, cuando nosotros
                    pensamos por ejemplo en el bosque seco tropical, que es el ecosistema más amenazado en Colombia, hemos perdido
                    más del 92% los bosques que tuvimos originalmente en el país. Está asociado a una de las áreas con mayor vocación agropecuaria en
                    el país. Hoy en día el 65% de las áreas que fueron bosque seco y ya no son bosques secos, están oficialmente bajo desertificación, es decir
                    que los suelos han perdido la fertilidad y la capacidad productiva. ¿Qué hay detrás de esos suelos desertificados?
                    poblaciones mucho más vulnerables a escasez de agua, a avalanchas, inundaciones, realmente la población en mayor riesgo en el país. Todo
                    está conectado, precisamente este conocimiento lo estamos llevando a través de proyectos con la empresa privada, de recuperación de condiciones
                    ecológicas, de esos territorios altamente degradados que finalmente también tiene un impacto sobre la condición de vida de quienes hacen parte
                    de ese territorio. Es parte del propósito nuestro: conectar la ciencia con desarrollos tecnológicos que impacten en los modelos de desarrollo.
                    <br><br>
                    <i>“Hoy en día el 65%  de las áreas que fueron bosque seco ya no son bosques secos, están oficialmente bajo
                        desertificación, es decir que los suelos han perdido la fertilidad y la capacidad productiva”.</i>
                    <br><br>
                    <strong>¿Cuáles serían algunos
                        consejos que el Instituto le
                        puede dar al sector privado
                        para involucrarse en estos
                        temas?</strong>
                    <br><br>
                    <strong>H.G:</strong> Estamos en un planeta que hoy entiende la crisis ambiental, que hoy entiende las consecuencias de haber transgredido
                    sus límites planetarios, un planeta que entiende que hemos sido parte del problema y debemos ser parte de la solución. Estamos en un planeta cómo lo vimos en la discusión
                    de Glasgow y lo estamos viendo en muchos espacios internacionales que nos está llamando a un cambio en el modelo. En Colombia debemos dar ejemplo,
                    debemos trabajar todos los sectores, nosotros desde el ambiental desde el sector ambiental somos unos convencidos que podemos
                    trabajar de forma conjunta con el sector privado, con el desarrollo empresarial para tener un mejor país, un país competitivo pero un país
                    también que mantiene una condición de biodiversidad y de naturaleza necesario. Estamos pensando también en nuevos modelos de
                    desarrollo, Colombia hoy habla de la bioeconomía, es una invitación también para que en el sector privado y para el sector empresarial
                    pensemos cómo invertimos en conocimiento y en desarrollos tecnológicos, para que ese capital natural sea la
                    base de nuestro desarrollo. Vemos sectores hoy como el hidro energético o el minero energético, que están viendo cómo se van a mover
                    en los próximos 30 años de producción de energía basada en combustibles fósiles a energías limpias,
                    todos estamos empezando a cambiar nuestro modelo, trabajemos de manera conjunta y desde el Instituto
                    Humboldt ponemos a disposición de todas las empresas nuestra capacidad científica, nuestro conocimiento científico para
                    que asumamos este reto e innovemos en los modelos de desarrollo para el país.

                    <br><br>
                    <iframe width="560" height="315" style="display: block;margin: 0 auto;" src="https://www.youtube.com/embed/LjykfMEC5do" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br><br>
                    <strong>¿Qué debemos aprender de la
                        biodiversidad para protegerla
                        desde cualquier posición en
                        la que estemos?</strong>
                    <br><br>

                    <strong>H.G:</strong> Hoy entendemos que cuando perdemos biodiversidad, cuándo se empiezan a generar estos colapsos, somos nosotros los que estamos más
                    vulnerables a lo que pasa en el planeta. La misma vida empieza a responder. Conectémonos con esta perspectiva regenerativa del desarrollo, con esta perspectiva donde necesitamos un desarrollo que genere
                    riqueza y que sea esa riqueza genere beneficios y bienestar social, pero dentro de la ecuación de esa generación de riqueza incluyamos todo en la
                    naturaleza, incluyamos el valor de la naturaleza, que cuando hay un desarrollo que degrada un territorio no es sostenible en el tiempo, que cuando generamos un modelo de desarrollo
                    que mantiene esas condiciones ecológicas, no solamente es más competitivo sino que nos da sostenibilidad en el tiempo.
                    Tenemos que trabajar de forma conjunta con la naturaleza y que realmente sea también la base de identificación y de creación
                    de riqueza en este país.
                    <br><br>
                    <strong>Por último, quisiéramos saber
                        ¿cuál es su balance de la
                        COP26?</strong>
                    <br><br>
                    H.G: En la COP26 yo pude estar los primeros 3 días de esta Conferencia en Glasgow, estuve acompañando al Gobierno Nacional, con el ministro de Medio
                    Ambiente y también hubo una alta presencia de empresarios en este importante evento. La COP26 se dibuja hoy como un
                    espacio de diálogo global, ya no es un tema de ambientales para ambientales, sino es un tema realmente de asumir un
                    cambio en las tendencias que estamos viviendo en el planeta. Estamos llegando a acuerdos y un acuerdo implica que nos
                    tenemos que mover a un punto dónde nos vamos a encontrar. Partimos desde planteamientos de gritos de urgencia que
                    la ciencia soporta sobre lo que estamos viviendo, pero también partimos desde planteamientos de las necesidades de desarrollo
                    y de crecimiento de economías. ¿Dónde nos vamos a encontrar? Ese es el gran punto y esa
                    es la discusión que estuvimos dando en la COP. Tiene que haber un punto de encuentro que realmente el que gane con
                    ese punto de encuentro sea el planeta, sean las generaciones presentes y futuras.
                    <br><br>
                    <strong>
                        <i>Publicación de CECODES</i>
                    </strong>
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