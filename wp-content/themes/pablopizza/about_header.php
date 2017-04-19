<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pablo's Pizza</title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php wp_head();?>
<body>
    <header>
        <div class="left-menu">
            <ul>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri();?>/images/grandjunction.png" alt="img">
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>/menu-details/" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/menu.png" alt="img">
                    </a>
                </li>
                <li>
                    <a href="#" class="news-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/news.png" alt="img">
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>/about-us" class="about-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/aboutus.png" alt="img">
                    </a>
                </li>
                <li>
                    <a href="#" class="location-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/location.png" alt="img">
                    </a>
                </li>
                <li>
                    <a href="#" class="joinclub-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/join-club.png" alt="img">
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>/feedback" class="feedback-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/feedback.png" alt="img">
                    </a>
                </li>
                <li>
                    <a href="#" class="bottom-border">
                        <img src="<?php echo get_template_directory_uri();?>/images/bottom-border.png" alt="img">
                    </a>
                </li>

            </ul>
        </div>
        <div class="header-top">
            <!--  <img src="images/header-top.png" alt="img"> -->

            <div class="relative">
                <div class="social-media">
                   <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                        
                            <?php dynamic_sidebar( 'sidebar-4' ); ?>
                        
                    <?php endif; ?>
                </div>
            </div>

        </div>
        <div class="order-now">
            <a href="#">
                <img src="<?php echo get_template_directory_uri();?>/images/order-now.png" alt="img">
            </a>
        </div>

        <div class="left-logo">
            <div class="logo">
                <a href="<?php echo site_url();?>">
                    <img src="<?php echo get_template_directory_uri();?>/images/pabalo.png" alt="img">
                </a>
            </div>

        </div>

    </header>
<!--     <div class="container-fluid">
        <div class="row">
            <div class="banner">
                <img src="images/about-banner.jpg" alt="banner-iamge" class="img-responsive">
            </div>
        </div>
    </div> -->



        <div class="container-fluid">
        <div class="row">
        <?php
                //$c = 0;
                //$class = '';
                if(is_page( 'feedback-page' )){ query_posts('category_name=feedback-banner&showposts=1');}
                elseif(is_page( 'about-us' )){ query_posts('category_name=about-banner&showposts=1');}
                elseif(is_page( 'partners' )){ query_posts('category_name=partnars-banner&showposts=1&order=ASC');}
                
               
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    //$c++;

                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                    $url = $thumb['0'];

                  /*  if ( $c == 1 ){ $class = ' active';}else{ $class='';} */
          ?>
            <div class="banner">
                <img src="<?php echo $url;?>" alt="banner-iamge" class="img-responsive">
            </div>
           <?php
                    endwhile;endif;
                    wp_reset_query();
                ?> 
        </div>
    </div>


    