<?php
    class StripedLatesProducts extends WP_Widget {

    function __construct() {
        // Instantiate the parent object
        parent::__construct( false, 'Latest Products' );
    }

    function widget( $args, $instance ) {
        // Widget output
        if ( ! empty($instance['title'] ) ) {
            $title =  $args['before_title'] . apply_filters('widget_title', $instance['title']). $args['after_title'];
        }
        $count_posts = !empty($instance['count_posts'] ) ? $instance['count_posts'] : 3;

        $query_args = array(
                        'post_type' => 'product',
                        'posts_per_page' => $count_posts);
        $latest_products = new WP_Query($query_args);
            ?>
            <?php if($latest_products->have_posts()): ?>
                <?php 
                    echo $args['before_widget'];
                    echo $title; 
                ?>
                <?php while($latest_products->have_posts()) : $latest_products->the_post(); ?>
                    <div class="latest-product">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <img src="<?php the_post_thumbnail_url(); ?>" style="width: 100%">
                    </div>
                <?php endwhile; ?>
            <?php
            echo $args['after_widget'];
        endif;
    }

    function update( $new_instance, $old_instance ) {
        // Save widget options
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['count_posts'] = ( ! empty( $new_instance['count_posts'] ) ) ? strip_tags( $new_instance['count_posts'] ) : '';

        return $instance;
    }

    function form( $instance ) {
        // Output admin widget options form
        $title = !empty($instance['title'] ) ? $instance['title'] : 'We recommend';
        $count_posts = !empty($instance['count_posts'] ) ? $instance['count_posts'] : 3;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('count_posts'); ?>"><?php _e( 'Count posts for show:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('count_posts'); ?>" name="<?php echo $this->get_field_name('count_posts'); ?>" type="text" value="<?php echo esc_attr($count_posts); ?>">
        </p>
        <?php
    }
}