<!-- Container (tree_map) -->

<div class="container-fluid">
<?php 
if($_POST['obj1']){require '../../info.php';  }
if($_POST['obj2'] ){	$anio=$_POST['obj2']; }
	
	$conNivel1=mysql_query("SELECT nom_padre_2, sum(recaudo) recaud FROM tablai WHERE anio='$anio' GROUP BY nom_padre_2 ORDER BY recaud desc", $congana);				  		
?>	
<div class="container-fluit" >      				 	
	<div class="row">
      <div class="col-sm-3 delay-09s" style=" overflow:auto;">
          <h3 class="sub-title">INGRESOS PROPIOS </h3><br/>              
             <?php while($datNivel1=mysql_fetch_array($conNivel1)){  
			 $conGdependencia=mysql_query("SELECT * FROM tablai WHERE anio='$anio' AND nom_padre_2='$datNivel1[nom_padre_2]'  GROUP BY nom_padre_4 ORDER BY recaudo desc", $congana);	
			 ?>
             <h5><?php echo $datNivel1['nom_padre_2'];?></h5>
			 <?php while($datGdependencia=mysql_fetch_array($conGdependencia)){  ?>
             
                	<div class="page-scroll" style="margin-top:2px;">
                        <a class="form-control input-sm btn-defaulf "  href="#GANA" style="width:100%" 
                        onClick="inicio('<?php echo $datGdependencia['nom_padre_4'];?>',<?php echo $anio;?>,1,'Qdetalle','#Qdetalle','opendata/HAC/ingresos_detalle.php');"><?php echo ucfirst(strtolower($datGdependencia['nom_padre_4']));?>
                        </a>
                    </div>    
             
              <?php  } ?> 
              <?php  } ?> 
       </div>
         
      <div class="col-sm-9 delay-03s" id="Qdetalle" style=" overflow:auto; overflow-y: hidden;">
      
      	
      </div>
    </div> 
</div>