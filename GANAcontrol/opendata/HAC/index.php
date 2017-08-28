<!-- Container (tree_map) -->

<div class="container-fluid">
<?php $tipo="gastos"; $anio=2017; 
if($_POST['obj1']){require '../../info.php';  $tipo=$_POST['acc']; }
if($_POST['obj2'] ){	$anio=$_POST['obj2']; }?>

<?php if($tipo=='gastos'){?>

	<?php  
	if($_POST['obj3'] ){	
			$Gfinanciera=$_POST['obj3'];
			  if($_POST['obj3']=='apro_vigente') $tituloPRE="RECURSOS TOTALES"; 
			  if($_POST['obj3']=='apro_inicial') $tituloPRE="APROPIACIÓN INICIAL DE RECURSOS";
			  if($_POST['obj3']=='comprometido') $tituloPRE="RECURSOS COMPRMETIDOS"; 
			}		
		if(!$_POST['obj1']){$nombre='nom_padre_4 objeto,'; }
			elseif($_POST['obj1']=='cod_padre_3'){ $nombre='nom_padre_3 objeto, ';}
			elseif($_POST['obj1']=='cod_fue'){	  $nombre='nom_padre_2 objeto,'; 	}
			elseif($_POST['obj1']=='cod_hijo'){	  $nombre='nom_padre_4 objeto,'; 	}
		?> 
		
	<style>#arbol_financiera .d3plus_rect rect{ cursor:pointer}</style>
    <?php $con_total=mysql_query("SELECT sum($Gfinanciera) todo, sum(comprometido) comprometo, sum(apro_vigente) vigente FROM tabla WHERE anio='$anio' ", $congana); if($dat_total=mysql_fetch_array($con_total)){   } ?> 
    <h3 class=" text-center">DISTRIBUCIÓN DEL PRESUPUESTO <?php echo $anio;?></h3>
    
        <div class=" text-center">
        	<span style="font-size:18px;"><?php echo $tituloPRE;?> $<?php echo number_format($dat_total[todo],2,",",".");?> </span> | 
      
        	<span style="font-size:20px;"><?php if($tituloPRE=="RECURSOS TOTALES"){ echo " EJECUTADO ".number_format(abs($dat_total['comprometo'])/abs($dat_total['vigente'])*100, 2, ',', '.')."%"; }?> </span>
        </div>         
          
    <div id="arbol_financiera" style=" ">&nbsp;</div>
        <script>			
       
              var visualization = d3plus.viz()
              .container("#arbol_financiera")
              .data("gastos.json")
              .type("tree_map") 
              .depth(2)
              .tooltip(["Nombre", "Valor", "Dependencia"]) 
              .id(["Dependencia","Nombre"])
              .legend({"size": 30})
              .size("Valor")   
              .labels({"align": "left", "valign": "top"})
              .draw() 
        </script> 
</div>

<div id="GANA" style="height:35px;"></div>
<style>#Gdetalle #key{ display:none;}</style>
    
    <div class="container-fluid" id="Gdetalle" >                 
        <div class="row">
        	<div class="col-sm-3 delay-03s">
                <h4 class="sub-title">EJECUCIÓN DEL PRESUPUESTO </h4> <br/>
                <p>Procentaje de ejecución presupuestal realizada por cada dependencia</p>
                
                <div class="text-center page-scroll" style="margin-top:20px;">
                    <a href="#Gdetalle" class="form-control btn-primary " onClick="inicio(1,<?php echo $anio;?>,1,'Gdetalle','#Gdetalle','opendata/HAC/inicio.php');">Detalle Presupuesto</a>
                </div>
        	</div>
          
           <div class="col-sm-9 delay-03s">
                <div id="barra_financiera_comprometido" style=" "  ></div>
                    <script>
					
							  var visualization = d3plus.viz()
							  .container("#barra_financiera_comprometido")
							  .data("gastos.json")
							  .type("bar") 
							  .id("Dependencia")
							  .y({value: "Valor", grid: true })
							  .x({value: "Dependencia", grid: false })
							  .axes({background: {color: "none"}, grid: false})
							  .tooltip(["Asignado", "Valor", "Anio"])
							  .draw() 		
					
                    </script>
           	</div>
		</div> 
	    <div class="row ">
			 <?php //include 'preindex.php';?>
	    </div>   
    </div>   
<?php }/*FIN GASTOS*/ ?>


<!-------------------------------------------------------INGRESOS-------------------------------------------------------->

<div class="container-fluid">
	<?php if($tipo=='ingresos'){?>
    <?php 
			if($_POST['obj2'] ){	$anio=$_POST['obj2']; }
			if($_POST['obj3'] ){	
				$GIngresos=$_POST['obj3'];
				  if($_POST['obj3']=='apro_vigente') $tituloPRE="ESTIMADOS"; 
				  if($_POST['obj3']=='apro_inicial') $tituloPRE="INICIALES";      
				}
			?> 
	<style>#arbol_financiera .d3plus_rect rect{ cursor:pointer}</style>
    <?php $con_total=mysql_query("SELECT sum($GIngresos) todo, sum(recaudo) recaudos, sum(apro_vigente) vigente FROM tablai WHERE anio='$anio' ", $congana); 
		  if($dat_total=mysql_fetch_array($con_total)){   } ?> 
	<h3 class="text-center">INGRESOS DEL PRESUPUESTO</h3>
   
        <div class="text-center" >
        	<span style="font-size:18px;"><?php echo $tituloPRE;?> $<?php echo number_format($dat_total[todo],2,",",".");?></span>
       | 
        	<span style="font-size:20px;"><?php if($tituloPRE=="ESTIMADOS"){ echo " RECAUDO ".number_format(($dat_total['recaudos']/$dat_total['vigente'])*100, 2, ',', '.')."%"; }?> </span>
        </div>         
               
			<div id="arbol_financiera_ingresos" style=" height:50vh;"  ></div>
				<script>	
				 
					  var visualization = d3plus.viz()
					  .container("#arbol_financiera_ingresos")
					  .data("ingreso.json")
					  .type("tree_map")
					  .tooltip(["Nombre", "Valor", "Dependencia"]) 
					  .id(["Dependencia","Nombre"])
					  .legend({"size": 30})
					  .size("Valor")   
					  .labels({"align": "left", "valign": "top"})
					  .font({ "family": "'Open Sans', Helvetica, Arial, sans-serif" })
					  .draw() 
				 
				</script>
	
<div id="GANA" style="height:35px;"></div>

<div class="container-fluid" id="Gdetalle" >                 
    <div class="row">
        <div class="col-sm-3 delay-03s">
            <h4 class="sub-title">RECAUDOS DEL PRESUPUESTO </h4> <br/>
            <p>Recaudo fianciero realizado por la Gobernación de Nariño</p>
            
            <div class="text-center page-scroll" style="margin-top:20px;">
                <a href="#Gdetalle" class="form-control btn-primary " onClick="inicio(1,<?php echo $anio;?>,1,'Gdetalle','#Gdetalle','opendata/HAC/ingresos_inicio.php');">Detalle Presupuesto</a>
            </div>
        </div>
          
       <div class="col-sm-9 delay-03s">
      
            <div id="barra_financiera_comprometido" style=" height:50vh;"  ></div>
                <script>
                
						
							  var visualization = d3plus.viz()
							  .container("#barra_financiera_comprometido")
							  .data("ingreso.json")
							  .type("bar") 
							  .id(["Valor"])
							  .y({value: "Valor", grid: true })
							  .x({value: "Detalle", grid: false })
							  .tooltip(["Asignado","Anio"])
							  .tooltip({"size": false, "share": false, "children": 0})
							  .draw() 		
						
                    </script>
         </div>
	</div> 
	    <div class="row ">
			 <?php //include 'preindex.php';?>
	    </div>   
    </div>   	   
</div>
<?php }/*FIN INGRESOS*/ ?>

