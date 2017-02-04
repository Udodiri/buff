 
<form id="loginform" action="" name="myForm" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="login_action" >      
    <div>
        <?php #include 'processRegistration.php';?>
    </div>
    <div id="javaFormDown">
        <div id="javaFormDownM" class="utype">
            <label>User Type :</label>
            <p>
                <select  name="Usertype" id="inPutt" style="height:38px; width:100%; ">
                    <option value="" style="">- - - Choose - - -</option>

                    <option value="3">Advice Seeker</option>
                    <option value="2">Consultant</option></select>
            </p>
        </div><!-- javaFormDownM -->



        <div id="javaFormDownL">
            <label>Email :</label>
            <p><input required data-parsley-type="email" type="text" name="em" id="inPutt" value="<?php if (isset($_POST['em'])) {
            echo $_POST['em'];
        } ?>" placeholder="Email" /></p>
        </div><!-- javaFormDownL -->
        <div id="javaFormDownR">
            <label>Password :</label>
            <p><input required type="password" name="pas" id="inPutt" value="<?php if (isset($_POST['pas'])) {
            echo $_POST['pas'];
        } ?>" placeholder="Password" /></p>
        </div><!-- javaFormDownR -->
        <div style="clear:both;"></div>
        <div id="javaFormDownM" style="margin-top:30px;">
            <p style="background: #4c413e; text-align:center; padding:16px 0;"><input type="submit" name="login" id="inPutt2" value="SIGN IN" /></p>
        </div><!-- javaFormDownM -->
    </div><!-- javaFormDown -->
    <a style="cursor: pointer;
       display: block;
       padding-left: 19px; text-decoration: none;2" id="forgot">Forgot password</a>
</form>
<script>
    $(document).ready(function () {
        $('#forgot').click(function () {
            $.ajax("include/forms/forgetpassword")
                    .done(function (msg) {
                        var img='<img width="100%" src="http://closera.com/skin/frontend/bizarre/skin2_new/images/Loading1.gif" >';
                
                $('#Forms').html(img);
                setTimeout(function(){ $('#Forms').html(msg);
                $('#javaFormUp p').html('Forgot password');
                $('#inPutt2').val('Reset Password'); }, 3000);
                        
                    })
        })

    })
            ;</script>
<style>.utype{display:none;} html body #inPutt{ height: 34px !important; width: 100% !important;}</style>