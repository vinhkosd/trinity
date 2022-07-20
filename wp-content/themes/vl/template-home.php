<?php 
//Template name: Home Page
get_header();
?>
<section id="main-content" class="fix-grid-padding">
	<div class="uk-container">
		<div class="uk-flex" uk-grid>
			<div class="w100 uk-width-1-2">
				<?php $slider = get_field('sidebar_slider'); if(is_array($slider) && count($slider)>0): ?>
				<div class="sidebar-slider">
					<div class="slider">
						<?php foreach ($slider as $key => $value): ?>
							<div class="slider-item uk-text-center">
								<a class="uk-text-center" href="<?php echo $value['url'] ?>" target="_blank">
									<img src="<?php echo $value['image'] ?>">
								</a>
							</div>
						<?php endforeach ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="w100 uk-width-1-2">
				<div class="main-top-right">
					<?php $categories = get_field('categories'); if(is_array($categories) && count($categories) > 0): ?>
						<div class="news-column">
							<div class="news-column-inner">
								<div class="news-column-head uk-flex uk-flex-between uk-flex-middle">
									<div>
										<ul class="news-column-tab">
											<?php foreach ($categories as $key => $cat): ?>
												<li class="<?php if($key==0) echo 'active' ?> <?php echo $cat->slug ?>" rel="#news-column<?php echo $cat->term_id?>">
													<img src="<?php echo get_field('title',$cat) ?>">
												</li>
											<?php endforeach ?>
										</ul>
									</div>
								</div>
								<div class="news-column-body">
									<?php foreach ($categories as $key => $cat): ?>
										<div id="news-column<?php echo $cat->term_id?>" class="news-column-content" <?php if($key!=0) echo 'style="display:none;"' ?>> 
											<?php  
												$args = array(
													'category__in' => array( $cat->term_id ),
													'posts_per_page' => '4',
												);
												$the_query = new WP_Query( $args );
												if ( $the_query->have_posts() ) :
											?>
											<ul class="news-list">
												<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
													<li class="uk-flex uk-flex-between uk-flex-middle">
														<div class="l uk-flex uk-flex-middle">
															<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
														</div>
														<div>
															<span class="date"><?php echo get_the_date('d/m/Y') ?></span>
														</div>
													</li>
												<?php endwhile ?>
											</ul>
											<?php endif; wp_reset_postdata();?>
										</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>
						<?php $button = get_field('read_more'); if(is_array($button)): ?>
							<a href="<?php echo $button['url'] ?>" class="view-more" <?php if($button['target']) echo 'target="_blank"' ?>><?php echo $button['title'] ?></a>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $chars = get_field('character');if(is_array($chars) && count($chars)>0): ?>
<section id="character">
	<div class="uk-container">
		<div class="character-slider">
			<?php foreach ($chars as $key => $char): ?>
				<div class="character-slider-item">
					<?php if($char['url']) echo '<a href="'.$char['url'].'">' ?>
						<img src="<?php echo $char['img'] ?>">
					<?php if($char['url']) echo '</a>' ?>
				</div>
			<?php endforeach ?>	
		</div>
	</div>
</section>
<?php endif; ?>
<section id="character_mobile" hidden>
	<div class="uk-container">
		<?php $chars = get_field('character');if(is_array($chars) && count($chars)>0): ?>
		<div class="character_mobile_inner">
			<div class="character_mobile_slide">
				<?php foreach ($chars as $key => $char): ?>
				<div class="character_mobile_slide_item">
					<?php if($char['url']) echo '<a href="'.$char['url'].'">' ?>
						<img src="<?php echo $char['img_mobile'] ?>">
					<?php if($char['url']) echo '</a>' ?>
				</div>
				<?php endforeach; ?>
			</div>
	      	<!--  -->
		</div>
		<?php endif; ?>
	</div>
</section>
<?php $galleries = get_field('gallery'); if(is_array($galleries) && count($galleries)>0): ?>
<section id="galleryBox">
	<div class="">
		
		<div class="galleryBox-content">
			<div class="galleryBox-slider owl-carousel">
				<?php foreach ($galleries as $key => $gallery): ?>
					<div class="galleryBox-slider-item">
						<div class="bg">
							<?php echo get_BFI_thumbnail($gallery,656,454) ?>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php  
	$photo = get_field('video_photo_image');
	$photo_url = get_field('video_photo_url');
	if($photo):
?>
<section id="videoPhoto">
	<div class="uk-container">
		<div class="videoPhoto-inner uk-text-center">
			<a href="<?php echo $photo_url ?>" target="_blank">
				<img src="<?php echo $photo ?>">
			</a>
		</div>
	</div>
</section>
<?php endif; ?>
<?php
get_footer(); 
?>