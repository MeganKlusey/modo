<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= get_bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="header__wrapper">
			<a href="#" class="header__title js-animate text-xs"><?= get_bloginfo("name") ?></a>
			<button class="header__toggle">
				<?php get_template_part("src/inc/icons/hamburger") ?>
				<?php get_template_part("src/inc/icons/close") ?>
			</button>
			<div class="header__nav-wrapper">
				<nav class="header__nav">
					<?php
						wp_nav_menu([
							"menu" => "primary-menu",
							"container" => false,
							"link_class" => "menu__item js-animate text-xs"
						]);
					?>
				</nav>
			</div>
			<p class="header__location js-animate text-xs">LA, California</p>
		</div>
	</header>