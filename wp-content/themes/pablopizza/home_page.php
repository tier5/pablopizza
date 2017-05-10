<?php 
/*
*Template Name:Home Page
*/
get_header(); ?>
 <div class="bodypart homepage">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-sm-offset-2">
                    <div class="banner-graphics">
                        <img src="<?php echo get_template_directory_uri();?>/images/header-graphics.png" alt="img">
                    </div>
                    <div class="heading-graphis">
                        PiZZA OF THE WEEK
                    </div>
                    <div class="row first-step">
                        <div class="col-md-6 col-sm-7">
                            <div class="first-left">
                                
                                <?php if( get_field('curry_on_my_wayward_son_title') ): ?>
                                    <h2><?php the_field('curry_on_my_wayward_son_title'); ?></h2>
                                <?php endif; ?>
                                
                                <?php if( get_field('curry_on_my_wayward_son_content') ): ?>
                                    <p><?php the_field('curry_on_my_wayward_son_content'); ?></p>
                                <?php endif; ?>
                                <p class="valid-btn">Valid Thru: <?php the_field('valid_thru'); ?></p>
                                <br>
                                <br>

                                <div class="bear-month">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <div class="row">
                                                <img src="<?php echo get_template_directory_uri();?>/images/can.png" alt="img" class="img-responsive">
                                            </div>                                            
                                        </div>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="row">
                                            <?php if( get_field('beer_of_the_month') ): ?>
                                                <h3><?php the_field('beer_of_the_month'); ?></h3>
                                            <?php endif; ?>
                                                        <?php if( get_field('3rd_eye_pale!____$3') ): ?>
                                                <h4><?php the_field('3rd_eye_pale!____$3'); ?></h4>
                                            <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-5 pizza-holder">
                        <?php
                            $image = get_field('curry_on_my_wayward_son_image');

                        ?>
                            <img src="<?php echo $image['url']; ?>" alt="img">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-sm-offset-2">
                        <h2>THE MENU</h2>
                       
                        <?php $i=0; if( have_rows('the_menu') ): ?>
                             <ul>
                            <?php while( have_rows('the_menu') ): the_row();$i++; 

                            $image = get_sub_field('image');
                            
                            //$link = get_sub_field('link');

                            ?>
                            <li>
                                <a href="<?php echo site_url()?>/menu-details/#the-menu-<?php echo $i;?>"><img src="<?php echo $image['url']; ?>" alt="img"></a>
                            </li>
                            <?php endwhile; ?>
                            <li>
                                <a href="<?php echo site_url()?>/menu-details"><img src="<?php echo get_template_directory_uri();?>/images/view-full-menu.jpg" alt="img"></a>
                            </li>

                            </ul>
                        <?php endif; ?>  
                          
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="community-news" id="community-news">
            <?php include('parts/comunity.php') ?>
        </div>
        <div class="about-pablos">
            <div class="container">
                <div class="row relative">
                    <div class="col-md-10 col-sm-10 col-sm-offset-2">
                        <h2>ABOUT PABLOS</h2>
                        <div class="row about-sec">
                            <div class="col-md-8 col-sm-12">
                                <div class="whole-tab">
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">

                                           <?php $value = get_field( "about", 6 ); echo $value;?>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">

                                            <?php $value2 = get_field( "hours", 6 ); echo $value2;?>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">

                                           <?php $value3 = get_field( "philo", 6 ); echo $value3;?>
                                        </div>
                                        <div id="menu3" class="tab-pane fade">
                                            <?php $value4 = get_field( "owners", 6 ); echo $value4;?>
                                        </div>
                                        <div id="menu4" class="tab-pane fade">
                                            <?php $value5 = get_field( "did_you_know", 6 ); echo $value5;?>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home">About</a></li>
                                        <li><a data-toggle="tab" href="#menu1">Hours</a></li>
                                        <li><a data-toggle="tab" href="#menu2">PHILOSOPHY</a></li>
                                        <li><a data-toggle="tab" href="#menu3">OWNERS</a></li>
                                        <li><a data-toggle="tab" href="#menu4">DID YOU KNOW</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="about-graphics">
                                
                                <?php 

                                $about_pablo = get_field('about_pablos',4);                             

                                if( !empty($about_pablo) ): ?>

                                    <img src="<?php echo $about_pablo['url']; ?>" alt="<?php echo $about_pablo['alt']; ?>" />

                                <?php endif; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="location" id="location">
            <div class="map-area">
                <div class="container">
                    <div class="row relative">
                        <div class="col-md-10 col-sm-10 col-sm-offset-2">
                            <h2>LOCATiON</h2>
                            <div class="location-main">
                                <div class="col-md-6 col-sm-12">
                                    <?php $k=0;$args = array(
                                                    'post_type' => 'locations',
                                                    'posts_per_page' => 4,
                                                    'order' => 'ASC'
                                                    // Several more arguments could go here. Last one without a comma.
                                                );
                                // Query the posts:
                                $obituary_query = new WP_Query($args);
                                // Loop through the obituaries:
                                while ($obituary_query->have_posts()) : $obituary_query->the_post(); $k++;
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                                 ?>
                                    <div <?php if($k==1){?>class="address"<?php }else{?>class="address address-second"<?php } ?>>
                                        <h3><a href="<?php the_field('link'); ?>" target="_blank"><?php the_title();?></a></h3>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <p class="add">
                                                    <?php the_content();?>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p>
                                                    HOURS:<br/>
                                                    <?php the_field('hours'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; wp_reset_postdata();?>
                                    <!--<div class="address address-second">
                                        <h3>Fruita</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <p class="add">
                                                    319 Main Street,
                                                    <br>8150(970) 858-8300
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <p>
                                                    HOURS:
                                                    <br> Tuesday - Sunday 11a - 8p
                                                    <br> Closed Mondays
                                                </p>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>