<script type="text/javascript">
$(document).ready(function(){
    setTimeout("alerta()",100);
}); 

function alerta(){
	$(".primero").trigger("click");
}
</script>

<?php is_tag(); ?>

 <?php if (have_posts()) : ?>

 <?php $post = $posts[0]; // ?>
  
 <?php $i=0; ?>
 
 <?php while (have_posts()) : the_post(); ?>
 
	 <ul class='memorial'>
		 <?php if($i==0) { ?>
		 	<li class="memorialdetalle primero" id="<?php the_permalink(); ?>"><?php the_title(); ?></li>
		 <?php $i++; } else { ?>
		 	<li class="memorialdetalle" id="<?php the_permalink(); ?>"><?php the_title(); ?></li>
		 <?php } ?>
	 </ul>
 
 <?php endwhile; ?>
 
 <?php else : ?>

 <div class="noMemorial">
</div><!-- /noFoto -->
<?php endif; ?>

<script>
	$(".memorialdetalle").click(function(e) {
		
		var carga2 = $(this).attr("id");
		//alert(carga2)
		$.ajax({
			url: carga2,
			success: function(data){
			$('.detalleMemorial').html(data);
			/*$('#slides').slides({
				preload: true,
				play: 5000,
				pause: 2500,
				generateNextPrev: true
			});*/
			}
		})
	});			
</script>