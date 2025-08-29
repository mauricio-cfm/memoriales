<?php 
	/* 
	Template Name: noticias
	*/
?>
<?php get_header(); ?>

    <div class="contenedor home wrapper">
    	<div class="col-left">
        	
            <h3 class="border-bottom-bold">Noticias</h3>
                <ul class="pastilla-grande">
                	<?php query_posts(array('category_name' =>'noticia','showposts' => 1000));
					if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li class="pastilla-actividades">
                        <div class="foto-actividades">
                        	<?php echo get_image('foto_miniatura'); ?>
                        </div><!-- /foto-actividades -->
                        <div class="texto-actividades">
                            <span class="fecha"><?php the_time('j \d\e\ F \d\e\ Y \|\ g:i a '); ?></b></span>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div><!-- /texto-actividades -->
                        <br class="limpia" />
                    </li><!-- /pastilla-actividades -->
                   	<?php endwhile; else: ?>
					<?php endif; ?> 
                   
                </ul>
            
        </div><!-- /col-left -->
        
        <?php get_sidebar(); ?>
        
    </div><!-- /contenedor -->
                            
<?php get_footer(); ?>