
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="principal">
    <div id="inicio">
        <img src="img/gober-blanco.png" width="144px;" id="logogober"/><span align="right" ><a target="_black" href="http://gana.xn--nario-rta.gov.co/"><img id="logogana" src="img/gana-blanco.png" width="124px;"/></a></span>
    </div>
       
        <div class="subtitulo">Consulta la gestión de un Nuevo Gobierno en la Gobernación de Nariño</div>	
        <div class="buscar">
            <span id="huy">Estoy interesado en</span> 
            <input name="obj1" type="text" id="obj1" placeholder="Buscar..." onkeyup="gana(obj1.value,'encontrar.php','encontrar');" value="<?php if($_GET['acc']=='buscar'){ echo $_GET['tem']; }?>" />
            <input name="obj2" type="submit" id="ok" onclick="gana(obj1.value,'encontrar.php','encontrar');" value="&radic;"/>
        </div>	
  
	<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="encontrar">
    <?php if($_GET['acc']=='buscar' || $_GET['ide']<>"" || $_GET['id']<>""){
					if($_GET['acc']=='buscar'){ $donde="id='$_GET[id]'";}	
					if($_GET['ide']){ $donde="ide_per_fk='$_GET[ide]' AND mes_act='$_GET[m]'";}	
					if($_GET['id']){ $donde="id='$_GET[id]'";}
					
		?>
        
	<?php 	
		  include('inicio_ubicar.php');
	}?>
    </div>	

	
</div>   


