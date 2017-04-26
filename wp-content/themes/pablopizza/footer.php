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
                    <div class="col-md-10 col-sm-10 col-sm-offset-2">
                        <h2>STAY CONNECTED</h2>
                        <div class="stay-connected-area">
                            <?php include('parts/footer-section1.php') ?>
                            <?php include('parts/footer-section2.php') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer><!-- <a href="#largeModal" class="btn btn-lg btn-primary" data-toggle="modal">Show Large Modal</a> --></footer>

 
   

   <div id="myModal" class="modal fade location-pop">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">

                </button>
                <div class="modal-body">
                        <h2>PiCK A LOCATiON</h2>
                        <p>
                        <!-- <button class="grand-junction">GRAND JUNCTION</button> -->
                       <!--  New html starts -->
                        <button class="grand-junction">GRAND JUNCTiON</button>
                       <!--  New html ends --> 
                        </p>
                        <p>
                          <!-- <button class="grand-frutia">FRUiTA</button> -->
                          <!--  New html starts -->
                          <button class="grand-frutia">FRUTiA</button>
                          <!--  New html ends --> 
                        </p>
                </div>
            </div>
        </div>
    </div>


<?php include('parts/modal.php') ?>

<?php wp_footer(); ?>

</body>
</html>

