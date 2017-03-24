<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		 <div class="stay-connected">
            <div class="container">
                <div class="row relative">
                    <div class="col-md-10 col-sm-10 col-sm-offset-1">
                        <h2>STAY CONNECTED</h2>
                        <div class="stay-connected-area">
                            <div class="row stay-connected-top">
                                <div class="col-md-6 col-sm-6">
                                    <h3>INSTAGRAM</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <img src="<?php echo get_template_directory_uri();?>/images/demo-pic.jpg" alt="img">
                                        </div>
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <img src="<?php echo get_template_directory_uri();?>/images/demo-pic.jpg" alt="img">
                                        </div>
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <img src="<?php echo get_template_directory_uri();?>/images/demo-pic.jpg" alt="img">
                                        </div>
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <img src="<?php echo get_template_directory_uri();?>/images/demo-pic.jpg" alt="img">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h3>FACEBOOK</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <img src="<?php echo get_template_directory_uri();?>/images/demo-pic.jpg" alt="img">
                                        </div>
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <img src="<?php echo get_template_directory_uri();?>/images/demo-pic.jpg" alt="img">
                                        </div>
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <img src="<?php echo get_template_directory_uri();?>/images/demo-pic.jpg" alt="img">
                                        </div>
                                        <div class="col-md-6 col-sm-6 single-pic">
                                            <img src="<?php echo get_template_directory_uri();?>/images/demo-pic.jpg" alt="img">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="stay-connected-red">
                                        <h4>JOiN THE CLUB!</h4>
                                        <p>
                                            Imagine receiving an email that makes your mouth water! Pablo's Pizza offers an email and text club for customers which offers members exclusive coupons, discounts, specials, and news.
                                        </p>
                                        <a class="join-club">JOiN THE CLUB</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="stay-connected-green">
                                        <h4>GiVE US FEEDBACK!</h4>
                                        <p>
                                            This is a way for you to let us know how we are doing. We love to hear the positives, but we also want to know how we can improve, so share your experience.
                                        </p>
                                        <a class="give-feedback">GiVE FEEDBACK</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer><!-- <a href="#largeModal" class="btn btn-lg btn-primary" data-toggle="modal">Show Large Modal</a> --></footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).on("scroll", function() {
            if ($(document).scrollTop() > 200) {
                $("left-logo").removeClass("large").addClass("small");
            } else {
                $("left-logo").removeClass("small").addClass("large");
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>

    <script>
    $(document).ready(function(){
    $(".lft-menu-btn").click(function(){
        $(".left-menu").toggle();
    });
    });
    </script>

    <div id="myModal" class="modal fade location-pop">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">

                </button>
                <div class="modal-body">
                        <h2>PiCK A LOCATiON</h2>
                        <p>
                        <button class="grand-junction">GRAND JUNCTION</button>
                        </p>
                        <p>
                          <button class="grand-frutia">FRUiTA</button>
                        </p>
                </div>
            </div>
        </div>
    </div>



        <!-- Large Modal HTML -->
    <div id="largeModal" class="modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&nbsp;</button>
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                          <h2>PiCK A LOCATiON</h2>
                          <p>
                        <button class="grand-junction">GRAND JUNCTION</button>
                        </p>
                        <p>
                          <button class="grand-frutia">FRUiTA</button>
                        </p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="images/maskot.jpg" alt="img">
                        </div>


                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="lft-menu-btn">
        <span>Menu</span>
    </div>
<?php wp_footer(); ?>

</body>
</html>

