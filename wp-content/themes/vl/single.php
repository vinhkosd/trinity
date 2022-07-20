<?php 
	get_header(); 
	$obj = get_queried_object();
	$parents = get_categories();
	$pa = reset($parents);
?>
<section class="news-template-main">
	<div class="uk-container">
		<div class="news-template-main-inner">
			<div class="uk-flex uk-flex-wrap">
				<div class="news-template-left">
					<ul>
						<li class="nav-home">
							<a href="<?php echo site_url() ?>">Home</a>
						</li>
						<li class="nav-news">
							<a href="<?php echo get_permalink(333) ?>" class="new_tab <?php if($pa->slug == 'news') echo 'active' ?>">News</a>
						</li>
						<li class="nav-event">
							<a href="<?php echo get_permalink(333) ?>?sl=event" class="new_tab <?php if($pa->slug == 'event') echo 'active' ?>">Event</a>
						</li>
					</ul>
				</div>
				<!-- End left -->
				<div class="news-template-right">
					<div class="sing-post-content">
						<div class="entry-head">
							<h1 class="single-title uk-text-uppercase uk-text-center">
								<?php the_title(); ?>
							</h1>
							<h4 class="single-post-date uk-text-right"><?php echo get_the_date('h:i - d.m.Y') ?></h4>
						</div>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<!-- End Right -->
			</div>
		</div>
		<!-- ENd inner -->
		<a class="totop" href="#" uk-scroll>Top</a>
	</div>
</section>
<?php get_footer(); ?>
