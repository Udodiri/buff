<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BLDR
 */



// echo "<pre>hello test";
// print_r($_SESSION);
// die("call this footer ");
?>

  </div><!-- #content -->
    

<!-- code written on 09-11-2016 -->


    <!-- Modal -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

  
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="text-align:center">Login</h3>
        </div>
        <div class="modal-body" id="login-body" >
             <form id="loginform" action="<?php echo site_url('user/?action=login_action');?>" name="myForm" method="post" enctype="multipart/form-data" >
                <input name="action" value="login_action" type="hidden">

              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="em" id="inPutt" value="" placeholder="Email"   >
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input class="form-control" required="" name="pas" id="inPutt" value="" placeholder="Password" type="password">
              </div>
             <!--  <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div> -->
              <button type="submit" class="btn btn-default">SIGN IN</button>
            </form>

            <div id="forget_pass_div"  >

            </div>


        </div>
       <!--  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
 

  <a href="#" data-toggle="modal" data-target="#myModal2" style="opacity: 0;" id="cstm_model">cstm_model</a>


   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="text-align:center">Create an account</h3>
        </div>
        <div class="modal-body">
             <form id="signup" action="<?php echo site_url('user/?action=signup_action');?>" name="myForm" method="POST" enctype="multipart/form-data" >
                <input name="action" value="signup_action" type="hidden">




              <div class="form-group">
                <label for="email">User Type :</label>
                <select required="" id="UserType" name="Usertype" class="form-control" >
                    <option value="" style="">- - - Choose - - -</option>
                    <!-- <option value="4">Charity User</option> -->
                    <option value="3">Advice Seeker</option>
                    <option value="2">Consultant</option>
                </select>

                <!-- <input type="email" class="form-control" name="emfg" id="" value="" placeholder="Email"   > -->
              </div>



              <div class="row" >
                 <div class="col-md-6" >
                <label for="email">First Name :</label>
               
                <input type="text" class="form-control" name="fname" id="" value="" placeholder="First Name"   > 
                  </div>


                <div class="col-md-6" >
                <label for="email">Last Name :</label>
             

               <input type="text" class="form-control" name="lname" id="" value="" placeholder="Last Name"   >
              </div>


              </div>
             

               <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email"  class="form-control" required="true" name="em" id="" value="" placeholder="Email" >
              </div>

              <div class="form-group">
                <label for="pwd">Password:</label>
                <input class="form-control" required="" name="pas" id="" value="" placeholder="Password" type="password">
              </div>
             <!--  <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div> -->

              <input class="btn btn-default" name="register" id="inPutt2" value="SIGN UP" type="submit">
              
            </form>
        </div>
       <!--  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>



    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
     <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="text-align:center"><span id="model_heading"></span></h3>
        </div>
        <div class="modal-body" >
            
       
                <form id="loginform" action="<?php echo site_url('user/?action=forgotpassword');?>" name="myForm" method="post" enctype="multipart/form-data">
     <input type="hidden" name="action" value="forgotpassword" >  

       <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="em" id="inPutt" value="" placeholder="Email"   >
              </div>
           
          
              <input type="submit" name="login" id="inPutt2" value="RESET PASSWORD" />

            </form>



        </div>
       <!--  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>

 



    <script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery("#forget_pass_div").html("<a id='forgot' style='cursor: pointer; display: block; padding-left: 19px; text-decoration: none;2'>Forgot password</a>");
        
        jQuery(".menu-item-94").attr("data-toggle","modal");
        jQuery(".menu-item-94").attr("data-target","#myModal1");

        // alert('hi')

         jQuery(".menu-item-95").attr("data-toggle","modal");
        jQuery(".menu-item-95").attr("data-target","#myModal");



        // code for forgot password 

          jQuery('#forgot').click(function () {
            jQuery("[data-dismiss=modal]").trigger({ type: "click" });
            jQuery("#cstm_model").trigger("click");
       
        })



                    // var l = window.location;
                   //  targetUrl = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1];
                    // alert(targetUrl);
         // bootbox.alert("hello error message call");

    })







    </script>


  <?php // echo "hello".$_COOKIE["msg_cookie"] ; ?>


  <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="grid grid-pad">
        
          <?php if ( is_active_sidebar('footer-1') ) : ?> 
            <div class="col-1-4">
          <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-2') ) : ?>
            <div class="col-1-4">
          <?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-3') ) : ?>
            <div class="col-1-4">
          <?php dynamic_sidebar('footer-3'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-4') ) : ?>
            <div class="col-1-4">
          <?php dynamic_sidebar('footer-4'); ?>
                </div>
            <?php endif; ?>
            
        </div>
      <div class="grid grid-pad">
          <div class="col-1-1">
                <div class="site-info">
                    <?php if ( get_theme_mod( 'bldr_footerid' ) ) : ?> 
                <?php echo esc_html( get_theme_mod( 'bldr_footerid' )); // footer id ?> 
          <?php else : ?>  
              <?php printf( __( 'Theme: %1$s by %2$s', 'bldr' ), 'bldr', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?>
          <?php endif; ?> 
                </div><!-- .site-info -->
          </div>
        </div>
  </footer><!-- #colophon -->
<?php $msg=file_get_contents('user/msg.txt'); 
      if(strlen($msg)>1)
      {
          echo '<script>jQuery(document).ready(function(){ bootbox.alert("'.$msg.'")})</script>';
           file_put_contents('user/msg.txt','');
      }
?>

</div><!-- #page -->

<!-- sometime later, probably inside your on load event callback -->

<!-- ?php } ?> -->

<?php wp_footer(); ?>

</body>
</html>
