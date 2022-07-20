<?php

add_action( 'widgets_init', 'widget_popular_init' );
function widget_popular_init() {
    register_widget('widget_popular');
}
class widget_popular extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        // widget actual processes
        parent::__construct(
        // Base ID of your widget
            'comic-wiget-popular',
            // Widget name will appear in UI
            __('Popular Manga', 'themedefault'),
            // Widget description
            array( 'description' => __( 'Popular Manga', 'themedefault' ))
        );

    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        //$postnum = $instance['postnum'];
        //print_r($cat_select);
        $wd_id = $args['widget_id'];

        ?>

        <?php echo $before_widget; ?>
        <?php echo $before_title;?>
        <?php echo $title;?>
        <?php echo $after_title;?>
        <?php 
            $listpop = get_field('choose_pop','widget_'.$wd_id);
            // print_r($listpop); 
        ?>
        <?php if($listpop): ?>
        <div class="list-item-popular">
            <?php foreach ($listpop as $key => $value): $term_id = $value['comic'];?>
                <?php if (term_exists($term_id,'comics' )): ?>
                    <?php $term_info = get_term_by('id',$term_id,'comics'); ?>
                    <div class="listPopul">
                        <div class="item-manga">
                            <div class="media">
                                <?php $thumb = get_field('thumbnail','comics'.'_'.$term_id);?>
                                <?php if ($thumb): ?>
                                    <a href="<?php echo get_term_link($term_id) ?>">
                                    <?php //echo get_BFI_thumbnail($thumb,68,98,'d-flex align-self-start mr-3 img-item'); ?>
                                    <?php echo wp_get_attachment_image($thumb, 'post_sidebar_popular_thumb','',array( "class" => "d-flex align-self-start mr-3 img-item" ) ); ?>
                                    <!-- <img class="d-flex align-self-start mr-3 img-item" src="./assets/img/manga/connan.jpg" alt="Generic placeholder image"> -->
                                    </a>
                                <?php endif; ?>
                                <div class="media-body">
                                    <h2>
                                        <a href="<?php echo get_term_link($term_id) ?>">
                                            <?php echo $term_info->name; ?>
                                        </a>
                                    </h2>
                                    <?php  
                                        $args = array(
                                            'post_type' => 'comic',
                                            'post_status' => 'publish',
                                            'posts_per_page' => 1,
                                            'orderby' => 'date',
                                            'order' => 'DESC',
                                            'tax_query' => array(
                                                'relation' => 'AND',
                                                array(
                                                    'taxonomy' => 'comics',
                                                    'field' => 'id',
                                                    'terms' => array($term_id),
                                                ),
                                            ),
                                        );
                                        $the_query = new WP_Query( $args );
                                    ?>
                                    <?php if ( $the_query->have_posts() ) : ?>
                                    <ul>
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                                <span class="item-ch">#<?php the_title() ?></span>
                                            </a>
                                            <span class="item-time"><?php echo human_time_diffs( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
                                        </li>
                                        <?php endwhile; ?>
                                    </ul>
                                    <?php endif;wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div><!-- afterwidget -->
                    </div>
                <?php endif ?>
            
            <?php endforeach ?>

            
        </div>
        
        <button class="btn-view-more">Here for more Popular Manga</button>
        <?php endif; ?>
        
        <?php echo $after_widget; ?>
        <?php

    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
        global $wpdb;
        $default = array(
            'title' => 'POPULAR MANGA',
        );
        $instance = wp_parse_args( (array) $instance, $default );
        $title = esc_attr( $instance['title'] );
        //$postnum = esc_attr( $instance['postnum'] );
        ?>
        <p><label>Tiêu đề:</label> <input class='widefat' type='text' name='<?php echo $this->get_field_name('title')?>' value="<?php echo $title; ?>" /></p>
        

        <?php
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        //$instance['postnum'] = strip_tags($new_instance['postnum']);
        return $instance;
    }
}

