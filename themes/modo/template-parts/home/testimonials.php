<section class="testimonials">
	<div class="wrapper-padding">
		<div class="wrapper">
			<h2 class="testimonials__title text-xs">Testimonials</h2>
			<div class="testimonials__wrapper">
				<div class="testimonials__images">
					<?php
						$args = [
							'post_type' => 'testimonial',
							'posts_per_page' => 3,
							'order' => 'ASC'
						];
						$query = new WP_Query( $args );
						
						if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>
					<img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="testimonials__image" />
					<?php
						endwhile;
						wp_reset_postdata();
						endif; ?>
				</div>
				<div class="testimonials__right">
					<?php
						if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="testimonials__info">
						<q class="testimonials__quote text-2xl"><?= get_the_excerpt(); ?></q>
						<p class="testimonials__author text-sm"><?= the_title(); ?></p>
					</div>
					<?php
							endwhile;
							wp_reset_postdata();
							endif;
						?>
					<ul class="testimonials__list">
						<?php
								if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post();
							?>
						<li class="testimonials__item">
							<button class="testimonials__item-button"><img src="<?= get_the_post_thumbnail_url(); ?>" alt=""
									class="testimonials__item-image" /></button>
						</li>
						<?php
								endwhile;
								wp_reset_postdata();
								endif;
							?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>