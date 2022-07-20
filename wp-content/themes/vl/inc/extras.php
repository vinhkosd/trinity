<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function default_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'nt' ),
		'id'            => 'primary-sidebar',
		'description'   => __( 'This is the right sidebar if you are using a two or three column site layout option.', 'nt' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'nt' ),
		'id'            => 'secondary-sidebar',
		'description'   => __( 'This is the left sidebar if you are using a two or three column site layout option.', 'nt' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	for ( $i = 1; $i <= 3; $i++ ) {
		register_sidebar( array(
			'name'          => sprintf( __( 'Bottom %s', 'nt' ), $i ),
			'id'            => 'bottom-' . $i,
			'description'   => sprintf( __( 'Bottom sidebar number %s, used in the header area.', 'nt' ), $i ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'default_theme_widgets_init' );


/**
 * Add class boostrap in main content
 *
 */
if ( ! function_exists( 'main_bootstrap_class' ) ) :
	function main_bootstrap_class() {
		$sidebar_width = get_field( 'acf_sidebar_width', 'option' );
		$page_layout = get_field( 'acf_page_layout', 'option' );
		if( !$sidebar_width ) {
			$sidebar_width = 4;
		}

		if( $page_layout == 'left-main-right' ) {
			$classes = 12 - ($sidebar_width*2);
		} else {
			$classes = 12 - $sidebar_width;
		}

		$classes = 'col-md-' . $classes;

		return $classes;
	}
endif;


/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since  1.0
 * @return array
 */
if ( ! function_exists( 'themedefault_pagination' ) ) :
	function themedefault_pagination( $nav_query = false ) {

		global $wp_query, $wp_rewrite;

		// Don't print empty markup if there's only one page.
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		}

		// Prepare variables
		$query        = $nav_query ? $nav_query : $wp_query;
		$max          = $query->max_num_pages;
		$current_page = max( 1, get_query_var( 'paged' ) );
		$big          = 999999;

		?>
		<div class="page-navigation clearfix" role="navigation">
			<nav class="page-nav uk-flex uk-flex-center uk-flex-middle">
				<?php
				echo '' . paginate_links(
					array(
						'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'    => '?paged=%#%',
						'current'   => $current_page,
						'total'     => $max,
						'type'      => 'plain',
						'prev_text' => '<i class="fa fa-angle-left"></i>',
						'next_text' => '<i class="fa fa-angle-right"></i>'
					)
				) . ' ';
				?>
			</nav><!-- .page-nav -->
		</div><!-- .page-navigation -->
		<?php
	}
endif;

/**
 * Prints HTML with meta information for the current post-date/time, author, categories and comments.
 *
 * @since  1.0
 * @return array
 */


/**
 * Print URL image with params by BFI thumb
 *
 * @since  1.0
 * @return string (url)
 */
function get_BFI_thumbnail( $att, $width, $height, $classes = '') {
	global $post;
	if( is_numeric( $att ) == true ) {
		$att_id = $att;
	} else {
		$att_id = get_post_thumbnail_id( $post->ID );
	}
	if( $classes ) {
		$classes = $classes;
	} else {
		$classes = '';
	}
	$params = array( 'width' => $width, 'height' => $height );
	$url = wp_get_attachment_image_src($att_id, 'full');
	$image = bfi_thumb( $url[0], $params );
	$alt = basename($image);
	return '<img class="' . $classes . '" src="' . $image . '" alt="' . $alt . '" />';
}
?>