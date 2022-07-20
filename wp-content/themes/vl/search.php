<?php get_header(); $obj = get_queried_object();?>
<section id="main-content">
	<div class="uk-container">
		<div class="main-content uk-flex">
			<div class="main-content-left">
				<?php 
					$link_download = get_field('link_download','option'); 
					$link_register = get_field('link_register','option'); 
					$link_account = get_field('link_account','option'); 
					$link_nap_the = get_field('link_nap_the','option'); 
					$hotline = get_field('hotline','option'); 
					
				?>
				<div class="download">
					<a href="<?php echo $link_download['url'] ?>" <?php if($link_download['target']) echo 'target="_blank"' ?>>
						<img src="<?php echo THEME_URI ?>/images/btn-download.png">
					</a>
				</div>
				<div class="register">
					<a href="<?php echo $link_register['url'] ?>" <?php if($link_register['target']) echo 'target="_blank"' ?>>
						<img src="<?php echo THEME_URI ?>/images/btn-register.png">
					</a>
				</div>
				<div class="cta-group uk-flex uk-flex-between">
					<a href="<?php echo $link_account['url'] ?>" <?php if($link_account['target']) echo 'target="_blank"' ?>>
						Tài Khoản
					</a>
					<a href="<?php echo $link_nap_the['url'] ?>" <?php if($link_nap_the['target']) echo 'target="_blank"' ?>>
						Nạp Thẻ
					</a>
					<a href="tel:<?php echo $hotline ?>">
						Hotline
					</a>
				</div>
				<?php
					$args = array(
						'posts_per_page' => 3
					);  
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
				?>
				<div class="newest">
					<h3 class="uk-title uk-text-uppercase">Tin mới nhất</h3>
					<ul>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li>
							<div class="ptitle uk-flex uk-flex-middle">
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</div>
							<div class="uk-text-right">
								<span class="newest-date"><?php echo get_the_date('d/m/Y') ?></span>
							</div>
						</li>
						<?php endwhile ?>
					</ul>
				</div>
				<?php endif; wp_reset_postdata();?>
				<div class="sidebar-fanpage">
					<div class="uk-text-center">
						<div class="fb-page" data-href="https://www.facebook.com/jxtieungao.net/" data-tabs="timeline" data-width="313" data-height="242" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jxtieungao.net/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jxtieungao.net/">Võ Lâm Truyền Kỳ - CTC</a></blockquote></div>
					</div>
				</div>
			</div>
			<div class="main-content-right">
				<div class="main-content-right-inner">
					<div class="main-head-title uk-flex uk-flex-middle">
						<div class="main-head-title-left">
							<ul class="breadcrumbs">
								<li>
									<a href="<?php echo site_url() ?>">Trang chủ</a>
								</li>
								<li><b>/</b></li>
								
								<li class="current">
									<i>Kết quả tìm kiếm với từ khóa "<b><?php echo get_search_query() ?></b>"</i>
								</li>
							</ul>
						</div>
					</div>
					<!--  -->
					<div class="archive-content">
						<div class="search-section">
							<div class="uk-text-center">
								<?php echo get_search_form(); ?>
							</div>
						</div>
						<!--  -->
						<div class="archive-posts">
							<?php while ( have_posts() ) : the_post(); ?>
								<article id="post-<?php the_ID();?>" class="post-item">
									<div class="post-item-content uk-flex">
										<div class="thumb uk-cover-container">
											<a href="<?php the_permalink(); ?>">
												<img src="<?php the_post_thumbnail_url('post_thumb') ?>" uk-cover>
												<canvas width="277" height="162"></canvas>
											</a>
										</div>
										<div class="post-info">
											<div class="uk-flex uk-flex-between">
												<h2 class="title uk-text-uppercase">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h2>
												<h3 class="post-date">
													<?php echo get_the_date('d-m-Y') ?>
												</h3>
											</div>
											
											<div class="excerpt">
												<p><?php echo wp_trim_words(get_the_excerpt(),20) ?></p>
											</div>
											<div class="uk-position-bottom-right">
												<a class="readmore" href="<?php the_permalink(); ?>">
													Xem chi tiết
												</a>
											</div>
										</div>
									</div>
								</article>
							<?php endwhile; ?>
							<?php themedefault_pagination() ?>
						</div>
					</div>
				</div>
				<a class="totop" href="#" uk-scroll>Top</a>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
