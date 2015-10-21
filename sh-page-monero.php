<?php
/**
 * Template Name: Moneros
 * Description: Permite crear una página de resumen de categoría obteniéndola vía ACF
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>

<section class="u-contenedor">
	<section class="Moneros">
		<?php 
		// the query
		$args = array(
				'post_per_page' => 9,
				'cat'			=> 30
			);
		$consulta = new WP_Query( $args ); ?>
		<?php if ( $consulta->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
				<div class="Moneros-monero">
					<a class="u-lightbox" href="<?php echo $url; ?>" rel="lightbox">
						<img src="<?php echo $url; ?>" alt="">
					</a>
				</div>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php _e( 'No hay resultados' ); ?></p>
		<?php endif; ?>
	</section>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
