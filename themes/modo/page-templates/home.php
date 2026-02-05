<?php
  /* Template Name: Home */
  get_header();
?>

<main>
	<?php get_template_part('template-parts/home/hero'); ?>
	<?php get_template_part('template-parts/home/about'); ?>
	<?php get_template_part('template-parts/home/exhibitions'); ?>
</main>

<?php get_footer(); ?>