<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<section class="u-contenedor">

	<?php while ( have_posts() ) : the_post(); ?>
	    <article class="Post u-contenido">	
			
			<!-- Imágen destacada -->
			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="Post-featuredImage">
					<?php the_post_thumbnail( 'large' ); ?>
				</figure>
			<?php endif; ?>
			
			<?php if(get_field('fuente')) : ?>
				<p class="Post-origenNoticias">
					Tomado de: 
					<a href="<?php the_field('url'); ?>" target="_blank"><?php the_field('fuente'); ?></a>
				</p>
			<?php endif; ?>

			<!-- Título del artículo -->
			<h1 class="Post-title"><?php the_title(); ?></h1>

			 	<?php $columnista = get_field('columnistaDatos'); ?>
				<?php $foto = get_field('columnistaFoto', 'user_' . $columnista['ID']); ?>
				<?php $nombre = $columnista['display_name']; ?>
				<?php $nombre_columna = get_field('columnistaColumna', 'user_' . $columnista['ID']); ; ?>
				<?php $biografia = $columnista['user_description']; ?>
				<?php $facebook = get_field('columnistaFacebook', 'user_' . $columnista['ID']); ?>
				<?php $twitter = get_field('columnistaTwitter', 'user_' . $columnista['ID']); ?>
				<?php $googleP =get_field('columnistaGP', 'user_' . $columnista['ID']); ?>
				<?php $correo = $columnista['user_email']; ?>

				<?php //var_dump($columnista); ?>
				
				<?php if(get_field('columnistaDatos')) : ?>
				<div class="CardsTestimony">

					<article class="CardsTestimony-card">
						<div class="CardsTestimony-cardMain">
							<figure class="CardsTestimony-cardImage">
								<img src="<?php echo $foto; ?>" alt="">
							</figure>
							<div class="CardsTestimony-cardInfo">
								<h2><?php echo $nombre; ?></h2>
								<h3><?php echo $nombre_columna; ?></h3>
								<p><?php echo $biografia; ?></p>
							</div>
						</div>

						<div class="CardsTestimony-cardBack">
							<div class="CardsTestimony-cardSocial">
								<a href="<?php echo $facebook; ?>" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
								<a href="<?php echo $twitter; ?>" title="Twitter" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
								<a href="<?php echo $googleP; ?>"title="Google Plus" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a>
								<a href="mailto:<?php echo $correo; ?>" title="Mail" target="_blank"><i class="fa fa-envelope fa-3x"></i></a>
							</div>
						</div>
					</article>
				</div>
				<?php endif; ?>
			<!-- Contenido -->
			<?php the_content(); ?>	
			<!-- Compartir en redes sociales -->
			<?php anliSocialShare(); ?>
	   		<?php subh_set_post_view( get_the_ID() ); ?>
		</article>
	<?php endwhile; // end of the loop. ?>
	
	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>

