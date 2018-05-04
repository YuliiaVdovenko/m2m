<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'understrap_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function understrap_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'understrap_customize_register' );

if ( ! function_exists( 'understrap_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function understrap_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section( 'understrap_theme_layout_options', array(
			'title'       => __( 'Theme Layout Settings', 'understrap' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'understrap' ),
			'priority'    => 160,
		) );

		 //select sanitization function
        function understrap_theme_slug_sanitize_select( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }

		$wp_customize->add_setting( 'understrap_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_container_type', array(
					'label'       => __( 'Container Width', 'understrap' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'understrap' ),
						'container-fluid' => __( 'Full width container', 'understrap' ),
					),
					'priority'    => '10',
				)
			) );

		$wp_customize->add_setting( 'understrap_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_sidebar_position', array(
					'label'       => __( 'Sidebar Positioning', 'understrap' ),
					'description' => __( "Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
					'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_sidebar_position',
					'type'        => 'select',
					'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
					'choices'     => array(
						'right' => __( 'Right sidebar', 'understrap' ),
						'left'  => __( 'Left sidebar', 'understrap' ),
						'both'  => __( 'Left & Right sidebars', 'understrap' ),
						'none'  => __( 'No sidebar', 'understrap' ),
					),
					'priority'    => '20',
				)
			) );
	}
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'understrap_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'understrap_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function understrap_customize_preview_js() {
		wp_enqueue_script( 'understrap_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );


if ( ! function_exists( 'customize_contact_register' ) ) {
	function customize_contact_register($wp_customize)
	{
		$wp_customize -> add_section(
			'contact_text_section', array(
			'title' => __('Контактная информация'),
			'description' => __('Contact information')
		));

		$wp_customize -> add_setting('section_name', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'section_name', array(
				'type'=>'text',
				'label' => __("Название секции"),
				'section' => 'contact_text_section',
				'settings' => 'section_name',
			)));

		$wp_customize -> add_setting('section_name2', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'section_name2', array(
				'type'=>'text',
				'label' => __("Название секции"),
				'section' => 'contact_text_section',
				'settings' => 'section_name2',
			)));

		$wp_customize -> add_setting('address_label', array(
			'default' => '',
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'address_label', array(
				'type'=>'text',
				'label' => __('Название блока с адрессом'),
				'section' => 'contact_text_section',
				'settings' => 'address_label',
			)));


		$wp_customize -> add_setting('address_text', array(
			'default' => '',
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'address_text', array(
				'type'=>'text',
				'label' => __('Напишите адресс'),
				'section' => 'contact_text_section',
				'settings' => 'address_text',
			)));

		$wp_customize -> add_setting('flor_text', array(
			'default' => '',
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'flor_text', array(
				'type'=>'text',
				'label' => __('Укажите этаж'),
				'section' => 'contact_text_section',
				'settings' => 'flor_text',
			)));

		$wp_customize -> add_setting('company_name', array(
			'default' => '',
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'company_name', array(
				'type'=>'text',
				'label' => __('Название предприятия'),
				'section' => 'contact_text_section',
				'settings' => 'company_name',
			)));


		$wp_customize -> add_setting('phone_number', array(
			'default' => '+38 '
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'phone_number', array(
				'type'=>'text',
				'label' => __('Custom phone number'),
				'description' => __("This is a phone number"),
				'section' => 'contact_text_section',
				'settings' => 'phone_number',
			)));

		$wp_customize -> add_setting('phone_number2', array(
			'default' => '+38 '
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'phone_number2', array(
				'type'=>'text',
				'label' => __('Custom phone number'),
				'description' => __("This is the second custom's phone number"),
				'section' => 'contact_text_section',
				'settings' => 'phone_number2',
			)));

		$wp_customize -> add_setting('site_label', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'site_label', array(
				'type'=>'text',
				'label' => __('Название сайта'),
				'section' => 'contact_text_section',
				'settings' => 'site_label',
			)));

		$wp_customize -> add_setting('email_address', array(
		'default' => 'example@gmail.com'
	));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'email_address', array(
				'type'=>'text',
				'label' => __('Почта'),
				'section' => 'contact_text_section',
				'settings' => 'email_address',
			)));

		$wp_customize -> add_setting('extra_word', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'extra_word', array(
				'type'=>'text',
				'label' => __('Дополнительные слова в футере'),
				'section' => 'contact_text_section',
				'settings' => 'extra_word',
			)));

		$wp_customize -> add_setting('map', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'map', array(
				'type'=>'text',
				'label' => __('Вставте код карты'),
				'section' => 'contact_text_section',
				'settings' => 'map',
			)));

		$wp_customize->add_setting('second-logo');
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'second-logo',
				array(
					'label' => 'Добавьте логотип для футера',
					'section' => 'contact_text_section',
					'settings' => 'second-logo'
				)
			));

	}
}
add_action('customize_register', 'customize_contact_register');



if ( ! function_exists( 'customize_contact_header_register' ) ) {
	function customize_contact_header_register($wp_customize)
	{
		$wp_customize->add_section(
			'contact_header_section', array(
			'title' => __('Шапка сайта'),
			'description' => __('Contact information')
		));
		$wp_customize->add_setting('call_us', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'call_us', array(
				'type' => 'text',
				'label' => __('Напишите текст для шапки лендинга'),
				'section' => 'contact_header_section',
				'settings' => 'call_us',
			)));

		$wp_customize->add_setting('work_hour', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'work_hour', array(
				'type' => 'text',
				'label' => __('Укажите рабочие часы'),
				'section' => 'contact_header_section',
				'settings' => 'work_hour',
			)));

		$wp_customize->add_setting('menu-link-name', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'menu-link-name', array(
				'type' => 'text',
				'label' => __('Укажите название позиции в меню'),
				'section' => 'contact_header_section',
				'settings' => 'menu-link-name',
			)));
		$wp_customize->add_setting('menu-link-name2', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'menu-link-name2', array(
				'type' => 'text',
				'label' => __('Укажите название позиции в меню'),
				'section' => 'contact_header_section',
				'settings' => 'menu-link-name2',
			)));

		$wp_customize->add_setting('offer-link-name', array(
		'default' => ''
	));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'offer-link-name', array(
				'type' => 'text',
				'label' => __('Укажите название позиции в меню'),
				'section' => 'contact_header_section',
				'settings' => 'offer-link-name',
			)));

		$wp_customize->add_setting('offer-form-caption', array(
			'default' => ''
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'offer-form-caption', array(
				'type' => 'text',
				'label' => __('Укажите подпись перед всплывающей формой'),
				'section' => 'contact_header_section',
				'settings' => 'offer-form-caption',
			)));
		$wp_customize->add_setting('offer-form-caption2', array(
		'default' => ''
	));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'offer-form-caption2', array(
				'type' => 'text',
				'label' => __('Укажите подпись перед всплывающей формой'),
				'section' => 'contact_header_section',
				'settings' => 'offer-form-caption2',
			)));

		$wp_customize->add_setting('back-image');
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'back-image',
				array(
					'label' => 'Добавьте фон для первой секции',
					'section' => 'contact_header_section',
					'settings' => 'back-image'
				)
			));
	}
}
	add_action('customize_register', 'customize_contact_header_register');