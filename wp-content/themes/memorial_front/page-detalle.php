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
	  
<div class="container menu_sup">
<a name="sube" id="sube"></a>	
 <div class="row">	  
  <div class="col-md-4">
   <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
		  <nav><a href="#sube" data-id="sube"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></a></nav>
		  <a class="navbar-brand" href="<?php bloginfo('template_url'); ?>/?page_id=1716"><img src="<?php bloginfo('template_url'); ?>/img_movil/1x/logo_mmdh.png"></img></a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
   </nav>
  </div>	 
 </div>	
</div>

<?php 
$post = $_GET['post'];    

    query_posts("p=$post");    
    if (have_posts()) : while (have_posts()) : the_post(); ?>  


<div class="div-nuevo-mapa">
    <div id="nuevo-mapa" class="nuevo-mapa">
<div class="container regiones">
	
	<div class="row" style="margin-top: 25px;">		
	  <div class="col-md-1 mapa_chile">
					  <img src="<?php bloginfo('template_url'); ?>/img_movil/chile_home.png" class="img-responsive" alt="Placeholder image">
	  </div>
	
	<div class="col-md-4 lista_regiones">
			   
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=4#region4">
		<div class="row region_15">		
		  <div class="col-md-4 div-region-15">
			  <span class="label label-nombre-region">ARICA Y PARINACOTA</span>
          </div>
		</div>
		</a>
  

		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=5#region4">
		<div class="row region_1">		
			<div class="col-md-4 div-region-1">
			  <span class="label label-nombre-region">TARAPACA</span>
    		</div>
		</div>	
        </a>			

		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=6#region4">
		<div class="row region_2">		
		  <div class="col-md-4 div-region-2">
			  <span class="label label-nombre-region">ANTOFAGASTA</span>
		  </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=7#region5">
		<div class="row region_3">		
		  <div class="col-md-4 div-region-3">
			  <span class="label label-nombre-region">ATACAMA</span>
	      </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=8#region7">
		<div class="row region_4">		
		  <div class="col-md-4 div-region-4">
			  <span class="label label-nombre-region">COQUIMBO</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=9#region8">
		<div class="row region_5">		
		  <div class="col-md-4 div-region-5">
			  <span class="label label-nombre-region">VALPARAISO</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=3#region8">
		<div class="row region_13">		
		  <div class="col-md-4 div-region-13">
			  <span class="label label-nombre-region">METROPOLITANA</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=10#region9">
		<div class="row region_6">		
		  <div class="col-md-4 div-region-6">
			  <span class="label label-nombre-region">O'HIGGINS</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=11#region9">
		<div class="row region_7">		
		  <div class="col-md-4 div-region-7">
			  <span class="label label-nombre-region">MAULE</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=12#region9">
		<div class="row region_8">		
		  <div class="col-md-4 div-region-8">
			  <span class="label label-nombre-region">BIO BIO</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=13#region11">
		<div class="row region_9">		
		  <div class="col-md-4 div-region-9">
			  <span class="label label-nombre-region">ARAUCANIA</span>
          </div>
		</div>
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=14#region12">
		<div class="row region_14">		
		  <div class="col-md-4 div-region-14">
			  <span class="label label-nombre-region">LOS RIOS</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=15#region10">
		<div class="row region_10">		
		  <div class="col-md-4 div-region-10">
			  <span class="label label-nombre-region">LOS LAGOS</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=16#region7">
		<div class="row region_11">		
		  <div class="col-md-4 div-region-11">
			  <span class="label label-nombre-region">AYSEN</span>
          </div>
		</div>	
 	    </a>			
		
		<a href="<?php bloginfo('url'); ?>/?page_id=1718&cat=17#region12">
		<div class="row region_12">		
		  <div class="col-md-4 div-region-12">
			  <span class="label label-nombre-region">MAGALLANES</span>
          </div>
		</div>	
        </a>	
			
	  </div>
	

	</div>
			
</div>
    <span class="label label-flecha2" id="nuevo-mapa-boton2">
        <img class="mapa-boton" src="<?php bloginfo('template_url'); ?>/img_movil/boton.png"></img>     
    </span> 
    </div>    
</div>  
    
<div class="container img_detalle">

 <div class="slide-wrapperr">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
            <?php 
            if(get_image('imagenes_imagen_memorial',1,1)==""){
            echo '<img src="'.get_bloginfo('template_url').'/img/fotoNo.jpg">';					
            } else {
            echo get_image('imagenes_imagen_memorial',1,1); //the first param is the name field
            }
            ?>
    </div>

    <div class="item">
            <?php 
            if(get_image('imagenes_imagen_memorial',1,2)==""){
            echo '<img src="'.get_bloginfo('template_url').'/img/fotoNo.jpg">';					
            } else {
            echo get_image('imagenes_imagen_memorial',1,2); //the first param is the name field
            }
            ?>
    </div>

    <div class="item">
            <?php 
            if(get_image('imagenes_imagen_memorial',1,3)==""){
            echo '<img src="'.get_bloginfo('template_url').'/img/fotoNo.jpg">';					
            } else {
            echo get_image('imagenes_imagen_memorial',1,3); //the first param is the name field
            }
            ?>

    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class=""></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class=""></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container text_sup">
    <div class="col-md-4 titulo">
        <span class="label label-titulo"><?php the_title(); ?></span><br> 
        <span class="label label-fecha"><?php echo get('fecha');?></span><br> 
        <span class="label label-flecha" id="nuevo-mapa-boton">
            <img class="mapa-boton" src="<?php bloginfo('template_url'); ?>/img_movil/boton2.png"></img>     
        </span>             
    </div>
</div>     
  
</div> 
    
</div>
   
<div class="container contenido">
	
	<div class="row">		

        <div class="col-md-4 div-lugar">
            <span class="label label-lugar"><!--Lugar:--> <?php //echo get('lugar');?></span> 			   
        </div>
        <div class="col-md-4 div-fuente">
            <span class="label label-fuente">Lugar: <br><?php the_content(); ?></span> 			   
        </div>
	
    </div>
			
</div>	

<div class="container mapa_g">
	
	<div class="row">		

        <div class="col-md-4 mapa">
			   <?php
				$busca=strpos((get('mapa_online')), 'src');
				if($busca!==FALSE){
				?>
				<?php echo get('mapa_online'); ?>
				<!--<div id="ampliarmapa" >Ampliar Mapa</div>-->
				<?php }?>
        </div>
	

	</div>
		
    
</div>	
<?php endwhile; else: ?>
<?php endif; ?>   
	
<?php include("footer_movil.php") ?>
	
  </body>
</html>