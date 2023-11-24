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
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30877272-1"></script>
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
        <h3>Entrevista: Descubre cómo se gestó el nuevo diseño organizacional y el trabajo que cumplió Mercer en este proceso</h3>
        
        <br>

        <p class="parrafo">
          <img src="../img/IAvH-1969.jpg" alt="humboldt" width="600" style="display: block;margin:0 auto">
          <span style="display:block; text-align: center;">Foto por: Felipe Villegas</span>
        </p>
        
        <p class="parrafo">
            Un equipo interdisciplinar de la compañía Mercer trabajó en la estructuración del nuevo diseño organizacional del Instituto Humboldt. Durante varios meses estudiaron la misión y el funcionamiento interno del Instituto mediante entrevistas y diferentes sesiones de trabajo colaborativo y llevaron a cabo investigaciones sobre cómo otras entidades afines a las misiones y retos estratégicos del Instituto han resuelto sus organizaciones, para así diseñar este nuevo modelo organizacional.
        </p>
        <p class="parrafo">
            Hablamos con Leonardo Castillo, Senior Director Affiliate y María Angélica Pérez, Gerente Senior Affiliate, dos de las personas que lideraron desde Mercer el análisis y estructuración del nuevo diseño organizacional del Instituto Humboldt. Ellos hablaron sobre su experiencia,  el proceso realizado y ofrecen algunos consejos para adaptarnos al cambio. 
        </p>

        <div class="row" style="
        justify-content: center;
        ">
            <div class="col-md-4">
                <img src="../img/noticias/MariaAngelica-1.jpg" alt="" class="img-fluid" height="300px" style="max-height: 300px;min-height: 300px;object-fit: cover;">
                <span class="d-block text-center">
                    María Angélica Pérez
                </span>
                <span class="d-block text-center">
                    Gerente Senior Affiliate
                </span>
            </div>
            <div class="col-md-4">
            <img src="../img/noticias/IMG_1504.jpg" alt="" class="img-fluid" height="300px" style="max-height: 300px;min-height: 300px; object-fit: cover;">
                <span class="d-block text-center">
                    Leonardo Castillo
                </span>
                <span class="d-block text-center">
                    Director Senior Affiliate
                </span>
            </div>
        </div>

        <p class="parrafo">
            <strong>¿A qué se dedica la empresa Mercer?</strong>
        </p>
        <p class="parrafo">
        <strong>L.C.:</strong> Mercer hace parte del grupo Marsh McLennan Company, que se dedica a asesorar y entregar soluciones que ayudan a proteger el valor percibido de las compañías. <br>
        Mercer tiene experiencia de más de 50 años y durante los últimos 15 años nos hemos enfocado en procesos de transformación, con las personas como eje fundamental, 
        entendiendo que las personas son las que hacen que las cosas sucedan. Durante este tiempo hemos encadenado varias de nuestras soluciones 
        en virtud de la transformación de las organizaciones. <br>
        Algo que me gustaría resaltar es que el impacto que nosotros tenemos muy en cuenta es el de las personas, porque <strong>las personas son las que movilizan las organizaciones</strong>, 
        de hecho, hay un dato que acumula Mercer y es que llevamos algo más de 110 millones de personas impactadas en las organizaciones de nuestros clientes a través 
        de nuestras intervenciones. 
        </p>

        <p class="parrafo">
            <strong>¿Con qué experiencia cuenta Mercer en este tipo de procesos de transformación?</strong>
        </p>

        <p class="parrafo">
         <strong>L.C.:</strong> En el equipo de trabajo tenemos diferentes formaciones profesionales y experiencias que contribuyen a estas construcciones. En nuestro equipo, por ejemplo, María Angélica tiene formación en finanzas y una amplia experiencia de más de 15 años en consultoría. Jairo Gómez es músico de profesión y nos da una mirada diferente, vemos que los problemas organizacionales y los retos que enfrentan las organizaciones hoy son más complejos y por eso necesitamos capacidades diferentes. Jairo ha estado en varios rediseños organizacionales. Karen Velásquez es ingeniera, ella nos apoya porque conoce muy bien las entidades públicas en colombia y ha trabajado con los diferentes ministerios, así que nos brinda esa perspectiva con esa otra faceta del Instituto. Y yo Leonardo, tengo más de 25 años de experiencia en consultoría, este ha sido el mundo en el que me he movido.
         <br>
         Hemos tenido experiencias recientes en donde hemos guiado transformaciones en todo tipo de organizaciones, en empresas de variados sectores y países de la región. Sabemos que no es suficiente tener experiencia solo en un tipo de compañía, sino que debemos tomar cosas de diferentes industrias y como ves tenemos un equipo bastante dinámico que nos trae esa diversidad. 
        </p>
            
        <p class="parrafo">
            <strong>¿Cómo identificaron lo que se debe cambiar en el Instituto? ¿Cuál es la metodología usada en este proceso?</strong>
        </p>

        <p class="parrafo">
            <strong>L.C.:</strong> Este ha sido un proceso bastante interesante, primero fue entender muy bien al Instituto, para nosotros cada organización que intervenimos es un mundo nuevo y empezamos de cero, comenzamos haciendo entrevistas a todo el equipo directivo, hablamos con líderes de todas las áreas dentro del Instituto y empezamos a identificar de primera mano la situación actual y tomamos un inventario anónimo de afirmaciones, que nos lleva a conocer qué piensa el Instituto. 
            <br>
            El segundo paso para nosotros fue entender la estrategia, para dónde va el Instituto.  Por su gente, cada organización es muy diferente, cada organización tiene capacidades diferentes para implementar, entonces entendimos cuál es la estrategia, qué es lo que el equipo directivo quiere para el Instituto y para el futuro. 
            <br>
            Una vez teníamos esas conclusiones de cuál era la situación actual y conocimos qué problemáticas y retos enfrenta el Instituto, hicimos un benchmark (estudio profundo sobre entidades competidoras o afines) con cerca de doce compañías en el mundo. Involucramos organizaciones parecidas y otras no tan parecidas. De Colombia trajimos tres ejemplos, pero también tomamos ejemplos de Europa, de Estados Unidos, etc. Ejemplos tan bonitos como el de la NASA de dónde tomamos buena parte de la forma como nos hemos venido organizando, a través de misiones y también nos da un buen número de directrices. Entonces una vez nos entendimos adentro, fuimos y miramos afuera y entendimos que debíamos empezar a hacer.
        </p>

        <p class="parrafo">
            <strong>Con esos insumos ¿qué metodología de trabajo usaron? </strong>
        </p>

        <p class="parrafo">
          <strong>María Angélica Pérez:</strong> Estas son las herramientas que usamos para el proceso, por un lado el <strong>análisis de datos</strong>. 
          Nosotros hacemos una recolección de datos que 
          están estructurados y desestructurados y los recopilamos, los analizamos para poder determinar cuál es ese funcionamiento alrededor de la 
          información que existe del Instituto. <strong>El conocimiento del negocio</strong>, para entender muy bien cuáles son los servicios, cuál son los grupos de interés, 
          cuáles son las necesidades, cuáles son las entradas y salidas de este modelo, usamos distintas metodologías, por un lado usamos el <strong><i>design thinking</i></strong> porque 
          nos gusta mucho construir colectivamente y esto es muy poderoso en términos de construcción para poder definir cual es el mejor deber ser al que llegaríamos con ese diseño organizacional. 
          <br>
          Hay una anotación bien importante y es que normalmente uno entiende que los diseños organizacionales, hablan únicamente de organigrama y si bien, al final, termina en un organigrama, lo que realmente hacemos es crear una estructura funcional alrededor de capacidades, alrededor de gobernanza y alrededor de las posiciones que se requieren para tomar las mejores decisiones con la mayor oportunidad posible. Por esta razón, involucramos las metodologías ágiles, para que, por un lado, participen los equipos de trabajo a distintos niveles y por el otro, vayamos viendo resultados a lo largo de las construcciones que hagamos. En el caso del Instituto, llegamos a la conclusión de que no estaba previsto tener un modelo de operación, sin embargo, lo vimos necesario para poder dinamizar las conversaciones y asegurar que nuestro objetivo final, que era el diseño organizacional, se diera. Es por esto que construimos el modelo de operación de alto nivel, bajo esa nueva mirada y bajo esos nuevos criterios. Para ello utilizamos distintas dinámicas: entrevistas, espacios para solución de dudas, muchas sesiones de ideación, muchos talleres de cocreación y un trabajo de escritorio que se hace por parte del equipo consultor para ir procesando, construyendo y llevando algunos ejercicios preliminares.
          <br>
          También, tenemos nuestro <strong>modelo de congruencia</strong> que es el que resume de alguna forma todo lo que hacemos, partimos de entender la misión, el entorno, 
          cómo funciona el gobierno, qué pasa con nuestros proveedores, el mercado, la competencia y de esta forma podemos acercarlos a esa competencia o ese contexto que, 
          a veces, es un poco intangible para las organizaciones. 
          <br>
          A partir de entender el modelo de negocio, el modelo de gestión y de operación, el quehacer del Instituto, con qué estructura se hace, cómo están las personas y 
          la cultura, determinamos qué necesitamos, cuál es la estructura, cuáles son las funciones y los perfiles. De este ejercicio también salen muchas implicaciones 
          alrededor de componentes como innovación, productividad, eficiencia, etc. También hay un punto muy importante que son <strong>los criterios de diseño</strong>, 
          que son los lineamientos que nos van a permitir asegurar que ese diseño sea continuo, es decir, que no sea en virtud de una coyuntura sino que 
          permanezca a lo largo de la gestión del Instituto y que, además, ante cualquier cambio de circunstancia o condición de la estrategia, sirvan de 
          referencia para determinar qué debemos hacer. En este caso definimos <strong>5 criterios</strong> que fueron construidos colectivamente con el equipo 
          directivo y que son los lineamientos para poder determinar qué cambia y qué no cambia en ese diseño organizacional a partir de ahora y durante su implementación.
        </p>

        <p class="parrafo">
          <strong>¿Cuánto tiempo tarda todo este proceso?</strong>
        </p>

        <p class="parrafo">
          <strong>M.A.P.:</strong> Arrancamos en agosto del 2022 y duramos un poco más de tres meses en ese proceso de diseño, algo importante que me gustaría agregar es que teníamos conocimiento previo porque conocemos muy bien el SINA y todos sus Institutos en distintas dimensiones, desde el componente financiero, hasta el componente ambiental; en ese sentido nuestro trabajo era actualizar ese entendimiento y a nivel de Instituto, profundizar y entender cuáles son esos dolores que tiene la organización para la implementación de la estrategia. 
          <br>
          Luego ya construimos el diseño, definimos capacidades organizacionales, modelo de gobierno, el modelo de operación, el modelo de proyecto y como queda la estructura en el deber ser y los perfiles, cuáles son esos perfiles que se deben tener independientemente de las personas, para poder llegar a esos objetivos estratégicos que nos hemos trazado. 
          <br>
          Luego hicimos el plan de implementación apalancado en metodologías de gestión de cambio. También acompañamos al director Hernando García en la presentación a la junta directiva, a distintas conversaciones con algunos miembros para poderlos sensibilizar acerca de la importancia de estos cambios, el porqué del cambio y cómo eso va a favorecer la continuidad del Instituto, pero sobre todo el impacto y el crecimiento que se está proponiendo en la estrategia. 
          <br>
          En ese plan de implementación, la idea es que les estamos dejando un ejercicio con mucho énfasis durante 6 meses, que es el proceso de transición , porque es cuando vienen los cambios más fuertes y las implicaciones que tiene este nuevo diseño. Muchas veces la pregunta es ¿si hasta ahora nos ha funcionado para que lo vamos a cambiar? Lo que pasa es que no todas las personas o cargos tienen todo el contexto, entienden que como su cargo está funcionando, entonces todo funciona igual, pero realmente no es así.  En ese plan de implementación, hay cambios de nomenclaturas, posiciones, perfiles, por lo que desde Gestión Humana se implementarán planes de desarrollo, es decir, distintas herramientas e instrumentos para lograr ese cambio. Es decir, el proceso de implementación fuerte dura 6 meses,  pero este cambio permanece, mientras permanezca la estrategia y finalizará hasta cuando cumplamos los objetivos estratégicos que nos trazamos a 2030.
        </p>

        <p class="parrafo">
          <strong>¿Cómo se medirá el éxito de esta transformación? ¿Cómo mantengo en el tiempo esta transformación?</strong>
        </p>

        <p class="parrafo">
          <strong>L.C.:</strong> El objetivo con el que hacemos todo es hacer más fácil la implementación de la estrategia y el éxito dependerá de que cumplamos la estrategia que nos trazamos. Obviamente en el camino vamos a encontrar ajustes, algo que queramos mejorar u optimizar frente a la primera óptica que le dimos. Una forma también de medir el éxito de esta transformación es identificar cómo cada uno contribuye desde su lugar de trabajo y cuál es su aporte, entender esas cosas positivas que trae el cambio y ayudar desde su puesto de trabajo a esas nuevas formas de hacer. 
          <br>
          Lo que queremos con todo esto es asegurar la sostenibilidad de la organización, asegurar mejores resultados, estamos brindando y fortaleciendo mayores capacidades para el Instituto. En este orden de ideas, seguramente  otra medición serán ingresos más sostenibles e ingresos en áreas que incluso no existían o líneas que no teníamos en el pasado y capacidades concentradas, eso es tal vez la media.
        </p>

        <p class="parrafo">
          <strong>¿Qué papel cumplen los trabajadores dentro de esta reestructuración?</strong>
        </p>

        <p class="parrafo">
          <strong>M.A.P.:</strong> Cada uno desde su puesto de trabajo tiene que entender primero muy bien el porqué de todo este cambio, si no queda claro, pregunten a sus líderes, pregunten a sus jefes inmediatos, pregunten a los coordinadores de sus áreas y entiendan el por qué del cambio. Eso nos brinda alineación y saber que todos vamos en el mismo sentido. Lo siguiente es empezar a asumir esas nuevas funciones, estos nuevos retos. Cambiar nos cuesta a todos, quisieramos mantener las costumbres que teníamos antes, pero esto nos va a dar formas más eficientes de hacer las cosas. No estamos ensayando, estas son formas que nosotros hemos visto que funcionan en diferentes entornos. 
        </p>
        <p class="parrafo">
          Algunos puntos clave para la transformación en las empresas son:
        </p>
        <ol>
          <li>Los criterios de diseño.</li>
          <li>Preparar equipos y personas.</li>
          <li>Mejora continua.</li>
          <li>Comunicación.</li>
          <li>Involucrarse con el cambio.</li>
          <li>Liderazgo para el cambio.</li>
          <li>Estrategia para la transformación.</li>
        </ol>

        <p class="parrafo">
          En la medida en que estemos más involucrados y seamos más participativos, incluso para cuestionar, preguntar y dudar de lo que nos estén mostrando, va a ser mucho más enriquecedora y fácil esa transición, porque la apatía es aquello que nos va a obstaculizar el ejercicio e incluso desmejorarlo. Esta visual que hemos construido no está escrita en piedra, pueden ir surgiendo ciertas cosas que nos van a obligar a repensarlo. 
          <br>
          Queremos darle la tranquilidad a los equipos de que esto está pensado, no fue caprichoso, no está planteado porque toca, sino que estamos viendo la mejor forma para que sea una mejor transición para todos. 
          <br>
          Hay cuatro principios de cambio: el talento, la cultura, las comunicaciones y el liderazgo. 
          <br>
          La lógica de todo esto es que partimos de los criterios de diseño hacia unas áreas de intervención, basándonos en unos principios de cambio.
        </p>

        <p class="parrafo">
          <strong>Cuéntenos un caso de éxito de reestructuración institucional…</strong>
        </p>
        <p class="parrafo">
          <strong>L.C:</strong> No hay muchas organizaciones parecidas al Instituto, pero hemos trabajo en cambios en áreas de diferentes organizaciones dentro del sector en el que están ustedes. Nos gusta traer experiencias, buenas prácticas y realidades de otras organizaciones que uno no se imaginaría nunca que se puedan comparar. En todas los sectores y organizaciones hay varios aspectos que se pueden traer a la mesa y que sirven de referencia y que incluso podemos replicar, obviamente adaptado a nuestro contexto y nuestra realidad, eso me permite ampliar los horizontes, asegurar el crecimiento  y darle un tinte distinto de cara a que siempre tengo que pensar en mi grupo de interés.
          <br>          
          Por eso nos gusta mezclar mucho, porque ahora el mundo funciona bajo ecosistemas  empresariales. Debemos pensar en el papel que cumple el Instituto en su mundo de biodiversidad, pero también en función de quién va a usar esa información y si queremos generar conocimiento transformativo, qué es lo que nos estamos planteando como Instituto, pues necesitamos entender cuáles son esos otros jugadores que están en mis redes, qué hace que esto funcione de una manera muchísimo más fluida, por eso necesitamos traer experiencias de otros lugares.
          <br>
          El año pasado en Colombia una organización privada, un grupo económico de 15 empresas sacó de su grupo económico, una compañía que generaba el 40% de sus ingresos, al sacar esa compañía debíamos reorganizar el grupo. Eliminamos en este caso del sector salud, un gran prestador de servicios de salud, pero quedaron 14 compañías de industria financiera, de seguros, de entretenimiento y de ahorro.
          <br>
          Debíamos reorganizar desde el equipo directivo hasta todas sus otras capas, en estos nuevos objetivos. Aquí el objetivo no era recomponer los ingresos y volver a cubrir el 100 % de los ingresos, pero sí darle más  estabilidad a las otras compañías, eso implicó eliminar unas capacidades que existían antes, reorientarlas hacia la búsqueda de nuevos ingresos y fortalecer la agilidad de estas nuevas compañías. Este grupo tenía una capa corporativa muy grande, al quitar ese volumen de operaciones, el grupo debía convertirse en una organización mucho más sencilla, ellos deben responder y estar en industrias en donde una pequeña empresa de tecnología financiera en un garaje, les puede solucionar algo que ellos con 300 personas hacían en el pasado. Entonces el reto era construir sobre las capacidades que tenían y adaptarse a esos nuevos requerimientos del mercado. 
          <br>
          El otro ejemplo es una entidad pública colombiana. Hoy estamos en un momento en el que hay cambios importantes dentro de la administración pública en el país y no es para nadie un secreto que las organizaciones públicas, tienen dos tipos de estructuras, una estructura de la planta aprobada de personas y sus contratistas. Este fue un primer ejercicio y juntamos esos dos mundos.
          <br>
          Esta organización tenía 50 personas aprobadas de planta y cerca de 300 contratistas, lo que hicimos fue sincerar la organización, medir el tamaño de la planta necesario para operar esta compañía, determinar cuáles eran las necesidades para cada puesto de trabajo, redistribuir mejor las funciones, reorganizar la segunda capa gerencial y rediseñar toda la estructura para que acogiera el número de personas necesarias para cumplir con el trabajo. Esta es una entidad que se anticipó a todas las entidades públicas que van a tener que estar en esa línea durante el primer cuatrimestre de este año. Ese es un caso muy concreto, en donde llegamos al número de personas ideal y llegamos a esa forma de trabajar más eficiente para ellos.           
        </p>


        <p class="parrafo">
          <strong>¿Algunos consejos para esta transición?</strong>
        </p>

        <p class="parrafo">
          <strong>L.C.:</strong> Mucha paciencia y comunicación. Vamos a llegar a la construcción, vamos a llegar al modelo ideal, pero tenemos que seguir una hoja de ruta y un proceso sistemático que nos llevará a esa respuesta.  Pregunten, no asuman, pregunten a sus líderes cuál es su rol o qué se necesita de su rol en esta nueva posición, cómo deben comunicarse, si esta comunicación es igual de su lado o puede que deba comunicarse con otras áreas de forma diferente, preguntar qué se espera.
          <br>
          Lo que deseamos es que haya mucha interrelación entre cada una de las áreas, se espera que cada vez trabajen menos en su propia área y más con las otras áreas. Respetemos el trabajo de los demás, el trabajo de todos tiene la misma complejidad y el mismo nivel técnico que mi propio trabajo. Van a haber varias áreas fortalecidas que  van a tener capacidades más ágiles de respuesta para que faciliten el trabajo de aquellas áreas que están dedicadas a la investigación.
          <br>
          <strong>M.A.P.:</strong> tener la apertura basados en la confianza de que el Instituto está pensando en lo mejor para todos, en la medida en que al Instituto le vaya bien, se fortalezca y crezca, todos podemos ir en esa misma vía y hay más oportunidades para cada uno, pero eso requiere de apertura y de mucho involucramiento. 
        </p>
        



        
        
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