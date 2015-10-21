<?php 
/** Monero
------------------------------------------------------------------- */ 
?>
<!-- monero -->
<section class="Monero">
	<figure class="Monero-figure">

		<?php 
		// the query
		$args = array(
				'posts_per_page'	=> 1,
				'cat'				=> 30, 
			);
		$consulta = new WP_Query( $args ); ?>
		<?php if ( $consulta->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
				<a href="<?php echo $url; ?>" rel="lightbox"><img src="<?php echo $url; ?>" alt=""></a>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php _e( 'No hay resultados' ); ?></p>
		<?php endif; ?>

		<figcaption class="Monero-caption">
			<a href="<?php the_field('monerosSite','option'); ?>" class="Monero-botonMas btn">Ver anteriores</a>
		</figcaption>
	</figure>
</section>