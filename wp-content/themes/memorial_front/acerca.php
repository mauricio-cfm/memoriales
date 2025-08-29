<?php 
	/* 
	Template Name: acerca
	*/
?>
<?php get_header(); ?>

    <div class="contenedor home wrapper">
    	<div class="col-left">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h3 class="border-bottom-bold"><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <?php endwhile; else: ?>
            <?php endif; ?> 
                   
        </div><!-- /col-left -->
        
        <?php get_sidebar(); ?>
        
    </div><!-- /contenedor -->
                            
<?php get_footer(); ?>