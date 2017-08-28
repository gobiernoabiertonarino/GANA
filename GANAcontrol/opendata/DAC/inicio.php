<?php 
if($_POST['obj1']){require '../../info.php';
if($_POST['obj2']){ $anio=$_POST['obj2']; } 
$JB=1;
?> 
<h4 class="sub-title"><?php echo ucfirst($_POST['obj1']);?></h4>  
<div class="row">
        <div class="col-sm-3 " >
     		<?php 	$conproceso="SELECT * FROM `tabla` WHERE fec_contrato='$anio' AND nom_dependencia like '%$_POST[obj1]%' GROUP BY proceso "; 
                	$rowproceso=mysql_query($conproceso, $congana);
					while($datproceso=mysql_fetch_array($rowproceso)){ ?>
			<h4><?php echo ucfirst(strtolower($datproceso['proceso']));?></h4>		
            <?php 	$conDetalleTipo="SELECT * FROM `tabla` WHERE fec_contrato='$anio' AND proceso='$datproceso[proceso]' AND nom_dependencia like '%$_POST[obj1]%' GROUP BY modalidades "; 
                	$rowDetalleTipo=mysql_query($conDetalleTipo, $congana);
					while($datDetalleTipo=mysql_fetch_array($rowDetalleTipo)){  ?> 
                    <div class="" style="width:100%; margin-top:10px; overflow:auto;">           
                        <a class="form-control input-sm btn-defaulf " style="width:100%; " href="#FINcontratos" onClick="inicio('<?php echo $datDetalleTipo['nom_dependencia'];?>','<?php echo $datDetalleTipo['modalidades'];?>',<?php echo $anio;?>,'FINcontratos','#FINcontratos','opendata/DAC/detalle.php');">
                            <?php echo ucfirst(strtolower($datDetalleTipo['modalidades']));?>
                        </a>
                	</div>
                <?php  } ?>
                
				 <?php	}?> 
          

		<?php }?>
        </div>
        <div class="col-sm-9" id="FINcontratos">
        		
        </div>
</div>
<div id="terceroDAC" ></div>
