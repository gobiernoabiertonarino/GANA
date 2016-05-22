<P>&nbsp;</P>


<?php $datdat=condicion($c_declaracion." where ide_per_fk='$_SESSION[usu]'"); $jobga=0;?>
<form action="gana_formato_guardar.php" method="post" enctype="multipart/form-data">


<div class="titprincipal" >DECLARACION JURADA PATRIMONIAL</div>
<p align="justify" style="font-size:14px;">
<?php echo $informacion_legal;?> </p>
<p align="center" style="font-size:14px;">
  <input type="checkbox" style="width:50px" required />ACEPTO
</p>

<article>
<style>
#foto, .contenedor{ display:inline-block; vertical-align:top; }
</style>
<div class="contenedor">
  <div class="titulo">
   INGRESOS NETOS MENSUALES PROVENIENTES DE
  </div>
</div>
<div class="contenedor">
    <div class="objetos">
        <input class="objform" type="text" placeholder="FUNCIÓN PÚBLICA" id="obj1" name="obj1" value="<?php echo $datdat['ing_pub']; ?>"  required title="Digite el valor de los ingresos provenientes de la función pública " /><input class="objform" type="text" id="obj2" name="obj2" placeholder="ACTIVIDAD PRIVADA" value="<?php echo $datdat['ing_men']; ?>"  title="Digite el valor de los ingresos provenientes de la actividad privada" required/>
    </div>
</div>

<div class="contenedor">
    <div class="titulo">BIENES INMUEBLES</div>
    <div class="objetos"> 
     <select class="objform" id="obj101" name="obj101" title="Seleccione tipo de inmueble" >
        <option value="">TIPO</option>
        <?php 
		$ctinmu=ciclo($c_tipos_inmueble." order by nom_inm");		
		//$ctinmu=mysql_query("select * from gana_tipos_inmueble order by nom_inm");
      	while($dtinmu=mysql_fetch_array($ctinmu)){?>
		  <option value="<?php echo $dtinmu['cod_inm'];?>"><?php echo $dtinmu['nom_inm'];?></option>
		  <?php ?> <?php }?>
      </select> 
       <input name="obj102" type="date" class="objform" id="obj102" placeholder="Fecha de adquisición" title="Digite la fecha en la cual adquirió el inmueble. Formato aaaa-mm-dd" />
       <input name="obj103" type="text" class="objform" id="obj103" placeholder="Valor inmueble" title="Digite el valor del inmueble" onKeyUp="this.value = this.value.replace (/[^0-9]/,'');"/>
       <input name="obj104" type="text" class="objform" id="obj104" placeholder="Dirección, Ciudad, País" title="Digite el País y Ciudad donde se encuentra el inmueble" onkeyup="this.value = this.value.toUpperCase(this.value);" />
       <input name="guardar" type="button" class="objform bgua" id="guardar" onClick="gana(obj101.value,obj102.value,obj103.value,obj104.value,0,0,0,0,9,'guardar','gana_formato_guardar.php','#inmuebles')" value="&radic;" title="Click para guardar" style=" width:5%;" >       
      </div> 
</div> 
<div class="contenedor">  
       <div id="inmuebles">
          <?php $jobga="inmuebles"; include ('gana_formato_guardar.php'); $jobga=0;?>
       </div>
</div>
</article>
<!--------------------------------------MUEBLES---------------------------------------->
<article>
<div class="contenedor">
    <div class="titulo">BIENES MUEBLES </div>
    <div class="objetos">
      <input name="obj201" type="text" class="objform" id="obj201" placeholder="Vehiculo, Marca, Modelo" title="Digite la descrición del mueble, automovil, camioneta, motocicleta. Marca y Modelo" onkeyup="this.value = this.value.toUpperCase(this.value);"/>
      <input name="obj202" type="date" class="objform" id="obj202" placeholder="Fecha de adquisición" title="Digite la fecha en la cual adquirió el inmueble. Formato aaaa-mm-dd" />
       <input name="obj203" type="text" class="objform" id="obj203" placeholder="Valor mueble" title="Digite el valor del mueble" onKeyUp="this.value = this.value.replace (/[^0-9]/,'');"/>
       <input name="obj204" type="hidden" class="objform" id="obj204" placeholder="Observación sobre el mueble" title="Digite si existe alguna observación del mueble adquirido" />
       <input name="guardar2" type="button" class="objform bgua" id="guardar2" onClick="gana(obj201.value,obj202.value,obj203.value,obj204.value,0,0,0,0,1,'guardar','gana_formato_guardar.php','#muebles')" value="&radic;" title="Click para guardar" >
    </div> 
</div> 
<div class="contenedor">
	<div id="muebles">
	   <?php $jobga="muebles"; include ('gana_formato_guardar.php'); $jobga=0;?>
</div> 
</div>        
</article>



  <!--------------------------------CUENTAS BANCARIAS----------------------->
<article>
<div class="contenedor">
    <div class="titulo">CUENTAS BANCARIAS </div>
    <div class="objetos">
      <select class="objform" id="obj301" name="obj301" title="Seleccione tipo de cuenta"  >
        <option value="">TIPO</option>
        <?php $ctcue=ciclo($c_tipos_cuenta." order by nom_cue");
      	while($dtcue=mysql_fetch_array($ctcue)){?>
        <option value="<?php echo $dtcue['cod_cue'];?>"><?php echo $dtcue['nom_cue'];?></option>       
        <?php }?>
      </select>
      <input name="obj302" type="text" class="objform" id="obj302" placeholder="BANCO" title="Digite el nombre del banco" onkeyup="this.value = this.value.toUpperCase(this.value);" />
       <input name="obj303" type="text" class="objform" id="obj303" placeholder="SALDO" title="Digite el saldo del cuenta" onKeyUp="this.value = this.value.replace (/[^0-9]/,'');"/>
       <input name="obj304" type="hidden" class="objform" id="obj304" placeholder="Observación sobre el cuenta" title="Digite si existe alguna observación del cuenta adquirido" />
       <input name="guardar3" type="button" class="objform bgua" id="guardar3" onClick="gana(obj301.value,obj302.value,obj303.value,obj304.value,0,0,0,0,2,'guardar','gana_formato_guardar.php','#cuentas')" value="&radic;" title="Click para guardar">
    </div> 
</div> 
<div class="contenedor">
	<div id="cuentas">
	   <?php $jobga="cuentas"; include ('gana_formato_guardar.php'); $jobga=0;?>
</div> 
</div>        
</article>


 <!--------------------------------CFREDITS/DEUDAS-------------------------->
<article>
<div class="contenedor">
    <div class="titulo">DEUDAS / CRÉDITOS</div>
    <div class="objetos">
      <select class="objform" id="obj401" name="obj401" title="Seleccione tipo de cuenta" >
        <option value="">TIPO</option>
        <?php $ctcue=ciclo($c_tipos_deuda." order by nom_deu");
      while($dtcue=mysql_fetch_array($ctcue)){?>
        <option value="<?php echo $dtcue['cod_deu'];?>"><?php echo $dtcue['nom_deu'];?></option>
        <?php }?>
      </select>
      <input name="obj402" type="text" class="objform" id="obj402" placeholder="Tipo de Crédito" title="Digite el tipo de crédito o deuda." onkeyup="this.value = this.value.toUpperCase(this.value);"/>
       <input name="obj403" type="text" class="objform" id="obj403" placeholder="Valor deuda" title="Digite el valor del deuda" onKeyUp="this.value = this.value.replace (/[^0-9]/,'');"/>
       <input name="obj404" type="hidden" class="objform" id="obj404" placeholder="Observación sobre el deuda" title="Digite si existe alguna observación del deuda adquirido" />
       <input name="guardar4" type="button" class="objform bgua" id="guardar4" onClick="gana(obj401.value,obj402.value,obj403.value,obj404.value,0,0,0,0,3,'guardar','gana_formato_guardar.php','#deudas')" value="&radic; " title="Click para guardar">
    </div> 
</div> 
<div class="contenedor">
	<div id="deudas">
	   <?php $jobga="deudas"; include ('gana_formato_guardar.php'); $jobga=0;?>
</div> 
</div>        
</article> 

<!--------------------INTITUCIONAL------------------------->


<article>

	<div class="contenedor">
    <div class="titulo">PARTICIPACIÓN EN SOCIEDADES COMERCIALES</div>
    <div class="objetos">
        <textarea class="objform" type="text" placeholder="PARTICIPACIÓN EN SOCIEDADES COMERCIALES" id="obj3" name="obj3" style="width:80%" value="" required title="Digite su participación en sociedades comerciales"><?php if($datdat['act_com']){echo "$datdat[act_com]";}else{ echo "Ninguna";} ?></textarea>
    </div>
</div>
</article>
 
</div>
<article><center><input name="almacenar" type="submit" class="objform" id="almacenar" style="font-size:25px; box-shadow:0px 5px 10px #CCC;" value="<?php if($datdat['ide_per_fk']==$_SESSION['usu']){echo "Actualizar Datos";}else{echo "Almacenar Datos";}?>"></center>
</article>


</form>
<?php ?>
</center>
</body>
</html>