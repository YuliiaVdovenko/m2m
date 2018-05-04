<?php
/**
 * The template for displaying front-page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<!-- CONTENT -->
<?php
while (have_rows('main-page')) :the_row();
	switch (get_row_layout()) {
		case 'section-one' :
		get_template_part('page-templates/modules/main-section');
		break;
		case 'second-scroll' :
		get_template_part('page-templates/modules/second-section');
		break;
		case 'about-section' :
		get_template_part('page-templates/modules/about-section');
		break;
		case 'for-who-section' :
		get_template_part('page-templates/modules/who-section');
		break;
		case 'tel-section' :
		get_template_part('page-templates/modules/tel-section');
		break;
		default:
		break;
	}
	endwhile; ?>

	<?php get_footer(); ?>