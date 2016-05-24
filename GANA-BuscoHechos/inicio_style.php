<style>
body{ background:#299da8; margin:0px auto; padding:0px inherit; font-family: 'Poiret One', cursive; font-size:20px; color:#fff;}
input{box-sizing: border-box; background-clip: padding-box; appearance: textfield; outline:0px; background:#299da8; color:#fff; }
a{ font-style:none; color:#ddd; cursor:pointer; }
a:hover{ color:#fff; }

#principal{ max-width:1024px; margin:0px auto;}
.titulo{ font-size:3em; margin-top:100px;}
.subtitulo{ font-size:1.2em; <?php if($_GET['acc']=='buscar' || $_GET['ide']<>"" || $_GET['id']<>""){?>margin-top:10px;<?php }else{ ?> margin-top:33%; margin-left:150px; <?php } ?>	}
.buscar{ margin-top:20px; <?php if($_GET['acc']=='buscar' || $_GET['ide']<>"" || $_GET['id']<>""){?> <?php }else{ ?> margin-left:150px; <?php } ?>}
.buscar input{ border:none; border-bottom:3px solid #fff; font-size:2.2em;}

#ok{ border:none; background:#299da8; margin-right:50px;}
#ok:hover{ color:#00CCF9;}
#huy{ font-size:1.5em;}

.arch{ margin-top:30px; border:1px solid rgba(255,255,255,0.4); padding:8px; font-size:2em;}
.desc{ font-family: 'Quicksand', sans-serif;}
.inst{ margin-top:50px;}
.tit{font-size:1.3em; <?php if($_GET['acc']=='buscar'){?>margin-bottom:15px; <?php }else{ ?> margin-bottom:4px;  <?php } ?>}
.datos{ margin-bottom:50px;}
#inicio{ border-bottom:1px solid #fff;}
#inicio img{ margin:8px;}
#inicio span{ margin-left:70%;}

#comentar{ display:none; }
.comentar #jobga{ font-size:25px; border:none; background:#E6E6E6;}
.comentar #jobga:hover{ background:#fff; color:#299da8;}
.link-comentar{ margin-bottom:15px; }
.link-comentar input{ font-size:25px; border:none; border:1px solid #f5f5f5;}
.link-comentar input:hover{ background:#fff; color:#299da8;}

#comentarios{ margin-top:50px;}
.informecomentarios,.informecomentarios{ width:28%; height:250px; background:#f5f5f5; color:#333; padding:10px; margin:10px;  display:inline-block; vertical-align:top; overflow:auto;}
.detcom{ font-size:12px;}
.detcom span{ margin-left:80px; font-size:24px;}
.detcom span a{ font-size:28px; cursor:pointer; }
.tit, .megusta{ display:inline-block;}
.texcom{ border-top:2px solid #555; margin-top:25px; padding:10px; }
#megusta a{ cursor:pointer;}
#tex{width:50%; border:none;}
#encontrar{ margin-top:50px; padding:10px;} 

@media (max-width: 1024px) {
	#inicio span{ margin-left:65%;}
}

@media (max-width: 700px) {
	#inicio span{ margin-left:75%;}
	.informecomentarios{ width:85%;}
	.link-comentar{ margin-top: 30px;}
	#tex{ width:85%}
	#logogober{ display:none;}
	#logogana{ width:80px;}
	.subtitulo{ font-size:0.8em; margin-left:10px;} 
	#huy{font-size:1em;}
	.buscar{ margin-left:10px;}
	.buscar input{ border:none; border-bottom:3px solid #fff; font-size:2.2em; width:90%;}
}


</style> 

