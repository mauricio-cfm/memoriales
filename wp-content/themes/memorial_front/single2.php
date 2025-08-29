<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="contenedor home wrapper">
    	<div class="col-left single">
        	
            <h3 class=""><?php the_title(); ?></h3>
            <span class="fecha fecha-single"><?php the_time('j \d\e\ F \d\e\ Y \|\ g:i a '); ?></span>
           	
            <div class="foto-single">
            	<?php echo get_image('foto_actividad'); ?>
            </div><!-- /foto-single -->
            
            <span class="content-single">
            	<p><?php the_content(); ?></p>
            </span>
            
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
        
        <?php get_sidebar(); ?>
        
    </div><!-- /contenedor -->    
	<?php endwhile; else: ?>
    <?php endif; ?>

<?php get_footer(); ?>