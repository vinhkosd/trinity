<?php get_header(); $obj = get_queried_object();?>
<section id="main-content">
	<div class="uk-container">
		<div class="main-content uk-flex">
			<div class="main-content-right">
				<div class="main-content-right-inner">
					<div class="main-head-title uk-flex uk-flex-middle">
						<?php $categories = get_field('categories','option'); if(is_array($categories) && count($categories) > 0): ?>
						<ul class="list-category uk-flex uk-flex-center">
							<?php foreach ($categories as $key => $cat): ?>
								<li class="<?php if($obj->term_id == $cat->term_id) echo 'active' ?>">
									<a href="<?php echo get_term_link($cat->term_id,'category'); ?>"><?php echo $cat->name ?></a>
								</li>
							<?php endforeach ?>
						</ul>
						<?php endif; ?>
					</div>
					<!--  -->
					<div class="archive-content">
						<!-- <div class="search-section">
							<div class="uk-text-center">
								<?php //echo get_search_form(); ?>
							</div>
						</div> -->
						<!--  -->
						<div class="archive-posts">
							<div class="content-404 uk-text-center">
								<h1 class="uk-text-uppercase">404 Not Found</h1>
								<!-- <p>Sử dụng seach để tìm kiếm một kết quả khác.</p> -->
							</div>
						</div>
					</div>
				</div>
				<a class="totop" href="#" uk-scroll>Top</a>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
