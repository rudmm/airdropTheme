<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo('name') ?></title>
        <meta name="viewport" content="width=device-width"> 
        <?php wp_head(); ?>       
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="left col-6 col-md-5">
                        <a href="<?php home_url(); ?>"><?php the_custom_logo(); ?></a>                            
                    </div>
                    <div class="center d-none  d-md-block col-md-5">
                        <form class="example">
                        <input value="" id="search"  placeholder="Search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                    <div class="right col-6 col-md-2">
                            <span><a href="#" class="fab fa-telegram-plane"></a></span>
                            <span><a href="#" class="fab fa-twitter"></a></span>                        
                            <span><a href="#" class="fab fa-facebook-f"></a></span>
                    </div>
                </div>
            </div>
        </header>