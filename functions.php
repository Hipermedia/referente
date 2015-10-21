<?php
/** Archivo de funciones SH One Page */

/**
 * Funciones personalizadas de Soluciones Hipermedia
 */

/** Muestra los errores  */
function show_errors($array=array()) {
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
}

/* SESIONES DE USUARIO
------------------------------------------------------------- */

/* Redirige a la portada si el usuario no está logeado  */
 function soloUsuarioRegistrado() 
 {
	 if (!is_user_logged_in()) 
	 {
	   wp_redirect( home_url(), 302 ); exit;
	 } 
 }
/* Oculta la barra de administrador si no es usuario  */
function remueveBarraAdmin() 
{
	if (!current_user_can('administrator') && !is_admin()) 
	{
	  show_admin_bar(false);
	}
}
add_action('after_setup_theme', 'remueveBarraAdmin');

 /* Redirige a no administradores al home del sitio  */
function sh_login_redirect( $redirect_to, $request, $user  ) 
{
	return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? admin_url() : site_url();
}
add_filter( 'login_redirect', 'sh_login_redirect', 10, 3 );

/* ADVANCE CUSTOM FIELDS
------------------------------------------------------------ */
/* Options Page */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configuración',
		'menu_title'	=> 'Configuración',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		// 'redirect'		=> false
	));

	// cabecera
	acf_add_options_sub_page(array(
		'title' 	=> 'Generales',
		'parent_slug'	=> 'theme-general-settings',
	));

	// cabecera
	acf_add_options_sub_page(array(
		'title' 	=> 'Cabecera',
		'parent_slug'	=> 'theme-general-settings',
	));

	// banners
	acf_add_options_sub_page(array(
		'title' 	=> 'Banners',
		'parent_slug'	=> 'theme-general-settings',
	));

	// videos y moneros
	acf_add_options_sub_page(array(
		'title' 	=> 'Videos',
		'parent_slug'	=> 'theme-general-settings',
	));

	// columnistas
	acf_add_options_sub_page(array(
		'title' 	=> 'Columnistas',
		'parent_slug'	=> 'theme-general-settings',
	));

	// Bloques de noticias 
	acf_add_options_sub_page(array(
		'title' 	=> 'Bloques de noticias',
		'parent_slug'	=> 'theme-general-settings',
	));

	// Columnas de opinion
	// acf_add_options_sub_page(array(
	// 	'title' 	=> 'Columnas de opinion',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// Columna hoy
	// acf_add_options_sub_page(array(
	// 	'title' 	=> 'Columna hoy',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// Análisis
	acf_add_options_sub_page(array(
		'title' 	=> 'Análisis',
		'parent_slug'	=> 'theme-general-settings',
	));

	// Contacto
	acf_add_options_sub_page(array(
		'title' 	=> 'Contacto',
		'parent_slug'	=> 'theme-general-settings',
	));

	// pie
	acf_add_options_sub_page(array(
		'title' 	=> 'Pie',
		'parent_slug'	=> 'theme-general-settings',
	));
}

/** Imprime el url del home  */
function inicio_url() {
	print get_home_url();
}
/** Envía el valor del url del home  */
function get_inicio_url() {
	return get_home_url();
}
/** Envía el valor del url del tema en uso  */
function plantilla_url() {
	echo get_bloginfo( 'template_url' );
}
/** Envía el valor del url del tema en uso  */
function get_plantilla_url() {
	return get_bloginfo( 'template_url' );
}

/* BLOQUES
 * ------------------------------------------------------------- */

/* Navegación   
 * ------------------------------------------------------------- */
/* PRIMAL; navegación principal */
function primalNav() {
	get_template_part( 'inc/nav/primal-nav');
}

/* Newsletter
 * ------------------------------------------------------------- */
function newsletter() {
	get_template_part( 'inc/newsletter');
}

/* Cover slider
 * ------------------------------------------------------------- */
function coverSlider() {
	get_template_part( 'inc/cover-slider');
}

/* Frase del dia
 * ------------------------------------------------------------- */
function fraseDelDia() {
	get_template_part( 'inc/blocks/frase-del-dia');
}


/* Banners
 * ------------------------------------------------------------- */
/* En cabecera */
function bannerHeader() {
	get_template_part( 'inc/banners/header-banner');
}
/* Bajo el rotatorio */
function bannerSlider() {
	get_template_part( 'inc/banners/cover-banner-slider');
}
/* Junto al monero */
function bannerMonero() {
	get_template_part( 'inc/banners/cover-banner-monero');
}
/* Bloque de noticias 1 */
function bannerNoticias1() {
	get_template_part( 'inc/banners/cover-banner-noticias1');
}
/* Bloque de noticias 2 */
function bannerNoticias2() {
	get_template_part( 'inc/banners/cover-banner-noticias2');
}
/* Bloque de noticias 3 */
function bannerNoticias3() {
	get_template_part( 'inc/banners/cover-banner-noticias3');
}
/* Bloque de noticias 4 */
function bannerNoticias4() {
	get_template_part( 'inc/banners/cover-banner-noticias4');
}
/* Bloque de noticias 5 */
function bannerNoticias5() {
	get_template_part( 'inc/banners/cover-banner-noticias5');
}
/* Sidebar 1 */
function bannerSidebar1() {
	get_template_part( 'inc/banners/sidebar1');
}
/* Sidebar 2 */
function bannerSidebar2() {
	get_template_part( 'inc/banners/sidebar2');
}
/* Sidebar 3 */
function bannerSidebar3() {
	get_template_part( 'inc/banners/sidebar3');
}
/* Sidebar 4 */
function bannerSidebar4() {
	get_template_part( 'inc/banners/sidebar4');
}
/* Sidebar 5 */
function bannerSidebar5() {
	get_template_part( 'inc/banners/sidebar5');
}

/* Videos y monero
 * ------------------------------------------------------------- */
/* Rotatorio de videos  */
function videoSlider() {
	get_template_part( 'inc/rotatotio-videos');
}
/* ANLI; social share buttons */
function monero() {
	get_template_part( 'inc/monero');
}

/* Columnistas destacados
 * ------------------------------------------------------------- */
function colDestacados() {
	get_template_part( 'inc/columnistas-destacados');
}

function cardsTestimony() {
	get_template_part( 'inc/cards-testimony');
}

/* Bloques de noticias
 * ------------------------------------------------------------- */
/* Bloque noticias 1 */
function bloqueNoticias1() {
	get_template_part( 'inc/noticias/portada1');
}
/* Bloque noticias 2 */
function bloqueNoticias2() {
	get_template_part( 'inc/noticias/portada2');
}
/* Bloque noticias 3 */
function bloqueNoticias3() {
	get_template_part( 'inc/noticias/portada3');
}
/* Bloque noticias 4 */
function bloqueNoticias4() {
	get_template_part( 'inc/noticias/portada4');
}
/* Bloque noticias 5 */
function bloqueNoticias5() {
	get_template_part( 'inc/noticias/portada5');
}
/* Bloque noticias 6 */
function bloqueNoticias6() {
	get_template_part( 'inc/noticias/portada6');
}
/* Bloque noticias 7 */
function bloqueNoticias7() {
	get_template_part( 'inc/noticias/portada7');
}
/* Bloque noticias 8 */
function bloqueNoticias8() {
	get_template_part( 'inc/noticias/portada8');
}
/* Bloque noticias 9 */
function bloqueNoticias9() {
	get_template_part( 'inc/noticias/portada9');
}


/* Columnas de opinion
 * ------------------------------------------------------------- */
function columnasOpinion() {
	get_template_part( 'inc/sidebar-opinion');
}

/* Columna hoy
 * ------------------------------------------------------------- */
function columnaHoy() {
	get_template_part( 'inc/sidebar-columna-hoy');
}

/* Análisis
 * ------------------------------------------------------------- */
function analisis() {
	get_template_part( 'inc/sidebar-analisis');
}

/* Más leído
 * ------------------------------------------------------------- */
function masLeido() {
	get_template_part( 'inc/sidebar-mas-leido');
}

/* Redes sociales
 * ------------------------------------------------------------- */
/* PRIMAL; social link buttons */
function primalSocialShare() {
	get_template_part( 'inc/social/primal-sociallinks');
}
/* ANLI; social share buttons */
function anliSocialShare() {
	get_template_part( 'inc/social/anli-socialshare');
}






/* ARTICULOS 
 * ------------------------------------------------------------- */

/** Envía el valor del url del tema en uso  */
function the_custom_meta() {
  print 'Publicado por <strong>' . get_the_author() .'</strong>'
  		. ' el ' . get_the_time('j \d\e\ F \d\e\ Y') 
  		. ' a las ' . get_the_time('g:i a');
}

/**
 * Pide a WP que corra shbase_setup() cuando el hook 'after_setup_theme' se está ejecutando
 */
add_action( 'after_setup_theme', 'shbase_setup' );

if ( ! function_exists( 'shbase_setup' ) ):
/**
 * Establece y activa varias de las capacidades de WordPress para el tema y desactiva otras
 *
 */
function shbase_setup() {

	/* Permite traducir el tema
	 * la traducción se agrega en el directorio /languages/ 
	 */
	load_theme_textdomain( 'shbase', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'shbase' ) );

	// Add support for custom backgrounds.
	add_theme_support( 'custom-background', array(
		// Let WordPress know what our default background color is.
		// This is dependent on our current color scheme.
		'default-color' => $default_background_color,
	) );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );

	
	// Elimina algunas opciones del menu de administración de WP
	add_action( 'admin_menu', 'my_remove_menus', 999 );

	function my_remove_menus() {

		// provide a list of usernames who can edit all menues here
		$admins = array( 
			'admin',
			'hipermedia',
		);
	 
		// get the current user
		$current_user = wp_get_current_user();
	 
		// match and remove if needed
		if( !in_array( $current_user->user_login, $admins ) )
		{
			//TOP MENUES
			//remove_menu_page( 'index.php' );                  //Dashboard
			//remove_menu_page( 'edit.php' );                   //Posts
			//remove_menu_page( 'upload.php' );                 //Media
			//remove_menu_page( 'edit.php?post_type=page' );    //Pages
			remove_menu_page( 'edit-comments.php' );          //Comments
			//remove_menu_page( 'themes.php' );                 //Appearance
			//remove_menu_page( 'users.php' );                  //Users
			remove_menu_page( 'options-general.php' );        //Settings
			remove_menu_page( 'tools.php' );					//Tools
			remove_menu_page( 'plugins.php' );					//Plugins
			remove_menu_page( 'ot-settings' );					//OT Settings
			remove_menu_page('edit.php?post_type=acf-field-group');			//ACF Settings
			remove_menu_page( 'wpcf7' );
			remove_menu_page( 'WP-Lightbox-2' );
			remove_menu_page( 'facebook-application-settings' );
			
			//SUBMENUES
			remove_submenu_page( 'index.php', 'update-core.php' );
			remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
			remove_submenu_page( 'admin.php', '?page=wpcf7' );
			remove_submenu_page( 'themes.php', 'themes.php' );					//Theme changer
			remove_submenu_page( 'themes.php', 'widgets.php' );
			remove_submenu_page( 'themes.php', 'customize.php?return=%2Fwp-admin%2Findex.php' );						//Theme Customizer
			remove_submenu_page( 'themes.php', 'theme-editor.php' );					//Theme Editor
			remove_submenu_page( 'themes.php', 'custom-background' );
			remove_submenu_page( 'themes.php', 'slb_options' );
			remove_submenu_page( 'options-general.php', 'options-permalink.php' );		//Permalinks option
		}	 
	}
	
}
endif; // shbase_setup

/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 */
function shbase_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'shbase_excerpt_length' );

if ( ! function_exists( 'shbase_continue_reading_link' ) ) :
/**
 * Returns a "Continue Reading" link for excerpts
 */
function shbase_continue_reading_link() {
	return '<br> <a class="btn CoverSlider-slideMore" href="'. esc_url( get_permalink() ) . '">' . __( 'Continuar leyendo <span class=\"meta-nav\"></span>', 'shbase' ) . '</a>';
}
endif; // shbase_continue_reading_link

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and shbase_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function shbase_auto_excerpt_more( $more ) {
	return ' &hellip;' . shbase_continue_reading_link();
}
add_filter( 'excerpt_more', 'shbase_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function shbase_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= shbase_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'shbase_custom_excerpt_more' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function shbase_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'shbase_page_menu_args' );


if ( ! function_exists( 'shbase_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function shbase_content_nav( $html_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr( $html_id ); ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'shbase' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'shbase' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'shbase' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // shbase_content_nav


/**
 * Return the first link from the post content. If none found, the
 * post permalink is used as a fallback.
 *
 * @uses get_url_in_content() to get the first URL from the post content.
 *
 * @return string
 */
function shbase_get_first_url() {
	$content = get_the_content();
	$has_url = function_exists( 'get_url_in_content' ) ? get_url_in_content( $content ) : false;

	if ( ! $has_url )
		$has_url = shbase_url_grabber();

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Return the URL for the first link found in the post content.
 *
 * @since SH Base 1.0
 * @return string|bool URL or false when no link is present.
 */
function shbase_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;

	return esc_url_raw( $matches[1] );
}


/**
 * Retrieves the IDs for images in a gallery.
 *
 * @uses get_post_galleries() first, if available. Falls back to shortcode parsing,
 * then as last option uses a get_posts() call.
 *
 * @since SH Base 1.6.
 *
 * @return array List of image IDs from the post gallery.
 */
function shbase_get_gallery_images() {
	$images = array();

	if ( function_exists( 'get_post_galleries' ) ) {
		$galleries = get_post_galleries( get_the_ID(), false );
		if ( isset( $galleries[0]['ids'] ) )
		 	$images = explode( ',', $galleries[0]['ids'] );
	} else {
		$pattern = get_shortcode_regex();
		preg_match( "/$pattern/s", get_the_content(), $match );
		$atts = shortcode_parse_atts( $match[3] );
		if ( isset( $atts['ids'] ) )
			$images = explode( ',', $atts['ids'] );
	}

	if ( ! $images ) {
		$images = get_posts( array(
			'fields'         => 'ids',
			'numberposts'    => 999,
			'order'          => 'ASC',
			'orderby'        => 'menu_order',
			'post_mime_type' => 'image',
			'post_parent'    => get_the_ID(),
			'post_type'      => 'attachment',
		) );
	}

	return $images;
}


//Paginación
if ( ! function_exists( 'the_numbered_nav' ) ) :
function the_numbered_nav() { ?>
	<?php global $wp_query; ?>
	<nav id="numbered-pagination">
		<?php $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
        ) ); ?>
	</nav>
<?php }
endif; // shbase_numerated_nav

//Paginación personalizada
if ( ! function_exists( 'the_custom_numbered_nav' ) ) :
function the_custom_numbered_nav( $custom_query ) { ?>
	<?php $custom_query; ?>
	<nav id="numbered-pagination">
		<?php $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $custom_query->max_num_pages,
        ) ); ?>
	</nav>
<?php }
endif; // shbase_numerated_nav


// Flexslider
function flexslider() {
$template_url = get_bloginfo( 'template_url' );
	wp_enqueue_script( 'flexslider', $template_url .'/js/flexslider/jquery.flexslider.js', array('jquery'), '', 1);
}


add_action('wp_enqueue_scripts','flexslider_enqueue');
function flexslider_enqueue() {
  wp_enqueue_script('jquery-flexslider', get_bloginfo('template_url').'/js/flexslider/jquery.flexslider.js', array('jquery') );
}

// WayPoints
function waypoints() {
$template_url = get_bloginfo( 'template_url' );
	wp_enqueue_script( 'waypoints', $template_url .'/js/waypoints/jquery.waypoints.min.js', array('jquery'), '', 1);
}

// Bootstrap
function bootstrap() {
$template_url = get_bloginfo( 'template_url' );
	wp_enqueue_script( 'bootstrap', $template_url .'/js/bootstrap.js', array('jquery'), '', 1);
}
// Bootstrap Material
function bootstrapMaterial() {
$template_url = get_bloginfo( 'template_url' );
	wp_enqueue_script( 'bootstrapMaterial', $template_url .'/js/bootstrap-material/material.min.js', array('jquery'), '', 1);
}
// Ripples (complemento de bootrapmaterial)
function ripples() {
$template_url = get_bloginfo( 'template_url' );
	wp_enqueue_script( 'ripples', $template_url .'/js/bootstrap-material/ripples.js', array('jquery'), '', 1);
}


// Scripts del tema
function themejs() {
$template_url = get_bloginfo( 'template_url' );
	wp_enqueue_script( 'themejs', $template_url .'/js/theme.js', array('jquery'), '', 1);
}

// Scripts del tema
function clima() {
$template_url = get_bloginfo( 'template_url' );
	wp_enqueue_script( 'climajs', $template_url .'/js/clima.js', array('jquery'), '', 1);
}





/**
 * To display number of posts.
 *
 * @param $postID current post/page id
 *
 * @return string
 */
function subh_get_post_view( $postID ) {
	$count_key = 'post_views_count';
	$count     = get_post_meta( $postID, $count_key, true );
	if ( $count == '' ) {
		delete_post_meta( $postID, $count_key );
		add_post_meta( $postID, $count_key, '0' );

		return '0 View';
	}

	return $count . ' Views';
}

/**
 * To count number of views and store in database.
 *
 * @param $postID currently viewed post/page
 */
function subh_set_post_view( $postID ) {
	$count_key = 'post_views_count';
	$count     = (int) get_post_meta( $postID, $count_key, true );
	if ( $count < 1 ) {
		delete_post_meta( $postID, $count_key );
		add_post_meta( $postID, $count_key, '0' );
	} else {
		$count++;
		update_post_meta( $postID, $count_key, (string) $count );
	}
}

/**
 * Add a new column in the wp-admin posts list
 *
 * @param $defaults
 *
 * @return mixed
 */
function subh_posts_column_views( $defaults ) {
	$defaults['post_views'] = __( 'Views' );

	return $defaults;
}

/**
 * Display the number of views for each posts
 *
 * @param $column_name
 * @param $id
 *
 * @return void simply echo out the number of views
 */
function subh_posts_custom_column_views( $column_name, $id ) {
	if ( $column_name === 'post_views' ) {
		echo subh_get_post_view( get_the_ID() );
	}
}

add_filter( 'manage_posts_columns', 'subh_posts_column_views' );
add_action( 'manage_posts_custom_column', 'subh_posts_custom_column_views', 5, 2 );
