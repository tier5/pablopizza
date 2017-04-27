
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
     <style type="text/css">
        .imggrandjunction{
            display: none;
        }
        .imgfrutia{
            display: none;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".grand-junction").click(function(){
                 $(".imggrandjunction").show();
                 $(".imgfrutia").hide();
                 $("#myModal").modal('hide');
            });
            $(".grand-frutia").click(function(){
                $(".imgfrutia").show();
                $(".imggrandjunction").hide();
                $("#myModal").modal('hide');
            });
        });
    </script>
    <script type="text/javascript">
      
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
      <div class="modal-content join-club-pop">
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