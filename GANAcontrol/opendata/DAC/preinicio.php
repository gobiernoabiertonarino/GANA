<?php 

if($_POST['obj1']){require '../../info.php'; $primera=" AND nom_dependencia like '%$_POST[obj1]%'";
//echo $_POST['obj1']."<br>".$_POST['obj2']."<br>".$_POST['obj3'];
if($_POST['acc']=='Treemap'){$uno=substr($_POST['obj1'],13); $uno=substr($uno,0,-5);  echo $uno."<br>"; $primera=" AND nom_dependencia like '%$uno%'"; }
if($_POST['obj2']){ $anio=$_POST['obj2']; } 
$JB=1;
?> 
<style>
 #network_dac #key{ display: none; }
</style> 
<div class="row">
	 <div class="col-sm-3 ">
     <h4 class="sub-title">SECRETARÍA / DEPENDENCIA </h4> 
     	<?php $conSUB=mysql_query("SELECT nom_dependencia, count(DISTINCT num_contrato) num FROM `tabla` WHERE fec_contrato='$anio'  GROUP BY nom_dependencia ORDER BY num DESC",$congana);
        while($datSUB=mysql_fetch_array($conSUB)){?>
        <div>      
            <a href="#inicioDAC" class="form-control input-sm btn-defaulf" onClick="inicio('<?php echo $datSUB['nom_dependencia'];?>','<?php echo $anio;?>',1,'inicioDAC','#inicioDAC','opendata/DAC/inicio.php');"><?php echo ucfirst($datSUB['nom_dependencia']);?></a>            
        </div>    
        <?php  $JB++;} ?> 
           
        
   	</div>    
    <div class="col-sm-9 " id="inicioDAC">        
   	
              
</div> 
<?php }?>




