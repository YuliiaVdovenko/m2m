<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<section class="title-form">
	<div class="<?php echo esc_attr( $container ); ?> text-center">
		<p class="special-message pt-5">
			<?php esc_html_e( 'Страница не найдена','understrap' ); ?>
		</p>
		<a href="<?php echo get_home_url();?>" class="d-inline-block mt-3 back-button"> 
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
				Вернуться на сайт 
		</a>
	</div>
</section>

<?php get_footer(); ?>
