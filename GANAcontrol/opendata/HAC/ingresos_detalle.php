<!-- Container (tree_map) -->
<div class="container-fluid">
<?php 
$Gwhere='1';
if($_POST['obj1']){require '../../info.php';  } 
if($_POST['obj2'] ){	$anio=$_POST['obj2']; }

$contotdep=mysql_query("SELECT sum(apro_vigente) totdep FROM tabla WHERE nom_padre_4='$_POST[obj1]' AND anio='$anio'", $congana);				  		
if($dattotdep=mysql_fetch_array($contotdep)){}
?>
<h3 class="sub-title"><?php echo "".$_POST[obj1]." $".number_format($dattotdep[totdep], 2, ',', '.')."m/te";?></h3>
<br/>
<?php 
$conFdetalle=mysql_query("SELECT * FROM tabla WHERE nom_padre_4='$_POST[obj1]' AND anio='$anio' ORDER BY recaudo desc", $congana);				  		
while($datFdetalle=mysql_fetch_array($conFdetalle)){  ?>	
<div style=" border-bottom:1px solid #ddd; margin-top:10px;">   
    <div class="row" style="">      
      <div class="col-sm-9"><span style="font-size:16px;"><?php echo $datFdetalle['nom_hijo'];?></span> <span style="font-size:10px;">[<?php echo $datFdetalle['cod_hijo'];?>]</span> </div>
      <div class="col-sm-2"><strong><?php echo number_format(($datFdetalle['recaudo']/$datFdetalle['apro_vigente'])*100, 2, ',', '.');?> %</strong></div>
      <div class="col-sm-1 text-right"><button class="btn btn-info" data-toggle="collapse" data-target="#demo<?php echo $datFdetalle['cod_hijo'];?>">+</button></div>
    </div>
    <div id="demo<?php echo $datFdetalle['cod_hijo'];?>" class="collapse">			 	
	
       <table class="table table-hover" style="background:#fff;">
        <thead>
          <tr>
            <!--<th style="width:15%"></th>-->
            <th style="">FUENTE</th>
            <th style="width:15%">RECUROS </th>            
            <th style="width:15%">RECAUDOS</th>
            <th style="width:15%">MODIFICACIONES</th>
            <th style="width:15%"></th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $conQdetalle=mysql_query("SELECT * FROM tabla WHERE anio='$anio' AND cod_hijo='$datFdetalle[cod_hijo]' ORDER BY recaudo", $congana);				  		
        while($datQdetalle=mysql_fetch_array($conQdetalle)){  ?>		
          <tr>
            <!--<td><?php echo $datQdetalle['nom_hijo'];?></td>-->
            <td><?php echo $datQdetalle['nom_fue'];?></td>
            <!--<td><?php echo number_format($datQdetalle['apro_inicial'], 2, ',', '.');?></td>--> 
            <td><?php echo number_format($datQdetalle['apro_vigente'], 2, ',', '.');?></td>           
             <td><?php echo number_format($datQdetalle['recaudo'], 2, ',', '.');?></td>
            <td><?php echo number_format($datQdetalle['modificacion'], 2, ',', '.');?></td>
            <!--<td><?php echo number_format($datQdetalle['apro_vigente'], 2, ',', '.');?></td>-->
            <!--<td><strong><?php echo number_format((($datQdetalle['recaudo'])/($datQdetalle['apro_vigente']))*100, 2, ',', '.');?>%</strong></td>-->
            <td class="text-right"></td>
         </tbody>
      </table>	      
                  
          
           <?php } ?>       
           
        
	</div>
</div>
 <?php } ?>  
