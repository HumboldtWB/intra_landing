<?php
session_start();
$correo=$_SESSION["correo"]; 
include_once("includes/session.php");
include_once("./includes/conectar_ext.php");
$bus_por = 0;
$bus_inv = 0;
$bus_por = $_POST["bus_por"];
$bus_inv = $_POST["bus_inv"];
//$fecha = date('Y-m-d');
//$ult = mysql_query("SELECT * FROM `visitas` WHERE str_cor = '$correo'");

$res = mysql_query("SELECT * FROM `investigadores` WHERE str_cor = '$correo' LIMIT 0 , 1");
$row = mysql_fetch_array($res);
?>

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


<html>
<head>
<title>Cumplea&ntilde;os - Intranet IAvH</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="includes/estilos.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
.Estilo2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<?php include_once("includes/js_menu.php"); ?>
</head>

<body bgcolor="#FFFFFF" link="#006633" vlink="#006633" alink="#006633" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <?php
  include_once("menu.php");
  // función para la búsqueda de investigadores.
  include_once("includes/bus_inv.php");
  ?>
  <table width="990" border="0" cellspacing="0" cellpadding="15">
    <tr> 
      <td background="imagenes/fondo_blanco.gif"> 
        <p>
          <?php 
		  if ($bus_por == 1 AND $bus_inv != ""){
		  top_bus($bus_inv);
		  $bus_por = 0;	
		  }
		  if ($bus_por == 1 && $bus_inv == ""){
		  echo "<SCRIPT LENGUAGE = \"javascript\"> alert (\"Debe almenos escribir una letra!!!\");</SCRIPT>\n";
		  }
		  if($row['str_cla'] == "iavh123") {
			echo '<p class="detallePortada"><strong><font color="#FF0000">Nota:</font></strong> 
			  Actualmente su usuario tienen una clave asignada por el administrador 
			  de la extranet, lo que hace que su nivel de seguridad sea bajo. Por 
			  esta raz&oacute;n lo invitamos a actualizar su perfil <a href="mi_perfil.php">haciendo 
			  clic aqu&iacute;</a>. </p>';
	
			} 
		?>
        <br>   
<div align="center"><br>
        </div>
        <table width="100%" border="0" align="center" cellpadding="6" cellspacing="5" bordercolor="#E0EBC6">
          <tr bordercolor="#CCCCCC" class="titulos"> 
            <td width="62%" valign="top"> 
                <p align="left">&gt;&gt;  <font size="4">Cumplea&ntilde;os</font> - <?php setlocale(LC_ALL, "SP"); echo strftime("%B")." - ".date('Y');?><br> 
                  ............................................</p>
                <p align="left">
                  <?php
			//Sección de proximos cumpleaños
			//$mes = date("Y-m-d");
			//$fecha = "+1 month";
			
			//$mes_sig = strtotime($fecha);
			//$mes_sig2 = strftime("%Y",$mes_sig)."-".strftime("%m",$mes_sig)."-".strftime("%d",$mes_sig);
			
			//Verifico que las fechas sean las indicadas para pintar los usuarios
			
			$mes = date("n");
			
			$cum = mysql_query("SELECT * FROM `investigadores` WHERE int_mes = '$mes' ORDER BY int_dia DESC LIMIT 0 , 20");			
			if ($cum){	
				while ($row_cum = mysql_fetch_array($cum)){
					echo '<span class="titulos">';
					echo "> <a href=\"mailto:".$row_cum['str_cor']."\">".$row_cum['str_nom']."</a> <br>".$row_cum['int_dia']." ".strftime("%B")."<br>\n";
					echo '</span>';
					echo '<span class="detallePortada">';
					echo $row_cum['str_cor']." - ";
					if ($row_cum['str_tel']!=""){echo $row_cum['str_tel'].'<br>';}
					echo $row_cum['str_dep'];
					echo '</span><p></p>';
					}
				}	
				unset($mes);
			?>
                  </p>
               </td>
            <td width="38%" valign="top" background="imagenes/fondo_cumple.gif">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
  <table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#FFFFFF" class="peqNegro"><div align="center"> <img src="imagenes/remate.gif" width="990" height="20" alt="r">
        <img src="images/footer.jpg" width="990" height="21">
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
