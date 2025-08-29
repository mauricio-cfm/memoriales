<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="contenedor home wrapper">
    	
        <div class="foto-super-grande">
        	<?php echo get_image('foto_corto'); ?>
        	<div class="puntos">.
            </div>
        	<h3 class="super-foto"><font><?php the_title(); ?></font></h3>
        </div><!-- /foto-super-grande -->
        
    	<div class="col-left single">
            
            <h3 class="border-bottom-bold">Sinopsis</h3>
            
            <p class=""><?php the_content(); ?></p>
            
                <br class="limpia" />
	            
            <div class="single-bottom-bar">
               	<ul>
                	<li><a href="javascript:history.back(1)">Volver</a></li>
                    <li>|</li>
                    <li><a href="#top">Subir</a></li>
                </ul>
                <div class="compartir">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    </div>
                    <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4fb65e680aba1d5b"></script>
                    <!-- AddThis Button END -->
                </div><!-- /compartir -->
                
            </div><!-- /single-bottom-bar -->
            
        </div><!-- /col-left -->
        
        <div class="col-right informacion-pelicula">
        	<h3 class="border-bottom-bold">Ficha Técnica</h3>
            <p class="padding-top-10">
            	<b class="pink">Director: </b><?php echo get('director'); ?><br />
                <b class="pink"> Categoría: </b><?php echo get('categoria'); ?><br />
                <b class="pink">Duración: </b><?php echo get('duracion'); ?><br />
                <b class="pink">Año: </b><?php echo get('ano'); ?><br />
                <b class="pink">País: </b><?php echo get('pais'); ?><br />
            </p>
            
            <h3 class="border-bottom-bold padding-top-25">Lugares de exhibición</h3>
            
            <div class="pastilla-lugar-single">  
				<b><?php echo get('lugares_de_exhibicion'); ?></b>         
            </div><!-- /pastilla-lugar-single -->
           
        </div><!-- /col-rigt -->
    </div><!-- /contenedor -->

	<?php endwhile; else: ?>
    <?php endif; ?>

<?php get_footer(); ?>