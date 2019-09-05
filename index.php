<?php get_header();?>
        <!-- Mobile filter menu and search -->

        <main>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="blog"><?php bloginfo('name');?></p>
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
                      <div class="place">
                        <div class="row">
                        <div class="col-md-6"><a href="airdrop.html"><img src="images/s.png" class="img-fluid"></a></div>
                        <div class="col-md-6 p-0">
                        <a href="airdrop.html"><p>Ferri rebum mucius...</p></a>
                        <a href="category/index.html"><span class="categories">blog category</span></a></div>
                        </div>
                        <div class="row">
                        <div class="col-md-6"><a href="airdrop.html"><img src="images/s.png" class="img-fluid"></a></div>
                        <div class="col-md-6 p-0">
                        <a href="airdrop.html"><p>Curabitur ullamcor er...</p></a>
                        <a href="category/index.html"><span class="categories">category</span></a></div>
                        </div>
                        <div class="row">
                        <div class="col-md-6"><a href="airdrop.html"><img src="images/s.png" class="img-fluid"></a></div>
                        <div class="col-md-6 p-0">
                        <a href="airdrop.html"><p>Ferri rebum...</p></a>
                        <a href="category/index.html"><span class="categories">blog category</span></a></div>
                        </div>
                        <div class="row">
                        <div class="col-md-6"><a href="airdrop.html"><img src="images/s.png" class="img-fluid"></a></div>
                        <div class="col-md-6 p-0">
                        <a href="airdrop.html"><p>Curabitur ultricies...</p></a>
                        <a href="category/index.html"><span class="categories">blog cat</span></a></div>
                        </div>
                      </div>
                      <div class="cat">
                        <h3>Categories</h3>
                        <div class="cat-list">
                         <a href="category/index.html"> <span class="categories">blog cat</span></a>
                          <a href="category/index.html"><span class="categories">blog category</span></a>
                          <a href="category/index.html"><span class="categories">blog options one</span></a>
                          <a href="category/index.html"><span class="categories">blog options one</span></a>
                          <a href="category/index.html"><span class="categories">blog cat</span></a>
                          <a href="category/index.html"><span class="categories">blog cat</span></a>
                          <a href="category/index.html"><span class="categories">blog category</span></a>
                          <a href="category/index.html"><span class="categories">blog options one</span></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-12">
                            <div class="pagination mx-0 px-0">
                                <div class="container ">
                                    <div class="row ">
                                        <div class="previous col-2 mx-0 px-0 no-gutters">
                                            <a href="#"><p>Previous page</p></a>
                                        </div>
                                        <div class="pages text-center col-8 mx-0 px-0">
                                            <a href="#"><span>1</span></a>
                                            <a href="#"><span>2</span></a>
                                            <span class="selected">3</span>
                                            <a href="#"><span>4</span></a>
                                            <a href="#"><span>5</span></a>
                                            <span>...</span>
                                            <a href="#"><span>43</span></a>
                                        </div>
                                         <div class="next mx-0 px-0 col-2">
                                            <a href="#"><p>Next page</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div></div></div>


        </main>
        <!-- Footer -->
<?php get_footer();?>