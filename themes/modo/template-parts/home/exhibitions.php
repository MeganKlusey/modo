<section class="exhibitions">
	<div class="wrapper-padding">
		<div class="wrapper">
			<div class="exhibitions__left">
				<h2 class="text-xs">Gallery exhibitions</h2>
				<div class="exhibitions__images">
					<?php
						$args = [
							'post_type' => 'exhibition',
							'posts_per_page' => 4,
							'order' => 'ASC'
						];
						$query = new WP_Query( $args );
						
						if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>
					<img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="exhibitions__image" />
					<?php
						endwhile;
						wp_reset_postdata();
						endif; ?>
				</div>
			</div>
			<div class="exhibitions__right">
				<ul class="exhibitions__list">
					<?php						
						if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>
					<li class="exhibitions__item text-5xl">
						<a class="exhibitions__item-link" href=""><?php the_title(); ?></a>
					</li>
					<?php
						endwhile;
						wp_reset_postdata();
						endif;
					?>
				</ul>
				<a href="#" class="exhibitions__link text-xs">
					<?php get_template_part("src/inc/icons/bullet-point") ?>Get tickets
				</a>
			</div>
		</div>
	</div>
</section>