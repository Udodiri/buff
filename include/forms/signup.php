
<form action="" id="signup" name="myForm" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="signup_action" >  <div>
        <?php #include 'processRegistration.php';  ?>
    </div>
    <div id="javaFormDown">
        <div id="javaFormDownM">
            <label>User Type :</label>
            <p>
                <select required style="height: 38px;  width: 100%;" ID="UserType" name="Usertype">
                    <option value="" style="">- - - Choose - - -</option>
                    <option value="4">Charity User</option>
                    <option value="3">Advice Seeker</option>
                    <option value="2">Consultant</option>
                </select> 
            </p>
        </div>
        <div id="javaFormDownM " required class="catid hide">
            <label>Category :</label>
            <p>
                <?php include '../category.php'; ?>

            </p>
        </div><!-- javaFormDownM -->
        <div id="javaFormDownL">
            <label>First name :</label>
            <p><input required type="text" name="fname" id="inPutt" value="" placeholder="First name" /></p>
        </div><!-- javaFormDownL -->
        <div id="javaFormDownR">
            <label>Last name :</label>
            <p><input type="text" name="lname" id="inPutt" value="" placeholder="Last name" /></p>
        </div><!-- javaFormDownR -->
        <div style="clear:both;"></div> 
        <div class="hide" id="javaFormDownM">
            <label>Location :</label>
            <p><input type="text" name="location" id="inPutt" value="indore" placeholder="Location" /></p>
        </div><!-- javaFormDownM -->
        <div id="javaFormDownL" class="email">
            <label>Email :</label>
            <p><input data-parsley-type="email" required type="text" name="em" id="inPutt" value="" placeholder="Email" /></p>
        </div><!-- javaFormDownL -->
        <div id="javaFormDownR" class="pass">
            <label>Password :</label>
            <p><input required type="password" name="pas" id="inPutt" value="" placeholder="Password" /></p>
        </div><!-- javaFormDownR -->
        <div style="clear:both;"></div>
        <div id="javaFormDownM" style="margin-top:30px;">
            <p style="background: #4c413e; text-align:center; padding:16px 0;"><input type="submit" name="register" id="inPutt2" value="SIGN UP" /></p>
        </div><!-- javaFormDownM -->
    </div><!-- javaFormDown -->
</form>
<style>#inPutt{height: 38px;}

body .email,body .email input,body .pass,body .pass input{ width: 100% !important;}
#javaFormDownR,#javaFormDownL,#javaFormDownM{ margin-top: 0px !important;}
</style>