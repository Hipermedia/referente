<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<!-- Basic Page Needs
 ================================================== -->  
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
    <?php /*Print the <title> tag based on what is being viewed.*/
    	global $page, $paged;
    	wp_title( '|', true, 'right' );
    	// Add the blog name.
    	bloginfo( 'name' );
    	// Add the blog description for the home/front page.
    	$site_description = get_bloginfo( 'description', 'display' );
    	if ( $site_description && ( is_home() || is_front_page() ) )
    		echo " | $site_description";
    	// Add a page number if necessary:
    	if ( $paged >= 2 || $page >= 2 )
    		echo ' | ' . sprintf( __( 'Page %s', 'shbase' ), max( $paged, $page ) );
	?>
</title>
<meta name="author" content="<?php echo bloginfo( 'name' ); ?>" />
<meta name="robots" content="all">
<!-- Mobile Specific Metas
 ================================================== --> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- Favicon
  ================================================== -->
<link href="<?php the_field('favicon', 'option'); ?>" rel="icon" type="image/x-icon" />
<!-- pingback
  ================================================== -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body style="background-image: url('<?php //the_field('bgSite','option'); ?>');" <?php body_class(); ?>>

<header id="header" class="Header" role="banner" >
    
    <!-- Menú principal -->  
    <?php primalNav(); ?>

    <section class="Header-contenido">
        
        <!-- Logo CE-->
        <a href="<?php inicio_url(); ?>" id="logo-ce" class="Header-logoCE">
            <img src="<?php echo get_plantilla_url().'/images/referentechico.png'; ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <!-- Logo RR-->
        <!-- <a href="<?php inicio_url(); ?>" id="logo-rr" class="Header-logoRR">
            <img src="<?php //the_field('logoRR', 'option'); ?>" alt="<?php //bloginfo('name'); ?>">
        </a> -->
               
        <!-- Formulario de búsqueda [Catacterística superior] -->
        <?php //get_search_form(); ?>
        
        <!-- Banner -->
        <aside class="Header-bloqueInferior">
            
            <?php bannerHeader(); ?>
            
            <!-- Bloque utilitario -->
            <div class="Header-bloqueUtilitario">
                <?php
                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                $fecha = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
                ?>
                <p class="fecha"><?php echo $fecha; ?></p>

                <!-- Plantilla de tarjeta de clima -->
                <div class="clima">
                    <template id="Template-ciudad">
                        <img data-icon src="" alt="" class="img Card-image">
                        <h4 data-temp="current" class="temp Card-temp"></h4>
                        <h3 data-city class="ciudad Card-title"></h3>
                    </template>
                </div>

                <!-- Redes sociales -->
                <?php primalSocialShare(); ?>
            </div>

        </aside>
        


        
    </section>
</header>

<main class="main">