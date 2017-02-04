
</div></div>

<script src="<?php echo site_url('lib/leftmenu/js/classie.js'); ?>"></script>
<script src="<?php echo site_url('lib/leftmenu/js/sidebarEffects.js'); ?>"></script>
<!-- Modal -->
<div style="z-index: 1000000" id="FeedbackForm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     <form method="post" action=""> <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Feedback Form</h4>
      </div>
      <div class="modal-body">
          
              <input type="hidden" name="action" value="feebacks">
              <input type="hidden" name="ID" value="<?php echo ($_SESSION['user']->ID); ?>">
              <label>Name</label>
              <input value="<?php echo $obj->uname($_SESSION['user']->ID) ?>" style="text-transform: capitalize;" class="form-control" readonly="true"><input type="hidden" name="ID" value="<?php echo ($_SESSION['user']->ID); ?>">
              <lable>Your Comment:</lable><textarea class="form-control" name="feedback"></textarea>
         
      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-danger" >Save</button> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
          </form>
    </div>

  </div>
</div>


</body></html>