<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo('name') ?></title>
        <meta name="viewport" content="width=device-width"> 
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
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
                    <?php get_sidebar('top'); ?>
                    </div>
                    <div class="right col-6 col-md-2">
                            <span><a href="#" class="fab fa-telegram-plane"></a></span>
                            <span><a href="#" class="fab fa-twitter"></a></span>                        
                            <span><a href="#" class="fab fa-facebook-f"></a></span>
                    </div>
                </div>
            </div>
        </header>