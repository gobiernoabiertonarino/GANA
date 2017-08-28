<?php 
if($_POST['obj2']){require '../../info.php'; $primera=" AND nom_dependencia like '%$_POST[obj1]%'"; } 
if($_POST['obj3']){ $anio=$_POST['obj3']; } 

//echo $_POST['obj1']."<br>".$_POST['obj2']."<br>".$_POST['obj3'];?>
<!--<h4 ><?php echo ucfirst(strtolower( $_POST['obj2'])); ?> - <?php echo ucfirst($_POST['obj1']);?></h4>-->
 <div class="row" style="margin-top:20px;">
      
      <div class="col-sm-8"><strong>NOMBRE CONTRATISTA</strong></div>
      <div class="col-sm-4"></div>
    </div>
<?php 
$conDetalleUnico="SELECT * FROM `tabla` WHERE fec_contrato='$anio' AND modalidades='$_POST[obj2]' $primera GROUP BY num_id_contratista ORDER BY fecha_suscripcion,nom_contratista";
$rowDetalleUnico=mysql_query($conDetalleUnico, $congana);
//echo $conDetalleTodo;
while($datDetalleUnico=mysql_fetch_array($rowDetalleUnico)){  ?>
<div style=" border-bottom:1px solid #ddd; margin-top:10px;">   
    <div class="row" style="">      
      <div class="col-sm-8"><?php echo $datDetalleUnico['nom_contratista'];?></div>
      <div class="col-sm-4 text-right">
      	<button class="btn btn-info" data-toggle="collapse" data-target="#demo<?php echo $datDetalleUnico['num_id_contratista'];?>">+</button>        
      </div>
    </div>
    <div id="demo<?php echo $datDetalleUnico['num_id_contratista'];?>" class="collapse">
    		<table  class="table-hover table">
          	<thead>
                <tr> 
                  <th>NUMERO</th>
                  <th>FECHA INICIO</th>
                  <th>FECHA TERMINACION</th>
                  <th>VALOR IMPUTAR</th>          
                </tr>
          	</thead>
        	<tbody>    
				 <?php 
				 $conDetalleTodo="SELECT * FROM `tabla` WHERE fec_contrato='$anio' AND num_id_contratista='$datDetalleUnico[num_id_contratista]' AND modalidades='$_POST[obj2]' $primera GROUP BY num_contrato ORDER BY cuantia_definitiva";
$rowDetalleTodo=mysql_query($conDetalleTodo, $congana);
				//echo $conDetalleTodo;
                while($datDetalleTodo=mysql_fetch_array($rowDetalleTodo)){  ?>
              <tr <?php if($datDetalleTodo['fecha_terminacion']<date('Y-m-d')){ echo 'style=" background:#FFE9E9;"'; }?> > 
              	<td><?php if($datDetalleTodo['secop']!=''){?><a target="_blank" data-toggle="tooltip" title="Click para ver en SECOP" href="<?php echo $datDetalleTodo['secop'];?>"><?php }?>				
					<?php echo $datDetalleTodo['num_contrato'];?><?php if($datDetalleTodo['secop']!=''){?>
                    </a><?php }?>	
                </td>   
                <td><?php echo $datDetalleTodo['fecha_suscripcion'];?></td>
                <td><?php echo $datDetalleTodo['fecha_terminacion'];?></td> 
                <td >$ <?php echo number_format($datDetalleTodo['cuantia_definitiva'],0,",",".");?> m/te</td>                   
              </tr>
              <tr>
              	<td colspan="4"><strong>Objeto:</strong> <?php $cadena=($datDetalleTodo['tipo_contratacion_desc']); echo ucfirst(strtolower($cadena));?></td>
              </tr>
                  <?php  } ?>           
        	</tbody>
        </table>
    </div>                
</div>

<?php  } ?> 
              
 