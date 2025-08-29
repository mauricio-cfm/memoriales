<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php bloginfo('template_url'); ?>/js_movil/jquery-1.11.3.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="<?php bloginfo('template_url'); ?>/js_movil/bootstrap.js"></script>
	  
	  <script>
$('div nav a').click(function(e){				
		e.preventDefault();		//evitar el eventos del enlace normal
		var strAncla=$(this).attr('href'); //id del ancla
			$('body,html').stop(true,true).animate({				
				scrollTop: $(strAncla).offset().top
			},1000);
		
	});	  
		  
  </script>	 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $(document.getElementById("nuevo-mapa-boton")).click(function(){
        $(document.getElementById("nuevo-mapa")).animate({
            
            width: 'toggle',
            left: '0px',  
          
        });
    });
});
    
    
$(document).ready(function(){
    $(document.getElementById("nuevo-mapa-boton2")).click(function(){
        $(document.getElementById("nuevo-mapa")).animate({
            
            width: 'toggle',
            left: '0px',  
          
        });
    });
});    
</script> 