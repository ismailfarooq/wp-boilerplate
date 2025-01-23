<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<h1>404</h1>
		<p><?php _e( 'Sorry, the page you are looking for could not be found.', 'wp_theme' ); ?></p>
		<a href="<?php echo get_bloginfo( 'url' ); ?>">
			<?php _e( 'Go Home', 'wp_theme' ); ?>
		</a>
	</div>
</body>
</html>
