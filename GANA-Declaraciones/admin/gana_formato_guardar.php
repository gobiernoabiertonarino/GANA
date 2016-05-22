<?php 
if(!$jobga){ require '../../../../../eliminar.php'; include('consultas.php'); }
//echo $_POST['almacenar'];
if($_POST['almacenar']){
	$dat=mysql_query($c_declaracion." where ide_per_fk='$_SESSION[usu]'");
    if($datdat=mysql_fetch_array($dat)){
		crud("UPDATE  gana_declaracion SET  ing_pub =  '$_POST[obj1]',ing_men =  '$_POST[obj2]',act_com =  '$_POST[obj3]' WHERE  ide_per_fk=$_SESSION[usu];");
		}else{
			crud("insert into gana_declaracion (ing_pub,ing_men,act_com,fec_dec,ide_per_fk) values($_POST[obj1],$_POST[obj2],'$_POST[obj3]','$fecha',$_SESSION[usu])");				
			}	
		?>
	<script type="text/javascript">
setTimeout(function() { window.location.href = 'index.php';}, 3000);
//alert("Su registro fue Exitoso");
</script>
<center><img src="../img/gracias.jpg" style=" border:2px solid #000; border-radius:5px;"></center>
	<?php exit;
	}
$guardar="<span style='background:#5eb300; color:#fff;'>Datos Almacenados</span>";
$actualizar="<span style='background:#5eb300; color:#fff;'>Datos Modificados</span>";
$eliminar="<span style='background:#ff0105; color:#fff;'>Datos Eliminados</span>";

if($_POST["acc"]=='guardar'){ if($_POST['var9']==9){$accion=$g_inmuebles;} else if($_POST['var9']==1){$accion=$g_muebles;} 
							 else if($_POST['var9']==2){$accion=$g_cuentas;} else if($_POST['var9']==3){$accion=$g_deudas;}
crud($accion);
echo $guardar;
}
if($_POST["acc"]=='actualizar'){	if($_POST['var9']==9){$accion=$a_inmuebles;} else if($_POST['var9']==1){$accion=$a_muebles;} 
							 else if($_POST['var9']==2){$accion=$a_cuentas;} else if($_POST['var9']==3){$accion=$a_deudas;}
crud($accion);
echo $actualizar;
}
if($_POST["acc"]=='eliminar'){if($_POST['var9']==9){$accion=$e_inmuebles;} else if($_POST['var9']==1){$accion=$e_muebles;} 
							 else if($_POST['var9']==2){$accion=$e_cuentas;} else if($_POST['var9']==3){$accion=$e_deudas;}
crud($accion);
echo $eliminar;
}


//echo $ins_inm;

?>
<?php if($_POST['var9']==9 || $jobga=="inmuebles"){ ?>
      <table width="95%" align="center" class="" style="margin-top:15px;">
            <tbody>
            <tr style="background:#0091d1; color:#fff;">
              <td colspan="6"><span class="titulo">Información de <?php echo $jobga; ?> registrada</span></td>
              </tr>
            <tr style="background:#0091d1; color:#fff;">
             
              <td>Tipo</td>
              <td>Fecha Aquisición</td>
              <td>Valor</td>
              <td>Ubicación</td>
              <td>&nbsp;</td>
            </tr>
            <?php 
			
			$cinmu=ciclo($c_inmuebles." where ide_per_fk='$_SESSION[usu]'");		
			while($dinmu=mysql_fetch_array($cinmu)){?>
            <tr>                        
              
              <td><select class="objtable" id="obj102<?php echo $dinmu['cod_inm_pk'];?>" name="obj102<?php echo $dinmu['cod_inm_pk'];?>" title="Seleccione tipo de inmueble"  >
                <option value="">TIPO</option>
              <?php 
			  $ctinmu=ciclo($c_tipos_inmueble." order by nom_inm");
              while($dtinmu=mysql_fetch_array($ctinmu)){?>
                <option value="<?php echo $dtinmu['cod_inm'];?>" <?php if($dtinmu['cod_inm']==$dinmu['cod_inm_fk']){?>selected="selected"<?php }?>><?php echo $dtinmu['nom_inm'];?></option>
              <?php }?>
              </select></td>
              <td><input name="obj103<?php echo $dinmu['cod_inm_pk'];?>" type="date" class="objtable" id="obj103<?php echo $dinmu['cod_inm_pk'];?>" placeholder="FECHA DE ADQUISICIÓN" title="Digite la fecha en la cual adquirió el inmueble. Formato aaaa-mm-dd" value="<?php echo $dinmu['fec_inm'];?>"/></td>
              <td><input name="obj104<?php echo $dinmu['cod_inm_pk'];?>" type="text" class="objtable" id="obj104<?php echo $dinmu['cod_inm_pk'];?>" placeholder="VALOR INMUEBLE" title="Digite el valor del inmueble" onKeyUp="this.value = this.value.replace (/[^0-9]/,'');" value="<?php echo $dinmu['val_inm'];?>"/></td>
              <td><input name="obj105<?php echo $dinmu['cod_inm_pk'];?>" type="text" class="objtable" id="obj105<?php echo $dinmu['cod_inm_pk'];?>" placeholder="UBICACIÓN" title="Digite el País y Ciudad donde se encuentra el inmueble"  value="<?php echo $dinmu['ubi_inm'];?>"/></td>
              <td><input name="eliminar" type="button" class="beli" id="eliminar" value="&Chi;" onClick="gana(<?php echo $dinmu['cod_inm_pk'];?>,0,0,0,0,0,0,0,9,'eliminar','gana_formato_guardar.php','#inmuebles')" title="Eliminar"><input name="modificar" type="button" class="bact" id="modificar" value="&radic;" onClick="gana(<?php echo $dinmu['cod_inm_pk'];?>,obj102<?php echo $dinmu['cod_inm_pk'];?>.value,obj103<?php echo $dinmu['cod_inm_pk'];?>.value,obj104<?php echo $dinmu['cod_inm_pk'];?>.value,obj105<?php echo $dinmu['cod_inm_pk'];?>.value,0,0,0,9,'modificar','gana_formato_guardar.php','#inmuebles')" title="Actualizar"></td>
            </tr>
            <?php }?>
            </tbody>
         </table>
<?php }?>

<?php if($_POST['var9']==1 || $jobga=="muebles"){ ?>
   	  <table width="95%" align="center" class="" style="margin-top:15px;">
            <tbody>
            <tr style="background:#0091d1; color:#fff;">
              <td colspan="6"><span class="titulo">Información de <?php echo $jobga; ?> registrada</span></td>
              </tr>
            <tr style="background:#0091d1; color:#fff;">
             
              <td>Descripción</td>
              <td>Fecha Aquisición</td>
              <td>Valor</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <?php $cmu=ciclo($c_muebles." where ide_per_fk='$_SESSION[usu]'");			
			while($dmu=mysql_fetch_array($cmu)){?>
           <tr>                        
              
              <td><input name="obj202<?php echo $dmu['cod_mue_pk'];?>" type="text" class="objtable" id="obj202<?php echo $dmu['cod_mue_pk'];?>" placeholder="DESCRIPCIÓN DE ADQUISICIÓN" title="Digite la descripción del mueble adquirido" value="<?php echo $dmu['des_mue'];?>"/></td>
              <td><input name="obj203<?php echo $dmu['cod_mue_pk'];?>" type="date" class="objtable" id="obj203<?php echo $dmu['cod_mue_pk'];?>" placeholder="FECHA DE ADQUISICIÓN" title="Digite la fecha en la cual adquirió el mueble. Formato aaaa-mm-dd" value="<?php echo $dmu['fec_mue'];?>"/></td>
              <td><input name="obj204<?php echo $dmu['cod_mue_pk'];?>" type="text" class="objtable" id="obj204<?php echo $dmu['cod_mue_pk'];?>" placeholder="VALOR MUEBLE" title="Digite el valor del mueble" onKeyUp="this.value = this.value.replace (/[^0-9]/,'');" value="<?php echo $dmu['val_mue'];?>"/></td>
              <td><input name="obj205<?php echo $dmu['cod_mue_pk'];?>" type="hidden" class="objtable" id="obj205<?php echo $dmu['cod_mue_pk'];?>" placeholder="OBSERVACIÓN" title="Digite si existe alguna observación del mueble adquirido"  value="<?php echo $dmu['obs_mue'];?>"/></td>
              <td><input name="eliminarm" type="button" class="beli" id="eliminarm" value="&Chi;" onClick="gana(<?php echo $dmu['cod_mue_pk'];?>,0,0,0,0,0,0,0,1,'eliminar','gana_formato_guardar.php','#muebles')" ><input name="modificarm" type="button" class="bact" id="modificarm"  value="&radic;" onClick="gana(<?php echo $dmu['cod_mue_pk'];?>,obj202<?php echo $dmu['cod_mue_pk'];?>.value,obj203<?php echo $dmu['cod_mue_pk'];?>.value,obj204<?php echo $dmu['cod_mue_pk'];?>.value,obj205<?php echo $dmu['cod_mue_pk'];?>.value,0,0,0,1,'actualizar','gana_formato_guardar.php','#muebles')"></td>
            </tr>
            <?php }?>
            </tbody>
         </table>
<?php }?>

<?php if($_POST['var9']==2 || $jobga=="cuentas"){?>
   	 <table width="95%" align="center" class="" style="margin-top:15px;">
            <tbody>
            <tr style="background:#0091d1; color:#fff;">
              <td colspan="6"><span class="titulo">Información de <?php echo $jobga; ?> registrada</span></td>
              </tr>
            <tr style="background:#0091d1; color:#fff;">             
              <td>Tipo de Cuenta</td>
              <td>Banco</td>
              <td>Saldo</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <?php $ccuen=ciclo($c_cuentas." where ide_per_fk='$_SESSION[usu]'");			
			while($dcue=mysql_fetch_array($ccuen)){?>
           <tr>                        
              
              <td><span class="objetos">
                <select class="objtable" id="obj302<?php echo $dcue['cod_cue_pk'];?>" name="obj302<?php echo $dcue['cod_cue'];?>" title="Seleccione tipo de cuenta"  >
                  <option value="">TIPO</option>
                  <?php $ctcue=ciclo($c_tipos_cuenta." order by nom_cue");
      				while($dtcue=mysql_fetch_array($ctcue)){?>
                  <option value="<?php echo $dtcue['cod_cue'];?>" <?php if($dtcue['cod_cue']==$dcue['des_cue']){?>selected="selected"<?php }?>><?php echo $dtcue['nom_cue'];?></option>
                  <?php ?>
                  <?php }?>
                </select>
              </span></td>
              <td><input name="obj303<?php echo $dcue['cod_cue_pk'];?>" type="text" class="objtable" id="obj303<?php echo $dcue['cod_cue_pk'];?>" placeholder="NOMBRE DEL BANCO" title="Digite el nombre del banco donde posee la cuenta"  value="<?php echo $dcue['ban_cue'];?>"/></td>
              <td><input name="obj304<?php echo $dcue['cod_cue_pk'];?>" type="text" class="objtable" id="obj304<?php echo $dcue['cod_cue_pk'];?>" placeholder="SALDO CUENTA" title="Digite el saldo del cuenta bancaria" onKeyUp="this.value = this.value.replace (/[^0-9]/,'');" value="<?php echo $dcue['val_cue'];?>"/></td>
              <td><input name="obj305<?php echo $dcue['cod_cue_pk'];?>" type="hidden" class="objtable" id="obj305<?php echo $dcue['cod_cue_pk'];?>" placeholder="OBSERVACIÓN" title="Digite si existe alguna observación del cuenta adquirida"  value="<?php echo $dcue['obs_cue'];?>"/></td>
              <td><input name="eliminarm" type="button" class="beli" id="eliminarm" onClick="gana(<?php echo $dcue['cod_cue_pk'];?>,0,0,0,0,0,0,0,2,'eliminar','gana_formato_guardar.php','#cuentas')" value="&Chi;"><input name="modificarc" type="button" class="bact" id="modificarc" value="&radic;" onClick="gana(<?php echo $dcue['cod_cue_pk'];?>,obj302<?php echo $dcue['cod_cue_pk'];?>.value,obj303<?php echo $dcue['cod_cue_pk'];?>.value,obj304<?php echo $dcue['cod_cue_pk'];?>.value,obj305<?php echo $dcue['cod_cue_pk'];?>.value,0,0,0,2,'actualizar','gana_formato_guardar.php','#cuentas')"></td>
            </tr>
            <?php }?>
            </tbody>
         </table>
<?php }?>

<?php if($_POST['var9']==3 || $jobga=="deudas"){?>
   	 <table width="95%" align="center" class="" style="margin-top:15px;">
            <tbody>
            <tr style="background:#0091d1; color:#fff;">
              <td colspan="6"><span class="titulo">Información de <?php echo $jobga; ?> registrada</span></td>
              </tr>
            <tr style="background:#0091d1; color:#fff;">
             
              <td>Descripción</td>
              <td>Tipo de Crédito/Deuda</td>
              <td>Valor</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <?php $cdeu=ciclo($c_deudas." where ide_per_fk='$_SESSION[usu]'");			
			while($ddeu=mysql_fetch_array($cdeu)){?>
           <tr>                        
              
              <td><span class="objetos">
                <select class="objtable" id="obj402<?php echo $ddeu['cod_deu_pk'];?>2" name="obj402<?php echo $ddeu['cod_deu_pk'];?>" title="Seleccione tipo de deuda"  >
                  <option value="">TIPO</option>
                  <?php $ctdeu=ciclo($c_tipos_deuda." order by nom_deu");
     			   while($dtdeu=mysql_fetch_array($ctdeu)){?>
                  <option value="<?php echo $dtdeu['cod_deu'];?>" <?php if($dtdeu['cod_deu']==$ddeu['des_deu']){?>selected="selected"<?php }?>><?php echo $dtdeu['nom_deu'];?></option>
                  <?php ?>
                  <?php }?>
                </select>
              </span></td>
              <td><input name="obj403<?php echo $ddeu['cod_deu_pk'];?>" type="text" class="objtable" id="obj403<?php echo $ddeu['cod_deu_pk'];?>" placeholder="FECHA DE ADQUISICIÓN" title="Digite la fecha en la cual adquirió el deuda"  value="<?php echo $ddeu['tip_deu'];?>"/></td>
              <td><input name="obj404<?php echo $ddeu['cod_deu_pk'];?>" type="text" class="objtable" id="obj404<?php echo $ddeu['cod_deu_pk'];?>" placeholder="VALOR DEUDA" title="Digite el valor del deuda" value="<?php echo $ddeu['val_deu'];?>"/></td>
              <td><input name="obj405<?php echo $ddeu['cod_deu_pk'];?>" type="hidden" class="objtable" id="obj405<?php echo $ddeu['cod_deu_pk'];?>" placeholder="OBSERVACIÓN" title="Digite si existe alguna observación del deuda adquirido"  value="<?php echo $ddeu['obs_deu'];?>"/></td>
              <td><input name="eliminard" type="button" class="beli" id="eliminarm" onClick="gana(<?php echo $ddeu['cod_deu_pk'];?>,0,0,0,0,0,0,0,3,'eliminar','gana_formato_guardar.php','#deudas')" value="&Chi;"><input name="modificarm" type="button" class="bact" id="modificard" value="&radic;" onClick="gana(<?php echo $ddeu['cod_deu_pk'];?>,obj402<?php echo $ddeu['cod_deu_pk'];?>.value,obj403<?php echo $ddeu['cod_deu_pk'];?>.value,obj404<?php echo $ddeu['cod_deu_pk'];?>.value,obj405<?php echo $ddeu['cod_deu_pk'];?>.value,0,0,0,3,'actualizar','gana_formato_guardar.php','#deudas')"></td>
            </tr>
            <?php }?>
            </tbody>
         </table>
<?php }?>


