<?php 
	/* 
	Template Name: programacion
	*/
?>
<?php get_header(); ?>

    <div class="contenedor home wrapper">
    	<div class="col-left">
        	
            <h3 class="border-bottom-bold">Programacion</h3>
                <ul class="pastilla-grande">
                	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    	<p><?php the_content(); ?></p>
                   	<?php endwhile; else: ?>
					<?php endif; ?> 
                   
                </ul>
            
        </div><!-- /col-left -->
        
        <?php get_sidebar(); ?>
        
    </div><!-- /contenedor -->
                            
<?php get_footer(); ?>