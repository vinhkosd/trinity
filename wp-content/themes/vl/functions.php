<?php

// Initialize theme
include_once get_template_directory() . '/inc/init.php';

/*
	Column Taxonomy
	@slug: Program
*/
// function my_columns($columns) {
//     $columns['program_cate'] = 'Category';
// return $columns;
// }
// function my_manage_program_columns( $column, $post_id ) {
	
// 	global $post;
// 	switch( $column ) {

// 	    /* If displaying the 'article_category' column. */
// 	    case 'program_cate' :

// 	        /* Get the genres for the post. */
// 	        $terms = get_the_terms( $post_id, 'program_cate' );

// 	        /* If terms were found. */
// 	        if ( !empty( $terms ) ) {

// 	            $out = array();

// 	            /* Loop through each term, linking to the 'edit posts' page for the specific term. */
// 	            foreach ( $terms as $term ) {
// 	                $out[] = sprintf( '<a href="%s">%s</a>',
// 	                    esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'program_cate' => $term->slug ), 'edit.php' ) ),
// 	                    esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'program_cate', 'display' ) )
// 	                );
// 	            }

// 	            /* Join the terms, separating them with a comma. */
// 	            echo join( ', ', $out );
// 	        }

// 	        /* If no terms were found, output a default message. */
// 	        else {
// 	            _e( 'No Category' );
// 	        }

// 	        break;

// 	    /* Just break out of the switch statement for everything else. */
// 	    default :
// 	        break;
// 	}
// }
// add_filter('manage_edit-program_columns', 'my_columns');
// add_action( 'manage_program_posts_custom_column', 'my_manage_program_columns', 10, 2 );
/*
	End column
*/

/*
	Column Featured Image
	@slug: Program
*/
function posts_columns($defaults)
{
    $defaults['riv_post_thumbs'] = __('Featured image');
    return $defaults;
} 
function posts_custom_columns($column_name, $id)
{
    if($column_name === 'riv_post_thumbs')
    echo the_post_thumbnail( 'small_thumbnail' );
}
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
/*
	End column
*/

add_action('admin_bar_menu', 'add_toolbar_items', 100);
function add_toolbar_items($admin_bar){
	$admin_bar->add_menu( array(
        'id'    => 'theme_options_menu',
        'title' => 'Theme Settings',
        'href'  => site_url()."/wp-admin/admin.php?page=theme-general-settings",
        'meta'  => array(
            'title' => __('Theme Settings'),            
        ),
    ));

    $admin_bar->add_menu( array(
        'id'    => 'theme_menu_edit',
        'title' => 'Edit Menu',
        'href'  => site_url()."/wp-admin/nav-menus.php",
        'meta'  => array(
            'title' => __('Edit Menu'),            
        ),
    ));
}

function post_load_more(){
    $page = isset($_GET['page'])?$_GET['page']:'';
    $slug = isset($_GET['slug'])?$_GET['slug']:'';
    $args = array(
        'posts_per_page' => 3,
        'category_name' => $slug,
        'paged' => $page,
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
        ob_start();
?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <article id="post-<?php the_ID();?>" class="post-item">
            <div class="post-item-content uk-flex uk-flex-middle">
                <div class="thumb uk-cover-container">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url('post_thumb') ?>" uk-cover>
                        <canvas width="444" height="238"></canvas>
                    </a>
                </div>
                <div class="post-info">
                    <div class="d-title">
                        <h2 class="title uk-text-uppercase">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
                    
                    <div class="excerpt">
                        <p><?php echo wp_trim_words(get_the_excerpt(),13) ?></p>
                    </div>
                    <a class="readmore" href="<?php the_permalink(); ?>">
                        Read more
                    </a>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
<?php
        echo ob_get_clean();
    endif;wp_reset_postdata();
    die;
}
add_action( 'wp_ajax_post_load_more', 'post_load_more' );
add_action( 'wp_ajax_nopriv_post_load_more', 'post_load_more' );
