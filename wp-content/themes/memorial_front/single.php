<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<script>
	function ajustar(){
		document.getElementById('slider').style.height='auto';
	}
	</script>
	<div class="contenedorDetalleMemorial" id="detallamemorial">
	
		<h2><?php the_title(); ?></h2>
		<div id="ventanaPopup1"></div>
		<div id="ventanaPopup1Fondo"></div>
		
		<script type="Text/Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slide/jquery.sudoSlider.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/slide/style.css">		
		
		<script type="text/javascript" >
		    $(document).ready(function(){	
		        var oldt = 0;
		        var sudoSlider = $("#slider").sudoSlider({
		            beforeAniFunc: function(t){
		                var width = $(this).width();
		                var diff = Math.sqrt(Math.abs(oldt-t));
		                var speed = parseInt(diff*800);
		
		                $('.nextBtn').animate(
		                    { left: width },
		                    {
		                        queue:false,
		                        duration:speed
		                    }
		                );
		                oldt = t;
		             }
		        });
		    });			
		 </script>
		
		<div id="slider" style="width:100% !important;">
		    <ul>
		    	<?php $fotos = get_order_field('imagenes_imagen_memorial');
             	foreach($fotos as $foto){
				  echo '<li>';
				  if(get_image('imagenes_imagen_memorial',1,$foto)==""){
					echo '<img src="'.get_bloginfo('template_url').'/img/fotoNo.jpg">';					
				  } else {
				  	echo get_image('imagenes_imagen_memorial',1,$foto); //the first param is the name field
				  }
				  echo '</li>';
				} ?>
		    </ul>
		</div>
		
		<?php /* ?>
		<div class="galeria">
       
            <div id="slides">
                <div class="slides_container">
                 <?php $fotos = get_order_field('imagenes_imagen_memorial');
			
	             	foreach($fotos as $foto){
					  echo '<div>';
					  echo get_image('imagenes_imagen_memorial',1,$foto); //the first param is the name field
					  echo '</div>';
					} ?>

                </div><!-- /slides-container -->
            </div><!-- /slides -->
        </div><!-- /galeria -->
        <?php */ ?>
				
        <br class="limpia" />
                
		<div class="descripcion jScrollPaneContainer jScrollPaneScrollable" tabindex="0">
			<div class="mapa" id='<?php // echo get('mapa_online'); ?>'>
				<?php
					echo get('mapa_online');
					$busca=strpos((get('mapa_online')), 'scr');
					if($busca!==FALSE){
						//echo get('mapa_online'); 
						//echo '<div id="ampliarmapa">Ampliar Mapa</div>';
					}
				?>
	        	<br class="limpia" />
        	</div><!-- /mapa -->

			<?php the_content(); ?>
		</div><!--/ descripcion -->

 	</div><!-- /contenedorDetalleMemorial -->
    
    <div class="mapBig">
    	<div class="cerrar2"></div>
    </div><!-- /mapBig -->
    
<?php endwhile; else: ?>
<?php endif; ?>
      
<script type="text/javascript" src="https://interactivos.museodelamemoria.cl/memoriales/wp-content/themes/memorial_front/js/mimapa.js"></script>
<!--<script src="https://memoriaaudiovisual.cl/wp-content/themes/memoria_audiovisual_front/js/slides.min.jquery.js"></script>--> 
<script language="javascript" type="text/javascript">

	

var mapa = $(".mapa iframe").attr("src");
var uno = '<iframe src="';
var dos = '"></iframe>';
var todo = uno+mapa+dos;
//alert(todo)
function loadMap() {
document.getElementById('ventanaPopup1').innerHTML = todo;
}

</script>
<script>
/*$(document).ready(function(){
alert('test')		
		$('#slides').slides({
			preload: true,
			play: 5000,
			pause: 2500,
			generateNextPrev: true
		});
				
	});*/
</script>

