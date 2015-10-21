<?php
/**
 * Template Name: Sección interna noticias
 * Description: Permite crear una página de resumen de categoría obteniéndola vía ACF
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>

<section class="u-contenedor">
	<section class="CoverSlider">
	<?php $dif_id = rand(1,999999); ?>	
		<div id="internal-slider<?php echo $dif_id; ?>" class="flexslider">
		  	<ul class="slides">
		  		<?php 
		  		// the query
		  		$id_internal = get_field('categoriaSeccionNoticias');
		  		$args = array(
								'posts_per_page'	=> 8,
								'category__and' 	=> array($id_internal,32) 
							);
				$category_name = get_cat_name( $id_internal );
		  		$consulta = new WP_Query( $args ); ?>
		  		<?php if ( $consulta->have_posts() ) : ?>
		  			<!-- the loop -->
		  			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
						<li class="CoverSlider-slide">
							<?php the_post_thumbnail('large', array( 'class' => "CoverSlider-slideImage")); ?>
							<div class="CoverSlider-slideCaption">
								<h1 class="CoverSlider-slideTitle"><?php the_title(); ?></h1>
								<?php the_excerpt(); ?>
							</div>
						</li>
		  			<?php endwhile; ?>
		  			<!-- end of the loop -->
		  			<?php wp_reset_postdata(); ?>
		  		<?php else : ?>
		  			<p><?php _e( 'No hay resultados' ); ?></p>
		  		<?php endif; ?>
		  	</ul>
		</div>

		<div id="internal-slider-thumb-nav<?php echo $dif_id; ?>" class="flexslider seccion-interna-noticias">
		  	<ul class="slides">
		  		<?php 
		  		// the query
		  		$id_internal2 = get_field('categoriaSeccionNoticias');
		  		$args = array(
								'posts_per_page'	=> 8,
								'category__and' 	=> array($id_internal2,32) 
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
</section>

<section class="u-contenedor">
	<section class="Noticias">
		<aside class="BannerNoticias">
			<figure>
				<img src="<?php the_field('bannerNoticias1','option'); ?>" alt="">
			</figure>
		</aside>
		<section class="Noticias-bloquePortada1">
			<h2 class="Noticias-categoria"><?php echo $category_name; ?></h2>
			<section class="Noticias-destacada">
				<?php 
				$id_internal_noticias = get_field('categoriaSeccionNoticias');
				// the query
				$args = array(
						'posts_per_page'	=> 1,
						'cat'				=> $id_internal_noticias, 
					);
				$consulta = new WP_Query( $args ); ?>
				<?php if ( $consulta->have_posts() ) : ?>
					<!-- the loop -->
					<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<figure>
								<?php the_post_thumbnail('large'); ?>
							</figure>
						</a>
						<a href="<?php the_permalink(); ?>">
							<h2 class="Noticias-titulo"><?php the_title(); ?></h2>
						</a>
						<p class="Noticias-fecha">Lunes 19 de enero de 2015</p>
						<p class="Noticias-resumen"><?php the_excerpt(); ?></p>
					<?php endwhile; ?>
					<!-- end of the loop -->
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'No hay resultados' ); ?></p>
				<?php endif; ?>
			</section>

			<section class="Noticias-secundarias u-noticias-secundarias-internas">
				<?php 
				$id2 = get_field('categoriaSeccionNoticias');
				// the query
				$args = array(
						'cat'				=> $id2, 
					);
				$consulta = new WP_Query( $args ); ?>
				<?php if ( $consulta->have_posts() ) : ?>
					<!-- the loop -->
					<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
						<div class="Noticias-noticia u-internalNew">
							<a href="<?php the_permalink(); ?>">
								<figure>
									<?php the_post_thumbnail('large'); ?>
								</figure>
							</a>
							<a href="<?php the_permalink(); ?>">
								<h2 class="Noticias-titulo"><?php the_title(); ?></h2>
							</a>
							<p class="Noticias-fecha">Lunes 19 de enero de 2015</p>
						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'No hay resultados' ); ?></p>
				<?php endif; ?>
			</section>
		</section>
	</section>
	<?php get_sidebar(); ?>
</section>

<!-- scripts para los sliders -->
<script>
	jQuery('#internal-slider-thumb-nav'+<?php echo $dif_id; ?>).flexslider({
	 	animation: "slide",
	 	controlNav: false,
		directionNav: false,
	 	animationLoop: true,
	 	slideshow: true,
	 	itemWidth: 147,
	 	asNavFor: '#internal-slider'+<?php echo $dif_id; ?>
	});

	jQuery('#internal-slider'+<?php echo $dif_id; ?>).flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: true,
		directionNav: false,
		slideshow: true,
		prevText: "",
		nextText: "",
		sync: '#internal-slider-thumb-nav'+<?php echo $dif_id; ?>
	});
</script>

<?php get_footer(); ?>
