<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * 
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
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
        <?php include('parts/menu-parts.php'); ?>
    </header>
   <div class="container-fluid">
        <div class="row">
            <div class="banner">
                <!-- Edited by tania -->
                <!-- <img src="images/banner_home.jpg" alt="Chania" class="img-responsive"> -->
                
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php //echo do_shortcode('[rev_slider alias="home_page"]');?>  
         <?php
                $c = 0;
                $class = '';
                query_posts('category_name=home-page-banner&showposts=2');
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $c++;

                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                    $url = $thumb['0'];

                    if ( $c == 1 ){ $class = ' active';}else{ $class='';} 
          ?>
                 <div class="item <?php echo $class; ?>">
                    <img src="<?php echo $url;?>" alt="Chania">
                </div>
                 <?php
                    endwhile;endif;
                    wp_reset_query();
                ?>
            </div>

            <!-- Left and right controls -->

        </div>
                <!-- - -->
            </div>
        </div>
    </div>    