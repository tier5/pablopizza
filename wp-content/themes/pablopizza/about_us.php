<?php 
/*
*Template Name:About Page
*/
 ?>
 <?php include 'about_header.php'; ?>
 <div class="bodypart aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-sm-offset-2">
                <div class="banner-graphics">
                        <img src="<?php echo get_template_directory_uri();?>/images/header-graphics.png" alt="img">
                        </div>
                <div class="about-page">
                    <h2>ABOUT US</h2>
                    <div class="content">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                            the_content();
                            endwhile; else: ?>
                            <p>Sorry, no content available.</p>
                            <?php endif; ?>
                    </div>
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