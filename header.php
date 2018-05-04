<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>

	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '349278628910449');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=349278628910449&ev=PageView&noscript=1"/></noscript>

		</head>

		<body <?php body_class(); ?>>

			<!-- arrow -->
			<a class="top-scroll" name="top"></a>

			<!-- Mobile header -->
			<header class="fixed-header-mobile">
				<div class="top-header">
					<div class="<?php echo esc_attr($container); ?> d-flex flex-wrap justify-content-center align-items-center">
						<ul class="w-100 pt-2 pb-2 d-flex flex-wrap justify-content-center">
							
							<?php if( get_theme_mod('email_address') ): ?>
								<li class="pl-3 pr-3">
									<i class="fa fa-envelope bottom-footer-i"></i>
									<a href="mailto:<?php echo get_theme_mod('email_address'); ?>" class="header-email-link">
										<?php echo get_theme_mod('email_address'); ?>
									</a>
								</li>
							<?php endif; ?>
							<?php if( get_theme_mod('phone_number') ): ?>
								<li class="pl-3 pr-3">
									<i class="fa fa-whatsapp top-header-i"></i>
									<a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="header-link">
										<?php echo get_theme_mod('phone_number'); ?>
									</a>
								</li>
							<?php endif; ?>
							<?php if( get_theme_mod('phone_number2') ): ?>
								<li class="pr-3 pl-3">
									<i class="fa fa-whatsapp top-header-i"></i>
									<a href="tel:<?php echo get_theme_mod('phone_number2'); ?>" class="header-link">
										<?php echo get_theme_mod('phone_number2'); ?>
									</a>
								</li>
							<?php endif; ?>
						</ul>

						<?php if( get_theme_mod('offer-link-name') ): ?>
							<span class="btn offer mb-3" data-target="#modal-1" data-toggle="modal">
								<?php echo get_theme_mod('offer-link-name'); ?>
							</span>
							<div class="modal fade" id="modal-1">
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
						<?php endif; ?>
					</div>
				</div>
			</header>


			<!-- Tablet header -->
			<header class="fixed-header">
				<div class="top-header">
					<div class="<?php echo esc_attr($container); ?> d-flex flex-wrap justify-content-between align-items-center">
						<?php if( get_theme_mod('email_address') ): ?>
							<div>
								<i class="fa fa-envelope bottom-footer-i"></i>
								<a href="mailto:<?php echo get_theme_mod('email_address'); ?>" class="bottom-footer-link">
									<?php echo get_theme_mod('email_address'); ?>
								</a>
							</div>
						<?php endif; ?>
						<?php if( get_theme_mod('call_us') ): ?>
							<div class="d-flex flex-wrap col-md-12 p-0 col-lg-8 justify-content-between">
								<div class="header-text pt-2 pb-2">
									<p class="pr-5">
										<i class="fa fa-whatsapp top-header-i"></i>
										<i class="fa fa-2x fa-mobile top-header-i"></i>
										<?php echo get_theme_mod('call_us'); ?></p>
										<p class="pr-5"><?php echo get_theme_mod('work_hour'); ?></p>
									</div>
								<?php endif; ?>
								
								<ul class="pt-2 pb-2">
									<?php if( get_theme_mod('phone_number') ): ?>
										<li>
											<i class="fa fa-whatsapp top-header-i"></i>
											<a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="header-link">
												<?php echo get_theme_mod('phone_number'); ?>
											</a>
										</li>
									<?php endif; ?>
									<?php if( get_theme_mod('phone_number2') ): ?>
										<li>
											<i class="fa fa-whatsapp top-header-i"></i>
											<a href="tel:<?php echo get_theme_mod('phone_number2'); ?>" class="header-link">
												<?php echo get_theme_mod('phone_number2'); ?>
											</a>
										</li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="shadow-border mb-2">
						<div class="<?php echo esc_attr($container); ?> ">
							<nav class="navbar navbar-expand-md p-0 ">
								<?php if (!has_custom_logo()) { ?>
								<?php if (is_front_page() && is_home()) : ?>
									<h1 class="navbar-brand mb-0">
										<a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
											title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
											<?php bloginfo('name'); ?>
										</a>
									</h1>
								<?php else : ?>
									<a class="navbar-brand" rel="home"
									href="<?php echo esc_url(home_url('/')); ?>"
									title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
									<?php bloginfo('name'); ?>
								</a>
							<?php endif; ?>
							<?php } else {
								the_custom_logo();
							} ?>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav d-flex justify-content-end w-100 align-items-center">


									<?php if( get_theme_mod('menu-link-name') ): ?>
										<li class="nav-item active pr-lg-4 pl-lg-4">
											<a class="header-nav-link" href="#about-section"
											data-target="anchor">
											<?php echo get_theme_mod('menu-link-name'); ?>
										</a>
									</li>
								<?php endif; ?>

								<?php if( get_theme_mod('menu-link-name2') ): ?>
									<li class="nav-item pr-lg-4 pl-lg-4">
										<a class="header-nav-link" href="#contact-section"
										data-target="anchor">
										<?php echo get_theme_mod('menu-link-name2'); ?>
									</a>
								</li>
							<?php endif; ?>

							<?php if( get_theme_mod('offer-link-name') ): ?>
								<li class="nav-item pl-lg-4">
									<span class="btn offer mt-3 mb-3 mb-md-0 mt-md-0" data-target="#modal-2"
									data-toggle="modal">
									<?php echo get_theme_mod('offer-link-name'); ?>
								</span>
								<div class="modal fade" id="modal-2">
									<div class="modal-dialog popup">
										<div class="modal-content">
											<a href="#" class="close a-opacity" data-dismiss="modal"
											aria-label="Close">
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
		</nav>
	</div>
</div>
</header>