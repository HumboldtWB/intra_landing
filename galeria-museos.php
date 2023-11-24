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
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>  
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
      <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">MENÃš
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link Enlace" href="portada.php" style="font-weight:400; font-size:1.2em;">Intranet</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link Enlace dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:400; font-size:1.2em;">Sistema Integrado de Gestión</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="macroprocesos.php">Sistema Integrado de Gestión</a>                
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
                <a class="dropdown-item" href="gastosviaje.php">Solicitud gastos de viaje</a>
                <a class="dropdown-item" href="cons_comision.php">Consultar gastos de viaje</a>
                <a class="dropdown-item" href="servlgyanticipo.php">Eventos/anticipo</a>
                <a class="dropdown-item" href="cons_servlgyanticipo.php">Consultar Eventos/anticipo</a>
                <a class="dropdown-item" href="consanticipo.php">Consultar anticipo</a>                
                <a class="dropdown-item" href="evaluacion_proveedores.php">Reevaluación de proveedores</a>
                <a class="dropdown-item" href="consviatico2.php">Consultar gastos viaje</a>
                <a class="dropdown-item" href="gastosinvitados_nuevo.php">Solicitud gasto invitado</a>
                <a class="dropdown-item" href="conscarta_nuevo.php">Consultar gasto invitado</a>
				        <a class="dropdown-item" href="solicitud_salas.php">Reserva de salas</a>
                <a class="dropdown-item" href="cons_salas.php">Consultar salas</a>
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
                <a class="dropdown-item">Bienestar Humboldt</a>
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
                    &nbsp;&nbsp;&nbsp;NOTICIAS
                  </div>
        <a href="landing.php"><strong>&#x2b60; Volver</strong></a><br><br>
        <br>
        <h3>Día Internacional de los museos</h3>
        
        <br><br>
        
        <br>
        <div class="slide-noticia">
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907605981.jpg" alt="stand" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907605998.jpg" alt="stand" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606025.jpg" alt="stand" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606078.jpg" alt="stand 2" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606108.jpg" alt="charla" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606135.jpg" alt="aplicacion" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606239.jpg" alt="niño usando la app" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606282.jpg" alt="charla mujeres" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606316.jpg" alt="expositoras" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606355.jpg" alt="selfie con oso" class="img-fluid">
            </div>
          </div>  
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606444.jpg" alt="Haciendo el herbario" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606480.jpg" alt="herbarios" class="img-fluid">
            </div>
          </div>  
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606521.jpg" alt="colecciones insectos" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606589.jpg" alt="charla 2" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606623.jpg" alt="charla 3" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907606655.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div>
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652907918191.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652965118831.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652965118847.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> 

          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652965118863.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652965118912.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652965118880.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652965118929.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652965118945.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> 
          <div>
            <div class="img-container">
              <img src="img/galerias/museos/1652965118961.jpg" alt="charla coleccion" class="img-fluid">
            </div>
          </div> 

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $('.slide-noticia').slick({
      autoplay:true,
      arrows: true,
      prevArrow:"<img src='img/prev.png' width='40'>",
      nextArrow:"<img src='img/next.png' width='40' class='next'>",
      adaptiveHeight: true,
      responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false,          
        }
      },
      ]
    });
  </script>
</body>

</html>