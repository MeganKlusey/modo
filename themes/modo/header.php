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
	<header>
		<div class="menu__wrapper">
			<a href="<?= get_home_url(); ?>" class="text-xs"><?= get_bloginfo("name") ?></a>
			<button class="hamburger-wrapper">
				<? get_template_part("src/inc/icons/hamburger") ?>
			</button>
			<nav>
				<?php
					wp_nav_menu([
						"menu" => "Primary Menu",
						"container" => "false",
						"link_class" => "text-xs"
					]);
				?>
			</nav>
			<p class="location text-xs">LA, California</p>
		</div>
	</header>