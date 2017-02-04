<script src="<?php echo site_url('lib/bootbox-alert/bootbox.js'); ?>"></script>
 
<script src="<?php echo site_url('lib/own_lib/js/parsley.js'); ?>"></script>

<script>
    function view(i)
    {
        switch(i)
        {
            case 'list':
                 $('.cardbox').addClass('animated fadeOutUp');
                $('.cardbox').removeClass('animated fadeInUp fadeOutUp col-lg-4 col-md-4 col-sm-6 col-xs-12');
                $('.cardbox').addClass('animated fadeInUp col-lg-12 col-md-12 col-sm-12 col-xs-12');
                $('.images').removeClass('col-lg-4 col-md-4 col-sm-6 col-xs-12');
                $('.details').removeClass('col-lg-8 col-md-8 col-sm-6 col-xs-12');
                $('.images').addClass('col-lg-2 col-md-2 col-sm-6 col-xs-12');
                $('.details').addClass('col-lg-10 col-md-10 col-sm-6 col-xs-12');
                 
                 
                break;
            case 'box':
                 $('.cardbox').addClass('animated fadeOutUp');  
                $('.cardbox').removeClass('animated fadeInUp fadeOutUp col-lg-4 col-md-4 col-sm-6 col-xs-12');
               $('.cardbox').addClass('animated fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-12');
               
                $('.images').removeClass('col-lg-2 col-md-2 col-sm-6 col-xs-12');
                $('.details').removeClass('col-lg-10 col-md-10 col-sm-6 col-xs-12');
                
                $('.images').addClass('col-lg-4 col-md-4 col-sm-6 col-xs-12');
                $('.details').addClass('col-lg-8 col-md-8 col-sm-6 col-xs-12');
               
                
                break;
                
        }
        //alert(i);
    }
    $(document).ready(function () {
        $('#Forms').html('<img src="http://closera.com/skin/frontend/bizarre/skin2_new/images/Loading1.gif" width="100%">');
        
        $('.list-type .fa').click(function(){
            $('.list-type .fa').removeClass('active');
            $(this).addClass('active');
        })
        $('form').parsley();
<?php if (isset($_SESSION['msg']) && strlen($_SESSION['msg']) > 1) { ?>
            bootbox.alert({
                size: 'small',
                onEscape: true,
                backdrop: true,
                message: "<?php echo $_SESSION['msg']; ?>",
                callback: function () {
                    $.ajax({url: "include/ajax/msgdistroy.php", success: function (result) {
                            
                        }});
                }
            })
<?php } ?>

        $('.Specializ .specilization').click(function (e) {
            if ($('.Specializ').children().find('input[type="checkbox"]:checked').length > 4) {
                alert('Only Select 4 specilization');
                e.preventDefault();
            }
        });
        $('.boxes').each(function () {

            $(this).find('.checkbox').click(function () {
                if ($(this).prop('checked'))
                {
                    $(this).parent('.boxes').find('select').removeAttr('disabled');
                } else
                {
                    $(this).parent('.boxes').find('select').attr('disabled', 'true');
                }
            })
        });
        $('#UserType').change(function () {
            if ($(this).val() == 3)
            {
                $('.catid').hide()
            } else
            {
                $('.catid').show()
            } 
        });
        
        $('#signupLink,#signinLink,#banLink').click(function () {
            
            
            
            switch ($(this).attr('id'))
            {
                case 'signupLink':
                case 'banLink':
                    $('#javaFormUp p').html('Create an account');
                    $.ajax("include/forms/signup")
                            .done(function (msg) {
                                $('#Forms').html(msg);
                                $('#UserType').change(function () {
                                    if ($(this).val() == 3)
                                    {
                                        $('.catid').hide()
                                    } else
                                    {
                                        $('.catid').show()
                                    }
                                })
                            })

                    break;
                case 'signinLink':
                    $('#javaFormUp p').html('Login');
                    $.ajax("include/forms/login")
                            .done(function (msg) {
                                $('#Forms').html(msg);
                                //$('form').ajaxForm();
                            })
                    break;
            }

        })
    })

    jQuery('.backtotop').click(function () {
        jQuery('html, body').animate({scrollTop: 0}, 'slow');
    });

    function toggleLink(obj)
    {
        var idCount = obj.id;
        idCount = idCount.replace(new RegExp('c', 'g'), '');

        var elem = document.getElementById("show" + idCount);

        var hide = window.getComputedStyle(elem, null).display == "none";
        if (hide) {
            elem.style.display = "block";
            document.getElementById('c' + idCount).innerHTML = 'Shrink';
        } else {
            elem.style.display = "none";
            document.getElementById('c' + idCount).innerHTML = 'Read More';
        }
    }
</script>