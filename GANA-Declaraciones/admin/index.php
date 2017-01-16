<?php include('../../../../../eliminar.php');
$_SESSION['usu']='12750766';
if(!$_SESSION['usu']){?>
	 <script type="text/javascript">location.href="../index.php";</script> 
<?php }
$esteusuario=$_SESSION['usu'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$ipe=$_SERVER['REMOTE_ADDR'];
mysql_query ("SET NAMES 'utf8'"); 
$conmails=mysql_query("select * from mails where docmail='$_SESSION[usu]'");
  if($datmails=mysql_fetch_array($conmails)){}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Aplicaciones Gobernación de Nariño</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/inicio.css" />
    <link rel="stylesheet" href="../css/normalize.css" />
    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>   
    <script src="../js/prefixfree.min.js"></script>  
    <script src="../js/script.js"></script>

<body>
<?php include('consultas.php'); ?>
<?php include('gana_formato.php'); ?>
</body>
</head>