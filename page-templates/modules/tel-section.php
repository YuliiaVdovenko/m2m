<?php $container = get_theme_mod('understrap_container_type'); ?>

<section>
	<div class="<?php echo esc_attr($container); ?> pt-5 pb-5">

	<?php if( get_sub_field('tel-section-name') ): ?>
		<h2 class="section-title section-about-title pb-3 text-center">
			<?= get_sub_field('tel-section-name') ?>
			<span> <?= get_sub_field('tel-section-name2') ?> </span>
		</h2>
	<?php endif; ?>

	<?php if( get_sub_field('tel-section-description') ): ?>
		<p class="section-p pb-5 text-center"> <?= get_sub_field('tel-section-description') ?></p>
	<?php endif; ?>

		<div class="form align-items-baseline pt-3 pb-3 mb-2 pt-2">
			<?php echo do_shortcode('[contact-form-7 id="120" title="Заказать консультацию"]'); ?>

			<?php if( get_sub_field('information') ): ?>
				<p class="text-center information p-3">
					<i class="fa fa-lock"></i>
					<?= get_sub_field('information') ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</section>
