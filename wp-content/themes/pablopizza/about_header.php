<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/custom.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>
    <header>
        <?php include('parts/menu-parts.php'); ?>
    </header>
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
       
    