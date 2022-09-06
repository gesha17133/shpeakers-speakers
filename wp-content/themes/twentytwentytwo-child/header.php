<!DOCTYPE html>

<html lang="en">

<head>
	<?php
	/**
	 * This is Website header
	 *
	 * @package My Pack
	 */

	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>

<body>

<header class="child-theme-header theme-container">
	<?php the_custom_logo(); ?>
	<div class="header__menu-wrapper">
		<nav class="header__menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'menu-class'     => 'child-menu-wrapper',
				)
			);
			?>
		</nav>

		<div class="child-theme-header__actions">
			<a href="#register" class="theme__button light-button">
				<?php esc_html_e( 'Register', 'twenty-twenty-two-child' ); ?>
			</a>

			<div class="child-theme-header__lang-switcher">
				<span class="switcher-item active">EN</span>
				<span class="switcher-item">UA</span>
				<span class="switcher-item">GN</span>
			</div>
		</div>
	</div>
	<div class="header__burger-icon">
		<span></span>
		<span></span>
		<span></span>
	</div>
</header>
