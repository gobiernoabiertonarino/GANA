<?php 
function fecha_es($fecha){
    setlocale(LC_ALL, 'es_ES.UTF-8',"es_ES","esp");
	return ucfirst(strftime("%A",strtotime($fecha)));
}

function cambiarmes($mes){
if ($mes=="01") $mes="Enero";
if ($mes=="02") $mes="Febrero";
if ($mes=="03") $mes="Marzo";
if ($mes=="04") $mes="Abril";
if ($mes=="05") $mes="Mayo";
if ($mes=="06") $mes="Junio";
if ($mes=="07") $mes="Julio";
if ($mes=="08") $mes="Agosto";
if ($mes=="09") $mes="Septiembre";
if ($mes=="10") $mes="Octubre";
if ($mes=="11") $mes="Noviembre";
if ($mes=="12") $mes="Diciembre";
return $mes;
}

function cambiardia($dia){
if ($dia=="Monday") $dia="Lunes";
if ($dia=="Tuesday") $dia="Martes";
if ($dia=="Wednesday") $dia="Mi&eacute;rcoles";
if ($dia=="Thursday") $dia="Jueves";
if ($dia=="Friday") $dia="Viernes";
if ($dia=="Saturday") $dia="S&aacute;bado";
if ($dia=="Sunday") $dia="Domingo";
return $dia;
}			
	$con=ciclo($informes." WHERE tit_act<>1 AND $donde");
	 $is=1;
	//echo $conmax; 
	if($_GET['id']){require("bitly.php");}
	 while($dat=mysql_fetch_array($con)){ ?>
     
     <div class="datos">
        <div>
            <div class="tit" style="background:#f9f9f9; color:#333; padding:15px; width:78%; "><strong><?php echo ($dat['tit_act']);?></strong>
            		<div style='font-size:0.5em; color:#888'>
					<?php $jdia=cambiardia(fecha_es($dat['fec_sys']));	 
                          echo $jdia.", ".substr($dat['fec_sys'],8,2)." ".cambiarmes(substr($dat['fec_sys'],5,2))." ".substr($dat['fec_sys'],0,4)?>
                          <?php echo $dat['hor_sys'];
						  include('inicio_detalles.php');?>
                          <span >
                            <span title="Victoria Temprana"><?php echo $victoria;?></span>
                            <span title="100 Días"><?php echo $dias100;?></span>
                            <span title="Rendición de cuentas"><?php echo $rendicion;?></span>
                        </span>
                      <span style="margin-left:10px;"><?php echo $dat['gus_act']; ?><img src="img/mano-arriba-n.png" style="width:12px; margin-right:10x;" /></span>
                      <span style="margin-left:5px;"><?php echo $dat['nogus_act']; ?><img src="img/mano-abajo-n.png" style="width:12px; " /></span>
                      <span style="margin-left:5px;">
                      <?php $dcom=condicion($comentarios_num." where id_inf_fk=$dat[id]");?>
                      <?php echo $dcom['num']; ?><img src="img/comentarios-gana-n" style="width:12px; margin-right:10x;" /></span>
                    </div>
            </div>
            
            <div class="megusta" id="megusta<?php echo $is; ?>" style="font-size:45px; margin-left:15px;"><?php echo $dat['gus_act']-$dat['nogus_act']; ?>
            	<a onClick="ganas(<?php echo $dat['gus_act']+1; ?>,<?php echo $dat['id']; ?>,'masact','inicio_guardar.php','megusta<?php echo $is; ?>')" >
                	<img src="ACCESO/img/mano-arriba.png" style="width:40px;margin-left:10px;" />
                </a> 
                <a onClick="ganas(<?php echo $dat['nogus_act']+1; ?>,<?php echo $dat['id']; ?>,'menact','inicio_guardar.php','megusta<?php echo $is; ?>')">   
                	<img src="ACCESO/img/mano-abajo.png" style="width:40px; " />
                </a>
            </div> 
            <?php if($dat['pil_act']=='GOBIERNO ABIERTO'){$hashtag='GobiernoAbierto';}
                  elseif($dat['pil_act']=='INNOVACIÓN SOCIAL'){ $hashtag='InnovaciónSocial';}
                  elseif($dat['pil_act']=='ECONOMÍA COLABORATIVA'){$hashtag='EconomíaColaborativa';}
				  elseif($dat['pil_act']=='NINGUNO'){$hashtag='NuevoGobierno';}
				  $texttwitter=substr($dat['tit_act'],0,strrpos(substr($dat['tit_act'],0,90)," "));				  
						if($_GET['id']){
						$bitly = new Bitly("jobga", "R_a07d67a5027b4e7abdc608834a9fa7de");
						$urlmin = $bitly->shorten("index.php?id=".$dat['id']."");
						//echo $urlmin;
						}
				  ?>
                
                <div style=" font-size:0.7em;" align="right">Actividad del mes de <?php echo $dat['mes_act'];?>
                <?php if($_GET['id']){?>
                    <a target="_black" style=" background:#3FCDFD url(http://www.clinicaboccio.com/wp-content/blogs.dir/13/files/twitter-logope.png) no-repeat;  padding:4px 4px 4px 25px; text-decoration:none; color:#fff; font-size:12px; font-family:Helvetica, Arial, sans-serif; "  href="https://twitter.com/intent/tweet?screen_name=gobnarino&text=<?php echo $texttwitter." ".$urlmin;?>&button_hashtag=<?php echo $hashtag;?>" class="twitter-share-button" data-url="<?php echo $urlmin;?>" data-via="gobnarino">Tweet esta actividad</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <?php }?>
        		</div>       
        
        <div class="desc" style="background:#f9f9f9; color:#333; padding:15px; text-align:justify;">
			<?php /*echo str_replace(". ",".<br><br>",$dat['des_act']);*/ 
            		echo nl2br($dat['des_act']);  ?>
        </div>
        <!---------------------------------------------REDES------------------------------------------------------->
        
        <div align="right">
        	
        
        	<a style="background:#4c69ba;" class="fb-like" data-href="<?php echo "index.php?acc=buscar&id=".$dat['id'];?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></a>
        </div>
        
        <!---------------------------------------------DOCUMENTOS-------------------------------------------------->
		<?php if($dat['doc_act']){ ?> 
        <div class="arch">
            <a href="anexos/<?php echo $dat['id']."/".$dat['doc_act']; ?>">
                <img src="nude.png" style="width:50px;"/>
                <?php echo $dat['doc_act']; ?>
            </a>
        </div>
		<?php } ?>
        	
            <div class="inst">
                <div><?php if($dat['val_act']<>0){echo "Presupuesto designado para esta actividad: ".$dat['val_act'];}?></div>
                <div><?php if($dat['pil_act']<>"NINGUNO"){echo $dat['pil_act'];}?></div>                	        
            </div>
    </div>
	<?php $ide=$dat['ide_per_fk']; $act=$dat['id'];  $is++;
	}//while
	?>	

         <div class="link-comentar" align="right"><input type="button" value="Dejanos tu comentario" onclick="visualizar();"  /></div>
         <div align="right">
             <div class="comentar" id="comentar"  >
                <input name="act" type="hidden" id="act" value="<?php  echo $act;?>" />
                <textarea name="tex" rows="5" id="tex"  placeholder="Deja aquí tu mensaje" ></textarea>
                <input name="jobga" type="button" id="jobga" value="&radic;" onclick="ganas(tex.value,act.value,'comentario','inicio_guardar.php','comentarios')"/>
             </div>
         </div>
         <div id="comentarios">
			 <?php 
			 include('gana.php'); 
			 $jbucheli=$act; $orden="order by gus_act desc";
             include('inicio_comentarios.php'); ?>
         </div>
   </div>       	
