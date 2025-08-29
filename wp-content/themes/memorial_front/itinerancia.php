<?php
    /*
    Template Name: itinerancia
    */
?>
<?php get_header(); ?>

    <div class="contenedor home wrapper">
       
        <div class="col-left single">
           
            <h3 class="border-bottom-bold">Películas en la Itinerancia</h3>
            
			<ul class="nav nav-tabs padding-top-10 margin-bottom-5" id="myTab">
                <li class="active"><a href="#coquimbo" data-toggle="tab">Coquimbo</a></li>
                <li><a href="#vicuna" data-toggle="tab">Vicuña</a></li>
                <li><a href="#ovalle" data-toggle="tab">Ovalle</a></li>
                <li><a href="#illapel" data-toggle="tab">Illapel</a></li>
                <li><a href="#serena" data-toggle="tab">La Serena</a></li>
                </ul>  
            
            <ul class="peliculas-competencia tab-content">
           
                <div class="tab-pane active" id="coquimbo">
                    <ul class="movie">
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'muestra','category_name' =>'coquimbo','showposts' => 30));
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
               
                <div class="tab-pane" id="vicuna">
                
                		<ul class="movie">
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'muestra','category_name' =>'vicuna','showposts' => 30));
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
                
                
                <div class="tab-pane" id="ovalle">
                
                		<ul class="movie">
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'muestra','category_name' =>'ovalle','showposts' => 30));
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
                
                
                <div class="tab-pane" id="illapel">
                
                		<ul class="movie">
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'muestra','category_name' =>'illapel','showposts' => 30));
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
                
                
                <div class="tab-pane" id="serena">
                
                		<ul class="movie">
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'muestra','category_name' =>'la-serena','showposts' => 30));
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
            <h3 class="border-bottom-bold">Sobre la Itinerancia</h3>
            <p class="padding-top-10">
                El Museo de la Memoria y los Derechos Humanos, en su objetivo permanente por estimular la reflexión y el debate sobre la importancia del respeto y la tolerancia entre los seres humanos realizará, durante el mes de julio,  una Itinerancia por la IV Región, en el marco del 1ER FESTIVAL ITINERANTE DE CINE DE DDHH.<br /><br />
 
La Itinerancia está especialmente enfocada en llevar trabajos cinematográficos de calidad a sectores alejados de los grandes centros culturales. De esta forma, en esta primera versión se llegará a la IV región. En alianza con los municipios de Coquimbo, Ovalle e Illapel más de 13 películas serán exhibidas gratuitamente en los más importante centros culturales de esas comunas.
.
            </p>
            
        </div><!-- /col-rigt -->
    </div><!-- /contenedor -->
                           
<?php get_footer(); ?>