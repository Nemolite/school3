<?php
/**
 * Initialize the custom Theme Options.
 *
 * @package OptionTree
 */

add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @since 2.0
 */
function custom_theme_options() {

	// OptionTree is not loaded yet, or this is not an admin request.
	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() ) {
		return false;
	}

	/**
	 * Get a copy of the saved settings array.
	 */
	$saved_settings = get_option( ot_settings_id(), array() );

	/**
	 * Custom settings array that will eventually be
	 * passes to the OptionTree Settings API Class.
	 */
	$custom_settings = array(
		'contextual_help' => array(
			'content' => array(
				array(
					'id'      => 'option_types_help',
					'title'   => __( 'Option Types', 'theme-text-domain' ),
					'content' => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>',
				),
			),
			'sidebar' => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>',
		),
		'sections'        => array(		
			array(
				'id'    => 'welcome',
				'title' => __( 'Приветствие', 'theme-text-domain' ),
			),
		),
		'settings'        => array(
			array(
				'id'           => 'welcome_title',
				'label'        => __( 'Заголовок', 'theme-text-domain' ),
				'desc'         => __( 'Поле для ввода короткого заголовка', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'welcome',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'welcome_upload',
				'label'        => __( 'Загрузка изображения', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Рекомендуемое разрешение изображения 640 х 360', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),
				'std'          => '',
				'type'         => 'upload',
				'section'      => 'welcome',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'welcome_textarea',
				'label'        => __( 'Приветствие или поздравление', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Рекомендуемое количество слов - 70-80', 'theme-text-domain' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
				'std'          => '',
				'type'         => 'textarea',
				'section'      => 'welcome',
				'rows'         => '15',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			
		),
	);

	// Allow settings to be filtered before saving.
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

	// Settings are not the same update the DB.
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}

	// Lets OptionTree know the UI Builder is being overridden.
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
}
