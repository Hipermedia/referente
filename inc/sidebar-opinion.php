<?php 
/** Sidebar; Opinión
------------------------------------------------------------------- */ 
?>
<!-- sidebar-opinion -->
<section class="SidebarOpinion">
	<h2 class="h2">Columnas de opinión</h2>
	<ul class="nav nav-tabs SidebarOpinion-tabs">
		<li class="active">
			<a data-toggle="tab" href="#home"><?php echo get_cat_name( get_field('columnistasPestana1', 'option') ); ?></a>
		</li>
	  	<li>
	  		<a data-toggle="tab" href="#menu1"><?php echo get_cat_name( get_field('columnistasPestana2', 'option') ); ?></a>
	 	</li>
	 	<li>
	  		<a data-toggle="tab" href="#menu2"><?php echo get_cat_name( get_field('columnistasPestana3', 'option') ); ?></a>
	 	</li>
	</ul>

	<div class="tab-content">
	  <div id="home" class="tab-pane fade in active">
	  		<?php 
	  		$pestana1 = get_field('columnistasPestana1', 'option');
	  		$args = array(
	 					'posts_per_page'	=> 5,
	 					'cat' 				=> $pestana1
	 				);
	  		$consulta = new WP_Query( $args ); ?>
	  		<?php if ( $consulta->have_posts() ) : ?>
	  			<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
	 				<div class="SidebarOpinion-ficha">
	 					<?php $columnista = get_field('columnistaDatos'); ?>
						<?php $foto = get_field('columnistaFoto', 'user_' . $columnista['ID']); ?>
						<?php $nombre = $columnista['user_firstname']; ?>
						<?php $apellido = $columnista['user_lastname']; ?>
	 					<figure>
	 						<img src="<?php echo $foto; ?>" alt="<?php echo $nombre . ' ' . $apellido; ?>">
	 					</figure>
	 					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	 					<p><?php echo $nombre . ' ' . $apellido; ?></p>
	 				</div>
	  			<?php endwhile; ?>
	  			<?php wp_reset_postdata(); ?>
	  		<?php else : ?>
	  			<p><?php _e( 'Sin resultados' ); ?></p>
	  		<?php endif; ?>
	  </div>

	  <div id="menu1" class="tab-pane fade">
		 	<?php 
		 	$pestana2 = get_field('columnistasPestana2', 'option');
		 	$args = array(
						'posts_per_page'	=> 5,
						'cat' 				=> $pestana2
					);
		 	$consulta = new WP_Query( $args ); ?>
		 	<?php if ( $consulta->have_posts() ) : ?>
		 		<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
					<div class="SidebarOpinion-ficha">
	 					<?php $columnista = get_field('columnistaDatos'); ?>
						<?php $foto = get_field('columnistaFoto', 'user_' . $columnista['ID']); ?>
						<?php $nombre = $columnista['user_firstname']; ?>
						<?php $apellido = $columnista['user_lastname']; ?>
	 					<figure>
	 						<img src="<?php echo $foto; ?>" alt="<?php echo $nombre . ' ' . $apellido; ?>">
	 					</figure>
	 					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	 					<p><?php echo $nombre . ' ' . $apellido; ?></p>
					</div>
		 		<?php endwhile; ?>
		 		<?php wp_reset_postdata(); ?>
		 	<?php else : ?>
		 		<p><?php _e( 'Sin resultados' ); ?></p>
		 	<?php endif; ?>
	  </div>

	  <div id="menu2" class="tab-pane fade">
	  	 	<?php 
	  	 	$pestana3 = get_field('columnistasPestana3', 'option');
	  	 	$args = array(
	  					'posts_per_page'	=> 5,
	  					'cat' 				=> $pestana3
	  				);
	  	 	$consulta = new WP_Query( $args ); ?>
	  	 	<?php if ( $consulta->have_posts() ) : ?>
	  	 		<?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
	  				<div class="SidebarOpinion-ficha">
	 					<?php $columnista = get_field('columnistaDatos'); ?>
						<?php $foto = get_field('columnistaFoto', 'user_' . $columnista['ID']); ?>
						<?php $nombre = $columnista['user_firstname']; ?>
						<?php $apellido = $columnista['user_lastname']; ?>
	 					<figure>
	 						<img src="<?php echo $foto; ?>" alt="<?php echo $nombre . ' ' . $apellido; ?>">
	 					</figure>
	 					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	 					<p><?php echo $nombre . ' ' . $apellido; ?></p>
	  				</div>
	  	 		<?php endwhile; ?>
	  	 		<?php wp_reset_postdata(); ?>
	  	 	<?php else : ?>
	  	 		<p><?php _e( 'Sin resultados' ); ?></p>
	  	 	<?php endif; ?>
	  </div>
	</div>
</section>