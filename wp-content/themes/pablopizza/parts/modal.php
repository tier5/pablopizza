
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
                $(".bimggrandjunction").hide();
                 $(".bimgfrutia").hide();

                 $(".imggrandjunction").show();
                 $(".imgfrutia").hide();
                 $("#myModal").modal('hide');
                 var data = {
                  'action': 'image_action1',
                  'imgval': 'grand-junction'
                };
              
                var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' );?>';

                // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
                
                jQuery.post(ajaxurl, data, function(response) {
                  
                });
                 
            });
            $(".grand-frutia").click(function(){

                $(".bimggrandjunction").hide();
                 $(".bimgfrutia").hide();
                $(".imgfrutia").show();
                $(".imggrandjunction").hide();
                $("#myModal").modal('hide');
                var data = {
                  'action': 'image_action2',
                  'imgval': 'grand-frutia'
                };
                
                var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' );?>';
                // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
                
                jQuery.post(ajaxurl, data, function(response) {
                  
                });
                
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
            <?php if(!isset($_COOKIE['location'])){?>
            $("#myModal").modal('show');
            <?php } ?>
        });     

        $(function(){
  $('.menu-list').click(function(){
    $("#myModal").modal('hide');
  });
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
       $(document).ready(function() {
       	$(".joinclub-list").click(function() {
            $("#myModal1").modal('show');
         });
        });
        $(document).ready(function() {
        $(".grand-frutia-popup").click(function() {
            $("#myModal2").modal('show');
         });
        });
        $(document).ready(function() {
        $(".grand-junction-popup").click(function() {
            $("#myModal3").modal('show');
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



<div class="container">
<div class="modal fade" id="myModal2" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content grand-frutia-popup">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Frutia Location</h4>
  </div>
  <div class="modal-body">
    <p>
     Sorry this is unavailable in your location.
    </p>
  </div>  
</div>
</div>
</div>
</div>

<div class="container">
<div class="modal fade" id="myModal3" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content grand-junction-popup">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Grand Junction Location</h4>
  </div>
  <div class="modal-body">
    <p>
     
     jfhjdshfghfgdhjhdrh
    </p>
  </div>  
</div>
</div>
</div>
</div>





<style type="text/css">
  .modal-content.grand-frutia-popup {
    width: 600px;
    height: 400px;
    position: relative;
    margin: 30px auto;
    padding: 10px 25px 13px 20px;
    border-radius: 10px;
        top: 20%;
    text-align: center;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
.modal-content.grand-frutia-popup .modal-header .close {
   
    opacity: 1;
        background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.modal-content.grand-frutia-popup .modal-header h4.modal-title {
    color: #2d2d2d !important;
}
.modal-content.grand-frutia-popup .modal-body p {
    color: #2d2d2d !important;
}


 .modal-content.grand-junction-popup {
    width: 600px;
    height: 400px;
    position: relative;
    margin: 30px auto;
    padding: 10px 25px 13px 20px;
    border-radius: 10px;
        top: 20%;
    text-align: center;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
.modal-content.grand-junction-popup .modal-header .close {
   
    opacity: 1;
        background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.modal-content.grand-junction-popup .modal-header h4.modal-title {
    color: #2d2d2d !important;
}
.modal-content.grand-junction-popup .modal-body p {
    color: #2d2d2d !important;
}
</style>