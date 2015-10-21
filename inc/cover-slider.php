<?php 
/** Slider principal
------------------------------------------------------------------- */ 
?>

<section class="CoverSlider">	
	<div id="cover-slider" class="flexslider">
	  	<ul class="slides">
	  		<?php 
	  		// the query
	  		$args = array(
							'posts_per_page'	=> 8,
							'cat'				=> 9, 
						);
	  		$consulta = new WP_Query( $args ); ?>
	  		<?php if ( $consulta->have_posts() ) : ?>
	  			<!-- the loop -->
	  			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
					<li class="CoverSlider-slide">
						<div class="CoverSlider-slideCaption">
							<h1 class="CoverSlider-slideTitle"><?php the_title(); ?></h1>
							<?php the_excerpt(); ?>
						</div>
						<?php the_post_thumbnail('large', array( 'class' => "CoverSlider-slideImage")); ?>
					</li>
	  			<?php endwhile; ?>
	  			<!-- end of the loop -->
	  			<?php wp_reset_postdata(); ?>
	  		<?php else : ?>
	  			<p><?php _e( 'No hay resultados' ); ?></p>
	  		<?php endif; ?>
	  	</ul>
	</div>

	<div id="cover-slider-thumb-nav" class="flexslider">
	  	<ul class="slides">
	  		<?php 
	  		// the query
	  		$args = array(
							'posts_per_page'      => 8,
							'cat' => 9, 
						);
	  		$consulta = new WP_Query( $args ); ?>
	  		<?php if ( $consulta->have_posts() ) : ?>
	  			<!-- the loop -->
	  			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
					<li class="CoverSlider-slide">
						<?php the_post_thumbnail('small', array( 'class' => "CoverSlider-slideImage-nav")); ?>
					</li>
	  			<?php endwhile; ?>
	  			<!-- end of the loop -->
	  			<?php wp_reset_postdata(); ?>
	  		<?php else : ?>
	  			<p><?php _e( 'No hay resultados' ); ?></p>
	  		<?php endif; ?>
	  	</ul>
	</div>
</section>

