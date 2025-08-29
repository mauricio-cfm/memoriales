<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<script LANGUAGE="JavaScript">
function redireccionar() {
var url920 = "https://interactivos.museodelamemoria.cl/memoriales/?page_id=1716";
if ((screen.width < 920) )
window.location.href= url920;
}
</script>	    
	<meta charset="utf-8">
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	
	?>Museo de la Memoria</title>
    <link rel="shortcut icon" href="https://www.museodelamemoria.cl/wp-content/themes/front/favicon.png" />
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
    
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/estilo.css">
    <link href='https://fonts.googleapis.com/css?family=Ruda:400,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
     	
    <script src="https://code.jquery.com/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <!--<script type="text/javascript" src=	"https://memoriaaudiovisual.cl/wp-content/themes/memoria_audiovisual_front/js/slides.min.jquery.js"></script>--> 
	<script language="javascript" type="text/javascript">

			var mapa = $(".mapa iframe").attr("src");
			jQuery(document).ready(function(){
				$(".region a").click(function(e) {
				var carga = $(this).attr("id");
				$.ajax({
					url: carga,
					success: function(data){
					$('.listaMemoriales').html(data);
					$('.detalleMemorial').html('<div id="slides"><div class="slides_container"><div></div></div></div><!-- /slides -->');
					/*$('#slides').slides({
						preload: true,
						play: 5000,
						pause: 2500,
						generateNextPrev: true
					});*/
					}
				})
			});
			
			jQuery(document).ready(function(){				
				var hashValue = location.hash;  
				hashValue = hashValue.replace(/^#/, '');  
				if(hashValue == "wpcf7-f1433-t1-o1"){
					$('.contactoContenedor').slideDown('400');
					$('.contactoCaja').delay('600').fadeIn("slow");
					$('.cerrar').delay('1000').fadeIn("slow");
				}
			});
			
			$('.contactoabre').click(function(){
                $('.contactoContenedor').slideDown('400');
				$('.contactoCaja').delay('600').fadeIn("slow");
				$('.cerrar').delay('1000').fadeIn("slow");
            })
			
			function cerrar(){
				$('.contactoCaja').fadeOut("slow");   
			    $('.cerrar').fadeOut("slow");
		        $('.contactoContenedor').delay('400').slideUp('400');
			}
			
			$(document).ready(function(){ 
				//$('.cerrar').click(function(){
		        //	$('.contactoCaja').fadeOut("slow");
		        //	$('.cerrar').fadeOut("slow");
		        //	$('.contactoContenedor').delay('400').slideUp('400');
		        //});
		        $('.cerrar').mouseup(function(){
		        	cerrar();
		        });
		        
		        $('.cerrar2').mouseup(function(){
		        	cerrar();
		        });
            });
            
            $(document).keydown(function(e) {
			    if (e.keyCode == 27) {
			        //$('.contactoCaja').fadeOut("slow");
			        //$('.cerrar').fadeOut("slow");
			        //$('.contactoContenedor').delay('400').slideUp('400');
			        cerrar();
			    }
			});

            //	$('.cerrar').click(function(){
			//		$('.contactoCaja').fadeOut("fast");
			//		$('.cerrar').fadeOut("fast");
            //		$('.contactoContenedor').delay('200').fadeOut("fast");
            //	})
				
			$('.memorial li').live("click",function(){   
				$('.memorial li').css("background-color","#464646");
				$('.memorial li').css("color","#BFBFBF");
				$(this).css("background-color","#009ca6");
				$(this).css("color","#FFF");
				
			})
				
			$('.region li a').click(function(){  
				$('.mapaPais img').replaceWith('<img class="m01 map" src="https://interactivos.museodelamemoria.cl/memoriales/wp-content/themes/memorial_front/mapa/'+$(this).attr('alt')+'.png" />');
				$('.region li a').css("color","#FFF");
				$(this).css("color","#009ca6");
				$('.intro').css("display","none");
				})
				  
        	});

	</script>	
    
</head>