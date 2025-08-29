<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	
	?>Museo de la Memoria</title>
    <link rel="shortcut icon" href="http://www.museodelamemoria.cl/wp-content/themes/front/favicon.png" />
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
    
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Ruda:400,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/jScrollPane.css">
    
    	
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jScrollPane.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/miajax.js"></script>
   
    <!--script type="text/javascript" src="../dist/jScrollPane.min.js"></script-->
	
    <script type="text/javascript">//scroll
        
        $(function()
        {
            // this initialises the demo scollpanes on the page.
            $('#pane1').jScrollPane();
			$('#pane2').jScrollPane();
			$('#pane3').jScrollPane();
            
        });
        
    </script>
    
	<script type="text/javascript">//scroll
        jQuery(document).ready(function(){
            $(window).resize(function() {
            $('#pane1').jScrollPane();
            $('#pane2').jScrollPane();
            $('#pane3').jScrollPane();
            });
            
        });
    </script>
    
    <script>//contacto-abre emergentge
		jQuery(document).ready(function(){
           
			$('.contactoabre').click(function(){
                $('.contactoContenedor').slideDown('400');
				$('.contactoCaja').delay('600').fadeIn("slow");
				$('.cerrar').delay('1000').fadeIn("slow");
                })
				
			$('.cerrar').click(function(){
				$('.contactoCaja').fadeOut("fast");
				$('.cerrar').fadeOut("fast");
                $('.contactoContenedor').delay('200').fadeOut("fast");
                })
        });
	</script>
    
    <script type="text/javascript">
	function MemorialRegion(cat){
		var panel	= document.getElementById("pane2");
		//var navegador = navigator.appName;
		panel.innerHTML="<div class='cargadata'>Cargando datos...</div>";
		var ajax_listado = nuevoAjax();
		ajax_listado.open("GET", "listado_memoriales.php?cat="+cat,true);
		ajax_listado.onreadystatechange=function() {
		
			if (ajax_listado.readyState==4) {
				panel.innerHTML=ajax_listado.responseText;

				$(function(){
			            // this initialises the demo scollpanes on the page.
			            $('#pane1').jScrollPane();
						$('#pane2').jScrollPane();
						$('#pane3').jScrollPane();
                });//function - scroll
					
				$(document).ready(function(){
					  $('.memorial li').click(function(){  
					  $('.memorial li').css("background-color","#464646");
					  $(this).css("background-color","#FF0000");
				});//function - clic
				  
				 
			});		
		}
			//valida navegador
			//if (navegador == "Microsoft Internet Explorer"){
			//	panel.style.overflow = "scroll";
			//}
		}//funcion on readystate
		ajax_listado.send(null);
		document.getElementById("det_mem").innerHTML="";
	}//funcion memorial region
	</script>
    
    <script type="text/javascript">
	function VerMemorial(id){
		var panel	= document.getElementById("det_mem");
		//var navegador = navigator.appName;
		panel.innerHTML="<div class='cargadata'>Cargando Datos...</div>";
		var ajax_detalle = nuevoAjax();
		ajax_detalle.open("GET", "detalle_memorial.php?id="+id,true);
		ajax_detalle.onreadystatechange=function() {
			if (ajax_detalle.readyState==4) {
				panel.innerHTML=ajax_detalle.responseText;
				$(function(){
			            // this initialises the demo scollpanes on the page.
			            $('#pane1').jScrollPane();
						$('#pane2').jScrollPane();
						$('#pane3').jScrollPane();
            
				});
				
								$(document).ready(function(){
					  $('.memorial li').click(function(){  
					  $('.memorial li').css("background-color","#464646");
					  $(this).css("background-color","#FF0000");
				});//function - clic
				
				//abre mapa
				$(document).ready(function(){
				  $('.boxi').click(function(){  
				  $('.mapaBig').fadeIn('fast');
				  
				  })
				  
				  $('.cierrate').click(function(){
				  $('.mapaBig').fadeOut("fast");
				  })
				  
				});
			}
			//valida navegador
			//if (navegador == "Microsoft Internet Explorer"){
			//	panel.style.overflow = "scroll";
			//}
		}
		ajax_detalle.send(null)
	}
    </script>
    
    <script>
	$(document).ready(function(){
		$('.region li a').click(function(){  
		$('.mapaPais img').replaceWith('<img class="m01 map" src="http://190.98.219.232/~interac/memoriales/wp-content/themes/memorial_front/mapa/'+$(this).attr('title')+'.png" />');
		$('.region li a').css("color","#FFF");
		$(this).css("color","#E30E14");
		})
	});
	</script>
</head>