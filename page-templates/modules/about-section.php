<?php $container = get_theme_mod('understrap_container_type'); ?>


<section id="about-section" class="<?php echo esc_attr($container); ?> pt-5 pb-5">
<?php if( get_sub_field('about-section-name') ): ?>
	<h2 class="section-title section-about-title pb-3 text-center">
		<span>
			<?= get_sub_field('about-section-name') ?>
		</span>
		<?= get_sub_field('about-section-name-2') ?>
	</h2>
<?php endif; ?>
<?php if( get_sub_field('treker-name') ): ?>
	<h3 class="section-title product-title pb-3 pt-3">
		<span>
			<?= get_sub_field('treker-name') ?>
		</span>
		<?= get_sub_field('treker-name-2') ?>
	</h3>
<?php endif; ?>
<?php if( get_sub_field('product-image') ): ?>
	<div class="row">
		<div class="col-12 col-md-6 product mb-5 mb-md-0">
			<div class="relative">
				<img src="<?= get_sub_field('product-image'); ?>" alt="image-product">
				<span class="price d-none"> <?= get_sub_field('price-label') ?>
					<i class="fa fa-dollar"></i>
				</span>
			</div>
		</div>
<?php endif; ?>

		<div class="col-12 col-md-6 content-div d-flex flex-column justify-content-between">
			<?php if (have_posts ()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>


			<?php
			$price = get_sub_field('price-label');
			$priceDollar = get_sub_field('price-$');
			$cost = $price * $priceDollar
			?>
			
			<div class="d-column d-md-flex flex-wrap">
			<?php if( get_sub_field('price-label') ): ?>
				<div class="really-price mr-3 pr-3 pl-3 text-center">
					<div class="m-auto">
						<span class="cost d-none">
							<?= get_sub_field('price-label') ?>
						</span>
						<span class="cost">
							<?= get_sub_field('price-label-2') ?>
						</span>
						<span class="really-price-italic">
							<?php echo $cost; ?>
						</span>
					</div>
				</div>
			<?php endif; ?>
			<?php if( get_sub_field('offer-button') ): ?>
				<span class="offer btn text-center about-offer mt-3 mb-3 mb-xl-0 mt-xl-0" data-target="#modal-3"
					data-toggle="modal">
					<i class="fa fa-cart-plus pr-2"></i>
					<?= get_sub_field('offer-button') ?>
				</span>

				<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog popup" role="document">
						<div class="modal-content">
							<a href="#" class="close a-opacity" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" class="close_popup">&times;</span>
							</a>
							<div>
								<p class="form-caption">
								<span>
									<?php echo get_theme_mod('offer-form-caption') ?>
								</span>
									<?php echo get_theme_mod('offer-form-caption2') ?>
								</p>
								<?php echo do_shortcode('[contact-form-7 id="121" title="Оформить заказ"]'); ?>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>