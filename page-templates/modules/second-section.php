<?php $container = get_theme_mod('understrap_container_type'); ?>

<section id="second-section" class="back-section">
	<div class="<?php echo esc_attr($container); ?> text-center pt-5 pb-5">
		
		<?php if( get_sub_field('section-title-two') ): ?>
			<h2 class="section-title why-title pt-lg-3 pb-5">
				<span>
					<?= get_sub_field('section-title-two') ?>
				</span>
				<?= get_sub_field('section-title-two-2') ?>
			</h2>
		<?php endif; ?>
		
		<ul class="row pt-lg-3 pb-lg-3">
			<?php if(have_rows ('image-list')) while (have_rows ('image-list')) : the_row(); ?>

				<li class="col-12 col-sm-6 col-md-6 col-lg-3 pt-3 pb-3 list-item text-center align-items-center">
					<img src="<?= get_sub_field('image-item'); ?>" alt="image-item" class="d-block m-auto pb-3 second-section-image">
					<p class="image-description"> <?= get_sub_field('image-title') ?> </p>
				</li>

			<?php endwhile;?>
		</ul>
	</div>
</section>