
<div id="footer">
    <div id="footerIn">
        <div id="footerIn-L">
            <p>Copyright &copy; 2016 BUFFPOD is owned by ROGELLA Ltd, registered in Scotland SC533577</p>
        </div><!-- footerIn-L -->
        
        <p id="footerIn-R">
            <a class="backtotop" href="java:void(0);" title="back to top">
                <img src="images/back-to-top2.png" height="23" width="24" />
            </a>
        </p><!-- footerIn-R -->
        <div style="clear:both;"></div>
    </div><!-- footerIn -->
</div><!-- footer -->
         <div id="javaForm" style=" ">
        	<div id="javaFormUp">
            	<p>Create an account</p>
            </div><!-- javaFormUp -->
            <div id="Forms">
<form action="<?php echo site_url('action/signup_action'); ?>" name="myForm" method="post" enctype="multipart/form-data">
    <div>
    </div>
    <div id="javaFormDown">
        <div id="javaFormDownM">
            <label>User Type :</label>
            <p>
                <select style="height: 38px;  width: 100%;" ID="UserType" name="Usertype">


                    <option value="" style="">- - - Choose - - -</option>
                    <option value="3">Advice Seeker</option>
                    <option value="2">Consultant</option>


                </select> 
            </p>
        </div>
        <div id="javaFormDownM">
            <label>Category :</label>
            <p>
            <?php include('include/category.php'); ?></p>
        </div><!-- javaFormDownM -->
        <div id="javaFormDownL">
            <label>First name :</label>
            <p><input type="text" name="fname" id="inPutt" value="" placeholder="First name" /></p>
        </div><!-- javaFormDownL -->
        <div id="javaFormDownR">
            <label>Last name :</label>
            <p><input type="text" name="lname" id="inPutt" value="" placeholder="Last name" /></p>
        </div><!-- javaFormDownR -->
        <div style="clear:both;"></div>
        <div id="javaFormDownM">
            <label>Location :</label>
            <p><input type="text" name="location" id="inPutt" value="" placeholder="Location" /></p>
        </div><!-- javaFormDownM -->
        <div id="javaFormDownL">
            <label>Email :</label>
            <p><input type="text" name="em" id="inPutt" value="" placeholder="Email" /></p>
        </div><!-- javaFormDownL -->
        <div id="javaFormDownR">
            <label>Password :</label>
            <p><input type="password" name="pas" id="inPutt" value="" placeholder="Password" /></p>
        </div><!-- javaFormDownR -->
        <div style="clear:both;"></div>
        <div id="javaFormDownM" style="margin-top:30px;">
            <p style="background: #4c413e; text-align:center; padding:16px 0;"><input type="submit" name="register" id="inPutt2" value="SIGN UP" /></p>
        </div><!-- javaFormDownM -->
    </div><!-- javaFormDown -->
</form></div>
            <div id="javaFormCrossline"></div>
            <div id="javaFormFoot">
                <p>By creating an account, you agree to <br />
BuffPod's Terms of Service.</p>
            </div><!-- javaFormFoot -->
        </div><!-- javaForm -->        

        
    </div><!-- wrapper -->
    
    </body>
</html>