<?php
/**
 * Template name: Thanks
 * The template for displaying section about company.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );?>

<section class="title-form">
	<div class="<?php echo esc_attr($container); ?> text-center width pt-5 pb-5">
		<?php if( get_field('mesagge') ): ?>
			<p class="special-message">
				<?= get_field('mesagge') ?>
			</p>
			<a href="<?php echo get_home_url();?>" class="d-inline-block mt-5 back-button"> 
				<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
					Вернуться на сайт 
			</a>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>