<!-- Container (tree_map) -->
<div class="container-fluid">
<?php 
$Gwhere='1';
if($_POST['obj1']){require '../../info.php'; $Gwhere=" nom_dependencia='$_POST[obj1]'";   } 
if($_POST['obj2'] ){	$anio=$_POST['obj2']; }

$contotdep=mysql_query("SELECT sum(apro_vigente) totdep FROM tabla WHERE $Gwhere AND anio='$anio'", $congana);	
if($dattotdep=mysql_fetch_array($contotdep)){}
?>
<h3 class="sub-title"><?php echo decUTF8($_POST['obj1'])." $".number_format($dattotdep[totdep], 2, ',', '.')."m/te";?>
</h3>

<?php 
$conFdetalle=mysql_query("SELECT * FROM tabla WHERE $Gwhere AND anio='$anio' ORDER BY apro_vigente desc", $congana);				  		
while($datFdetalle=mysql_fetch_array($conFdetalle)){  ?>	
<div style=" border-bottom:1px solid #ddd; margin-top:10px;">   
    <div class="row" style="">      
      <div class="col-sm-8"><?php echo decUTF8($datFdetalle['nom_hijo']);?> <span style="font-size:10px;">[<?php echo $datFdetalle['cod_hijo'];?>]</span> </div>
      <div class="col-sm-2"><strong><?php echo number_format((($datFdetalle['comprometido'])/($datFdetalle['apro_vigente']))*100, 2, ',', '.');?>%</strong></div>
      <div class="col-sm-2 text-right">
      	<button class="btn btn-info" data-toggle="collapse" data-target="#demo<?php echo $datFdetalle['cod_hijo'];?>">+</button>
      </div>
    </div>
    <div id="demo<?php echo $datFdetalle['cod_hijo'];?>" class="collapse">			 	
	
        <table class="table table-hover" style="background:#fff;">
        <thead>
          <tr>
            <!--<th></th>-->
            <th >FUENTE</th>
            <!--<th>RECUROS INICIAL</th>-->
            <th style="width:15%">RECURSOS</th>
            <th style="width:15%">SOLICITADO<span style="font-size:8px;">CDP</span></th>
            <th style="width:15%">COMPROMISO</th>
            <th style="width:15%">SIN COMPROMISO</th>
            <th style="width:15%">SALDO DISPONIBLE</th>
           <!-- <th>EJECUCION</th>-->
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $conQdetalle=mysql_query("SELECT * FROM tabla WHERE $Gwhere AND anio='$anio' AND cod_hijo='$datFdetalle[cod_hijo]' ORDER BY cod_padre_3", $congana);				  		
        while($datQdetalle=mysql_fetch_array($conQdetalle)){  ?>		
          <tr>
            <!--<td><?php echo $datQdetalle['nom_hijo'];?></td>-->
            <td><?php echo $datQdetalle['nom_fue'];?></td>
           <!-- <td><?php echo number_format($datQdetalle['apro_inicial'], 2, ',', '.');?></td>-->
            <td><?php echo number_format($datQdetalle['apro_vigente'], 2, ',', '.');?></td>
             <td><?php echo number_format($datQdetalle['disponibilidad'], 2, ',', '.');?></td>
             <td><?php echo number_format($datQdetalle['comprometido'], 2, ',', '.');?></td>
             <td><?php echo number_format($datQdetalle['disponibilidad']-$datQdetalle['comprometido'], 2, ',', '.');?></td>
            <td><?php echo number_format($datQdetalle['apro_vigente']-$datQdetalle['disponibilidad'], 2, ',', '.');?></td>
            <!--<td><strong><?php echo number_format((($datQdetalle['comprometido'])/($datQdetalle['apro_vigente']))*100, 2, ',', '.');?>%</strong></td>-->
            <td class="text-right">
			&nbsp;
            </td>
         </tbody>
      </table>	      
	<?php } ?>       
           
        
	</div>
</div>

 <?php } ?>  
 
 
	<div class="col-sm-12 delay-08s">       		
            &nbsp;       			
    </div>	
