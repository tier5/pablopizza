 <?php 
/*
*Template Name:Partners Page
*/
 ?>
 <?php include 'about_header.php'; ?>
 <div class="bodypart partners">
        
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-sm-offset-2">
                    <div class="banner-graphics">
                        <img src="<?php echo get_template_directory_uri();?>/images/header-graphics.png" alt="img">
                    </div>
                    <div class="partners-page">
                        <h2><?php the_title();?></h2>
                        <div class="col-md-6">
                            <?php $thumbnail = get_the_post_thumbnail_url(); ?>
                            <img src="<?php echo $thumbnail; ?>" class="img-responsive" alt="field-to-fork">
                        </div>
                        <div class="col-md-6">
                            <?php the_content();?>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/images/red_arrow.png" class="img-responsive" alt="red-arrow">
                                View Website
                            </a>
                        </div>
                    </div>
                    <div class="ourpartners relative">
                        <div class="col-md-11 col-sm-11 col-sm-offset-1">
                            <div class="row">
                                <?php $args = array(
                                                    'post_type' => 'partnars',
                                                    'posts_per_page' => 4
                                                    // Several more arguments could go here. Last one without a comma.
                                                );
                                // Query the posts:
                                $obituary_query = new WP_Query($args);
                                // Loop through the obituaries:
                                while ($obituary_query->have_posts()) : $obituary_query->the_post();
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                                 ?>
                                <div class="col-md-3 col-sm-3">
                                    <div class="image">
                                        <img src="<?php echo $thumb_url[0];?>" alt="img" class="img-responsive">
                                    </div>
                                    <div class="text">
                                        <h4><?php the_title();?></h4>
                                        <p><?php the_content();?></p>
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_postdata();?>
                                

                            </div>
                        </div>
                        <div class="whats-new"><img src="<?php echo get_template_directory_uri();?>/images/our_partner.png" alt="img"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        	<div class="row">
        		<div class="menu-area">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-10 col-sm-10 col-sm-offset-2">
		                        <h2>THE MENU</h2>
		                         <?php if( have_rows('the_menu') ): ?>
                                     <ul>
                                    <?php while( have_rows('the_menu') ): the_row(); 

                                    $image = get_sub_field('image');
                                    
                                    $link = get_sub_field('link');

                                    ?>
                                    <li>
                                        <a href="<?php echo $link; ?>"><img src="<?php echo $image['url']; ?>" alt="img"></a>
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
        	</div>
              <div class="community-news">
                    <?php include('parts/comunity.php') ?>
                </div>
            
            <?php include 'about_footer.php'; ?>