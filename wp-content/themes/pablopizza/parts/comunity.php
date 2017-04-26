
            
            <div class="container">
                <div class="imp-date1">
                    <div class="row relative">
                        <!-- Edited by tania -->
                        <div class="col-md-10 col-sm-10 col-sm-offset-2">
                        <!-- - -->
                            <h2>COMMUNiTY NEWS</h2>
                            <div class="community-area">
                                <div class="row">

                              
                                <?php
                                query_posts(array('posts_per_page' =>4,'post_type'=>'importantdate'));                              
                                ?>
                                <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post();?>

                                     <div class="col-md-3 col-sm-6 community-area-single">
                                        <div class="com-pic">
                                            <?php the_field('date'); ?>
                                        </div>
                                        <div class="com-days">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="com-info">
                                            <?php the_content(); ?>
                                        </div>
                                     </div>
                                <?php
                                endwhile;endif;
                                wp_reset_query();
                                ?> 
                                </div>
                            </div>
                        </div>
                        <div class="imp-date"><img src="<?php echo get_template_directory_uri();?>/images/imp-dates.png" alt="img"></div>
                    </div>
                </div>
                <div class="whats-new-row">
                    <div class="row relative">
                        <!-- Edited by tania -->
                        <div class="col-md-10 col-sm-10 col-sm-offset-2">
                        <!-- - -->
                            <div class="row ">
                               
                            <?php
                            query_posts(array('posts_per_page' =>2,'post_type'=>'whatsnew'));     
                            $i=0;                         
                            ?>
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post();$i++;?> 
                             
                               <div class="col-md-6 col-sm-6">
                                    <div <?php if($i == 1){?>class="free-dough"<?php }elseif ($i==2){?>class="support"<?php } ?>>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php
                            endwhile;endif;
                            wp_reset_query();
                            ?>   
                            </div>
                        </div>
                        <div class="whats-new"><img src="<?php echo get_template_directory_uri();?>/images/whats-new.png" alt="img"></div>
                    </div>
                </div>
                <div class="spec-post">
                    <div class="row relative">
                        <!-- Edited by tania -->
                        <div class="col-md-10 col-sm-10 col-sm-offset-2">
                        <!-- - -->
                        
                        
                            <div class="row">
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="post-demo">

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="post-demo">

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="post-demo">

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="post-demo">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="whats-new"><img src="<?php echo get_template_directory_uri();?>/images/social-post.png" alt="img"></div>
                    </div>

                </div>
            </div>
        
        