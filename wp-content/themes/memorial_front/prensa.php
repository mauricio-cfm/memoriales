<?php
    /*
    Template Name: prensa
    */
?>
<?php get_header(); ?>

    <div class="contenedor home wrapper">
       
        <div class="col-left single">
           
            <h3 class="border-bottom-bold">Prensa</h3>
            
             <ul class="nav nav-tabs margin-left-5 margin-right-5 padding-top-10 margin-bottom-5" id="myTab">
                <li class="active"><a href="#acreditacion" data-toggle="tab">Acreditación</a></li>
                <li><a href="#comunicados" data-toggle="tab">Comunicados</a></li>
                <li><a href="#logo" data-toggle="tab">Logotipo</a></li>
                <li><a href="#medios" data-toggle="tab">El Festival en los Medios</a></li>
   			 </ul>   
             
            <ul class="tab-content">
            
                <li class="tab-pane active margin-left-5" id="acreditacion">
                    
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    	<?php the_content(); ?>
					<?php endwhile; else: ?>
                    <?php endif; ?> 
                </li><!-- /tab-pane -->
                
                
                <li class="tab-pane margin-left-5" id="comunicados">
                    <ul class="pastilla-grande">
						<?php query_posts(array('category_name' =>'comunicados','showposts' => 1000));
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="pastilla-actividades">
                            <div class="texto-comunicados">
                                <span class="fecha"><?php the_time('j \d\e\ F \d\e\ Y \|\ g:i a '); ?></b></span>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div><!-- /texto-actividades -->
                            <br class="limpia" />
                        </li><!-- /pastilla-actividades -->
                        <?php endwhile; else: ?>
                        <?php endif; ?> 
                	</ul>
                </li><!-- /tab-pane -->
                
                <li class="tab-pane margin-left-5" id="logo">
                	<div class="logoDown">
                    <a target="_blank" style="margin-top:15px;" href="http://www.memoriaaudiovisual.cl/logo/memoriaaudiovisual.jpg">> Descargar en formato JPG</a><br />
                    <a target="_blank" href="http://www.memoriaaudiovisual.cl/logo/memoriaaudiovisual.png">> Descargar en formato PNG</a><br />
                    <a target="_blank" href="http://www.memoriaaudiovisual.cl/logo/memoriaaudiovisual.pdf">> Descargar en formato PDF</a><br />
                    <a target="_blank" href="http://www.memoriaaudiovisual.cl/logo/memoriaaudiovisual.ai">> Descargar en formato ILLUSTRATOR</a>
                    </div><!-- /logoDown -->
                </li><!-- /tab-pane -->
                
                <li class="tab-pane margin-left-5" id="medios">
                    <ul class="pastilla-grande">
						<?php query_posts(array('category_name' =>'medios','showposts' => 1000));
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="pastilla-actividades">
                            <div class="texto-comunicados">
                                <span class="fecha"><?php the_time('j \d\e\ F \d\e\ Y \|\ g:i a '); ?></b></span>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div><!-- /texto-actividades -->
                            <br class="limpia" />
                        </li><!-- /pastilla-actividades -->
                        <?php endwhile; else: ?>
                        <?php endif; ?> 
                	</ul>
                </li><!-- /tab-pane -->
                
                
                
            </ul>
           
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