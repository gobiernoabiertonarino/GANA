<?php require 'gana.php'; require 'consultas.php'; ?>
<?php if($_GET['acc']=='buscar'){ 
			$contitle="SELECT * FROM `tics_gana`.informes WHERE id='$_GET[id]'";	$ctitle=mysql_query($contitle);				
			 if($dtitle=mysql_fetch_array($ctitle)){ $title=strtoupper($dtitle['tit_act']); $description= substr($dtitle['des_act'],0,strrpos(substr($dtitle['des_act'],0,254)," "));	 }
		}else{ $title= "Gobierno Abierto - Busco Hechos"; }

	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <title> <?php echo $title;?>  </title>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css" />
    
      <meta name="keywords" content="Gobernación, de, Nariño, somos el corazón del mundo" />
      <meta name="rights" content="Gobernación de Nariño somos el corazón del mundo" />
      <meta name="author" content="GANA - Gobierno Abierto de Nariño" />
      <meta name="description" content="Gobernación de Nariño - <?php echo  $description." ...";?> " />
      <meta name="generator" content="PHP - Open Source Content Management" />    
      <meta name="image" content="http://narino.gov.co/gana/wp-content/uploads/2016/01/logogana.png" />  
      <meta property="og:image" content="http://narino.gov.co/gana/wp-content/uploads/2016/01/logogana.png" /> 
        <link rel="icon" href="http://nariño.gov.co/gana/wp-content/uploads/2016/02/cropped-iconog-32x32.png" sizes="32x32" />
        <link rel="icon" href="http://nariño.gov.co/gana/wp-content/uploads/2016/02/cropped-iconog-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://nariño.gov.co/gana/wp-content/uploads/2016/02/cropped-iconog-180x180.png" />
        <meta name="msapplication-TileImage" content="http://nariño.gov.co/gana/wp-content/uploads/2016/02/cropped-iconog-270x270.png" />

    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    
    <link href="css/lightbox.css" rel="stylesheet">   
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>   
    <script src="js/prefixfree.min.js"></script>
    
    <?php include('inicio_style.php');?>
</head>
<body>
<?php include ('conexion.php'); include('inicio.php'); ?>

<script src="js/lightbox.js"></script> 
</body>
<script>
$("#obj1").focus();
  function gana(obj1,pag,nomdiv){
//alert(obj1+pag+nomdiv);
  xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById(nomdiv).innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET",""+pag+"?obj1="+obj1,true);
	xmlhttp.send();	
//$("#obj1").val('');
  }   

function visualizar(){
	$('#comentar').css("display","inline");
	$('#tex').focus();
	}

	  function ganas(tex,act,acc,pag,nomdiv){
		  //alert(tex+act+acc+pag+nomdiv);
	  xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById(nomdiv).innerHTML=xmlhttp.responseText;
				}
			}
		xmlhttp.open("GET",""+pag+"?tex="+tex+"&act="+act+"&acc="+acc,true);
		xmlhttp.send();	
	$("#tex").val('');
  }  
</script> 
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38413002-1']);
  _gaq.push(['_setDomainName', 'narino.gov.co']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
</html>
