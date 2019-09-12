<?php
/* Виджет newposts Widget */
class newposts_widget extends WP_Widget {
	

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'newposts_widget',
            'description' => 'New Posts Widget',
        );
        parent::__construct( 'newposts_widget', 'New Posts Widget', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$args['before_widget'] = '<div class="place" >';
		$args['after_widget'] = '</div>'; 
		echo $args['before_widget'];
		$the_query = new WP_Query( 'showposts=' . $instance['quantity_posts'] );
		while ($the_query -> have_posts()) : $the_query -> the_post();
		  ?>

		<div class="row">
            <div class="col-md-6"><a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail() ){ the_post_thumbnail('new_post_image');}else{?><img src="<?php echo get_template_directory_uri() . '/images/s.png' ?>" alt="default" class="img-fluid"><?php } ?></a></div>
            <div class="col-md-6 p-0">
            <a href="<?php get_permalink(); ?>"><p><?php echo my_excerpt( get_the_title() ); ?></p></a>
			<span class="categories"><?php the_category(' ','',''); ?></span>
			</div>
        </div>
	  <?php 
	  endwhile;
	  echo $args['after_widget'];
    }
    // Параметры виджета, отображаемые в области администрирования WordPress.
    public function form( $instance ) {
		$quantity = ! empty( $instance['quantity_posts'] ) ? $instance['quantity_posts'] : ''; ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'quantity_posts'); ?>">Quantity posts<span style="color: red;">(max posts = 4)</span>:</label>
        <input type="text" id="<?php echo $this->get_field_id( 'quantity_posts' ); ?>" name="<?php echo $this->get_field_name( 'quantity_posts'); ?>" value="<?php echo esc_attr( $quantity ); ?>" />
		</p><?php
    }

    // Обновление настроек виджета в админ-панели.
    public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		if($new_instance['quantity_posts']> 4){
			$new_instance['quantity_posts'] = 4;
		}
        $instance['quantity_posts'] = strip_tags( $new_instance[ 'quantity_posts' ] );
        return $instance;
    }

}

// Регистрация и активация виджета.
function newposts_register_widget() {
    register_widget( 'newposts_widget' );
}
add_action( 'widgets_init', 'newposts_register_widget' );