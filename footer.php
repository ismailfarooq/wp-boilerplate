
</main>

<?php do_action( 'wp_theme_content_end' ); ?>

</div>

<?php do_action( 'wp_theme_content_after' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'wp_theme_footer' ); ?>

	<div class="container">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
