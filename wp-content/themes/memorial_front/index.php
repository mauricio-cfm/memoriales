<?php get_header(); ?>

<body onLoad="redireccionar()">

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<header>
    </header>

    <div class="contenedor" style="width:100%; height:100%; min-width:980px;">
    	<div class="mapaPais">
        	<img class="m01 map" src="<?php bloginfo('template_url'); ?>/mapa/01.png" title="mapa de chile" alt="mapa de chile" />
        	<span class="sombra"></span>
        </div><!-- /mapaPais -->
       
        <div class="listaRegiones">
        	<div>
                <ul class="region">
                    <li><a id="<?php bloginfo('url'); ?>/?cat=4" alt="01">Arica y Parinacota</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=5" alt="02">Tarapac&aacute;</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=6" alt="03">Antofagasta</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=7" alt="04">Atacama</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=8" alt="05">Coquimbo</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=9" alt="06">Valpara&iacute;so</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=3" alt="07">Metropolitana</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=10" alt="08">O'Higgins</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=11" alt="09">Maule</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=12" alt="10">Biob&iacute;o</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=13" alt="11">Araucan&iacute;a</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=14" alt="12">Los R&iacute;os</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=15" alt="13">Los Lagos</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=16" alt="14">Ays&eacute;n</a></li>
                    <li><a id="<?php bloginfo('url'); ?>/?cat=17" alt="15">Magallanes</a></li>
                </ul><!-- /region -->
            </div><!-- /pane1 -->
        </div><!-- /listaRegiones -->
        
        <div class="listaMemoriales">

        </div><!-- /listaMemoriales -->
        
        <div class="detalleMemorial">

        </div><!-- /detalleMemorial -->
        
    </div><!-- /contenedor -->
    
<?php get_footer(); ?>