<?php
/*consulta realizada con tablas en donde re registra la información de los funcionarios*/
$tabla_datos='';
$tabla_datos_intitucionales='';
$id_funcionario='';
$id_cargo_fk='';
$llave_fk_datos_intitucionales='';
$tabla_datos_cargo='';
$id_cargo='';
$tabla_contactos='';
$campo_nombre='';
$campo_apellido='';
$campo_nombre_dependencia="";

$c_datos_funcinonarios="select $campo_nombre nom, primer_apellido pri_ape, id_funcionario numdoc_pk from $tabla_datos, gana_declaracion, $tabla_datos_intitucionales, $tabla_datos_cargo where $tabla_datos.$id_funcionario=ide_per_fk and numdoc_pk=$tabla_datos_intitucionales.$llave_fk_datos_intitucionales and $tabla_datos_cargo.$id_cargo=$tabla_datos_intitucionales.$id_cargo_fk ";
$c_dependencias="select $campo_nombre_dependencia nom_sub from dependencias,subdependencias where cod_dep=cod_dep_fk ";
$c_datos="select $campo_nombre nom, primer_apellido pri_ape, id_funcionario numdoc_pk from $tabla_datos, gana_declaracion,$tabla_datos_intitucionales,$tabla_datos_cargo where numdoc_pk=$_GET[ide] and  $tabla_datos.$id_funcionario=ide_per_fk and numdoc_pk=$tabla_datos_intitucionales.$llave_fk_datos_intitucionales and $tabla_datos_cargo.$id_cargo=$tabla_datos_intitucionales.$id_cargo_fk";
$c_contacto="select * from $tabla.mails ";

$extimg='';
$ruta_script='';
/*consultas base de datos gana*/

$c_declaracion="select * from gana_declaracion";
$c_tipos_inmueble="select * from gana_tipos_inmueble ";

$g_inmuebles="insert into gana_inmuebles (cod_inm_fk,fec_inm,val_inm,ubi_inm,ide_per_fk,fec_sys) values($_POST[var1],'$_POST[var2]',$_POST[var3],'$_POST[var4]',$_SESSION[usu],'$fecha')";
$a_inmuebles="update gana_inmuebles set cod_inm_fk=$_POST[var2],fec_inm='$_POST[var3]',val_inm=$_POST[var4],ubi_inm='$_POST[var5]' where cod_inm_pk=$_POST[var1] and ide_per_fk=$_SESSION[usu]";
$c_inmuebles="select * from gana_inmuebles ";
$e_inmuebles="delete from gana_inmuebles where cod_inm_pk=$_POST[var1] and ide_per_fk=$_SESSION[usu]";

$g_muebles="insert into gana_muebles (des_mue,fec_mue,val_mue,obs_mue,ide_per_fk,fec_sys) values('$_POST[var1]','$_POST[var2]',$_POST[var3],'$_POST[var4]',$_SESSION[usu],'$fecha')";
$a_muebles="update gana_muebles set des_mue='$_POST[var2]',fec_mue='$_POST[var3]',val_mue=$_POST[var4],obs_mue='$_POST[var5]' where cod_mue_pk=$_POST[var1] and ide_per_fk=$_SESSION[usu]";
$c_muebles="select * from gana_muebles ";
$e_muebles="delete from gana_muebles where cod_mue_pk=$_POST[var1] and ide_per_fk=$_SESSION[usu]";

$c_tipos_cuenta="select * from gana_tipos_cuenta";

$g_cuentas="insert into gana_cuentas (des_cue,ban_cue,val_cue,obs_cue,ide_per_fk,fec_sys) values('$_POST[var1]','$_POST[var2]','$_POST[var3]','$_POST[var4]',$_SESSION[usu],'$fecha')";
$a_cuentas="update gana_cuentas set des_cue='$_POST[var2]',ban_cue='$_POST[var3]',val_cue=$_POST[var4],obs_cue='$_POST[var5]' where cod_cue_pk=$_POST[var1] and ide_per_fk=$_SESSION[usu]";
$c_cuentas="select * from gana_cuentas ";
$e_cuentas="delete from gana_cuentas where cod_cue_pk=$_POST[var1] and ide_per_fk=$_SESSION[usu]";

$c_tipos_deuda="select * from gana_tipos_deuda";

$g_deudas="insert into gana_deudas (des_deu,tip_deu,val_deu,obs_deu,ide_per_fk,fec_sys) values('$_POST[var1]','$_POST[var2]',$_POST[var3],'$_POST[var4]',$_SESSION[usu],'$fecha')";
$a_deudas="update gana_deudas set des_deu='$_POST[var2]',tip_deu='$_POST[var3]',val_deu=$_POST[var4],obs_deu='$_POST[var5]' where cod_deu_pk=$_POST[var1] and ide_per_fk=$_SESSION[usu]";
$c_deudas="select * from gana_deudas ";
$e_deudas="delete from gana_deudas where cod_deu_pk=$_POST[var1] and ide_per_fk=$_SESSION[usu]";

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