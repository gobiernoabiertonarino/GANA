<?
$informes="SELECT * FROM informes";
$comentarios="SELECT * FROM  `informes_comentarios`";
$comentarios_num="select count(id_com) num from informes_comentarios";

function crud($sql){
	$res = mysql_query($sql);
	if (!$res) {die("ERROR AL EJECUTAR LA CONSULTA: ".mysql_error());}
	return $res;
}
function condicion($sql){	
	$res=mysql_query($sql) or die (mysql_error());
	$var=mysql_fetch_array($res);
	return $var;
	//$var=select("SELECT * FROM tabla WHERE id=1");
}
function ciclo($sql){	
	$res=mysql_query($sql) or die (mysql_error());
	return $res;
	//$var=selectmultiple("SELECT * FROM tabla"); while ($r=mysql_fetch_array($var))
}
?>