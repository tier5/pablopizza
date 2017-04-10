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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <!-- <a href="#largeModal" class="btn btn-lg btn-primary" data-toggle="modal">Show Large Modal</a> --></footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
           jQuery("#myModal").modal('show');
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".lft-menu-btn").click(function() {
                jQuery(".left-menu").toggle();
            });
        });
    </script>
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