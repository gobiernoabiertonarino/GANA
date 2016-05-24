<?php require 'conexion.php'; require 'consultas.php';

setlocale(LC_TIME, 'es_CO');
mysql_query ("SET NAMES 'utf8'");
	//echo $_GET['obj1']; 
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

	$conmax=$informes."  WHERE des_act<>1 AND tit_act<>1 AND (tit_act like '%$_GET[obj1]%' OR des_act like '%$_GET[obj1]%') order by fec_sys desc";	
	$coninf=ciclo($conmax);
	 while($dat=mysql_fetch_array($coninf)){ include('inicio_detalles.php'); ?>
     <div class="datos">
        <div class="tit"><a href="index.php?acc=buscar&tem=<?php echo $_GET['obj1']?>&id=<?php echo $dat['id'];?>"><?php echo strtoupper($dat['tit_act']);?> </a>
			
        </div>
        <div style='font-size:0.7em; color:#f5f5f5;'>
        <?php $jdia=cambiardia(fecha_es($dat['fec_sys']));	 
	 		  echo $jdia.", ".substr($dat['fec_sys'],8,2)." ".cambiarmes(substr($dat['fec_sys'],5,2))." ".substr($dat['fec_sys'],0,4)?>
              <?php echo $dat['hor_sys'];?>
              <span >
            	<span title="Victoria Temprana"><?php echo $victoria;?></span>
                <span title="100 Días"><?php echo $dias100;?></span>
                <span title="Rendición de cuentas"><?php echo $rendicion;?></span>
            </span>
          
          <span style="margin-left:10px;"><?php echo $dat['gus_act']; ?><img src="img/mano-arriba.png" style="width:15px; margin-right:10x;" /></span>
          <span style="margin-left:5px;"><?php echo $dat['nogus_act']; ?><img src="img/mano-abajo.png" style="width:15px; " /></span>
          <span style="margin-left:5px;">
          <?php $dcom=condicion($comentarios_num." where id_inf_fk=$dat[id]"); ?>
          <?php echo $dcom['num']; ?><img src="img/comentarios-gana" style="width:15px; margin-right:10x;" /></span>
          <span style="margin-left:10px;"> Actividad de <?php echo $dat['mes_act']; ?></span>  
        </div>
        
        
       <div class="desc" style="font-family: 'Poiret One', cursive;"><?php //echo $dat['des_act']; 
			$TextoResumen = substr($dat['des_act'],0,strrpos(substr($dat['des_act'],0,254)," "));
			echo $TextoResumen."...";?>
        </div>
    </div>
<?php } 
$conno=mysql_query($conmax);
if($datno=mysql_fetch_array($conno)){}else{?>
<div>
  <p>No se han encontrado resultados para tu búsqueda.  </p>
  <p>Sugerencias:</p>
  <ul>
    <li>Asegúrate que las palabras estén escritas correctamente.</li>   
    <li>Prueba palabras más generales.</li>
  </ul>
</div>
	<?php }?>
