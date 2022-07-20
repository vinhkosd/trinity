<?php get_header(); $obj = get_queried_object();?>
<section id="main-content">
	<div class="uk-container">
		<div class="main-content uk-flex">
			<div class="main-content-right">
				<div class="main-content-right-inner">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="main-head-title">
						<h2 class="archive-title"><?php the_title() ?></h2>
						<ul class="breadcrumbs">
							<li>
								<a href="<?php echo site_url() ?>">Trang chủ</a>
							</li>
							<li>|</li>
							<li class="current">
								<b><?php the_title(); ?></b>
							</li>
						</ul>
					</div>
					<!--  -->
					<div class="single-content">
							<div class="entry-title uk-text-center">
								<h1 class="title uk-text-center uk-text-uppercase">
									<?php the_title(); ?>
								</h1>
								<h4 class="single-post-date"><?php echo get_the_date('d-m-Y') ?></h4>
							</div>
							<div class="entry-content">
								<?php the_content(); ?>
								<?php $note = get_field('note'); if($note['content']): ?>
									<div class="note-box">
										<h2 class="note-title">
											<?php if($note['title']) echo $note['title']; else echo 'Lưu ý'; ?>
										</h2>
										<div class="note-content">
											<?php echo $note['content'] ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
					</div>
					<?php endwhile; ?>
				</div>
				<a class="totop" href="#" uk-scroll>Top</a>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
