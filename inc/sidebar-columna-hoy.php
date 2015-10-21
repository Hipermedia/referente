<?php 
/** Sidebar; Columna Hoy
------------------------------------------------------------------- */ 
?>
<section class="SidebarColumnaHoy">
  <?php 
    $destacados = get_field('columnistasDestacados');
    $args = array(
          'posts_per_page'  => 1,
          'cat' => 27
        );
    $consulta = new WP_Query( $args ); 
  ?>
  <?php if ( $consulta->have_posts() ) : ?>
    <?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
      <?php $columnista = get_field('columnistaDatos'); ?>
      <?php $foto = get_field('columnistaFoto', 'user_' . $columnista['ID']); ?>
      <?php $nombre = $columnista['user_firstname']; ?>
      <?php $apellido = $columnista['user_lastname']; ?>
      <h2 class="h2">Columna hoy</h2>
      <figure>
        <img src="<?php echo $foto; ?>" alt="<?php echo $nombre . ' ' . $apellido; ?>" alt="">
      </figure>
      <h2 class="SidebarColumnaHoy-titulo"><?php the_title(); ?></h2>
      <h3 class="SidebarColumnaHoy-columnista"><?php echo $nombre . ' ' . $apellido; ?></h3>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Leer</button>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php _e( 'No hay resultados' ); ?></p>
  <?php endif; ?>
</section>

<!-- Modal -->
<?php 
  $destacados = get_field('columnistasDestacados');
  $args = array(
        'posts_per_page'  => 1,
        'cat' => 27
      );
  $consulta = new WP_Query( $args ); 
?>
<?php if ( $consulta->have_posts() ) : ?>
  <?php while ( $consulta->have_posts() ) : $consulta->the_post(); ?>
  <?php $columnista = get_field('columnistaDatos'); ?>
  <?php $nombre = $columnista['user_firstname']; ?>
  <?php $apellido = $columnista['user_lastname']; ?>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
        </div>
        <div class="modal-body">
          <p>Por: <?php echo $nombre . ' ' . $apellido; ?></p>
          <?php the_content(); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php else : ?>
  <p><?php _e( 'No hay resultados' ); ?></p>
<?php endif; ?>
