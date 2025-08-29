<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Memoriales</title>
    <!-- Bootstrap -->
	<link href="<?php bloginfo('template_url'); ?>/css_movil/bootstrap.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>

	
<body style="padding-top: 100px">
	  
<?php include("header_movil.php") ?>
	
<div class="container">
  <div class="row">
	  <div class="col-md-4 titulo-region">
			<span class="label label-titulo-region">SELECCIONA UNA REGIÓN PARA COMENZAR</span> 		  
	  </div>
  </div>
</div>

<div class="container regiones">
<?php 
$cat = $_GET['cat'];
$div_activo="div_activo";
$span_activo="span_activo";	
?>	
	
	<div class="row" style="margin-top: 25px;">		
	  <div class="col-md-1 mapa_chile">
			<?php 
					  switch ($cat) {
						case 4:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_15.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 5:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_1.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 6:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_2.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 7:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_3.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 8:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_4.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 9:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_5.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 3:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_13.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 10:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_6.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 11:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_7.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 12:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_8.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 13:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_9.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 14:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_14.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 15:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_10.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 16:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_11.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;
						case 17:	  
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/region_12.png" class="img-responsive" alt="Placeholder image">
			<?php 
						break;	
						default:
			?>		  
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/chile_home.png" class="img-responsive" alt="Placeholder image">
			<?php 
					  }
			?>
				  
	  </div>
	
	<div class="col-md-1 lista_regiones">
			   
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=4#region4">
		<div class="row region_15">		
		  <div class="col-md-1 div-region-15 <?php  if ($cat==4) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==4) echo $span_activo  ?>">ARICA Y PARINACOTA</span>
          </div>
		</div>
		</a>
  

		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=5#region4" id="region5" name="region5">
		<div class="row region_1">		
			<div class="col-md-1 div-region-1 <?php  if ($cat==5) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==5) echo $span_activo  ?>">TARAPACA</span>
    		</div>
		</div>	
        </a>			

		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=6#region4" id="region6" name="region6">
		<div class="row region_2">		
		  <div class="col-md-1 div-region-2 <?php  if ($cat==6) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==6) echo $span_activo  ?>">ANTOFAGASTA</span>
		  </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=7#region5" id="region7" name="region7">
		<div class="row region_3">		
		  <div class="col-md-1 div-region-3 <?php  if ($cat==7) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==7) echo $span_activo  ?>">ATACAMA</span>
	      </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=8#region7" id="region8" name="region8">
		<div class="row region_4">		
		  <div class="col-md-1 div-region-4 <?php  if ($cat==8) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==8) echo $span_activo  ?>">COQUIMBO</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=9#region8" id="region9" name="region9">
		<div class="row region_5">		
		  <div class="col-md-1 div-region-5 <?php  if ($cat==9) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==9) echo $span_activo  ?>">VALPARAISO</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=3#region8" id="region3" name="region3">
		<div class="row region_13">		
		  <div class="col-md-1 div-region-13 <?php  if ($cat==3) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==3) echo $span_activo  ?>">METROPOLITANA</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=10#region9" id="region10" name="region10">
		<div class="row region_6">		
		  <div class="col-md-1 div-region-6 <?php  if ($cat==10) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==10) echo $span_activo  ?>">O'HIGGINS</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=11#region9" id="region11" name="region11">
		<div class="row region_7">		
		  <div class="col-md-1 div-region-7 <?php  if ($cat==11) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==11) echo $span_activo  ?>">MAULE</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=12#region9" id="region12" name="region12">
		<div class="row region_8">		
		  <div class="col-md-1 div-region-8 <?php  if ($cat==12) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==12) echo $span_activo  ?>">BIO BIO</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=13#region11" id="region13" name="region13">
		<div class="row region_9">		
		  <div class="col-md-1 div-region-9 <?php  if ($cat==13) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==13) echo $span_activo  ?>">ARAUCANIA</span>
          </div>
		</div>
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=14#region12" id="region14" name="region14">
		<div class="row region_14">		
		  <div class="col-md-1 div-region-14 <?php  if ($cat==14) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==14) echo $span_activo  ?>">LOS RIOS</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=15#region10" id="region15" name="region15">
		<div class="row region_10">		
		  <div class="col-md-1 div-region-10 <?php  if ($cat==15) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==15) echo $span_activo  ?>">LOS LAGOS</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=16#region7" id="region16" name="region16">
		<div class="row region_11">		
		  <div class="col-md-1 div-region-11 <?php  if ($cat==16) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==16) echo $span_activo  ?>">AYSEN</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=17#region12" id="region17" name="region17">
		<div class="row region_12">		
		  <div class="col-md-1 div-region-12 <?php  if ($cat==17) echo $div_activo  ?>">
			  <span class="label label-nombre-region <?php  if ($cat==17) echo $span_activo  ?>">MAGALLANES</span>
          </div>
		</div>	
        </a>	
			
	  </div>
	
	<div class="col-md-1 lista_hallazgos">
                <div class="row hallazgo_<?php echo $cat  ?>">
                    <?php $the_query = new WP_Query( "cat=$cat" ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <a href="<?php bloginfo('url'); ?>?page_id=1720&post=<?php echo get_the_ID()   ?>">                
                            <div class="col-md-1 hallazgo">
                                <span class="label label-nombre-hallazgo"><?php the_title(); ?></span>
                            </div>	
                        </a>
                    <?php endwhile; ?>        
                </div>					
	</div>		
		
	</div>
			
</div>	
	
<?php include("footer_movil.php") ?>
	
  </body>
</html>