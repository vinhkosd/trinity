<?php

// if ( ! function_exists( 'itcthemes_gallery' ) ) {
// 	function itcthemes_gallery( $atts, $shortcode_content = null ) {
// 		$html = $title = $category = $size = $limit = $column = $extra_class = '';
// 		extract( shortcode_atts(
// 			array(
// 				'title'		  => '',
// 				'category' 	  => '',
// 				'size' 	  	  => '',
// 				'limit' 	  => '',
// 				'column'   	  => '',
// 				'extra_class' => ''
// 			), $atts ) );

// 			if( $size == '' ) {
// 				$size = 'thumbnail';
// 			}

// 			if( $limit == '' ) {
// 				$limit = -1;
// 			}

// 			if( $column == '' ) {
// 				$column = 'col-4';
// 			}

// 			if( $category == '' || $category == 0 ) {
// 				$tax_query = '';
// 			} else {
// 				$tax_query = array(
// 					array(
// 						'taxonomy' => 'gallery_cat',
// 						'field'    => 'id',
// 						'terms'    => $category,
// 					),
// 				);
// 			}

			
// 			$html .= '<div class="itc_gallery ' . $column . ' ' . $extra_class . '">';
				
// 			// The Query
// 			$args = array(
// 				'post_type' => 'gallery',
// 				'posts_per_page' => $limit,
// 				'tax_query' => $tax_query,

// 			);
// 			$the_query = new WP_Query( $args );

// 			// The Loop
// 			if ( $the_query->have_posts() ) :
// 				while ( $the_query->have_posts() ) : $the_query->the_post();
// 					global $post;
// 					$html .= '<div class="gal-item">';
// 						$html .= '<a href="#" data-id="' . get_the_id() . '" class="open-popup-link">' . get_the_post_thumbnail($post->ID, $size) . '</a>';
// 						$html .= '<h3>' . get_the_title() . '</h3>';
// 					$html .= '</div>';
// 				endwhile;
// 			endif;
// 			/* Restore original Post Data */
// 			wp_reset_postdata();

// 			$html .= '</div>';

// 		return apply_filters( 'itcthemes_gallery', force_balance_tags( $html ) );
// 	}
// }