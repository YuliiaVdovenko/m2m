<?php $container = get_theme_mod('understrap_container_type'); ?>

<section class="back-section">
	<div class="<?php echo esc_attr($container); ?> pb-5 pt-5 text-center">
	<?php if( get_sub_field('for-who-section-name') ): ?>
		<h2 class="section-title why-title pt-lg-3 pb-5">
			<span>
				<?= get_sub_field('for-who-section-name') ?>
			</span>
			<?= get_sub_field('for-who-section-name-2') ?>
		</h2>
	<?php endif; ?>

		<ul class="row justify-content-center justify-content-lg-between pt-lg-3 pb-lg-3">
			<?php if (have_rows('image-list-for-who')) while (have_rows('image-list-for-who')) : the_row(); ?>
				<li class="col-12 col-sm-6 col-md-4 col-lg-2 pt-3 pb-3 list-item">
					<img src="<?= get_sub_field('image-list-for-who-list'); ?>" alt="image-item" class="pb-3">
					<p class="image-description"> <?= get_sub_field('image-title-for-who') ?> </p>
				</li>
			<?php endwhile; ?>
		</ul>
		
	</div>
</section>