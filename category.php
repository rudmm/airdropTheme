<?php get_header();?>
        <!-- Mobile filter menu and search -->

        <main>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog"><?php single_cat_title( $prefix = '', $display = true )?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                    <?php if (have_posts()): while (have_posts()): the_post();?>
                    <div class="block">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_image'); ?></a>
                        <p class="list">
                        <?php the_category(' ', '',''); ?>
                         </p>
                         <h1><?php the_title(); ?></h1>
                         <?php the_excerpt(); ?>
                         <span class="dates"><?php the_time('F j, Y'); ?></span>
                         <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                         </div>
		            <?php endwhile;?>
                    <?php endif;?>
                       

                    </div>
                    <div class="col-md-4 dnone">
                            <?php get_sidebar(); ?>
                    </div>
                    
                </div>
            </div>
            <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-12">
                  <div class="container">
                      <div class="row">
                      <?php the_posts_pagination( $args );
                                $args = array(
                                    'show_all'     => false, // показаны все страницы участвующие в пагинации
                                    'end_size'     => 1,     // количество страниц на концах
                                    'mid_size'     => 2,     // количество страниц вокруг текущей
                                    'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                                    'prev_text'    => '« Previous',
                                    'next_text'    => 'Next page»',
                                    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                                    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                                    'screen_reader_text' => __( 'Posts navigation' ),
                                );
                                ?>
                      </div>
                  </div>
            </div></div></div>


        </main>
        <!-- Footer -->
<?php get_footer();?>