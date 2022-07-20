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
		'post_type' => 'post',
		'posts_per_page' => 7,
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
<?php if (get_field('url_fanpage','option')): ?>
	<div class="sidebar-fanpage">
		<div class="uk-text-center">
			<div class="fb-page" data-href="<?php the_field('url_fanpage','option') ?>" data-tabs="timeline" data-width="313" data-height="242" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php the_field('url_fanpage','option') ?>" class="fb-xfbml-parse-ignore"><a href="<?php the_field('url_fanpage','option') ?>">Võ Lâm Truyền Kỳ - CTC</a></blockquote></div>
		</div>
	</div>
<?php endif ?>