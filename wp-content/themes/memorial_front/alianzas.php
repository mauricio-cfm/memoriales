<?php
    /*
    Template Name: alianzas
    */
?>
<?php get_header(); ?>

    <div class="contenedor home wrapper">
       
        <div class="col-left single">
           
            <h3 class="border-bottom-bold">Alianzas</h3>
            		<ul style="padding:0;">
                    
         			<?php query_posts(array('post_type' =>'alianza','showposts' => 30));
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <a href="<?php echo get('url'); ?>" target="_blank"><?php echo get_image('imagen_alianza'); ?></a>
                    
                    <?php endwhile; else: ?>
                    <?php endif; ?>
                    
                    </ul>
                    
               		<br />
           
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
       
        <div class="col-right">
            <?php get_sidebar(); ?>
    </div><!-- /contenedor -->
                           
<?php get_footer(); ?>