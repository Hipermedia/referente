<?php
/* Footer
 ----------------------------------*/
?>

</main>

<footer class="Footer">

    <section class="u-contenedor u-filmstrip">
      <div id="filmstrip" class="flexslider">
        <ul class="slides">
          <li>
            <img src="<?php echo get_plantilla_url().'/images/filmstrip/4.png'; ?>" />
          </li>  
          <li>
            <img src="<?php echo get_plantilla_url().'/images/filmstrip/1.png'; ?>" />
          </li>
          <li>
            <img src="<?php echo get_plantilla_url().'/images/filmstrip/4.png'; ?>" />
          </li>
          <li>
            <img src="<?php echo get_plantilla_url().'/images/filmstrip/2.png'; ?>" />
          </li>
          <li>
            <img src="<?php echo get_plantilla_url().'/images/filmstrip/4.png'; ?>" />
          </li>
          <li>
            <img src="<?php echo get_plantilla_url().'/images/filmstrip/5.png'; ?>" />
          </li>
          <!-- items mirrored twice, total of 12 -->
        </ul>
      </div>
    </section>	
    
    <section class="u-contenedor Footer-contenedor">
		
		<div class="Footer-bloque">
			<!-- Logo CE-->
			<a class="Footer-logo" href="<?php inicio_url(); ?>" id="logo-ce" class="Header-logoCE">
			    <img src="<?php echo get_plantilla_url().'/images/referentechico.png'; ?>" alt="<?php bloginfo('name'); ?>">
			</a>

			<h4 class="condiciones" data-toggle="modal" data-target="#modalAviso">Aviso Legal</h4>
			<h4 class="condiciones" data-toggle="modal" data-target="#modalPoliticas">Políticas de privacidad</h4>
			<h4 class="condiciones" data-toggle="modal" data-target="#modalCodigo">Código de ética</h4>
		</div>

		<div class="Footer-bloque">
			<?php the_field('footerDescripcion', 'option'); ?>
			<i class="fa fa-whatsapp"></i><h3 class="Footer-contacto"><?php the_field('whatsapp', 'option'); ?></h3>
			<i class="fa fa-phone"></i><h3 class="Footer-contacto"><?php the_field('telefono', 'option'); ?></h3>
			<i class="fa fa-envelope"></i><h3 class="Footer-contacto"><?php the_field('correo', 'option'); ?></h3>
		</div>

		<div class="Footer-bloque">
			<?php newsletter(); ?>
			<?php primalSocialShare(); ?>
			<h3 class="anuncio">¿Quieres anunciarte en nuestro sitio, click <a href="<?php the_field('contactoUrl', 'option'); ?>">aquí</a></h3>
		</div>
    	
    	<aside class="Footer-creditos">
    		<a class="Footer-firmaSH" href="http://www.solucioneshipermedia.com/">Soluciones Hipermedia | Desarrollo web</a>
    	</aside>

    	<!-- Ventanas modales -->
    	<!-- aviso legal -->
    	<div class="modal fade" id="modalAviso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    	  	<div class="modal-dialog" role="document">
    	  	  	<div class="modal-content">
    	  	  	  	<div class="modal-header">
    	  	  	  	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	  	  	  	  <h4 class="modal-title" id="myModalLabel">Aviso legal</h4>
    	  	  	  	</div>
    	  	  	  	<div class="modal-body">
						<?php the_field('avisoLegal', 'option'); ?>
    	  	  	  	</div>
    	  	  	  	<div class="modal-footer">
    	  	  	  	  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    	  	  	  	</div>
    	  	  	</div>
    	  	</div>
    	</div>

    	<!-- políticas de privacidad -->
    	<div class="modal fade" id="modalPoliticas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    	  	<div class="modal-dialog" role="document">
    	  	  	<div class="modal-content">
    	  	  	  	<div class="modal-header">
    	  	  	  	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	  	  	  	  <h4 class="modal-title" id="myModalLabel">Políticas de privacidad</h4>
    	  	  	  	</div>
    	  	  	  	<div class="modal-body">
						<?php the_field('politicasPriv' , 'option'); ?>
    	  	  	  	</div>
    	  	  	  	<div class="modal-footer">
    	  	  	  	  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    	  	  	  	</div>
    	  	  	</div>
    	  	</div>
    	</div>

    	<!-- código de ética -->
    	<div class="modal fade" id="modalCodigo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    	  	<div class="modal-dialog" role="document">
    	  	  	<div class="modal-content">
    	  	  	  	<div class="modal-header">
    	  	  	  	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	  	  	  	  <h4 class="modal-title" id="myModalLabel">Código de ética</h4>
    	  	  	  	</div>
    	  	  	  	<div class="modal-body">
						<?php the_field('codigoEtica', 'option'); ?>
    	  	  	  	</div>
    	  	  	  	<div class="modal-footer">
    	  	  	  	  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    	  	  	  	</div>
    	  	  	</div>
    	  	</div>
    	</div>
    </section>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67481682-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- JS personalizados del tema -->
<?php waypoints(); // Librería que detecta puntos en el scroll de pantalla ?>
<?php bootstrap(); // framework Bootsrap ?>
<?php // bootstrapMaterial(); // Bootsrap - Material ?>
<?php // ripples(); // Complemento de Bootsrap - Material ?>
<?php flexslider(); // Flexslider ?>
<?php themejs(); // Los scripts personalizados del tema ?>
<?php wp_footer(); ?>
</body>
</html>
