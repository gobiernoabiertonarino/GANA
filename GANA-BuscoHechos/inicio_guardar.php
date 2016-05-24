<?php 
require 'conexion.php'; require 'consultas.php';
//echo $dbgana.$_GET['act'];

setlocale(LC_TIME, 'es_CO');
mysql_query ("SET NAMES 'utf8'");
$fecha=date('Y-m-d'); $hora=date('H:i:s');
$ipv=$_SERVER["REMOTE_ADDR"];

$ccoms=$comentarios." WHERE id_com=$_GET[act]";
$cinfs=$informes." WHERE id=$_GET[act]";

	if($_GET['acc']=='comentario'){ 
		$con="INSERT INTO `tics_gana`.`informes_comentarios` (`text_com`, `fec_com`, `hor_com`, `ip_com`,`id_inf_fk`) VALUES ('$_GET[tex]', '$fecha', '$hora', '$ipv', '$_GET[act]');";		
		mysql_query($con);
	$orden="order by id_com desc";
	$jbucheli=$_GET['act'];
	include('inicio_comentarios.php'); 
	}
	elseif($_GET['acc']=='masact'){  $con="UPDATE `tics_gana`.`informes` SET gus_act=$_GET[tex] WHERE id=$_GET[act] "; mysql_query($con);
									$cinf=mysql_query($cinfs); if($dinf=mysql_fetch_array($cinf)){} echo $dinf['gus_act']-$dinf['nogus_act']; 	}
	elseif($_GET['acc']=='menact'){  $con="UPDATE `tics_gana`.`informes` SET nogus_act=$_GET[tex] WHERE id=$_GET[act] "; mysql_query($con);
									$cinf=mysql_query($cinfs); if($dinf=mysql_fetch_array($cinf)){}	echo $dinf['gus_act']-$dinf['nogus_act']; }
	
	elseif($_GET['acc']=='mascom'){  $con="UPDATE `tics_gana`.`informes_comentarios` SET gus_act=$_GET[tex] WHERE id_com=$_GET[act] "; mysql_query($con); 
									$ccom=mysql_query($ccoms); if($dcom=mysql_fetch_array($ccom)){}	 echo $dcom['gus_act']-$dcom['nogus_act']; 	}
	elseif($_GET['acc']=='mencom'){  $con="UPDATE `tics_gana`.`informes_comentarios` SET nogus_act=$_GET[tex] WHERE id_com=$_GET[act] "; mysql_query($con); 
									$ccom=mysql_query($ccoms); if($dcom=mysql_fetch_array($ccom)){}	 echo $dcom['gus_act']-$dcom['nogus_act']; }
	
	
	
	//echo $con;
	
	
?>

