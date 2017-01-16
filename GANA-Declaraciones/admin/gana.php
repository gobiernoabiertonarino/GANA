<?php
ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();
@ $db=mysql_pconnect("localhost","Narino_personas","Narino2012$#");
//@ $db=mysql_pconnect("localhost","root","");
if(!$db){echo "Disculpas Conexi�n a la BD no Realizada: Por favor Informe al Area de Sistemas  (57)2 7235003 ext 267"; }
mysql_select_db("Narino_personas",$db);

setlocale(LC_TIME, 'es_CO');
mysql_query ("SET NAMES 'utf8'");
$fecha=date('Y-m-d'); $hora=date('H:i:s');
$datico = '$J0nn4th4nBuch3l1#$/';
?>
<?php
$mes=date("F");
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Septiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";
?>

<?php
function nmes($nmes){
if ($nmes=="1") $mes="Enero";
if ($nmes=="2") $mes="Febrero";
if ($nmes=="3") $mes="Marzo";
if ($nmes=="4") $mes="Abril";
if ($nmes=="5") $mes="Mayo";
if ($nmes=="6") $mes="Junio";
if ($nmes=="7") $mes="Julio";
if ($nmes=="8") $mes="Agosto";
if ($nmes=="9") $mes="Septiembre";
if ($nmes=="10") $mes="Octubre";
if ($nmes=="11") $mes="Noviembre";
if ($nmes=="12") $mes="Diciembre";
return $mes;
}
?>