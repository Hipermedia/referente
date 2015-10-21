<?php 
/** Columnistas destacados
------------------------------------------------------------------- */ 
?>
<!-- columnistas-destacados -->
<section class="ColumnistasDestacados">
	<h4>Opinión</h3>
	<div class="wrapper">
		<div id="cover-slider-columnistas" class="flexslider">
		  	<ul class="slides">
		  		<?php 
		  			$col_destacados = get_field('columnistasDestacados', 'option');
		  			$args = array(
		  						'posts_per_page'	=> 8,
		  						'cat'	=> $col_destacados,
		  					);
		  			$consulta = new WP_Query( $args ); 
		  		?>
		  		<?php if ( $consulta->have_posts() ) : ?>
		  			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
		  			 	<?php $columnista = get_field('columnistaDatos'); ?>
		  				<?php $foto = get_field('columnistaFoto', 'user_' . $columnista['ID']); ?>
		  				<?php $nombre = $columnista['user_firstname']; ?>
		  				<?php $apellido = $columnista['user_lastname']; ?>
		  				<li>
		  					<div class="CardsTestimony">
		  						<article class="CardsTestimony-card">
		  							<div class="CardsTestimony-cardMain">
		  								<figure class="CardsTestimony-cardImage">
		  									<img src="<?php echo $foto; ?>" alt="<?php echo $nombre . ' ' . $apellido; ?>">
		  								</figure>
		  								<div class="CardsTestimony-cardInfo">
		  									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  									<h3><?php echo $nombre . ' ' . $apellido; ?></h3>
		  									<?php the_excerpt(); ?>
		  								</div>
		  							</div>
		  						</article>
		  					</div>
		  				</li>
		  			<?php endwhile; ?>
		  			<?php wp_reset_postdata(); ?>
		  		<?php else : ?>
		  			<p><?php _e( 'No hay resultados' ); ?></p>
		  		<?php endif; ?>
		  	</ul>
		</div>
	</div>
</section>