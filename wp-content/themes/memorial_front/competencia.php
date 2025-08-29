<?php
    /*
    Template Name: competencia
    */
?>
<?php get_header(); ?>

    <div class="contenedor home wrapper">
       
        <div class="col-left single">
           
            <h3 class="border-bottom-bold">Cortos en Competencia</h3>
            
             <ul class="nav nav-tabs padding-top-10 margin-bottom-5" id="myTab">
                <li class="active"><a href="#documental" data-toggle="tab">Documental</a></li>
                <li><a href="#ficcion" data-toggle="tab">Ficción</a></li>
                </ul>  
            
            <ul class="peliculas-competencia tab-content">
           
                <div class="tab-pane active" id="documental">
                    <ul class="movie">
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'competencia','category_name' =>'documental','showposts' => 30));
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
                        <?php query_posts(array('orderby' => 'title','order' => 'ASC','post_type' =>'competencia','category_name' =>'ficcion','showposts' => 30));
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
            <h3 class="border-bottom-bold">Sobre la Competencia</h3>
            <p class="padding-top-10">
                En mayo de 2012 el Museo de la Memoria lanzó una convocatoria a realizadores chilenos y extranjeros, para participar de la competencia de Memoria Audiovisual.</p>

<p>Llegaron más de 50 trabajos de excelente calidad, entre ficción y documental, de los cuales se realizó una preselección de los mejores 10 cortos, los que hoy forman parte de la cartelera del festival.
Los resultados finales de esta convocatoria se darán a conocer el viernes 10 de agosto a las 20:00 horas, en la ceremonia de clausura del festival, donde se presentarán los dos trabajos ganadores.</p>
 
<p>El Festival está especialmente enfocado en generar un espacio privilegiado para que realizadores jóvenes, menores de 30 años, presenten sus trabajos en competencia; además de incentivar la temática de los derechos humanos y la memoria como elemento central de sus realizaciones.</p>
            </p>
           
            <a href="<?php bloginfo('template_url'); ?>/bases.pdf">
                <div class="pastilla-competencia pastilla-sidebar">
                    <p>Competencia <br /><b>Descargar las bases</b></p>
                </div><!-- /pastilla-competencia -->
            </a>
           
            <h3 class="border-bottom-bold padding-top-10">El Jurado</h3>
                <p class="padding-top-10">
                    <b class="pink">Documental:<br /> </b>David Blaustein / Pablo Salas / Paola Castillo <br />
                   
                    <span class="separa padding-bottom-15"></span>
                   
                    <b class="pink">Ficción:<br /> </b>Bruno Bettati / Jorge Morales / Nicolás Acuña <br />
                    </p>
           
           
           
        </div><!-- /col-rigt -->
    </div><!-- /contenedor -->
                           
<?php get_footer(); ?>