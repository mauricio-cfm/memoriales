<?php //get_header(); 

$idregion=$_REQUEST['cat'];
$idmemorial=$_REQUEST['mem'];
header('Content-Type: text/html; charset=UTF-8'); 

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<header>
    </header>

    <div class="contenedor" style="width:100%; height:100%; min-width:980px; min-height:580px;">
	
    	<div>
        	<img class="m01 map" src="http://www.museodelamemoria.cl/interactivos/memoriales/wp-content/themes/memorial_front/mapa/01.png" title="mapa de chile" alt="mapa de chile" />
        </div><!-- /mapaPais -->
       
        <div>
    
		   	<div style="overflow: visible; height: 100%; width: 100%; padding-right: 5px; position: absolute; top: 1px; left: 216px;" id="pane1">
                <ul class="region">
                    <li><a href="index2.php?cat=arica-y-parinacota" id="arica-y-parinacota" title="">Arica y Parinacota</a></li>
                    <li><a href="index2.php?cat=tarapaca" id="tarapaca" title="">Tarapac&aacute;</a></li>
                    <li><a href="index2.php?cat=antofagasta" id="antofagasta" title="">Antofagasta</a></li>
                    <li><a href="index2.php?cat=atacama" id="atacama" title="">Atacama</a></li>
                    <li><a href="index2.php?cat=coquimbo" id="coquimbo" title="">Coquimbo</a></li>
                    <li><a href="index2.php?cat=valparaiso" id="valparaiso" title="">Valpara&iacute;so</a></li>
                    <li><a href="index2.php?cat=region-metropolitana" id="region-metropolitana" title="">Metropolitana</a></li>
                    <li><a href="index2.php?cat=ohiggins" id="ohiggins" title="">O'Higgins</a></li>
                    <li><a href="index2.php?cat=maule" id="maule" title="">Maule</a></li>
                    <li><a href="index2.php?cat=biobio" id="biobio" title="">Biob&iacute;o</a></li>
                    <li><a href="index2.php?cat=araucania" id="araucania" title="">Araucan&iacute;a</a></li>
                    <li><a href="index2.php?cat=los-rios" id="los-rios" title="">Los R&iacute;os</a></li>
                    <li><a href="index2.php?cat=los-lagos" id="los-lagos" title="">Los Lagos</a></li>
                    <li><a href="index2.php?cat=aysen" id="aysen" title="14">Ays&eacute;n</a></li>
                    <li><a href="index2.php?cat=magallanes" id="magallanes" title="">Magallanes</a></li>
                </ul><!-- /region -->
        	 </div><!-- /pane1 -->
			 
        </div><!-- /listaRegiones -->
        
		
        <div>
        
		   	<div style="overflow: visible; height: 100%; width: 20%; padding-right: 5px; position: absolute; top: 1px; left: 25%;" id="pane2">

				<?php 
				if ($idregion=='') { 
				//no hay variable de region - no muestra nada
				} else { 
				
					$cnn=mysql_connect("localhost","interac_hector","matucana501");
					mysql_select_db("interac_memoriales",$cnn);
					
					$sql = "SELECT p.ID, p.post_title
						FROM wp_posts p
						LEFT OUTER JOIN wp_term_relationships r ON r.object_id = p.ID
						LEFT OUTER JOIN wp_terms t ON t.term_id = r.term_taxonomy_id
						WHERE t.slug =  '$idregion'";
				
					$field = "";
				
					$Q = mysql_query($sql, $cnn);
				
					while($R=mysql_fetch_object($Q))
					{
						$field .= "<ul><li><a href='index2.php?cat=$idregion&mem=$R->ID'>".UTF8_encode($R->post_title)."</a></li></ul>";
						
					}
					
						if($field == "") $field = "<img class='imgNo' src='http://www.museodelamemoria.cl/interactivos/memoriales/img/alertNos.png'>";
					
					echo $field;
				
				}
				?>
            </div><!-- /pane2 -->
            
                	
        </div><!-- /listaMemoriales -->
        
		
        <div>
        	<div style="overflow: visible; height: 100%; width: 50%; padding-right: 5px; position: absolute; top: 1px; left: 45%;" id="pane3">
               
				<?
				if ($idmemorial=='') { 
				//no hay variable de memorial - no muestra nada
				} else { 

				$field = @file_get_contents("http://www.museodelamemoria.cl/interactivos/memoriales/?p=".$idmemorial);
				
				echo $field;

				}
				?>
             </div><!-- /pane3 -->
        
		</div><!-- /detalleMemorial -->
        
    </div><!-- /contenedor -->
    
    

<?php //get_footer(); ?>