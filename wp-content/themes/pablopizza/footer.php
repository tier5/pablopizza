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
                                      <!--   <div class="col-md-6 col-sm-6 single-pic">
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
                                        </div> -->
                                        <?php echo do_shortcode('[instagram-feed]'); ?>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h3>FACEBOOK</h3>
                                    <!-- <div class="row">
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

                                    </div> -->
                                    <?php echo do_shortcode('[recent_facebook_posts  number=4]');?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="stay-connected-red">
                                        <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
                                        <?php dynamic_sidebar( 'sidebar-5' ); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="stay-connected-green">
                                        <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
                                        <?php dynamic_sidebar( 'sidebar-6' ); ?>
                                        <?php endif; ?>
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
        $(document).ready(function(){
            $(".grand-junction").click(function(){
                 $(".imggrandjunction").show();
                 $(".imgfrutia").hide();
            });
            $(".grand-frutia").click(function(){
                $(".imgfrutia").show();
                $(".imggrandjunction").hide();
            });
        });
    </script>

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
    <script type="text/javascript">
      $(document).ready(function(){
        $(".joinclub-list").click(function() {
    $('html,body').animate({
        scrollTop: $(".stay-connected-red").offset().top},
        'slow');
});
      });
    </script>
    <style type="text/css">
        .imggrandjunction{
            display: none;
        }
        .imgfrutia{
            display: none;
        }
    </style>

   <!--  <div id="myModal" class="modal fade location-pop">
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
    </div> -->

<div id="myModal" class="modal fade location-pop">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">

                </button>
                <div class="modal-body">
                        <h2>PiCK A LOCATiON</h2>
                        <p>
                        <!-- <button class="grand-junction">GRAND JUNCTION</button> -->
                       <!--  New html starts -->
                        <button class="grand-junction"></button>
                       <!--  New html ends --> 
                        </p>
                        <p>
                          <!-- <button class="grand-frutia">FRUiTA</button> -->
                          <!--  New html starts -->
                          <button class="grand-frutia"></button>
                          <!--  New html ends --> 
                        </p>
                </div>
            </div>
        </div>
    </div>


        <!-- Large Modal HTML -->
   <!--  <div id="largeModal" class="modal">
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
    </div> -->

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


    <div class="container">
  
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">join club</h4>
        </div>
        <div class="modal-body">
          <p>
              
                 <?php echo do_shortcode('[yikes-mailchimp form="1"]'); ?>

          </p>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>
<?php wp_footer(); ?>

</body>
</html>

