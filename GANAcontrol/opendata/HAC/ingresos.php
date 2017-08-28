<!-- Container (tree_map) -->
<div class="container-fluid">
<?php 
if($_POST['obj3']){require '../../info.php';  ?><script> navigator.vibrate(500); </script><?php  }
if($_POST['obj2'] ){	$anio=$_POST['obj2']; }
if($_POST['obj3'] ){	
	$GIngresos=$_POST['obj3'];
	  if($_POST['obj3']=='apro_vigente') $tituloPRE="Ingresos Totales"; 
      if($_POST['obj3']=='apro_inicial') $tituloPRE="Ingresos Iniciales";
      
    }

?> 

<style>#arbol_financiera .d3plus_rect rect{ cursor:pointer}</style>
<?php $con_total=mysql_query("SELECT sum($GIngresos) todo, sum(apro_inicial) comprometo, sum(apro_vigente) vigente FROM tablai WHERE anio='$anio' ", $congana); if($dat_total=mysql_fetch_array($con_total)){   } ?> 

<div class="row">
      <div class="col-sm-12 text-center">
      		<h3  class="sub-title"><?php echo $tituloPRE;?> $<?php echo number_format($dat_total[todo],2,",",".");?> <?php if($tituloPRE=="Recursos Totales"){ echo "Ejecutado ".number_format((abs($dat_total['vigente'])*100)/abs($dat_total['comprometo']), 2, ',', '.')."%"; }?> </h2> </div>   
      
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
      .draw() 
     
    </script>


</div>

