<?php 
$concom="SELECT * FROM  `tics_gana`.`informes_comentarios` WHERE id_inf_fk=$jbucheli $orden";
//echo $concom;
$concoms=mysql_query($concom); $i=0;
while($datcom=mysql_fetch_array($concoms)){
?>
    <div class="informecomentarios" style="?>">
        <div class="detcom"><?php echo $datcom['fec_com']; ?><?php echo $datcom['hor_com']; ?>
        	<span id="puntuasion<?php echo $i; ?>"><?php echo $datcom['gus_act']-$datcom['nogus_act']; ?>
            	<a onClick="ganas(<?php echo $datcom['gus_act']+1; ?>,<?php echo $datcom['id_com']; ?>,'mascom','ACCESO/forms/dependencias/GANA/inicio_guardar.php','puntuasion<?php echo $i; ?>')">&and;</a>
                <a onClick="ganas(<?php echo $datcom['nogus_act']+1; ?>,<?php echo $datcom['id_com']; ?>,'mencom','ACCESO/forms/dependencias/GANA/inicio_guardar.php','puntuasion<?php echo $i; ?>')">&or;</a>
            </span>
        </div>
        <div class="texcom"><?php echo $datcom['text_com']; ?></div>
        
    </div>
<?php $i++; }?>

