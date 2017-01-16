<?php $cdat=ciclo($c_datos_funcinonarios." order by ord,nom");  ?>

<div id="contenido" style="max-width: 1024px; margin:0 auto;">
<!--<div align="center"><img src="../img/Corazon.png" style="width:20%;"></div>-->
<?php while($ddat=mysql_fetch_array($cdat)){?>
<div class="datos">
    <div class="img" style="width:100px; height:100px; background:#fff; border-radius:50px; box-shadow:7px 7px 2px #dadad8; margin-right:5px;"><img src="img/<?php echo "12750766.jpg";//$ddat['numdoc_pk']; ?>"  style="width:100px; border-radius:50px;"/></div>
    <div class="qr" style="">
<?php 
//estas líneas se correo la primera ves o al realizar actualizaciones
	$url = "http://aplicaciones.narino.gov.co/ACCESO/forms/dependencias/GANA/GANA-Declaraciones/index?reporte=1&ide=".$ddat['numdoc_pk'];
	$img = "img/codigo".$ddat['numdoc_pk'].".png";
	$size = 10;
	$level = QR_ECLEVEL_H; 
	QRcode::png($url,$img,$size,$level);
	echo '<img src="img/codigo'.$ddat['numdoc_pk'].'.png" style="width:30px;"/>';

?>  </div> 
        <div class="des">        
        <span class="nom"><a href="index.php?reporte=1&ide=<?php echo $ddat['numdoc_pk']; ?>&ban=1"><?php echo $ddat['nom']." ".$ddat['priape']." ".$ddat['segape']; ?></a></span><br>
         <span class="gab"><?php echo $ddat['nom_car']; ?></span><br/>          
         <?php $dsub=condicion($c_dependencias." AND cod_sub=$ddat[codsub_fk]");  ?>         
         <?php if($dsub['nom_dep']<>$dsub['nom_sub']){ ?><span class="sub"><?php echo $dsub['nom_sub']; ?></span><br/><?php }  ?>
         <span class="dep"><?php echo $dsub['nom_dep']; ?></span><br/><?php ?>
         <span class="dep"><?php echo $ddat['pro']; ?></span><br/>                
        </div>
</div>

<?php $i++;}?>
</div>
