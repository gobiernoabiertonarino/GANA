<?php 
$ddat=condicion($c_datos);  
?>
   
<?php if($_GET[ban]==1){?>
<div><img src="http://narino.gov.co/gana/wp-content/uploads/2016/01/logogana.png"/></div>
<?php }?>
<div id="contenido" style="max-width: 1000px; margin:0 auto;">
<!--<div align="center"><img src="img/12750766.png"></div>-->

<div class="datos">
    <div class="img" style="width:180px; height:180px; background:#FFF; border-radius:90px; box-shadow:7px 7px 2px #dadad8; margin-right:15px;"><img src="img/<?php echo $ddat['numdoc_pk'].$extimg; ?>" style="width:180px; " ></div>
     <div class="qr" style=" margin-top:25px;">
		 <?php echo '<img src="img/codigo'.$ddat['numdoc_pk'].'.png"/>';?>
    </div> 
        
 </div>  
 <div class="datos">
 	<div class="des">        
        <span class="nom"><?php echo $ddat['nom']." ".$ddat['priape']." ".$ddat['segape']; ?></span><br>
         <span class="gab"><?php echo $ddat['nom_car']; ?><br> 
         <?php $dsub=condicion($c_dependencias." AND cod_sub=$ddat[codsub_fk]"); ?>         
         <?php if($dsub['nom_dep']<>$dsub['nom_sub']){ ?><span class="sub"><?php echo $dsub['nom_sub']; ?></span><br/><?php } ?>
         <span class="dep"><?php echo $dsub['nom_dep']; ?></span><br/>
         <?php $dcor=condicion($c_contacto." where docmail=$ddat[numdoc_pk]"); 
	          if($dcor){?>  
              <div class="titulo"><span class="tit">Contacto</span><span class="tex"><?php echo $dcor['usu_per']; ?></span></div> <?php }?>
              <?php if($ddat['tel']){ ?>
              <div class="titulo"><span class="tit">Telefóno</span><span class="tex">7235004 <?php echo $ddat['ext']; ?></span></div>    <?php }?>
              <div class="titulo"><span class="tit">Acta </span><span class="tex"> <a style="color:#4285f3; font-weight:normal;" target="_blank" href="actas/<?php echo $ddat['numdoc_pk'];?>">Documento PDF</a></span></div>     
        </div>
 </div>
 
 <div class="datos"> 
 <div class="titprincipal" >DECLARACIÓN JURADA</div>      
<!------------------------------------------------------------------->        
    <div class="titulo"><span class="tit">Fecha Declaración Jurada</span><span class="tex"><?php echo $ddat['fec_dec']; ?></span></div> 
    <div class="titulo"><span class="tit">Profesión</span><span class="tex"><?php echo $ddat['pro']; ?></span></div>  
    <div class="titulo"><span class="tit">Documento Identificación</span><span class="tex"><?php echo $ddat['numdoc_pk']; ?></span></div>
    <div class="titulo"><span class="tit">Ingreso mensual-función pública</span><span class="tex">$<?php echo $ddat['ing_pub']; ?> m/cte</span></div>
    <div class="titulo"><span class="tit">Ingreso mensual-función privada</span><span class="tex">$<?php echo $ddat['ing_men']; ?> m/cte</span></div> 
    <div class="titulo"><span class="tit">Declaración Jurada</span><span class="tex"><a style="color:#4285f3; font-weight:normal;" target="_blank" href="declaraciones/<?php echo $ddat['numdoc_pk'];?>">Documento PDF</a></span></div>  
</div>

<?php //if($ddat['numdoc_pk']){?>
<div class="datos">
    <!------------------------------------------------------------------->
    <div class="titprincipal" >BIENES INMUEBLES REGISTRADOS</div> 
    <?php 
	$cinm=ciclo($c_inmuebles." where ide_per_fk='$ddat[numdoc_pk]'");		
    while($dinm=mysql_fetch_array($cinm)){
        $ctinm=mysql_query("select * from gana_tipos_inmueble where cod_inm=$dinm[cod_inm_fk]");if($dtinm=mysql_fetch_array($ctinm)){}	
        ?> 
        <div class="grupo">   
            <div class="titulo"><span class="tit">Tipo</span><span class="tex"><?php echo $dtinm['nom_inm']; ?></span></div>
            <div class="titulo"><span class="tit">Fecha</span><span class="tex"><?php echo $dinm['fec_inm']; ?></span></div>
            <div class="titulo"><span class="tit">Valor</span><span class="tex"><?php echo $dinm['val_inm']; ?></span></div>
            <div class="titulo"><span class="tit">Ubicación</span><span class="tex"><?php echo $dinm['ubi_inm']; ?></span></div>
        </div>
    <?php }?>    
    <!------------------------------------------------------------------->
</div>
<?php //}?>   

<div class="datos">
    <!------------------------------------------------------------------->
    <div class="titprincipal" >BIENES MUEBLES REGISTRADOS</div> 
    <?php $cmue=ciclo($c_muebles." where ide_per_fk=$ddat[numdoc_pk]"); 
    while($dmue=mysql_fetch_array($cmue)){
        //$ctimn=mysql_query("select * from gana_tipos_mueble where cod_inm=$dinm[cod_inm_fk]");if($dtinm=mysql_fetch_array($ctinm)){}	
        ?> 
         <div class="grupo">
            <div class="titulo"><span class="tit">Descripción</span><span class="tex"><?php echo strtoupper($dmue['des_mue']); ?></span></div>
            <div class="titulo"><span class="tit">Fecha</span><span class="tex"><?php echo $dmue['fec_mue']; ?></span></div>
            <div class="titulo"><span class="tit">Valor</span><span class="tex"><?php echo $dmue['val_mue']; ?></span></div> 
    	</div> 
    <?php }?>    
    <!------------------------------------------------------------------->    
    </div>


<div class="datos">
    <!------------------------------------------------------------------->
    <div class="titprincipal" >CUENTAS BANCARIAS</div> 
    <?php $ccue=ciclo($c_cuentas." where ide_per_fk=$ddat[numdoc_pk]"); 
    while($dcue=mysql_fetch_array($ccue)){
        $dtcue=condicion($c_tipos_cuenta." where cod_cue=$dcue[des_cue]");
        ?> 
         <div class="grupo">
            <div class="titulo"><span class="tit">Tipo</span><span class="tex"><?php echo $dtcue['nom_cue']; ?></span></div>
            <div class="titulo"><span class="tit">Banco</span><span class="tex"><?php echo strtoupper($dcue['ban_cue']); ?></span></div>
            <div class="titulo"><span class="tit">Saldo</span><span class="tex"><?php echo $dcue['val_cue']; ?></span></div>  
         </div>   
    <?php }?>    
    <!------------------------------------------------------------------->    
</div>

<div class="datos">
    <!------------------------------------------------------------------->
    <div class="titprincipal" >CREDITOS / DEUDAS </div> 
    <?php $cdeu=ciclo($c_deudas." where ide_per_fk=$ddat[numdoc_pk]"); 
    while($ddeu=mysql_fetch_array($cdeu)){
        $dtdeu=condicion($c_tipos_deuda." where cod_deu=$ddeu[des_deu]");
        ?> 
         <div class="grupo">
            <div class="titulo"><span class="tit">Tipo</span><span class="tex"><?php echo $dtdeu['nom_deu']; ?></span></div>
            <div class="titulo"><span class="tit">Descripción</span><span class="tex"><?php echo $ddeu['tip_deu']; ?></span></div>
            <div class="titulo"><span class="tit">Valor</span><span class="tex"><?php echo $ddeu['val_deu']; ?></span></div>  
         </div>   
    <?php }?>    
    <!------------------------------------------------------------------->    
</div>


    
</div>
