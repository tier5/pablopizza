 <?php 
/*
*Template Name:Menu Details Page
*/
 ?>
 <?php include 'menu_header.php'; ?>
 <div class="bodypart menupage">
        <div class="menu-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-sm-offset-1">
                        <div class="banner-graphics">
                        <img src="<?php echo get_template_directory_uri();?>/images/header-graphics.png" alt="img">
                    </div>
                    
                        <div class="menu-section-main">
                            <h2>MENU</h2>
                            <div class="download-menu">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri();?>/images/download-menu.png" alt="img">
                                </a>
                            </div>
                            <div class="menu-section-main-top">
                                <?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                                <?php the_content(); ?> <!-- Page Content -->
                                <?php
                                endwhile; //resetting the page loop
                                wp_reset_query(); //resetting the page query
                                ?>
                            </div>
                            <?php 

                            $args = array(
                                           'posts_per_page' => -1,
                                            'orderby'           => 'date', 
                                            'order'             => 'DESC',
                                            
                                        );
                            $terms = get_terms( 'menu categories', $args );
                                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                                       $count='0';
                                        foreach ( $terms as $term ) {?>
                                            <div class="accordian-block">

                                <h4><?php echo $term->name; ?></h4>
                                <p>
                                    <?php echo $term->description; ?>
                                </p>
                                <div class="dish-type">VEGETARiAN</div>

                                <span class="view-pizza-btn" data-toggle="collapse" data-target="#demo<?php  if($count=='0'){echo '';}else{echo $count;}?>">VIEW THE PiZZAS</span>

                                <div id="demo<?php  if($count=='0'){echo '';}else{echo $count;}?>" class="collapse">
                                    <div class="common-hide">
                                        <?php $posts_array = get_posts(
                                                array(
                                                    'posts_per_page' => -1,
                                                    'post_type' => 'menu',
                                                    'orderby' => 'meta_value',
                                                    'order'      => 'ASC',
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'menu categories',
                                                            'field' => 'term_id',
                                                            'terms' => $term->term_id,
                                                        )
                                                    )
                                                )

                                            );
                                            //print_r( $posts_array ); 
                                            foreach ( $posts_array as $newpost ) {?>
                                        <div class="item-segrication">
                                            <h3><span><a href="<?php //echo get_permalink( $newpost->ID )?>"><?php echo $newpost->post_title;?></a></span></h3> <?php echo $newpost->post_content;?>
                                        </div>
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                            </div>

                                       <?php  $count++;}

                                       
                                        
                                    }
                                ?>
                            
                            <!--<div class="accordian-block">
                                <h4>SALADS</h4>
                                <p>
                                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.
                                </p>
                                <div class="dish-type">VEGETARiAN</div>

                                <span class="view-pizza-btn" data-toggle="collapse" data-target="#demo1">VIEW THE SALADS</span>

                                <div id="demo1" class="collapse">
                                    <div class="common-hide">
                                        <div class="item-segrication">
                                            <h3><span>SiDE SALAD</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>CREATE YOUR OWN</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>ANTiPASTO</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>GREEK SALAD</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>UNICORNICOPIA</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-block">
                                <h4>APPETIZERS</h4>
                                <p>
                                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.leap into electronic typesetting.
                                </p>
                                <br>

                                <span class="view-pizza-btn" data-toggle="collapse" data-target="#demo2">VIEW THE APPETIZERS</span>

                                <div id="demo2" class="collapse">
                                    <div class="common-hide">
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-block">
                                <h4>FOR THE KiDS</h4>
                                <p>
                                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.leap into electronic typesetting.
                                </p>
                                <br>

                                <span class="view-pizza-btn" data-toggle="collapse" data-target="#demo3">VIEW THE PIZZAS</span>

                                <div id="demo3" class="collapse">
                                    <div class="common-hide">
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <div class="item-segrication">
                                            <h3><span>LOREMiPSUM</span></h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'menu_footer.php';?>