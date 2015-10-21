<?php 
/** Rotatorio de videos
------------------------------------------------------------------- */ 
?>

<!-- rotatotio-videos -->
<div class="RotatorioVideos">
	<?php if(have_rows('videoSlider', 'option')) : ?>
	<div id="cover-slider-videos" class="flexslider">
	  <ul class="slides">
	  	<?php while(have_rows('videoSlider', 'option')) : the_row(); ?>
	    <li>
	    	<a href="http://www.youtube.com/watch?v=<?php the_sub_field('video', 'option'); ?>" rel="wp-video-lightbox" title="">
	      		<img src="http://img.youtube.com/vi/<?php the_sub_field('video', 'option'); ?>/0.jpg" />
			</a> 
	      	<p class="flex-caption RotatorioVideos-caption"><?php the_sub_field('titulo', 'option'); ?></p>
	    </li>
		<?php endwhile; ?>
	  </ul>
	</div>
	<?php endif; ?>
</div>