<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Layout Settings',
	// 	'menu_title'	=> 'Layout',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Colors Settings',
	// 	'menu_title'	=> 'Colors',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Sliders',
	// 	'menu_title'	=> 'Main Sliders',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Socials',
	// 	'menu_title'	=> 'Socials',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}

// if ( function_exists( 'register_field_group' ) ) {
// 	register_field_group(
// 		array(
// 			'id'     => 'layout-options',
// 			'title'  => __( 'Layout Options', 'themedefault' ),
// 			'fields' => array(
// 				array(
// 					'key'          => 'field_549fgd94f',
// 					'label'        =>  __( 'Site Layout', 'themedefault' ),
// 					'name'         => 'acf_site_layout',
// 					'type'         => 'select',
// 					'choices' => array(
// 						'fullwidth'       => __( 'Full Width', 'themedefault' ),
// 						'boxed'       => __( 'Boxed', 'themedefault' ),
// 					),
// 					'default_value' => 'fullwidth',
// 					'allow_null'    => 0,
// 					'multiple'      => 0,
// 				),
// 				array(
// 					'key'          => 'field_549b65f3ad94f',
// 					'label'        =>  __( 'Container width', 'themedefault' ),
// 					'name'         => 'acf_container_width',
// 					'type'         => 'text',
// 					'instructions' => __( 'Default width: <strong>1170px</strong>', 'themedefault' ),
// 					'default_value' => '1170px',
// 				),
// 				array(
// 					'key'          => 'field_549b74c3ad94f',
// 					'label'        =>  __( 'Select Page Layout', 'themedefault' ),
// 					'name'         => 'acf_page_layout',
// 					'type'         => 'select',
// 					'instructions' => __( 'Default layout: <strong>Right Sidebar</strong>', 'themedefault' ),
// 					'choices' => array(
// 						'main'            => __( 'Full Width', 'themedefault' ),
// 						'left-main'       => __( 'Left Sidebar', 'themedefault' ),
// 						'main-right'      => __( 'Right Sidebar', 'themedefault' ),
// 						'left-main-right' => __( 'Left - Main Content - Right', 'themedefault' ),
// 					),
// 					'default_value' => 'main-right',
// 					'allow_null'    => 0,
// 					'multiple'      => 0,
// 				),
// 				array(
// 					'key'          => 'field_gr4sd94f',
// 					'label'        =>  __( 'Sidebar column width', 'themedefault' ),
// 					'name'         => 'acf_sidebar_width',
// 					'type'         => 'select',
// 					'choices' => array(
// 						'1'        => __( 'One column', 'themedefault' ),
// 						'2'        => __( 'Two column', 'themedefault' ),
// 						'3'        => __( 'Three column', 'themedefault' ),
// 						'4'        => __( 'Four column', 'themedefault' ),
// 						'5'        => __( 'Five column', 'themedefault' ),
// 					),
// 					'default_value' => '4',
// 					'allow_null'    => 0,
// 					'multiple'      => 0,
// 				),
// 				array(
// 					'key'          => 'field_544fgk4f',
// 					'label'        =>  __( 'Select Blog Layout', 'themedefault' ),
// 					'name'         => 'acf_blog_layout',
// 					'type'         => 'select',
// 					'choices' => array(
// 						'thumb-fullwidth'  => __( 'Thumbnail Full Width', 'themedefault' ),
// 						'thumb-left'       => __( 'Left Thumbnail', 'themedefault' ),
// 						'boxed'      	   => __( 'Boxed', 'themedefault' ),
// 					),
// 					'default_value' => 'thumb-left',
// 					'allow_null'    => 0,
// 					'multiple'      => 0,
// 				),
// 				array(
// 					'key'          => 'field_23fs54f',
// 					'label'        =>  __( 'Single post thumbnail', 'themedefault' ),
// 					'name'         => 'acf_post_thumb',
// 					'type'         => 'true_false',
// 					'instructions'  => __( 'Select this if you want to hide Single post thumbnail', 'themedefault' ),
// 					'default_value' => '0',
// 				),
				
// 			),
// 			'location' => array(
// 				array(
// 					array(
// 						'param'    => 'options_page',
// 						'operator' => '==',
// 						'value'    => 'acf-options-layout',
// 					),
// 				),
// 			),
// 			'menu_order'            => 0,
// 			'position'              => 'normal',
// 			'style'                 => 'default',
// 			'label_placement'       => 'top',
// 			'instruction_placement' => 'label',
// 			'hide_on_screen'        => '',
// 			'options' => array(
// 				'position'       => 'normal',
// 				'layout'         => 'default',
// 				'hide_on_screen' => array(
// 				),
// 			),
// 		)
// 	);

// 	register_field_group(
// 		array(
// 			'id'     => 'colors-options',
// 			'title'  => __( 'Colors Options', 'themedefault' ),
// 			'fields' => array(
// 				array(
// 					'key'          => 'field_54123jfd54f',
// 					'label'        =>  __( 'Body background', 'themedefault' ),
// 					'name'         => 'acf_body_bg',
// 					'type'         => 'color_picker',
// 					'instructions' => __( 'Background body. Default is while backgorund', 'themedefault' ),
// 					'default_value' => '#FFF',
// 				),
// 				array(
// 					'key'          => 'field_54176790jfd54f',
// 					'label'        =>  __( 'Body color', 'themedefault' ),
// 					'name'         => 'acf_body_color',
// 					'type'         => 'color_picker',
// 					'instructions' => __( 'Body color. Default is #212121', 'themedefault' ),
// 					'default_value' => '#212121',
// 				),
// 				array(
// 					'key'          => 'field_54gfg334f',
// 					'label'        =>  __( 'Active color', 'themedefault' ),
// 					'name'         => 'acf_active_color',
// 					'type'         => 'color_picker',
// 					'instructions' => __( 'Active color. Default is #E31E1E', 'themedefault' ),
// 					'default_value' => '#E31E1E',
// 				),
// 				array(
// 					'key'          => 'field_541fd34d54f',
// 					'label'        =>  __( 'Menu background', 'themedefault' ),
// 					'name'         => 'acf_menu_bg',
// 					'type'         => 'color_picker',
// 					'instructions' => __( 'Main menu background. Default: #212121', 'themedefault' ),
// 					'default_value' => '#212121',
// 				),
// 				array(
// 					'key'          => 'field_glgkf343f',
// 					'label'        =>  __( 'Bottom background', 'themedefault' ),
// 					'name'         => 'acf_bottom_bg',
// 					'type'         => 'color_picker',
// 					'instructions' => __( 'Bottom background. Default: #333333', 'themedefault' ),
// 					'default_value' => '#333333',
// 				),
// 				array(
// 					'key'          => 'field_dsde430f',
// 					'label'        =>  __( 'Bottom color', 'themedefault' ),
// 					'name'         => 'acf_bottom_color',
// 					'type'         => 'color_picker',
// 					'instructions' => __( 'Bottom color. Default: #f7f7f7', 'themedefault' ),
// 					'default_value' => '#f7f7f7',
// 				),
// 			),
// 			'location' => array(
// 				array(
// 					array(
// 						'param'    => 'options_page',
// 						'operator' => '==',
// 						'value'    => 'acf-options-colors',
// 					),
// 				),
// 			),
// 			'menu_order'            => 0,
// 			'position'              => 'normal',
// 			'style'                 => 'default',
// 			'label_placement'       => 'top',
// 			'instruction_placement' => 'label',
// 			'hide_on_screen'        => '',
// 			'options' => array(
// 				'position'       => 'normal',
// 				'layout'         => 'default',
// 				'hide_on_screen' => array(
// 				),
// 			),
// 		)
// 	);

// 	register_field_group(
// 		array(
// 			'id'     => 'general-options',
// 			'title'  => __( 'General Options', 'themedefault' ),
// 			'fields' => array(
// 				array(
// 					'key'          => 'field_09r4354f',
// 					'label'        =>  __( 'Show search box', 'themedefault' ),
// 					'name'         => 'acf_searchbox',
// 					'type'         => 'true_false',
// 					'instructions'  => __( 'Select this if you want to hide Search box', 'themedefault' ),
// 					'default_value' => '0',
// 				),
// 				array(
// 					'key'          => 'field_fdjk33jfd54f',
// 					'label'        =>  __( 'Site logo', 'themedefault' ),
// 					'name'         => 'acf_logo',
// 					'type'         => 'image',
// 				),
// 				array(
// 					'key'          => 'field_fdj5dhd54f',
// 					'label'        =>  __( 'Header Information', 'themedefault' ),
// 					'name'         => 'acf_header_info',
// 					'type'         => 'wysiwyg',
// 				),
// 				array(
// 					'key'          => 'field_adj4d34f',
// 					'label'        =>  __( 'Hotline', 'themedefault' ),
// 					'name'         => 'acf_hotline',
// 					'type'         => 'text',
// 				),
// 				array(
// 					'key'          => 'field_fdj543d54f',
// 					'label'        =>  __( 'Copyright', 'themedefault' ),
// 					'name'         => 'acf_copyright',
// 					'type'         => 'textarea',
// 					'default'      => __( 'Copyright &copy; 2015 ItcClassic by themedefault', 'themedefault' ),
// 				),
// 			),
// 			'location' => array(
// 				array(
// 					array(
// 						'param'    => 'options_page',
// 						'operator' => '==',
// 						'value'    => 'theme-general-settings',
// 					),
// 				),
// 			),
// 			'menu_order'            => 0,
// 			'position'              => 'normal',
// 			'style'                 => 'default',
// 			'label_placement'       => 'top',
// 			'instruction_placement' => 'label',
// 			'hide_on_screen'        => '',
// 			'options' => array(
// 				'position'       => 'normal',
// 				'layout'         => 'default',
// 				'hide_on_screen' => array(
// 				),
// 			),
// 		)
// 	);

// 	register_field_group(
// 		array(
// 			'id'     => 'sliders-settings',
// 			'title'  => __( 'Slider Setting', 'themedefault' ),
// 			'fields' => array(
// 				array(
// 					'key'          => 'field_fdgl89f',
// 					'label'        =>  __( 'Style', 'themedefault' ),
// 					'name'         => 'acf_style',
// 					'type'         => 'select',
// 					'choices' => array(
// 						'container'  => __( 'Boxed', 'themedefault' ),
// 						'fullwidth'  => __( 'Full Width', 'themedefault' ),
// 					),
// 					'default_value' => 'container',
// 					'allow_null'    => 0,
// 					'multiple'      => 0,
// 				),
// 				array(
// 					'key'          => 'field_fdf4354f',
// 					'label'        =>  __( 'Navigation', 'themedefault' ),
// 					'name'         => 'acf_navigation',
// 					'type'         => 'true_false',
// 					'instructions'  => __( 'Select this if you want to hide Navigation', 'themedefault' ),
// 					'default_value' => '0',
// 				),
// 				array(
// 					'key'          => 'field_f43254f',
// 					'label'        =>  __( 'Pagination', 'themedefault' ),
// 					'name'         => 'acf_pagination',
// 					'type'         => 'true_false',
// 					'instructions'  => __( 'Select this if you want to hide Pagination', 'themedefault' ),
// 					'default_value' => '0',
// 				),
// 				array(
// 					'key'          => 'field_f434rd54f',
// 					'label'        =>  __( 'Auto Play', 'themedefault' ),
// 					'name'         => 'acf_play',
// 					'type'         => 'true_false',
// 					'instructions'  => __( 'Select this if you want to disable auto play', 'themedefault' ),
// 					'default_value' => '0',
// 				),
// 				array(
// 					'key'          => 'field_f4653d4f',
// 					'label'        =>  __( 'Pause', 'themedefault' ),
// 					'name'         => 'acf_pause',
// 					'type'         => 'text',
// 					'instructions'  => __( 'Enter number', 'themedefault' ),
// 					'default_value' => '5000',
// 				),
// 				array(
// 					'key'          => 'field_f4fkgd4f',
// 					'label'        =>  __( 'Speed', 'themedefault' ),
// 					'name'         => 'acf_speed',
// 					'type'         => 'text',
// 					'instructions'  => __( 'Enter number', 'themedefault' ),
// 					'default_value' => '700',
// 				),
// 			),
// 			'location' => array(
// 				array(
// 					array(
// 						'param'    => 'options_page',
// 						'operator' => '==',
// 						'value'    => 'acf-options-main-sliders',
// 					),
// 				),
// 			),
// 			'menu_order'            => 0,
// 			'position'              => 'normal',
// 			'style'                 => 'default',
// 			'label_placement'       => 'top',
// 			'instruction_placement' => 'label',
// 			'hide_on_screen'        => '',
// 			'options' => array(
// 				'position'       => 'side',
// 				'layout'         => 'default',
// 				'hide_on_screen' => array(
// 				),
// 			),
// 		)
// 	);

// 	register_field_group(
// 		array(
// 			'id'     => 'sliders-options',
// 			'title'  => __( 'Slider Options', 'themedefault' ),
// 			'fields' => array(
// 				array(
// 					'key'          => 'field_fd433jfd54f',
// 					'label'        =>  __( 'Slider', 'themedefault' ),
// 					'name'         => 'acf_slider',
// 					'layout'	   => 'block',
// 					'type'         => 'repeater',
// 					'sub_fields' => array(
// 						array(
// 							'key'	=> 'field_sdfd34re545',
// 							'label' => 'Image',
// 							'type' => 'image',
// 							'name' => 'image',
// 						),
// 						array(
// 							'key'	=> 'field_sdfy44re545',
// 							'label' => 'Link',
// 							'type' => 'url',
// 							'name' => 'link',
// 						),
// 						array(
// 							'key'	=> 'field_s43fde545',
// 							'label' => 'Content',
// 							'type' => 'wysiwyg',
// 							'name' => 'content',
// 						),
// 					),
// 				),
// 			),
// 			'location' => array(
// 				array(
// 					array(
// 						'param'    => 'options_page',
// 						'operator' => '==',
// 						'value'    => 'acf-options-main-sliders',
// 					),
// 				),
// 			),
// 			'menu_order'            => 0,
// 			'position'              => 'normal',
// 			'style'                 => 'default',
// 			'label_placement'       => 'top',
// 			'instruction_placement' => 'label',
// 			'hide_on_screen'        => '',
// 			'options' => array(
// 				'position'       => 'normal',
// 				'layout'         => 'default',
// 				'hide_on_screen' => array(
// 				),
// 			),
// 		)
// 	);

// 	register_field_group(
// 		array(
// 			'id'     => 'socials-options',
// 			'title'  => __( 'Socials Option', 'themedefault' ),
// 			'fields' => array(
// 				array(
// 					'key'          => 'field_edd43df',
// 					'label'        =>  __( 'Add Social', 'themedefault' ),
// 					'name'         => 'acf_social',
// 					'type'         => 'repeater',
// 					'sub_fields' => array(
// 						array(
// 							'key'	=> 'field_rtds002ds',
// 							'label' => 'Icon',
// 							'name'  => 'icon',
// 							'type'  => 'radio',
// 							'choices' => array(
// 								'facebook'     => '<i class="fa fa-facebook"></i>',
// 								'twitter'      => '<i class="fa fa-twitter"></i>',
// 								'google-plus'  => '<i class="fa fa-google-plus"></i>',
// 								'youtube'     => '<i class="fa fa-youtube"></i>',
// 							),
// 							'default_value' => 'facebook',
// 							'allow_null'    => 0,
// 							'multiple'      => 0,
// 						),
// 						array(
// 							'key'	=> 'field_sed33s',
// 							'label' => 'Name',
// 							'type' => 'text',
// 							'name' => 'name',
// 						),
// 						array(
// 							'key'	=> 'field_sd445ds',
// 							'label' => 'Link',
// 							'type' => 'url',
// 							'name' => 'link',
// 						),
// 					),
// 				),
// 			),
// 			'location' => array(
// 				array(
// 					array(
// 						'param'    => 'options_page',
// 						'operator' => '==',
// 						'value'    => 'acf-options-socials',
// 					),
// 				),
// 			),
// 			'menu_order'            => 0,
// 			'position'              => 'normal',
// 			'style'                 => 'default',
// 			'label_placement'       => 'top',
// 			'instruction_placement' => 'label',
// 			'hide_on_screen'        => '',
// 			'options' => array(
// 				'position'       => 'normal',
// 				'layout'         => 'default',
// 				'hide_on_screen' => array(
// 				),
// 			),
// 		)
// 	);
// }
// if( function_exists('acf_add_local_field_group') ):

// acf_add_local_field_group(array (
// 	'key' => 'group_584a343241d1b',
// 	'title' => 'Favicon',
// 	'fields' => array (
// 		array (
// 			'key' => 'field_584a3449b349a',
// 			'label' => 'facivon_icon',
// 			'name' => 'facivon_icon',
// 			'type' => 'image',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array (
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'return_format' => 'array',
// 			'preview_size' => 'thumbnail',
// 			'library' => 'all',
// 			'min_width' => '',
// 			'min_height' => '',
// 			'min_size' => '',
// 			'max_width' => '',
// 			'max_height' => '',
// 			'max_size' => '',
// 			'mime_types' => '',
// 		),
// 	),
// 	'location' => array (
// 		array (
// 			array (
// 				'param' => 'options_page',
// 				'operator' => '==',
// 				'value' => 'theme-general-settings',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => 1,
// 	'description' => '',
// ));

// endif;

?>