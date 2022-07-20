<?php

if ( class_exists( 'Vc_Manager' ) ) :
	/* Gallery
	---------------------------------------------------------- */
	$categories = get_terms( 'gallery_cat', array(
	    'orderby'    => 'count',
	    'hide_empty' => 1
	) );
	$cats = array();
	$cats['All Category'] = 0;
	foreach ($categories as $key => $value) {
		$cats[$value->name] = $value->term_id;
	}

	vc_map(
		array(
			'name'     => __( 'Custom Gallery', 'nt' ),
			'category' => __( 'Content', 'nt' ),
			'base'     => 'nt_gallery',
			'class'    => '',
			'params'   => array(
				array(
					'heading'     => __( 'Title', 'nt' ),
					'type'        => 'textfield',
					'param_name'  => 'title',
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Category', 'nt' ),
					'value' => $cats,
					'param_name' => 'category',
					'description' => __( 'Select a category to show gallery.', 'nt' ),
				),
				array(
					'heading'     => __( 'Size of images', 'nt' ),
					'type'        => 'textfield',
					'description' => __( 'You can specify an image size which will be used, e.g. "large" or "full". Sizes can be defined under Settings / Media. Leave blank to use a "thumbnail" size.', 'nt' ),
					'param_name'  => 'size',
				),
				array(
					'heading'     => __( 'Number of posts', 'nt' ),
					'type'        => 'textfield',
					'description' => __( 'Enter number of posts to display.', 'nt' ),
					'param_name'  => 'limit',
				),
				array(
				'type' => 'dropdown',
				'heading' => __( 'Column', 'nt' ),
				'value' => array(
					__( '4 Columns', 'nt' ) => 'col-4',
					__( '3 Columns', 'nt' ) => 'col-3',
					__( '2 Columns', 'nt' ) => 'col-2',
				),
				'param_name' => 'column',
				'description' => __( 'Select layout style. Leave blank to use "4 Columns".', 'nt' ),
			),
				array(
					'heading'     => __( 'Extra class name', 'nt' ),
					'type'        => 'textfield',
					'description' => __( 'Select image from media library', 'nt' ),
					'param_name'  => 'extra_class',
				),
			)
		)
	);

	// Image Banner
	vc_map(
		array(
			'name'     => __( 'Image Banner', 'nt' ),
			'category' => __( 'Content', 'nt' ),
			'base'     => 'nt_image_banner',
			'class'    => '',
			'params'   => array(
				array(
					'heading'     => __( 'Image', 'nt' ),
					'type'        => 'attach_image',
					'param_name'  => 'image',
				),
				array(
					'heading'     => __( 'Link', 'nt' ),
					'type'        => 'textfield',
					'param_name'  => 'link',
				),
				array(
					'heading'     => __( 'Extra class name', 'nt' ),
					'type'        => 'textfield',
					'description' => __( 'Select image from media library', 'nt' ),
					'param_name'  => 'extra_class',
				),
			)
		)
	);
endif;