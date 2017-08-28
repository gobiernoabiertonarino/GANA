<!-- Container (tree_map) -->

<div class="container-fluid">
<?php 
if($_POST['obj1']){require '../../info.php';  }
if($_POST['obj2'] ){	$anio=$_POST['obj2']; }
					  		
?>	
<div class="container-fluit" >      				 	
	<div class="row">
      <div class="col-sm-3 delay-09s" style=" overflow:auto;">
          <h3 class="sub-title">Secretaría / Dependencia</h3><br/>              
             <?php 
			 $conGdependencia=mysql_query("SELECT nom_dependencia, sum(apro_vigente) totals, (sum(comprometido)/sum(apro_vigente))*100 total FROM tabla 
			 							   WHERE anio='$anio' AND cod_dep<>0 AND cod_dep>=5 GROUP BY nom_dependencia ORDER BY total desc", $congana);
			 while($datGdependencia=mysql_fetch_array($conGdependencia)){  ?>
                	<div class="page-scroll" style="margin-top:2px;">
                        <a class="form-control input-sm btn-defaulf "  href="#GANA" style="width:100%" 
                        onClick="inicio('<?php echo $datGdependencia['nom_dependencia'];?>',<?php echo $anio;?>,1,'Qdetalle','#Qdetalle','opendata/HAC/detalle.php');"><?php echo decUTF8($datGdependencia['nom_dependencia']);?>
                        </a>
                    </div>    
             
              <?php  } ?> 
              <?php 
			 $conGdependencia=mysql_query("SELECT nom_dependencia, sum(apro_vigente) totals, (sum(comprometido)/sum(apro_vigente))*100 total FROM tabla 
			 							   WHERE anio='$anio' AND cod_dep<>0 AND cod_dep<5 GROUP BY nom_dependencia ORDER BY total desc", $congana);
			 while($datGdependencia=mysql_fetch_array($conGdependencia)){  ?>
                	<div class="page-scroll" style="margin-top:2px;">
                        <a class="form-control input-sm btn-defaulf " style="background:#f9f5f0"  href="#GANA" style="width:100%" 
                        onClick="inicio('<?php echo $datGdependencia['nom_dependencia'];?>',<?php echo $anio;?>,1,'Qdetalle','#Qdetalle','opendata/HAC/detalle.php');"><?php echo decUTF8($datGdependencia['nom_dependencia']);?>
                        </a>
                    </div>    
             
              <?php  } ?> 
       </div>
         
      <div class="col-sm-9 delay-03s" id="Qdetalle" style=" overflow:auto; overflow-y: hidden;">      
      	&nbsp;
      </div>
    </div> 
</div>