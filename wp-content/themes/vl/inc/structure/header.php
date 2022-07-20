<header id="header" class="site-header">
	<div class="mid-header">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5">
					<div class="site-brand">
						<a href="<?php echo site_url(); ?>" class="logo">
						<?php
							$logo = get_field( 'acf_logo', 'option' );
							if( $logo ) {?>
								<img src="<?php echo $logo['url'] ?>" alt="<?php echo  get_bloginfo('name');?>" />
							<?php } else {
								echo '<img src="' . get_template_directory_uri() . '/images/assets/logo.png" alt="' . get_bloginfo('name') . '" />';
							}
						?>
						</a>
					</div><!-- .site-brand -->
				</div><!-- .col-md-5 -->

				<div class="col-md-7 col-sm-7">
					<div class="right-header">
						<?php
							$header_info = get_field( 'acf_header_info', 'option' );
							if( $header_info ) {
								echo $header_info;
							}
						?>
					</div><!-- .right-header -->
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .mid-header -->

	<nav class="main-menu">
		<div class="container">
			<span class="mobile-menu"><i class="fa fa-bars"></i></span>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main_menu',
						'container'      => false,
						'menu_id'        => 'menu-main',
						'menu_class'     => 'menu-main',
						'fallback_cb'    => '',
					)
				);
			?>

			<?php if( get_field( 'acf_searchbox', 'option' ) != true ) { 
				echo get_search_form();
			}; ?>
		</div>
	</nav><!-- .main-menu -->
</header><!-- .site-header -->