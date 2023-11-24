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
        <h3>Del campo al laboratorio: el viaje de 23 años de Sandra Medina en el Instituto Humboldt</h3>
        <br>
        <div style="text-align: center">
          <img src="img/entrevistas/sandra-medina.jpg" width="60%"><br>
        </div>
        <br><br>
<div style="margin-left:30px; font-weight: 600">
• Hace más de dos décadas, la entidad le abrió sus puertas en Villa de Leyva para trabajar como auxiliar de investigación, a pesar de no contar con un cartón de bachiller y nunca haber escuchado hablar de una colección biológica. 
“Para mí el Humboldt es como un segundo papá que me permitió sacar adelante a mis dos hijos y recorrer varias zonas del país. Fue un salvavidas al que le debo muchas de las cosas que hoy en día tengo”.
  <br><br>
• Hacer un viaje al pasado no le parece sencillo, y no por miedo a revivir viejos dolores, tristezas o momentos amargos. Su vida ha dado tantas vueltas y giros inesperados que no sabe por cuál de todos los recuerdos empezar o a dónde transportarse. Además, asegura tener una memoria algo traicionera.
  <br><br>
</div>
Después de una pausa alargada, Sandra Patricia Medina Saiz respira profundo e inicia su recorrido por las principales reminiscencias recopiladas en sus 41 años de vida justo en la vereda Sabana de Villa de Leyva, donde sus padres Ignacio y Cecilia construyeron su nido de amor para criar a sus cinco retoños.
  <br><br>
“Yo soy la menor de mis hermanos, todos criados en el campo con mucho esfuerzo, disciplina y temple. Entre los recuerdos más bonitos que conservo están esos recorridos para llegar a la escuela de El Roble, muchas horas de caminata por las trochas de herradura y árboles caídos puestos para atravesar las quebradas, una obra a la que llamábamos la maroma”.
  <br><br>
A los 11 años, Sandra culminó su primaria como una de las mejores estudiantes de la escuela, un aprendizaje que quería continuar para enriquecer su mente curiosa y despierta. Pero en la familia no había mucha plata para que hiciera su bachillerato; además, su papá, un maestro de constructor empírico experto en hacer chimeneas, no creía en el estudio.
  <br><br>
“Las profesoras trataron de convencer a mi papá para que me metiera a estudiar el bachillerato en la Normal Antonio Nariño, pero no lo lograron. Yo pude hacer la primaria gracias a mi mamá, quien a pesar de no trabajar y ser ama de casa, se las rebuscaba a escondidas de mi padre para conseguir dinero y pagarnos nuestros estudios. Con la venta de duraznos y los huevos de las gallinas nos compraba lápices y cuadernos”.
  <br><br>
Decepcionada de la vida. Así se sentía Sandra por no poder estudiar y destinó un año de su vida a ayudar a su mamá en las labores de la finca. “Lo típico en el campo para las niñas era convertirse en empleadas del servicio en las casas de las familias adineradas luego de terminar la primaria, como le pasó a mi hermana. Todo indicaba que yo también estaba destinada a eso”.
<br><br>
<strong>Rebelde con causa</strong>
<br><br>
El destino de Sandra parecía empecinado en que repitiera la historia de su hermana y de las demás niñas de las zonas rurales de Villa de Leyva. Lo vivió en carne propia a los 12 años, cuando sus papás la enviaron a Tunja donde una familia para que trabajara como empleada doméstica.
<br><br>
“Eso fue muy duro para mí. Yo era una niña del campo y llegar a una casa ajena a atender a una familia desconocida con costumbres diferentes era muy extraño. La señora me explotaba y me ponía a lavar muchas cobijas, algo que me hacía doler las manos. Yo sentí que uno de sus hijos quería aprovecharse de mí, por lo cual quería salir corriendo; pero no tenía un solo peso”.
<br><br>
Sandra se armó de valor e ingenio para escapar de esa casa, donde solo duró ocho días. “Un día le dije a la señora que no tenía toallas higiénicas, una mentira para poder tener algo de plata y regresar a Villa de Leyva. Cuando le informé que quería irme, su respuesta fue tajante: pues váyase pero no le voy a pagar por los días que estuvo acá”.
<br><br>
La recién adolescente regresó a su pueblo natal aún con la esperanza de seguir estudiando. Pero ese sueño se tornaba cada vez más inalcanzable, por lo cual debió seguir trabajando como empleada en casas de su vereda. “Yo no sabía ni trapear. Una señora de una cabaña me enseñó de muy buena manera, sin hacerme sentir ignorante. Pero yo seguía empecinada en estudiar”.
<br><br>
Su mamá le aconsejó que se fuera al casco urbano de Villa de Leyva a buscar una mejor suerte. Una conocida de su papá le dio trabajo en una heladería y hospedaje en una casa grande cerca del parque central del pueblo, lo que le permitió empezar a estudiar su bachillerato en horas de la noche.
<br><br>
“Aunque era una niña de apenas 13 años, empecé a pagar mis estudios en un colegio nocturno. Eso me tenía muy contenta, a pesar de la estigmatización que había en el pueblo sobre las mujeres y hombres que estudiábamos de noche: para ellos éramos las mantecas y los obreros”.
<br><br>
En esa época Sandra conoció las fiestas, pero como la dueña de la casa no le daba permiso para salir, decidió renunciar. “Encontré trabajo como niñera de los dos hijos de unos médicos, quienes le pusieron algo de control a mi vida. Allí estuve más de un año, hasta que la doctora quedó embarazada. No quería cuidar tres niños”.
<br><br>
A los 15 años ingresó al mejor hotel de Villa de Leyva para trabajar como auxiliar de las meseras y lavando los platos, donde se hizo muy amiga de las cocineras. “Al hotel iba los fines de semana o cuando hacían eventos. El sueldo me alcanzaba para estudiar, pagar el arriendo y sobrevivir sin ningún lujo. Un músico de la orquesta Matecaña, llamado Onaides Daza, me dedicaba canciones escritas en unos papeles”.
 <br><br>
<strong>Cambio de vida</strong>
<br><br>
Sandra cambiaba de trabajo constantemente, según ella porque no le gustaba echar raíces y se aburría rápido. Una de sus mejores experiencias fue en una frutería bastante famosa a finales de los años 90, a donde llegaban artistas, actores, cantantes y deportistas. 
<br><br>
“En la frutería conocí la música de Bob Marley y Tracey Chapman, además de muchos boleros y las canciones de Julio Jaramillo. El trabajo en equipo fue muy chévere y mi jefe fue como otro papá. En ese lugar el amor tocó a mi puerta: allá me enamoré de Juan Castellanos, que era el lechero del pueblo, un hombre que conocía desde pequeña”.
<br><br>
A los 16 años, como fruto de su primer amor, Sandra quedó embarazada. La noticia no le gustó para nada a su supuesto compañero de vida, quien decidió abandonarla. “Decía que la niña que venía en camino no era de él. Yo seguí trabajando como si nada, esta vez en uno de los bares de la plaza central del pueblo”.
<br><br>
Algo que le dolió bastante a la futura madre fue abandonar sus estudios, ya que el tiempo y la energía solo le daban para trabajar y cuidar su embarazo. “Terminé octavo de bachillerato. En 1996 nació mi hija Camila Andrea. Primero me fui a vivir a donde mi mamá, pero la convivencia no fue fácil. Mi hermana mayor nos abrió la puerta de su casa y me ayudó con recursos económicos para la niña”.
<br><br>
Así estuvo durante los primeros meses de vida de su hija, hasta que se cansó de no hacer nada y empezó a buscar trabajo en el pueblo. “Mi nuevo destino fue una panadería donde ganaba como 50.000 pesos, dinero que solo me alcanzaba para los pañales y algunos gastos pequeños. La dueña del local me cuidaba la niña mientras yo vendía el pan en las calles o en otros pueblos”.
<br><br>
<div style="text-align: center">
          <img src="img/entrevistas/sandra-medina3.jpg" width="60%"><br>
        </div>
<br><br>
En 1997, su amiga Elvia Lucía González, con quien trabajó en la frutería, le comentó que la entidad donde trabajaba estaba buscando gente del pueblo para vincularla contractualmente, sin el requisito de contar con una vasta experiencia en temas ambientales.
<br><br>
“Pronunció un nombre que jamás había escuchado: el Instituto Humboldt. Le pregunté a mi amiga qué hacía allá y me respondió que trabajaba con insectos. No me asusté, ya que yo me le mido a lo que sea y más desde que fui mamá, pero al comienzo pensé que el trabajo era con animales vivos”.
<br><br>
Lo único que había escuchado del Humboldt es que hace poco había llegado a las instalaciones del claustro de San Agustín. “Fernando Fernández, un experto entomólogo, me mostró las colecciones biológicas, en especial la de insectos. Al ver la máquina de escribir y el computador entré en pánico; yo jamás había manejado esos aparatos”.
<br><br>
Pero el puesto al que aspiraría la madre primeriza era para la colección de plantas. “La prueba de fuego fue montar unas plantas sobre una cartulina, como aparecían en los herbarios. El mejor montaje botánico se ganaba el puesto de auxiliar de investigación y para sorpresa de todos, fue el mío. Yo jamás había hecho eso, pero me dijeron que me quedó muy bien”.
<br><br>
Por primera vez en su vida, Sandra firmó un contrato formal a término fijo con el Instituto Humboldt. Su trabajo sería ser auxiliar de investigación en la colección de plantas del claustro de Villa de Leyva.
<br><br>
El sueldo le hizo palpitar el corazón. De ganar 50.000 pesos en la panadería ahora recibiría 250.000 pesos. “Mariachis, eso era un jurgo de plata, mucho más que el salario mínimo para esa época. Yo no podía creer que una persona sin graduarse como bachiller fuera a recibir un sueldo tan bueno. La verdad sentí mucho miedo por empezar un nuevo reto con gente tan preparada”.
<br><br>
Hacer caso fue la estrategia de Sandra durante sus primeros días en el Humboldt, a pesar de tener una personalidad extrovertida y ser bastante risueña. “Empecé a trabajar a los pocos meses de cumplir los 18 años. Cuando me llegó el primer sueldo salté de la dicha: por primera vez pude comprarle ropa nueva a mi hija, ya que antes todo lo recibía usado”.
<br><br>
<strong>Coqueteos del estudio</strong>
<br><br>
Con su nuevo salario, Sandra empezó a revivir su sueño de niña de seguir estudiando. Su hermana le sugirió que se mudara al pueblo para que trabajara en el día y estudiara de noche, mientras ella cuidaba a la pequeña Camila Andrea.
<br><br>
“El ideal era trabajar y estudiar de lunes a viernes y estar con mi hija los fines de semana. Me alcancé matricular en el colegio nocturno para hacer el noveno grado y la madrina de mi hija me iba a dar posada, pero no fui capaz de quedarme sin mi niña”.
<br><br>
Sandra tomó la decisión de caminar desde el colegio hasta la casa de su hermana en la vereda durante la penumbra de la noche para quedarse con su hija, un viaje de más de una hora repleto de mitos como fantasmas y espantos.
<br><br>
“Por la mañana caminaba otra hora para llegar a trabajar al Humboldt. Así duré como dos años, pero el cansancio me ganó y por eso dejé de estudiar. Me dediqué de lleno al instituto y a criar a mi hija, que ya tenía tres años. Nos mudamos a una habitación en el pueblo y deseché la idea de estudiar. En esa época fui la única auxiliar que no era bachiller”.
<br><br>
Sus compañeros de oficina le insistieron bastante para que no enterrara su sueño de ser bachiller y le sugirieron validar el título en Tunja. “Me entusiasmé de nuevo y me presenté para hacer la validación, pero no pasé. Ahí tomé la decisión de no volver a estudiar jamás, así me diera durísimo manejar el computador para subir la información de las colecciones y mi jefa de momento me hiciera sentir mal”.
<br><br>
Aura, la otra auxiliar de la colección del herbario de Villa de Leyva, le extendió la mano. Cada vez que no sabía qué hacer con el computador y salía una ventana extraña en la pantalla, Sandra acudía a su ángel guardián. “Como tengo mala memoria, yo anotaba todo lo que me decía Aura. Así fui aprendiendo, y poco a poco le perdí el miedo a la tecnología”.
<br><br>
<strong>Recorriendo Colombia</strong>
<br><br>
Sandra admite que siempre tuvo la sensación de que su jefa la iba a echar por no contar con el conocimiento suficiente para manejar la información de la colección del herbario del Humboldt. “Una vez todos los auxiliares de la entidad participaron en un encuentro en Iguaque, pero mi jefa no me dejó ir. Fui la única que no asistió”.
<br><br>
Las salidas de campo para colectar las muestras de la biodiversidad le dieron un respiro a la nerviosa boyacense. Los auxiliares de investigación de las diferentes colecciones serían la mano derecha de los investigadores del instituto para adentrarse en las entrañas de Colombia.
<br><br>
“Ya perdí la cuenta de todas las salidas de campo en las que he participado. Además de conocer partes del país que jamás en la vida pensé visitar, esos viajes me fortalecieron el alma porque me desempeñé muy bien y le perdí un poco el miedo a que me echaran por no estar tan preparada”.
<br><br>
La salida al Parque Nacional Natural Serranía Chiribiquete, ubicado en lo más denso de las selvas del Guaviare y Caquetá, fue una de las experiencias más enriquecedoras. “Allá estuve más de un mes, en el año 2000. El propósito era hacer el levantamiento de diferentes  grupos biológicos en compañía de la fundación Puerto Rastrojo”.
<br><br>
Para llegar a las agrestes selvas desconocidas de la Amazonia, Sandra montó por primera vez en avión, una experiencia bastante sufrida. “Una avioneta de Satena nos llevaría hasta Araracuara, pero ese pajarraco tan chiquito se movía mucho y sentía que me moría. Con esos vacíos pensé que no resistía”.
<br><br>
La expedición por la maloca del jaguar estaba conformada por más de 15 investigadores del Humboldt, entre expertos de aves, plantas, insectos y suelos, quienes recorrieron miles de kilómetros en lancha por los ríos amazónicos.
<br><br>
“Los mosquitos me dieron una bienvenida brava. El calor húmedo de la selva era insoportable, tanto que en los trayectos por río nos tocaba sacar la toalla y mojarla para ponerla encima de la cabeza. Fuimos un equipo guerrero y todos nos articulamos muy bien, en esa salida aprendí mucho sobre el trabajo en equipo”.
<br><br>
Sandra se sentía en medio de la nada. Los indígenas de la zona eran la brújula de la expedición, pero las caminatas se hacían cada vez más agrestes por la cantidad de material que tocaba cargar en las maletas.
<br><br>
“En esos tiempos los aparatos eran enormes. A mí me sirvió mucho que me críe en el campo, donde aprendí a ir al baño en el bosque y bañarme en los ríos. Todas las expediciones me transportan a esa infancia en Villa de Leyva. Lo que sí me dio duro fue dormir en hamaca y la comida, solo lentejas, arroz, fríjoles, pasta y fariña. En estos viajes uno valora todo eso de lo que nos quejamos en el día a día”.
<br><br>
Muchas de las personas que han tenido la oportunidad de visitar el místico Chiribiquete, aseguran que es un lugar lleno de energía y cosmología. Algunos incluso afirman que sienten ojos que los observan desde lo denso de la selva y que los tepuyes transmiten señales ancestrales. Pero a Sandra no le pasó nada.
<br><br>
“Yo no sentí nada de eso, solo hambre. Esas cosas místicas como que no ingresaron en mi ser, tal vez porque yo estaba muy concentrada en trabajar y recolectar las plantas para mi colección. Siempre que vamos a un territorio del país sabemos que puede ser la última, por lo cual la damos toda”.
<br><br>
<strong>Experta empírica</strong>
<div style="text-align: center">
          <img src="img/entrevistas/sandra-medina2.jpg" width="60%"><br>
        </div>
        <br><br>
Sandra lleva más de 23 años en el Instituto Humboldt como auxiliar de investigación, más de dos décadas donde su principal campo de acción ha sido el mundo de las plantas, aunque también ha participado en muestreos de insectos como hormigas.
<br><br>
“Muchas plantas que hacen presencia en el territorio nacional ya las puedo identificar solo con verlas. Pero eso no se aprende de la noche a la mañana, sino después de muchos recorridos por los diferentes ecosistemas y con la asesoría de un experto”.
<br><br>
Cuando era más joven, Sandra se trepaba en todos los árboles para colectar las hojas de los árboles, así como lo hacen los indígenas, pero con unos espolones en los pies que se clavan en el tallo. “Mi gran maestro en el Humboldt fue el flaco Humberto Mendoza, quien me dio una inducción maravillosa para aprender a reconocer las plantas”.
<br><br>
En 1999, durante una expedición por el Parque Nacional Natural Tamá en Norte de Santander, Sandra tuvo un accidente cuando se trepaba en un árbol. Al ajustar el arnés, uno de los espolones no estaba bien fijo y bajó a toda marcha por el tronco.
<br><br>
“Lo primero que pensé fue que me iba a romper las piernas. Abracé fuerte el árbol para mitigar la caída, pero tuve la mala suerte de que había un palo atravesado y caí ahí abierta de piernas. Me pegué muy duro pero no le quise contar a nadie, ni siquiera a la coordinadora por miedo a perder mi puesto”.
<br><br>
El percance no evitó que volviera a trepar por los árboles. Los bosques húmedos de la Amazonia la recibieron con las ramas abiertas después del accidente, aunque las avispas la picotearon por todo lado. “Son gajes del oficio. Tengo muchas anécdotas, pero nunca he tenido buena memoria”.
<br><br>
El ojímetro es la técnica que utiliza esta boyacense para identificar las familias de las plantas, algo en lo que casi nunca falla. “Pero para identificar el género y la especie sí le pido ayuda a los profesionales. No tengo una planta favorita, cada ecosistema tiene lo suyo, como el bosque seco y el andino”.
<br><br>
<strong>La vida en la nevera</strong>
<br><br>
Desde 2013, Sandra está radicada en Bogotá junto a su hija Camila Andrea, su segundo hijo Sebastián y su nuevo esposo, a quien conoció en Villa de Leyva. La familia vive en una casa en el barrio Bonanza, en el noroccidente de la capital.
<br><br>
Abandonar la tierra que la vio nacer fue una de las decisiones más difíciles que ha tomado, pero lo hizo por seguir su fuerte instinto maternal. “Camila Andrea se acababa de graduar de bachiller y su sueño era entrar a la Universidad Nacional. Así que tomé la decisión de no dejarla sola en su viaje, como me pasó a mí”.
<br><br>
Antes de partir de la vida calmada del pueblo, Sandra recibió su cartón como bachiller. “En 2012 me volví a arriesgar y presenté el examen de validación de bachillerato. Esta vez sí lo logré: no tuve ceremonia presencial, algo que no me importó porque me gradué al mismo tiempo que mi hija. Esa experiencia es algo que atesoraré toda mi vida”.
<br><br>
Pero esta boyacense no abandonó su trabajo en el Instituto Humboldt, una entidad que considera como su segundo padre por todas las oportunidades y apoyo que le ha dado. “Brigitte Baptiste, que en esa época era la directora del Humboldt, me autorizó el traslado a Bogotá. Ese cambio drástico me dio mucho miedo, porque era como empezar de ceros. Nos tocó vivir un tiempo donde mis suegros, cambiar de colegio al niño y dejar el claustro en Villa de Leyva. No fue fácil adaptarme a la gran ciudad”.
<br><br>
La sede del Humboldt del Venado de Oro, un terruño repleto de bosque en los cerros orientales, sería el nuevo sitio de trabajo de Sandra, algo que agradece con el alma por toda la naturaleza que la transportaba a su municipio natal.
<br><br>
“Me dio duro adaptarme al cambio, porque la sangre tira y las raíces llaman. A mí me gusta estar con la gente del campo, tomar guarapo y estar descalza. Pero al ver tanta naturaleza en mi sitio de trabajo, la nostalgia no fue tan drástica porque me transportaba a la finca”.
<br><br>
En Villa de Leyva, Sandra tenía claras sus obligaciones y funciones en la colección botánica, algo que en Bogotá tuvo que cambiar. “La doctora Brigitte quería hacer un laboratorio novedoso, algo que al comienzo no entendía mucho. Pero como yo sirvo para hacer caso, poco a poco me fui adaptando”.
<br><br>
Uno de los primeros trabajos que apoyó esta boyacense dicharachera y de risa contagiosa en la sede del Venado fue la restauración ecológica de la reserva, que por años estuvo llena de eucaliptos y pinos.
<br><br>
“En 2013 estaban haciendo el levantamiento de vegetación nativa para el proceso de restauración ecológica. Como yo tenía conocimiento sobre las plantas, apoyé al Jardín Botánico y a los expertos del Humboldt. Se hizo una tala selectiva de las especies en riesgo y terminé siendo como una ingeniera. Hicimos compost en los suelos del bosque, socialicé el proceso con las familias de la zona y luego apoyé un proyecto de Ecopetrol en el componente de plantas”.
<br><br>
Cuando Hernando García Martínez, hoy director del Instituto Humboldt, trabajaba como coordinador del programa de ciencias básicas de la biodiversidad, propuso construir un laboratorio en la sede del Venado, un espacio para analizar las plantas y animales y luego enviar las muestras a las colecciones biológicas de Villa de Leyva.
<br><br>
“Yo quería trabajar ahí. Así que hablé con Nando, como le decimos de cariño a Hernando, para que me dejara estar en el laboratorio y seguir participando en otros proyectos como el realizado con el PNUD. Seguí aprendiendo mucho con los investigadores, quienes depositan mucha confianza en mí”.
<br><br>
Los investigadores del laboratorio confían a ciegas en Sandra. “Uno de los fuertes en el laboratorio es el tema de ecología funcional y los cortes y montajes de la madera, en especial del bosque seco. Ellos me enseñaron a hacerlo y confían en los datos que les entrego. Ese voto de confianza es muy valioso para mí”.
<br><br>
<strong>“El gran soporte de mi vida”</strong>
<br><br>
Sandra admite que en varias ocasiones ha pensado en renunciar a su trabajo para devolverse a su tierra natal, pero su estrecha relación y amor incondicional con el Instituto Humboldt se lo han impedido. 
<br><br>
“Para mi el Humboldt es como mi segundo papá o incluso el padre de mis hijos. Además de permitirme aprender sobre la biodiversidad, el instituto me permitió sacar adelante a mis niños. Es una entidad que me abrió sus puertas a pesar de no ser bachiller, una oportunidad por la siento un gran compromiso y respeto”.
<br><br>
Los investigadores y compañeros de trabajo se convirtieron en parte de su familia. “El Instituto Humboldt fue mi salvavidas, un soporte muy grande al que le debo muchas de las cosas que hoy en día tengo. Me dio empleo sin saber mucho y me ha dado la oportunidad de mantenerme en todos estos años. Es indiscutiblemente un miembro de mi familia”.
<br><br>
Aunque sueña con alcanzar la pensión para irse a vivir a la finca que tiene con su esposo en Villa de Leyva, por ahora Sandra seguirá poniendo todo su empeño en el estudio de las plantas. 
<br><br>
“Yo no tengo ningún conocimiento académico certificado, pero el Humboldt me ha permitido aprender mucho desde el hacer. A veces siento que no tengo confianza en mí misma, pero creo que me ha ido bien en estos 23 años”.
<br><br>
“Hago las cosas con amor, así al comienzo no sepa hacerlas o no me gusten. Me ha tocado hasta encargarme de temas administrativos y de compras, lo cual me ha obligado a vencer la timidez y enfrentarme con un mundo desconocido. El apoyo que he encontrado en la familia Humboldt es mi motor, a pesar del miedo a ser juzgada”.
<br><br>
Este año, Camila Andrea recibe su diploma como ingeniera agrónoma de la Universidad Nacional, mientras que Sebastián iniciará su carrera de ingeniería industrial en la Universidad Militar.
<br><br>
Esos logros académicos de sus dos retoños llenan de orgullo a Sandra, en especial los de su primogénita. “Camila quiso abrir sus alas a los 16 años para alcanzar su sueño de estudiar en la Nacional. Pero yo no la dejé hacerlo sola por miedo a que repitiera mi historia, es decir estar sin nadie que la apoyara y tal vez quedar embarazada”.
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
