<?php $container = get_theme_mod('understrap_container_type'); ?>

<section id="main" class="main-scroll" style="background-image: url(<?php echo get_theme_mod('back-image') ?>);
		background-repeat: no-repeat;">
	<div class="<?php echo esc_attr($container); ?>">
		<div class="row title-form align-items-center">
			<div class="col-12 col-md-7 col-lg-7">

				<?php if( get_sub_field('section-title') ): ?>
					<h2 class="section-main-title pb-2">
						<span> <?= get_sub_field('section-title') ?> </span>
						<?= get_sub_field('section-title-2') ?>
					</h2>
				<?php endif; ?>

				<?php if( get_sub_field('section-subtitle') ): ?>
					<p class="section-p pt-3 pb-4"> <?= get_sub_field('section-subtitle') ?></p>
				<?php endif; ?>

				<?php if( get_sub_field('product') ): ?>
					<img src="<?= get_sub_field('product'); ?>" alt="product" class="w-100 pt-2 pb-3">
				<?php endif; ?>

				<?php if( get_sub_field('img-icon') ): ?>
					<div class="row flex-wrap">
						<div class="col-12 col-sm-6 col-lg-4 d-flex align-items-center">
							<img src="<?= get_sub_field('img-icon'); ?>" alt="gift" class="col-2 col-md-3 p-0">
							<p class="extra-caption col-9 col-sm-10 col-md-9 p-0">
								<?= get_sub_field('extra-field-one') ?>
							</p>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 d-flex align-items-center">
							<img src="<?= get_sub_field('img-icon-2'); ?>" alt="garant" class="col-2 col-md-3 p-0">
							<p class="extra-caption col-9 col-sm-10 col-md-9 p-0">
								<?= get_sub_field('extra-field-two') ?>
							</p>
						</div>
					</div>
				<?php endif; ?>
			</div>

			<div class="col-12 col-md-5 col-lg-4 offset-lg-1 text-center mt-3">
				<div class="callback-form">
					<?php if( get_sub_field('form-name') ): ?>
						<p class="form-caption">
							<span>
								<?= get_sub_field('form-name') ?>
							</span>
								<?= get_sub_field('form-name-2') ?> 
						</p>
					<?php endif; ?>

					<?php echo do_shortcode('[contact-form-7 id="119" title="Форма в тексте"]'); ?>

					<?php if( get_sub_field('extra-field') ): ?>
						<p class="delivery pb-4"> 
							<?= get_sub_field('extra-field'); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>

			<?php if( get_sub_field('price-button') ): ?>
				<div class="text-center m-auto look-price">
					<span class="d-block"><?= get_sub_field('price-button') ?> </span>
					<i class="fa fa-arrow-circle-o-down go-anchor"></i>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
