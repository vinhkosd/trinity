<?php
$blog_layout = get_field( 'acf_blog_layout', 'option' );

if( $blog_layout == 'thumb-fullwidth' ) {

	$img_size = 'post_fullwidth';

} else {

	$img_size = 'product';

}

if( has_post_thumbnail() ) {

	$post_thumbnail = get_the_post_thumbnail( $post->ID, $img_size );
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="inner-post">
		<?php if( has_post_thumbnail() ) : ?>
		<div class="post-thumb thumbnail">
			<a href="<?php the_permalink(); ?>"><?php echo $post_thumbnail; ?></a>
		</div><!-- .post-thumb -->
		<?php endif; ?>

		<div class="post-info">
			<h3 class="post-title title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<div class="post-desc">
				<?php the_excerpt(); ?>
			</div><!-- .post-desc -->
			<a href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Xem chi tiết', 'themedefault' ); ?></a>
		</div><!-- .post-info -->
	</div><!-- .inner-post -->
</article>