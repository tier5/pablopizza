<?php 
/*
*Template Name:About Page
*/
 ?>
 <?php include 'about_header.php'; ?>
 <div class="bodypart aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-sm-offset-1">
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
                            <div class="col-md-10 col-sm-10 col-sm-offset-1">
                                <h2>THE MENU</h2>
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/appe.jpg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/thepizza.jpg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/salads.jpg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/kids.jpg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url()?>/menu-details"><img src="<?php echo get_template_directory_uri();?>/images/view-full-menu.jpg" alt="img"></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php include 'about_footer.php'; ?>