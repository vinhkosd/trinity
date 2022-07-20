<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="ZYDCnwmp"></script>
	<div id="wrapper" class="hfeed site">
		<header id="header" class="site-header">
			<div class="pc">
				<a href="<?php the_field('url_discord','option') ?>" class="btn_discord">
					<img src="<?php echo THEME_URI ?>/images/btn_Discord.png">
				</a>
				<?php $logo = get_field('logo','option');if($logo): ?>
				<h1 class="logo">
					<a href="<?php echo site_url() ?>">
						<img src="<?php echo $logo ?>" alt="site-logo">
					</a>
				</h1>
				<?php endif; ?>
				<div class="main-header">
					<div class="uk-container">
						<div class="uk-flex uk-flex-middle uk-flex-between">
							<nav class="main-menu">
								<ul class="main-menu uk-flex uk-flex-center">
									<?php
		    		            		wp_nav_menu(
		    		            			array(
		    		            				// 'menu' => 'Footer',
		    		            				'items_wrap'=> '%3$s',
		    		            				'walker' => '',
		    		            				'container'=>false,
		    		            				'menu_class' => '',
		    		            				'theme_location'=>'main_menu',
		    		            				'fallback_cb'=>false
		    		            			)
		    		            		);
		    	    				?>
								</ul>
							</nav><!-- .main-menu -->
							<div class="sub-header">
								<ul>
									<li>
										<a href="<?php the_field('url_acount','option') ?>">Account</a>
									</li>
									<li>
										<a href="<?php the_field('link_topup','option') ?>">Topup</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- .container -->
				</div><!-- .mid-header -->

			</div>
			<nav class="main-header-mobile uk-flex-between uk-flex-middle uk-flex-wrap" hidden>
				<div class="main-header-mobile-left">
					<a href="<?php echo site_url() ?>" class="ic_home">
						<img src="<?php echo THEME_URI ?>/images/ic_home.png">
					</a>
					<a href="<?php the_field('link_topup','option') ?>" class="ic_topup">
						<img src="<?php echo THEME_URI ?>/images/ic_topup.png">
					</a>
				</div>
				<!-- End left -->
				<div class="main-header-mobile-right uk-flex uk-flex-middle">
					<a href="<?php the_field('url_fanpage','option') ?>" class="ic_fb">
						<img src="<?php echo THEME_URI ?>/images/ic_fb.png">
					</a>
					<a href="<?php the_field('url_group_facebook','option') ?>" class="ic_gr">
						<img src="<?php echo THEME_URI ?>/images/ic_gr.png">
					</a>
					<span class="menu-humburgur-icon" data-target=".menu-main">
						<img src="<?php echo THEME_URI ?>/images/ic_menu.png">
					</span>
				</div>
				<!-- End left -->
			</nav><!--end nav-->
			<div class="menu-main" style="display: none;">
					<div class="uk-container">
						<div class="menu-main-content">
							<?php
				        		wp_nav_menu(
				        			array(
				        				'theme_location' => 'main_menu_mobile',
				        				'container'      => false,
				        				'menu_id'        => 'menu-main-mobile',
				        				'menu_class'     => 'menu-main-mobile',
				        				'fallback_cb'    => '',
				        			)
				        		);
				        	?>
						</div>
					</div>
			</div>
		</header><!-- .site-header -->
		<main id="main" class="site-main">
			<section id="banner">
				<video id="videoBG" width="1920" height="996" playsinline="" autoplay="" muted="" loop="" __idm_id__="450319361">
	                    <source src="<?php echo THEME_URI ?>/images/bg.mp4" type="video/mp4">
	             </video>
				<div class="banner-bg" style="background: transparent;"></div>
			</section>
			<section id="action-group" class="fix-grid-padding">
				<div class="uk-container">
					<div class="uk-flex uk-flex-center">
						<div class="action-group-left">
							<div class="download-list uk-flex uk-flex-between uk-flex-middle">
								<div class="download-list-icon">
									<img src="<?php echo THEME_URI ?>/images/raz-icon.png">
								</div>
								<div class="download-list-center">
									<div class="dl-ios">
										<a href="<?php the_field('link_download_ios','option') ?>">
											<img src="<?php echo THEME_URI ?>/images/dl_ios.png">
										</a>
									</div>
									<div class="dl-android">
										<a href="<?php the_field('link_download_android','option') ?>">
											<img src="<?php echo THEME_URI ?>/images/dl_android.png">
										</a>
									</div>
								</div>
								<div class="dl-apk">
									<a href="<?php the_field('link_download_apk','option') ?>">
										<img src="<?php echo THEME_URI ?>/images/dl_apk.png">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

