<?php 
function color_schemes_output() {
	// Get color schemes option
	$body_bg = get_field( 'acf_body_bg', 'option' );
	$body_color = get_field( 'acf_body_color', 'option' );
	$active_color = get_field( 'acf_active_color', 'option' );
	$menu_bg = get_field( 'acf_menu_bg', 'option' );
	$bottom_bg = get_field( 'acf_bottom_bg', 'option' );
	$bottom_color = get_field( 'acf_bottom_color', 'option' );
?>
	<style type="text/css">

	<?php if ( $body_bg ) : ?>
		body{
			background-color:<?php echo $body_bg; ?>;
		}
	<?php endif; ?>

	<?php if ( $body_color ) : ?>
		body{
			color:<?php echo $body_color; ?>;
		}
	<?php endif; ?>

	<?php if ( $active_color ) : ?>
		a:hover,
		.site-bottom .widget_nav_menu .menu li a:hover,
		.main-menu ul li a:hover, 
		.main-menu .current-menu-item a {
			color:<?php echo $active_color; ?>;
		}
	<?php endif; ?>

	<?php if ( $menu_bg ) : ?>
		.main-menu{
			background-color:<?php echo $menu_bg; ?>;
		}
	<?php endif; ?>

	<?php if ( $bottom_bg ) : ?>
		.site-bottom{
			background-color:<?php echo $bottom_bg; ?>;
		}
	<?php endif; ?>

	<?php if ( $bottom_color ) : ?>
		.site-bottom,
		.site-bottom .widget-title,
		.site-bottom a {
			color:<?php echo $bottom_color; ?>;
		}
	<?php endif; ?>

	</style>
	
<?php
}
add_action( 'wp_head', 'color_schemes_output', 100001 );
?>