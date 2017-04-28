<div class="row stay-connected-top">
                                <div class="col-md-6 col-sm-6">
                                    <h3>INSTAGRAM</h3>
                                    <div class="row">
                                    
                                        <?php echo do_shortcode('[instagram-feed]'); ?>

                                    </div>
                                </div>


                                <div class="col-md-6 col-sm-6">
                                    <h3>FLICKR</h3>
                                    <div class="row">
                                    <?php
 
                                    $api_key = get_option('of_lyhflaid');
                                    $screate = get_option('of_lyhflasid');
                                     
                                    $tag = get_option('of_lyhfltg');
                                    $perPage = 4;
                                    $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
                                    $url.= '&api_key='.$api_key;
                                    $url.= '&tags='.$tag;
                                    $url.= '&per_page='.$perPage;
                                    $url.= '&format=json';
                                    $url.= '&nojsoncallback=1';
                                     
                                    $response = json_decode(file_get_contents($url));
                                    $photo_array = $response->photos->photo;
                                     
                                    /*print ("<pre>");
                                    print_r($response);
                                    print ("</pre>");*/
                                     //var_dump($response);
                                    foreach($photo_array as $single_photo){
                                     
                                    $farm_id = $single_photo->farm;
                                    $server_id = $single_photo->server;
                                    $photo_id = $single_photo->id;
                                    $secret_id = $single_photo->secret;
                                    $size = 'm';
                                     
                                    $title = $single_photo->title;
                                     
                                    $photo_url = 'http://farm'.$farm_id.'.staticflickr.com/'.$server_id.'/'.$photo_id.'_'.$secret_id.'_'.$size.'.'.'jpg';
                                     
                                    //print "<a href='".$photo_url."'><img title='".$title."' src='".$photo_url."' /></a>";
                                     
                                   
                                     
                                    ?>
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <a href="<?php //echo $url; ?>"><img src="<?php echo $photo_url; ?>" alt="img"></a>
                                        </div>
                                    <?php } ?>   

                                    </div>
                                </div>

                               <!--  <div class="col-md-6 col-sm-6">
                                    <h3>FACEBOOK</h3>
                                   
                                    <?php //echo do_shortcode('[recent_facebook_posts  number=4]');?>
                                </div> -->
</div>