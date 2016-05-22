<?php require 'admin/gana.php'; include('admin/consultas.php');
include('libreria/phpqrcode/qrlib.php');

$cdat=ciclo($c_datos_funcinonarios." order by ord,nom");  
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Aplicaciones Gobernación de Nariño</title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/inicio.css" />
    <link rel="stylesheet" href="css/normalize.css" />    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>   
    <script src="js/prefixfree.min.js"></script>

    
<style>
body{ background:#fff;}
.nom{ font-size:18px;}
.gab{ font-size:14px;}
.sub{ font-size:12px;}
.dep{ font-size:12px;}
.img, .qr, .des{ display:inline-block; vertical-align:top; }
.datos, .datos{ display:inline-block; vertical-align:top; }
.datos{ border-right:2px dashed #dadad8; border-bottom:2px dashed #dadad8; padding:15px;}
/*@media screen and  (min-width:800px) {*/
.datos, .datos{ margin:20px; width:430px;}
.des{ width:240px;}
/*}*/
/*@media screen and (max-device-width : 480px) { {
.datos, .datos{ margin:20px; width:100%;}
.des{ width:100%;}
}*/
</style>
<style>

.grupo{ margin-bottom:10px;}
.tit{ margin-right:15px; }
.tex{ font-weight:bold;}
.img, .qr, .des{ display:inline-block; vertical-align:top; }
.datos, .datos{ display:inline-block; vertical-align:top; }

</style>
</head>

<body>
<?php if(!$_GET['reporte']){	include('gana_funcionarios.php'); }else{  include('gana_reporte.php');	}?>
<div style="margin:50px;" align="center"><a style="border:1px solid rgba(25,106,172,1.00); border-radius:10px; padding:10px;  font-size:25px; color:rgba(25,106,172,1.00); text-decoration:none;" href="b.narino.gov.co/1OpWiVQ">Declaraci&oacute;n Jurada XLS</a><br>Descarga en equipo de escritorio</div>
</body>
</html>