<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'wp-body' ); ?>>

<?php do_action( 'wp_theme_site_before' ); ?>

<div id="page" class="">

	<?php do_action( 'wp_theme_header' ); ?>

	<header>

		<div class="container">
			<div class="flex">
				<div class="flex">
					<div class="logo">
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="bloginfo-name">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="bloginfo-desc">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="menu-toggle">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'menu-container',
						'menu_class'      => 'menu',
						'theme_location'  => 'primary',
						'li_class'        => 'menu-item',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
			<div class="container">
				<h1>Start building your next WordPress theme</h1>
				<p>WP Boilerplate is your go-to starting point for developing WordPress themes block-editor support out of the box.</p>
				<a href="https://github.com/ismailfarooq/wp-boilerplate/">View on GitHub</a>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'wp_theme_content_start' ); ?>

		<main>
