
                <form id="loginform" action="<?php echo site_url('user/?actionpages=forgotpassword');?>" name="myForm" method="post" enctype="multipart/form-data">
     <input type="hidden" name="action" value="forgotpassword" >  

       <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="em" id="inPutt" value="" placeholder="Email"   >
              </div>
           
          
              <input type="submit" name="login" id="inPutt2" value="RESET PASSWORD" />

            </form>

<style>.utype{display:none;} html body #inPutt{ height: 34px !important; width: 100% !important;}</style>