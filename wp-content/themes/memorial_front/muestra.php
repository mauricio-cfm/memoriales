<?php
    /*
    Template Name: muestra
    */
?>
<?php get_header(); ?>

    <div class="contenedor home wrapper">
       
        <div class="col-left single">
           
            <h3 class="border-bottom-bold">Películas en la Muestra</h3>
            
             <ul class="nav nav-tabs padding-top-10 margin-bottom-5" id="myTab">
                <li class="active"><a href="#documental" data-toggle="tab">Documental</a></li>
                <li><a href="#ficcion" data-toggle="tab">Ficción</a></li>
                </ul>  
            
            <ul class="peliculas-competencia tab-content">
           
                <div class="tab-pane active" id="documental">
                    <ul class="movie">
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'muestra','category_name' =>'documental-muestra','showposts' => 30));
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                       
                        <li class="pastilla-actividades">
                            <div class="foto-actividades">
                                <?php echo get_image('foto_miniatura'); ?>
                            </div><!-- /foto-actividades -->
                            <div class="texto-actividades">
                                <span class="fecha"><b><?php echo get('publicar_fecha_actividad'); ?></b></span>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php the_excerpt(); ?></p>
                                <p class="">
                                    <b class="pink">Director: </b><?php echo get('director'); ?><br />
                                    <b class="pink"> Categoría: </b><?php echo get('categoria'); ?><br />
                                    <b class="pink">Duración: </b><?php echo get('duracion'); ?> / 
                                    <b class="pink">Año: </b><?php echo get('ano'); ?> / 
                                    <b class="pink">País: </b><?php echo get('pais'); ?>
                                </p>
                            </div><!-- /texto-actividades -->
                            
                            <br class="limpia" />
                        </li><!-- /pastilla-actividades -->
                       
                        <?php endwhile; else: ?>
                        <?php endif; ?>
                       </ul>
                </div><!-- /tab-pane -->
               
                <div class="tab-pane" id="ficcion">
                
                		<ul class="movie">
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'muestra','category_name' =>'ficcion-muestra','showposts' => 30));
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                       
                        <li class="pastilla-actividades">
                            <div class="foto-actividades">
                                <?php echo get_image('foto_miniatura'); ?>
                            </div><!-- /foto-actividades -->
                            <div class="texto-actividades">
                                <span class="fecha"><b><?php echo get('publicar_fecha_actividad'); ?></b></span>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php the_excerpt(); ?></p>
                                <p class="">
                                    <b class="pink">Director: </b><?php echo get('director'); ?><br />
                                    <b class="pink"> Categoría: </b><?php echo get('categoria'); ?><br />
                                    <b class="pink">Duración: </b><?php echo get('duracion'); ?> / 
                                    <b class="pink">Año: </b><?php echo get('ano'); ?> / 
                                    <b class="pink">País: </b><?php echo get('pais'); ?>
                                </p>
                            </div><!-- /texto-actividades -->
                            
                            <br class="limpia" />
                        </li><!-- /pastilla-actividades -->
                       
                        <?php endwhile; else: ?>
                        <?php endif; ?>
                       </ul>
                    
                </div><!-- /tab-pane -->
           
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
            <h3 class="border-bottom-bold">Sobre la Muestra</h3>
            <p class="padding-top-10">
                El Museo de la Memoria y los Derechos Humanos, en su objetivo permanente por estimular la reflexión y el debate sobre la importancia del respeto y la tolerancia entre los seres humanos realizará, durante el mes de agosto, una muestra de cine nacional e internacional en el marco del 1ER FESTIVAL ITINERANTE DE CINE DE DDHH.<br /><br />

La muestra cuenta con 25 obras, 19 documentales y 6 ficciones, busca la promoción de los Derechos Humanos y ofrece un importante debate sobre las diferentes maneras de abordar la el proceso de la Memoria.  

            </p>
            
        </div><!-- /col-rigt -->
    </div><!-- /contenedor -->
                           
<?php get_footer(); ?>