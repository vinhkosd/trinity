		<section class="socials">
			<div class="uk-container">
				<div class="socials-inner">
					<ul class="uk-flex uk-flex-middle uk-flex-between">
						<li>
							<a href="<?php the_field('url_fanpage','option') ?>" target="_blank">
								<img src="<?php echo THEME_URI ?>/images/icon_facebook.png" />
							</a>
						</li>
						<li>
							<a href="<?php the_field('url_group_facebook','option') ?>" target="_blank">
								<img src="<?php echo THEME_URI ?>/images/icon_group_facebook.png" />
							</a>
						</li>
						<li>
							<a href="<?php the_field('url_discord','option') ?>" target="_blank">
								<img src="<?php echo THEME_URI ?>/images/icon_dis.png" />
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main><!-- #main -->

	<footer id="footer" class="site-footer">
		<div class="uk-container">
			<div class="uk-text-center">
				<?php the_field('footer','option') ?>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>
</html>
