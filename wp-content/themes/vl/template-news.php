<?php 
//Template name: News Template
get_header();
$slug = isset($_GET['sl'])?$_GET['sl']:'news';
?>
<div class="news-template-main">
	<div class="uk-container">
		<div class="news-template-main-inner">
			<div class="uk-flex uk-flex-wrap">
				<div class="news-template-left">
					<ul>
						<li class="nav-home">
							<a href="<?php echo site_url() ?>">Home</a>
						</li>
						<li class="nav-news">
							<a href="#tabNews" class="new_tab <?php if($slug == 'news') echo 'active' ?>">News</a>
						</li>
						<li class="nav-event">
							<a href="#tabEvent" class="new_tab <?php if($slug == 'event') echo 'active' ?>">Event</a>
						</li>
					</ul>
				</div>
				<!-- End left -->
				<div class="news-template-right">
					<div class="news-template-tab">
						<div id="tabNews" class="news-template-tab-content" style="<?php if($slug == 'event') echo 'display:  none;' ?>">
							<?php  
								$args = array(
									'posts_per_page' => 3,
									'category_name' => 'news',
								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) :
							?>
							<div class="archive-posts">
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<article id="post-<?php the_ID();?>" class="post-item">
										<div class="post-item-content uk-flex uk-flex-middle">
											<div class="thumb uk-cover-container">
												<a href="<?php the_permalink(); ?>">
													<img src="<?php the_post_thumbnail_url('post_thumb') ?>" uk-cover>
													<canvas width="444" height="238"></canvas>
												</a>
											</div>
											<div class="post-info">
												<div class="d-title">
													<h2 class="title uk-text-uppercase">
														<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
													</h2>
												</div>
												
												<div class="excerpt">
													<p><?php echo wp_trim_words(get_the_excerpt(),13) ?></p>
												</div>
												<a class="readmore" href="<?php the_permalink(); ?>">
													Read more
												</a>
											</div>
										</div>
									</article>
								<?php endwhile; ?>
								<?php //themedefault_pagination() ?>
							</div>
							<?php if ($the_query->max_num_pages > 1): ?>
								<div class="news-template-main-load">
									<button class="btn_load_more_news btn_load_more uk-text-uppercase" data-max_num_pages="<?php echo $the_query->max_num_pages ?>" data-page="2" data-slug="news">Load more</button>
								</div>
							<?php endif ?>
							<?php endif;wp_reset_postdata(); ?>
						</div>
						<!--  -->
						<div id="tabEvent" class="news-template-tab-content" style="<?php if($slug == 'news') echo 'display:  none;' ?>">
							<?php  
								$args = array(
									'posts_per_page' => 3,
									'category_name' => 'event',
								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) :
							?>
							<div class="archive-posts">
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<article id="post-<?php the_ID();?>" class="post-item">
										<div class="post-item-content uk-flex uk-flex-middle">
											<div class="thumb uk-cover-container">
												<a href="<?php the_permalink(); ?>">
													<img src="<?php the_post_thumbnail_url('post_thumb') ?>" uk-cover>
													<canvas width="444" height="238"></canvas>
												</a>
											</div>
											<div class="post-info">
												<div class="d-title">
													<h2 class="title uk-text-uppercase">
														<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
													</h2>
												</div>
												
												<div class="excerpt">
													<p><?php echo wp_trim_words(get_the_excerpt(),13) ?></p>
												</div>
												<a class="readmore" href="<?php the_permalink(); ?>">
													Read more
												</a>
											</div>
										</div>
									</article>
								<?php endwhile; ?>
								<?php //themedefault_pagination() ?>
							</div>
							<?php if ($the_query->max_num_pages > 1): ?>
								<div class="news-template-main-load">
									<button class="btn_load_more_event btn_load_more uk-text-uppercase" data-max_num_pages="<?php echo $the_query->max_num_pages ?>" data-page="2" data-slug="event">Load more</button>
								</div>
							<?php endif ?>
							<?php endif;wp_reset_postdata(); ?>
						</div>
						<!--  -->
					</div>
				</div>
				<!-- End left -->
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
	(function($){
		$('.new_tab').on('click',function(e){
			e.preventDefault();
			let tar = $(this).attr('href');
			$('.new_tab').removeClass('active')
			$(this).addClass('active');
			$('.news-template-tab-content').fadeOut();
			$(tar).fadeIn();
		})
		$('.btn_load_more').on('click',function(e){
			e.preventDefault();
			var _self = $(this);
			//$(this).prop('disabled',true);
			var slug = _self.data('slug'),
				page = _self.attr('data-page'),
				max_page = _self.data('max_num_pages'),
				$string = 'page='+page+ '&slug='+slug+'&action=post_load_more';
			$.ajax({
	            type: "GET",
	            url: '<?php echo admin_url( 'admin-ajax.php' ) ?>',
	            data: $string,
	            success: function (data) {
	            	//$(this).prop('disabled',false);
	            	_self.parents('.news-template-tab-content').find('.archive-posts').append(data)
	            	page++;
	            	if(page > max_page){
	            		_self.remove();
	            	}
	            	else{
	            		_self.attr('data-page',page);
	            	}
	                //$('.ajax-content').html(data)
	                //console.log(data);
	            }
	        });
		})
	})(jQuery);
</script>