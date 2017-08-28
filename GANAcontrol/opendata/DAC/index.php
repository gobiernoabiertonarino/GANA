
<h3 class="text-center">PROCESOS CONTRACTUALES <?php echo $_POST['obj2'];?>    </h3>    
        <div class="text-center">
        	<span style="font-size:18px;">VALOR TOTAL $<?php echo number_format($dat_total[todo],2,",",".");?> | EN <?php echo $dat_contar[todos]; ?> CONTRATOS</span>
        </div>         
  <br>
    
    <div id="arbolDAC1" style=" "  ></div>
    <script>
	  	var visualization = d3plus.viz()
		.container("#arbolDAC1")
		.data("dac.json")
		.type("tree_map")
		.id(["Dependencia","Nombre"])
		.size("Valor")   
		.labels({"align": "left", "valign": "top"})
		.tooltip(["Inversion","Anio"]) 
		.tooltip({"size": false, "share": false, "children": 0})
		.draw()
    </script>
<div id="GANADAC" style="height:35px;"></div>
<div id="preinicioDAC" >
         
        <div class="row">
        	<div class="col-sm-3 delay-03s">
                <h4 class="sub-title">PROCESOS CONTRACTUALES</h4> <br/>
                <p>Descripción de la contración pública realizada por cada dependencia</p>
                
                <div class="text-center page-scroll" style="margin-top:20px;">
                    <a href="#preinicioDAC" class="form-control input-tamano btn-primary " onClick="inicio(objDAC1.value,objDAC2.value,1,'preinicioDAC','#preinicioDAC','opendata/DAC/preinicio.php');">Detalle</a>
                </div>
        	</div>
          
           <div class="col-sm-9 delay-03s">
                <div id="barra_detalle_dac" style=" height:60vh;"  ></div>
                    <script>                     
						  var visualization = d3plus.viz()
						  .container("#barra_detalle_dac")
						  .data("dacbar.json")
						  .type("bar") 
						  .id("Dependencia")                      
						  .y({value: "Valor", grid: true })
						  .x({value: "Dependencia", grid: false })
						  .tooltip({"size": false, "share": false, "children": 0}) 
						  .tooltip(["Anio","Asignado","Valor"]) 
						  .draw()
                    </script>
           </div>
	</div> 
    <div class="row ">
		 <?php include 'preinicio.php';?>
    </div> 

       
</div>

    
