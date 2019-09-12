<?php get_header();?>
<?php the_post(); ?>

<main>
           <div class="container first">
                <div class="row">
                    <div class="col-12">
                        <span class="categories"><?php the_category(' / ', '',''); ?></span>
                        <h1><?php the_title(); ?></h1>
                        <div class="img-post">
                        <?php the_post_thumbnail('post_image'); ?>
                        </div>
                        <div  class="dates"><span><?php the_time('F j, Y') ?></span></div>

                        <div class="social">
                        <span class="required-tools">Share </span>
                            <a href="#"><span><img src="<?php echo get_template_directory_uri() ?>/images/more_normal.svg"></span></a>
                            <a href="#"><span><img src="<?php echo get_template_directory_uri() ?>/images/telegram_normal.svg"></span></a>
                            <a href="#"><span><img src="<?php echo get_template_directory_uri() ?>/images/phone-normal.svg"></span></a>
                            <a href="#"><span><img class="email" src="<?php echo get_template_directory_uri() ?>/images/email-normal.svg"></span></a>
                            <a href="#"><span><img src="<?php echo get_template_directory_uri() ?>/images/twitter_normal.svg"></span></a>
                            <a href="#"><span><img src="<?php echo get_template_directory_uri() ?>/images/facebook-normal.svg"></span></a>
                            <a href="#"><span><img src="<?php echo get_template_directory_uri() ?>/images/bitcoin_normal.svg"></span></a>
                            </div>
                            <?php the_content(); ?>
                      <h2>Up next in Category </h2>
                      <div class="row up_next">
                      <?php query_posts('orderby=rand&showposts=3'); ?>
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-4 col-sm-12 block">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <div class="next">
                          <span class="categories"><?php the_category(' ','',''); ?></span>
                          <a href="<?php the_permalink(); ?>"><h3><?php echo my_excerpt( get_the_title(), 30); ?></h3></a>
                          <hr>
                          <div class="content">
                              <?php echo my_excerpt(get_the_content(), 150); ?>
                          </div>
                          <span class="dates"><?php the_time('F j, Y') ?></span>
                          <a href="<?php the_permalink(); ?>" class="button">read more</a>
                        </div>
                      </div>
                        <?php endwhile; endif; ?>
                      </div>
                    </div>

                </div>
            </div>

        </main>

<?php get_footer();?>