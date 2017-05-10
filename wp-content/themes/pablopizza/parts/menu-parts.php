


        <div class="left-menu">
            <ul>
                <li>   
                        <?php if(isset($_COOKIE['location']) && $_COOKIE['location'] == 'grand-junction'){?>
                        <img class="bimggrandjunction" src="<?php echo get_template_directory_uri();?>/images/grand_junction.png" alt="img">
                        <?php }else{?>
                        <img class="imggrandjunction" src="<?php echo get_template_directory_uri();?>/images/grand_junction.png" alt="img">
                        <?php }?>
                        
                        
                         <?php if(isset($_COOKIE['location']) && $_COOKIE['location'] == 'grand-frutia'){?>
                        <img class="bimgfrutia" src="<?php echo get_template_directory_uri();?>/images/fruita-button.png" alt="img">
                        <?php }else{?>
                        <img class="imgfrutia" src="<?php echo get_template_directory_uri();?>/images/fruita-button.png" alt="img">
                        <?php }?>
                    

                    
                </li>
                
                <li>
                    <a href="<?php echo site_url();?>/menu-details/" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/menu-ico.png" alt="img" class="img-responsive">
                        <span>menu</span>
                    </a>
                </li>
                <li>
                <?php if ( is_home() || is_front_page() ){?>

                    <a href="#community-news" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/news-ico.png" alt="img" class="img-responsive">
                        <span>news</span>
                    </a>
                 <?php }else{ $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>
                    <a href="<?php echo $url; ?>/#community-news" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/news-ico.png" alt="img" class="img-responsive">
                        <span>news</span>
                    </a>

                 <?php } ?>   
                </li>
                <li>
                    <a href="<?php echo site_url();?>/about-us" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/aboutus-ico.png" alt="img" class="img-responsive">
                        <span>about us</span>
                    </a>
                </li>
                <li>
                 <?php if ( is_home() || is_front_page() ){?>
                    <a href="#location" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/location-ico.png" alt="img" class="img-responsive">
                        <span>locations</span>
                    </a>
                  <?php }else{ ?>   
                     <a href="<?php echo site_url();?>/#location" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/location-ico.png" alt="img" class="img-responsive">
                        <span>locations</span>
                    </a>

                   <?php } ?>   
                </li>
                <li>
                    <a href="<?php echo site_url();?>/partners" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/partners-ico.png" alt="img" class="img-responsive">
                        <span>partners</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-list joinclub-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/joinclub-ico.png" alt="img" class="img-responsive">
                        <span>join club</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>/feedback" class="menu-list">
                        <img src="<?php echo get_template_directory_uri();?>/images/feedback-ico.png" alt="img" class="img-responsive">
                        <span>feedback</span>
                    </a>
                </li>
               
                <img src="<?php echo get_template_directory_uri();?>/images/bottom-border.png" alt="img" class="img-responsive bottom-border-img">
            </ul>
        </div>
        <div class="header-top">
            <div class="relative">
                <div class="social-media">
                	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
						
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
						
					<?php endif; ?>
                </div>
            </div>

        </div>
        <div class="order-now">

         

            <a href="javascript:void(0);">
                <img src="<?php echo get_template_directory_uri();?>/images/order-now.png" alt="img">
            </a>

            <!-- <?php if(isset($_COOKIE['location']) && $_COOKIE['location'] == 'grand-junction'){?>
            <a href="javascript:void(0);" class="grand-junction-popup">
                <img src="<?php echo get_template_directory_uri();?>/images/order-now.png" alt="img">
            </a>
            <?php }elseif(isset($_COOKIE['location']) && $_COOKIE['location'] == 'grand-frutia'){?>  
            <a href="javascript:void(0);" class="grand-frutia-popup">
                <img src="<?php echo get_template_directory_uri();?>/images/order-now.png" alt="img">
            </a>      
            <?php }else{?>         
            
            
            <a>
                <img src="<?php echo get_template_directory_uri();?>/images/order-now.png" alt="img">
            </a>
            
            <?php } ?> -->
           
        </div>

        <div class="left-logo">
            <div class="logo">
                <a href="<?php echo site_url();?>">
                    <img src="<?php echo get_template_directory_uri();?>/images/logo-new.png" alt="img">
                </a>
            </div>

        </div>

    