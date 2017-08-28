<?php $conmen=mysql_query("SELECT * FROM tablai WHERE anio='$anio' AND cod_dep<0 GROUP BY cod_dep", $congana);				  		
      while($datmen=mysql_fetch_array($conmen)){?>

<div class="col-sm-4" id="otrosfinancieros">
  <h3><?php echo $datmen['nom_dep'];?></h3>
  <p>Asignación de recursos</p> 
  <style>
  #barra_<?php echo abs($datmen['cod_dep']);?> #d3plus_graph_yticks{  width: 1px; }
  #about h3{ margin-bottom: 0px; }
  </style> 		

  	<div id="barra_<?php echo abs($datmen['cod_dep']);?>" style=" height:25vh;"  ></div>
		<script>
		
          var visualization = d3plus.viz()
          .container("#barra_<?php echo abs($datmen['cod_dep']);?>")
          .data("ingreso.json")
          .type("bar") 
          .id("Proyecto")
          .text("Proyecto")      
          .x({
             value: "Valor"
           })           
		   .y({
             value: "Dep"
           })          
           .y({"scale": "discrete"})
          .draw() 		
		
        </script>
  </div>
 <?php }	  ?>   


