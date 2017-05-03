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
                    <div class="col-md-10 col-sm-10 col-sm-offset-2">
                        <div class="banner-graphics">
                        <img src="<?php echo get_template_directory_uri();?>/images/header-graphics.png" alt="img">
                    </div>
                    
                        <div class="menu-section-main">
                            <h2>MENU</h2>
                            <div class="download-menu">
                                <a href="<?php echo get_option('of_lylmenu'); ?>">
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
                            <?php $i=1;

                            $args = array(
                                           'posts_per_page' => -1,
                                            'orderby'           => 'date', 
                                            'order'             => 'DESC',
                                            
                                        );
                            $terms = get_terms( 'menu categories', $args );
                                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                                       $count='0';
                                        foreach ( $terms as $term ) {?>
                                            <div class="accordian-block" id="the-menu-<?php echo $i;?>">

                                <h4><?php echo $term->name; ?></h4>
                                <p>
                                    <?php echo $term->description; ?>
                                </p>
                                <div class="dish-type">VEGETARiAN</div>

                                <span class="view-pizza-btn" data-toggle="collapse" data-target="#demo<?php  if($count=='0'){echo '';}else{echo $count;}?>">VIEW THE <?php echo $term->name; ?></span>

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
                                        <?php 
                                       $dash_icon = get_field('dash_icon_2',$newpost->ID);   
                                      // $value = $dash_icon['value'];
/*
echo '<pre>';
var_dump($value);
echo '</pre>';        */                                                             ?>
                <h3><?php if ($dash_icon) 
{?><span><a><?php echo $newpost->post_title;?></a></span><?php }else{ ?><a><?php echo $newpost->post_title;?></a><?php } ?></h3> 
                                            <?php echo $newpost->post_content;?>
                                        </div>
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                            </div>

                                       <?php  $i++;$count++;}

                                       
                                        
                                    }
                                ?>
                            
                           
                        </div>
                    </div>
                </div>
                <!--  <div class="community-news">
                    <?php //include('parts/comunity.php') ?>
                </div> -->
               
              
          
            </div>
        </div>
        <div class="community-news">
                    <?php include('parts/comunity.php') ?>
                </div>
        <?php include 'menu_footer.php';?>