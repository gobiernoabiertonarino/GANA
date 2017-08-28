<?php require 'info.php'; $fecha=date('Y-m-d'); $hora=date('H:i:s'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Presupuesto y contratación abierta de un Nuevo Gobierno | Pilar de Gobierno Abierto">
     <meta name="author" content="Gobernación de Nariño 2016 - 2019 | GANA" />
     <meta name="Development" content="Jonnathan Bucheli Galindo | joobga@gmail.com" />
     <meta name="copyright" content="OpenSource" />
    <link rel="icon" href="iconog-32x32.png" sizes="32x32" />
    <link rel="icon" href="iconog-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="iconog-180x180.png" />
    <title>GANA control</title>    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	

    <!-- Custom Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
   
    <!-- Advanced CSS jobga -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/script.js"></script>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script> 
    <script src="http://www.d3plus.org/js/d3.js"></script>
    <script src="http://www.d3plus.org/js/d3plus.js"></script>
    <script>
		/*$(".btnhac").click(function(){
			$(this).removeClass('btn-info');
			$(this).toggleClass('btn-default');   
		});*/
		$('button').click(function(){
		  $(this).toggleClass('btn-default');
		});
		$('.btndac').click(function(){
		  $(this).toggleClass('btn-default');
		});
	</script>
    <style>
        /*body{  background:url(img/background.png);  background-attachment: fixed; background-position: top; background-repeat: no-repeat;background-size:contain; */
        }
        
        .detalleHAC{ height:50vh; overflow:auto; }  
		section{ padding:25px;}
		#barra_financiera_comprometido{ height:50vh;}
		#arbol_financiera{ height:60vh;}
		#arbolDAC1{ height:60vh;}
		#vizz{height:100vh;}
		#key{ display:none;}
        @media (max-width: 768px) {
            #inicioweb { display:none;}
            body{  background:none; }
            #barra_financiera_comprometido{ height:100vh;}
			#arbol_financiera{ height:80vh;}
			#arbolDAC1{ height:80vh;}
			section{ padding:0px;}
			#vizz{height:50vh;}
             }
       .input-sm{ height:5%;}
         
    </style> 
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top wp1" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" style="color:#fff; background:#999" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="glyphicon glyphicon-menu-hamburger" ></i>
                </button>
                <a class="navbar-brand" href="http://ganacontrol.xn--nario-rta.gov.co/" style="text-transform: lowercase">
                    <img style="width:55%;" src="img/Logo.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li class="page-scroll">
                        <a href="http://gana.xn--nario-rta.gov.co/">GANA</a>
                    </li>                   
                    <li class="page-scroll">
                        <a href="#about">Presupuesto</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#features">Contratación</a>
                    </li>
                    <li class="page-scroll">
                    	&nbsp;
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   
  
<section id="inicioweb" style=" margin:200px 50px 50px 50px; background: none;  ">
    <div class="container-fluid">  
        <h1 class="text-center" style="font-size:3.2em">Presupuesto y contratación<span class="text-color font-light" style="font-size:1.25em"> abierta</span></h1> 
       
    </div>                         
</section>
<div id="searchmain"></div>
    <!-- About Section -->
<section id="about"  style="padding:95px; background: none;">
   <!-- <div class="more page-scroll" id="more">
        <a href="#about"><i class="fa fa-angle-down">&darr;</i></a>
    </div>  --> 
</section>
<section id="about"  style=" background: linear-gradient(to top, #f9f9f9 0%, #f9f9f9 70%, rgba(255,255,255,.0) 100%);">    
    <div class="container-fluit ">
        <h1 class="section-title">PRESUPUESTO  <p>Recursos estimados asignados a las diferentes dependencias de la entidad</p></h1>
                  
    </div>
                <script>
                 $().ready(function() {                
                        $('#obj0').change(function() { if($(this).val()=='ingresos'){ 
                             $('#objG1').prop('disabled', true); //$('#btnDetalle').attr("disabled", "disabled");
							 $('#btnDetalle').attr({onclick: 'inicio(1,obj2.value,1,1,"#Gdetalle","opendata/HAC/ingresos_inicio.php");'});
                        }}); 
                        $('#obj0').change(function() { if($(this).val()=='gastos'){ 
                             $('#objG1').prop('disabled', false); //$('#btnDetalle').attr("disabled", false);							 
							 $('#btnDetalle').attr({onclick: 'inicio(1,obj2.value,1,1,"#Gdetalle","opendata/HAC/inicio.php");'});
                        }});
                    });
                </script>    
    <div class="container">     
            <div class="row wp1 ">
                <div class="col-sm-3 delay-01s">
                    <select class="form-control input-tamano" id="obj0" name="obj0" onChange="inicio(objG1.value,obj2.value,obj3.value,obj0.value,'#GFinanciera','opendata/HAC/index.php');">                       
                        <option value="gastos" selected>GASTOS</option>                         
                        <option value="ingresos" >INGRESOS</option>                                      
                    </select> 
                    <input type="hidden" id="obj3" name="obj3" value=""/>
                  </div>
                 
               <!-- <div class="col-sm-2 delay-01s">
                    <select class="form-control input-tamano" id="obj3" name="obj3" onChange="inicio(objG1.value,obj2.value,obj3.value,obj0.value,'#GFinanciera','opendata/HAC/index.php');">                       
                        <option value="apro_vigente" selected>ESTIMADO ACTUAL</option>
                        <option value="apro_inicial" >SETIMADO INICIALES</option>                                      
                    </select> 
                 </div> -->   
                <div class="col-sm-3 delay-02s">
                    <select class="form-control input-tamano" id="objG1" name="objG1" onChange="inicio(objG1.value,obj2.value,obj3.value,obj0.value,'#GFinanciera','opendata/HAC/index.php');"> 
                        <option value="cod_fue">FUENTE FINANCIACIÓN</option>
                        <option value="cod_hijo" selected>FINALIDAD</option>
                    </select> 
                </div>
                <div class="col-sm-3 delay-03s">
                    <select class="form-control input-tamano" id="obj2" name="obj2" onChange="inicio(objG1.value,obj2.value,obj3.value,obj0.value,'#GFinanciera','opendata/HAC/index.php');">
                        <option value="2017" selected>2017</option>    
                        <option value="2016" >2016</option>        
                    </select> 
                </div>      
                <div class="col-sm-3 delay-4s">
                    <div class="row wp1">
                    <div class="col-sm-6 ">
                    <input type="button" class="form-control input-tamano btn-danger" value="Visualizar" onClick="inicio(objG1.value,obj2.value,obj3.value,obj0.value,'#GFinanciera','opendata/HAC/index.php');"/> 
                    </div>
                    <div class="col-sm-6 text-center page-scroll">
                    <a id="btnDetalle" href="#GANA" class="form-control input-tamano btn-primary " onClick="inicio(1,obj2.value,1,1,'#Gdetalle','opendata/HAC/inicio.php');">Detalle</a>
                    </div>
                    </div>          
                </div>
            </div>
        
    </div>

    <div class="" id="GFinanciera" style="margin-top:0px;">
        <?php include 'opendata/HAC/index.php';?>
    </div>
    <!-- /.container --> 
</section><!-- /#about --> 
<script>
	
	$().ready(function() {                
		$('#objDAC0').change(function() { 
			if(($('#objDAC1').val()=='1' || $('#objDAC1').val()=='2') && $('#objDAC0').val()==1){ 
			 $('#btnvisDAC').attr({onclick: "inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/index.php');"});
			 inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/index.php');		 
			}
			if(($('#objDAC1').val()=='1' || $('#objDAC1').val()=='2') && $('#objDAC0').val()==2){ 
			 $('#btnvisDAC').attr({onclick: "inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/terceros_index.php');"});
			 inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/terceros_index.php');
			}
		});
		
		$('#objDAC1').change(function() { 
			if(($('#objDAC1').val()=='1' || $('#objDAC1').val()=='2') && $('#objDAC0').val()==1){ 
			 $('#btnvisDAC').attr({onclick: "inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/index.php');"});
			 inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/index.php');		 
			}
			if(($('#objDAC1').val()=='1' || $('#objDAC1').val()=='2') && $('#objDAC0').val()==2){ 
			 $('#btnvisDAC').attr({onclick: "inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/terceros_index.php');"});
			 inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/terceros_index.php');
			}
		}); 
		
		$('#objDAC2').change(function() { 
			if(($('#objDAC1').val()=='1' || $('#objDAC1').val()=='2') && $('#objDAC0').val()==1){ 
			 $('#btnvisDAC').attr({onclick: "inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/index.php');"});
			 inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/index.php');		 
			}
			if(($('#objDAC1').val()=='1' || $('#objDAC1').val()=='2') && $('#objDAC0').val()==2){ 
			 $('#btnvisDAC').attr({onclick: "inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/terceros_index.php');"});
			 inicio(objDAC1.value,objDAC2.value,objDAC0.value,'DACvisual','#DACvisualizar','opendata/DAC/terceros_index.php');
			}
		}); 
		
	});
</script>
<!-- Reviews Section -->
<section id="features" style="background: linear-gradient(to top, rgba(255,255,255,.0) 0%, #f0f0f0 20%, #f0f0f0 100%); " >
    <div class="container"> 
        <h1 class="section-title">CONTRATACIÓN<p>Procesos contractuales de diferentes dependencias de la Gobernación de Nariño</p></h1>
            <div class="row wp3">
            	<div class="col-sm-3 delay-03s">
                    <select class="form-control input-tamano" id="objDAC0" name="objDAC0" >
                        <option value="1">DEPENDENCIAS</option>
                        <option value="2">CONTRATISTA</option>
                    </select> 
                </div>
                <div class="col-sm-3 delay-03s">
                    <select class="form-control input-tamano" id="objDAC1" name="objDAC1" >
                        <option value="2">INVERSIÓN EN CONTRATACIÓN</option>
                        <option value="1">NÚMERO DE CONTRATOS</option>
                    </select> 
                </div>
                <div class="col-sm-3 delay-04s">
                    <select class="form-control input-tamano" id="objDAC2" name="objDAC2" >
                        <option value="2016" >2016</option>
                        <option value="2017" selected>2017</option>        
                    </select> 
                </div> 
                <div class="col-sm-3 delay-4s">
                    <div class="row wp1">
                        <div class="col-sm-6 page-scroll text-center">
                            <a id="btnvisDAC" href="#DACvisualizar" class="form-control input-tamano btn-danger"  onClick="inicio(objDAC1.value,objDAC2.value,1,'DACvisual','#DACvisualizar','opendata/DAC/index.php');">Visualizar</a> 
                        </div>
                        <div class="col-sm-6 text-center page-scroll">
                            <a id="btnDetDAC" href="#GANADAC" class="form-control input-tamano btn-primary " onClick="inicio(objDAC1.value,objDAC2.value,1,'preinicioDAC','#preinicioDAC','opendata/DAC/preinicio.php');">Detalle</a>
                        </div>
                    </div>          
                </div>
            </div>
        
        <!-- /.col-lg-12 --> 
    </div><!-- /.row --> 

        <div id="DACvisualizar" class="container-fluid " >
            <?php include 'opendata/DAC/index.php';?>
        </div>    
        
</section>        
   <!-- /.container-contratacion --> 
 

            
<!--<section style=" background: linear-gradient(to top, #f9f9f9, rgba(255,255,255,.0)); color:#111; padding:45px;">  -->
<section style=" background: #f5f5f5; color:#111; padding:45px;">    
    <div class="container-fluit" >
        <div class="row">
            <div class="col-lg-3 text-center"></div> 
            <div class="col-lg-2 text-center"><img src="http://servicios.xn--nario-rta.gov.co/Dependencias/TicInnovacionGobiernoAbierto/img/corazonmundo.png" style="width:50%"/></div>
            <div class="col-lg-2 text-center"><img src="http://narino.gov.co/gana/wp-content/uploads/2016/01/gobiernoa.png" style="width:50%"/></div>
            <div class="col-lg-2 text-center">
              <h3>gana@narino.gov.co</h3>
              <h5>Tel: 57 2 7235004 ext 211</h5>
              <h5>Cra 19 No.23-18 Pasto-Nariño- Colombia</h5>
            </div> 
            <div class="col-lg-3 text-center"></div>
      </div><!-- /.row -->         
    </div><!-- /.container -->        
</section><!-- /#contact -->
<div class="container-fluit text-center" style="background:#fff">
	<a  href="https://twitter.com/GANANARINO">
    	<img src="img/twittericon.png" width="50px;"/>
  	</a>
    <a  href="https://www.facebook.com/GobNarino">
    	<img src="img/faceicon.png" width="50px;"/>
  	</a>
    <a  href="https://www.youtube.com/channel/UC14kxY6cy6EXdxRvHWjiUAg">
    	<img src="img/youicon.png" width="50px;"/>
  	</a>
</div>    
     
    <!-- Core JavaScript Files -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- JavaScript -->
    <script src="js/lib/jquery.appear.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/lib/video/jquery.mb.YTPlayer.js"></script>      
    <script src="js/lib/flipclock/flipclock.js"></script>
    <script src="js/lib/jquery.animateNumber.js"></script>
    <script src="js/lib/waypoints.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>
    
 
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->

<script>
$(window).resize(function(){ 
    //inicio(objG1.value,obj2.value,obj3.value,'Ganio','#GFinanciera','opendata/HAC/index.php');
    //location.reload(); 

});

$('.d3plus_rect rect').click(function() {   
        var oBJ=$(this).parent().attr('id');
        //$("#DAcontratacion").html(oBJ);
        inicio(oBJ,oBJ,oBJ,'Treemap','#DAcontratacion','opendata/DAC/inicio.php');
}); 
 
</script>
</body>
<script>
var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
if(es_firefox){
	location.href="../inicios/";
}

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38413002-5', 'auto');
  ga('send', 'pageview');

</script>
</html>
