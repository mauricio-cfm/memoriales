<?php wp_footer(); ?>
    <footer>
    	<div class="barra">
        	<div class="linea-barra">
            </div><!-- /linea-barra -->
        	<div class="barra-right">
            	<p>Memoriales</p>
            </div><!-- /barra-right -->
            <div class="contacto">
            	¿Tiene más información sobre este u otro memorial? <a class="contactoabre"><strong>Contáctenos</strong></a>.
            </div><!-- /contacto -->
        	<a href="http://www.museodelamemoria.cl/">
            <div class="logo">
            </div><!-- /logo -->
            </a>
        </div><!-- /barra -->
    </footer>
    
    <?php 
//	    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
//		if ( strpbrk($url, '#wpcf7-f1433-t1-o1') ) {
//			$clase = "si";
//		} else {
//			$clase = "no";
//		}
		$url = "hola";
	?>
    <div class="contactoContenedor <?php echo $url; ?>">
    	<div class="contactoCaja">
				   	 <form class="formulario_contacto" name="formulario" action="<?php bloginfo('template_url'); ?>/enviar.php" onSubmit="return checkFields();"  autocomplete="on" method="post">               
                <div class="radio_contacto">
                    <label class="filtro_contacto" style="color:#FFFFFF;">Tu Nombre</label>                              
                </div>
                <div class="radio_contacto">                
   	      	        <input class="filtro_contacto" type="text" name="nombre" maxlength="100" placeholder="Su nombre" autofocus required/>
                </div>
                <div class="radio_contacto">
                    <label class="texto_contacto" style="color:#FFFFFF;">Tu Mail</label>
                </div>
                <div class="radio_contacto">
	      	        <input class="filtro_contacto" type="email" name="mail" maxlength="100" placeholder="Su mail" required/>                                
				</div>
                <div class="radio_contacto">
                    <label class="texto_contacto" style="color:#FFFFFF;">Asunto</label>
                </div>
                <div class="radio_contacto">
	      	        <input class="filtro_contacto" type="text" name="asunto" maxlength="100" placeholder="Asunto" required/>                                                    
				</div>
                <div class="radio_contacto">
                    <label class="texto_contacto" style="color:#FFFFFF;">Mensaje</label>
                </div>               
                <div class="radio_contacto">
                    <textarea class="filtro_contacto_textarea" name="mensaje" maxlength="300" placeholder="Su mensaje" required></textarea>
                </div>    
                <div class="div_boton_contacto">
	                <input  type="submit" value="Enviar"/>
	            </div>                
         </form>
        </div><!-- /contactoCaja -->
        <a class="cerrar"></a>
    </div><!-- /contactoContenedor -->

	<div class="intro">
    	<div class="contIntro">
            <h2>Memoriales</h2>
            En el presente interactivo usted podrá consultar información relativa a los memoriales construidos a lo largo de todo Chile como parte del proceso de reparación simbólica y homenaje a las víctimas de la dictadura y sus familiares. Estas obras han sido levantadas por el trabajo de iniciativas ciudadanas,  organizaciones sociales y, en algunos casos, con aportes estatales. <br /><br /><b>Selecciona una región para comenzar</b>
        </div><!-- /contIntro -->    
        <div class="borderLine"></div>
    </div><!-- /intro -->
    
    </body>
</html>