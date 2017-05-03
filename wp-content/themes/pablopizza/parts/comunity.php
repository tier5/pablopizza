
            
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
                                query_posts(array('posts_per_page' =>4,'post_type'=>'importantdate','order' => 'ASC' ));                              
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
                            query_posts(array('posts_per_page' =>2,'post_type'=>'whatsnew', 'order' => 'ASC'));     
                            $i=0;                         
                            ?>
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post();$i++;?> 
                             
                               <div class="col-md-6 col-sm-6">
                                    <div class="<?php echo ($i % 2 == 0) ? 'support' : 'free-dough';  ?>">
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
                                <?php
                                    $appID = get_option('of_lyhfbaid');
                                    
                                    $appSecret = get_option('of_lyhfbasid');

                                    $accessToken = $appID . '|' . $appSecret;

                                    $id = get_option('of_lyhfbpid');
                                    $fbLimit = 4;
                                    $fbCount = 0;


                                    $url = "https://graph.facebook.com/$id/posts?fields=id,full_picture,type,from,message,status_type,object_id,name,caption,description,link,created_time&access_token=$accessToken";

                                    $result = file_get_contents($url);

                                    $fbdata = json_decode($result, true);
                                    foreach ($fbdata['data'] as $post )
                                    {

                                     $post_created = date('j M - Y', strtotime($post['created_time']));
                                            $post_text = $post['message'];
                                            $post_url = $post['link'];
                                            //$post_picture = $post['picture'];
                                             $post_picture = $post['full_picture'];    
                                            //echo '<a href="'.$post_url.'"><img src="'.$post_picture.'"></a><br/>';

                                ?>
                            
                                <div class="col-md-3 col-sm-3">
                                    <!-- <div class="post-demo">

                                    </div> -->
                                    <div class="post-demo">
                                    <a href="<?= $post_url ?>" target="_blank">
                                    <img src="<?= $post_picture ?>" alt="Lights">

                                    </a>
                                    </div>
                                </div>
                                <?php 
                                    $fbCount++;
                                     if($fbCount >= $fbLimit) break;
                                    } 
                                ?>

                               <!--  <div class="col-md-3 col-sm-3">
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
                                </div> -->

                            </div>
                        </div>
                        <div class="whats-new"><img src="<?php echo get_template_directory_uri();?>/images/social-post.png" alt="img"></div>
                    </div>

                </div>
            </div>
        
        