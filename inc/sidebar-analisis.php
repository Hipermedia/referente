<?php 
/** Sidebar; Análisis
------------------------------------------------------------------- */ 
?>
<!-- sidebar-analisis -->
<section class="SidebarAnalisis">
	<h2 class="h2">Analisis Electoral</h2>
	<?php if(have_rows('analisisElectoral', 'option')) : ?>
	<div id="cover-slider-analisis" class="flexslider">
	  	<ul class="slides">
	  		<?php $contador = $contador + 1; ?>
	  		<?php while(have_rows('analisisElectoral', 'option')) : the_row(); ?>
	  	  	<li>
	  	  	  <img data-toggle="modal" data-target="#analisis<?php echo $contador; ?>" src="<?php the_sub_field('imagen'); ?>" />
	  	  	  <p class="flex-caption SidebarAnalisis-caption"><?php the_sub_field('titulo'); ?></p>
	  	  	</li>
	  	  	<?php $contador++; ?>
	  	  	<?php endwhile; ?>
	  	</ul>
	</div>
	<?php endif; ?>
</section>

<!-- Modal -->
<?php if(have_rows('analisisElectoral', 'option')) : ?>
	<?php $contador2 = $contador2 + 1; ?>
	<?php while(have_rows('analisisElectoral', 'option')) : the_row(); ?>
	<div class="modal fade" id="analisis<?php echo $contador2; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php the_sub_field('titulo'); ?></h4>
	      </div>
	      <div class="modal-body">
	      	<?php the_sub_field('analisis'); ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<?php $contador2++; ?>
	<?php endwhile; ?>
<?php endif; ?>