<?php get_header(); $obj = get_queried_object();?>
<section id="main-content">
	<div class="uk-container">
		<div class="main-content-right">
			<div class="main-content-right-inner">
				<div class="main-head-title">
					<h1 class="archive-title"><?php echo $obj->name ?></h1>
					<ul class="breadcrumbs">
						<li>
							<a href="<?php echo site_url() ?>">Trang chủ</a>
						</li>
						<li>|</li>
						<li class="current">
							<b><?php echo $obj->name ?></b>
						</li>
					</ul>
				</div>
				<!--  -->
				<div class="archive-content">
					
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
												<?php echo get_the_date('d-m') ?>
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
<?php get_footer(); ?>
