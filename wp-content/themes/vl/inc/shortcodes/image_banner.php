<?php

if ( ! function_exists( 'itcthemes_image_banner' ) ) {
	function itcthemes_image_banner( $atts, $shortcode_content = null ) {
		$html = $image = $link = $extra_class = '';
		extract( shortcode_atts(
			array(
				'image'		  => '',
				'link' 	  => '',
				'extra_class' => ''
			), $atts ) );

			$img = wp_get_attachment_image( $image, 'full' );

			$html .= '<div class="image-banner ' . $extra_class . '">';
				$html .= '<a href="' . $link . '">' . $img . '</a>';
			$html .= '</div>';	

		return apply_filters( 'itcthemes_image_banner', force_balance_tags( $html ) );
	}
}