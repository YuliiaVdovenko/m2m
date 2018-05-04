<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>

<footer id="contact-section" class="back-section">
	<div class="<?php echo esc_attr($container); ?> pb-5 footer-section">
		<?php if( get_theme_mod('section_name') ): ?>
			<h2 class="section-title why-title text-center pt-5">
				<?php echo get_theme_mod('section_name'); ?>
				<span>
					<?php echo get_theme_mod('section_name2'); ?>
				</span>
			</h2>
		<?php endif; ?>
		<div class="row pt-5">
			<div class="col-12 col-md-6 col-lg-4">
				<ul class="column pb-5">

					<?php if( get_theme_mod('phone_number') ): ?>
						<li>
							<i class="fa fa-plus tel-info-i"></i>
							<a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="tel-info-item">
								<?php echo get_theme_mod('phone_number'); ?>
							</a>
						</li>
					<?php endif; ?>
					<?php if( get_theme_mod('phone_number2') ): ?>
						<li>
							<i class="fa fa-plus tel-info-i"></i>
							<a href="tel:<?php echo get_theme_mod('phone_number2'); ?>" class="tel-info-item">
								<?php echo get_theme_mod('phone_number2'); ?>
							</a>
						</li>
					<?php endif; ?>
					<?php if( get_theme_mod('site_label') ): ?>
						<li>
							<i class="fa fa-star email-info-i"></i>
							<a href="https://<?php echo get_theme_mod('site_label'); ?>" class="email-link">
								<?php echo get_theme_mod('site_label'); ?>
							</a>
						</li>
					<?php endif; ?>
				</ul>
				<ul class="pb-5">
					<?php if( get_theme_mod('address_label') ): ?>
						<li>
							<span class="address-label"><?php echo get_theme_mod('address_label'); ?></span>
						</li>
					<?php endif; ?>
					<?php if( get_theme_mod('address_text') ): ?>
						<li class="d-flex align-items-center">
							<i class="fa fa-caret-right arrow-before"></i>
							<address class="address"><?php echo get_theme_mod('address_text'); ?></address>
						</li>
					<?php endif; ?>
					<?php if( get_theme_mod('flor_text') ): ?>
						<li class="d-flex align-items-center">
							<i class="fa fa-caret-right arrow-before"></i>
							<span class="flor"> <?php echo get_theme_mod('flor_text'); ?> </span>
						</li>
					<?php endif; ?>
					<?php if( get_theme_mod('company_name') ): ?>
						<li class="d-flex align-items-center">
							<i class="fa fa-caret-right arrow-before"></i>
							<h4 class="company"><?php echo get_theme_mod('company_name'); ?></h4>
						</li>
					<?php endif; ?>
				</ul>
			</div>
			<?php if( get_theme_mod('map') ): ?>
				<div class="col-12 col-md-6 col-lg-8">
					<?php echo get_theme_mod('map'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="footer-second">
		<div class="<?php echo esc_attr($container); ?> pb-3 pt-3 text-center">
			<ul class="d-flex flex-wrap justify-content-center justify-content-xl-between align-items-center">
				<?php if( get_theme_mod('second-logo') ): ?>
					<li class="pb-2">
						<a href="#main" data-target="anchor">
							<img src="<?php echo get_theme_mod('second-logo'); ?>" alt="second-logo">
						</a>
					</li>
				<?php endif; ?>
				<?php if( get_theme_mod('email_address') ): ?>
					<li class="pb-2 pr-2 pl-2">
						<i class="fa fa-envelope bottom-footer-i"></i>
						<a href="mailto:<?php echo get_theme_mod('email_address'); ?>" class="footer-email-link">
							<?php echo get_theme_mod('email_address'); ?>
						</a>
					</li>
				<?php endif; ?>
				<?php if( get_theme_mod('phone_number') ): ?>
					<li class="pb-2 pr-2 pl-2">
						<i class="fa fa-comment bottom-footer-i"></i>
						<a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="bottom-footer-link">
							<?php echo get_theme_mod('phone_number'); ?>
						</a>
					</li>
				<?php endif; ?>
				<?php if( get_theme_mod('phone_number2') ): ?>
					<li class="pb-2 pr-2 pl-2">
						<i class="fa fa-comment bottom-footer-i"></i>
						<a href="tel:<?php echo get_theme_mod('phone_number2'); ?>" class="bottom-footer-link">
							<?php echo get_theme_mod('phone_number2'); ?>
						</a>
						<span class="bottom-footer-i opacity"><?php echo get_theme_mod('extra_word'); ?></span>
					</li>
				<?php endif; ?>
				<?php if( get_theme_mod('offer-link-name') ): ?>
					<li>
						<span class="btn offer call-back" data-target="#modal-4" data-toggle="modal">
							<?php echo get_theme_mod('offer-link-name');?>
						</span>
						<div class="modal fade" id="modal-4">
							<div class="modal-dialog popup">
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
										<?php echo do_shortcode('[contact-form-7 id="118" title="Форма для всплывающего окна"]'); ?>
									</div>
								</div>
							</div>
						</div>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</footer>

<a id="arrow-top" href="#top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
<?php wp_footer(); ?>

</body>

</html>

