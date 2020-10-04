<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>
        <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top:40px;">
            <h6 class="easylead">Edit User</h6>
            <hr>
            <form method="post" name="" action="<?php echo base_url().'useraccounts/edit/'.$user['user_id'];?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo set_value('user',$user['username']);?>" class="form-control">
                            <label>Firstname</label>
                            <input type="text" name="firstname" value="<?php echo set_value('user',$user['firstname']);?>" class="form-control">
                            <label>Lastname</label>
                            <input type="text" name="lastname" value="<?php echo set_value('user',$user['lastname']);?>" class="form-control">
                            <label>Mobile no.</label>
                            <input type="text" name="mobileno" value="<?php echo set_value('user',$user['mobileno']);?>" class="form-control">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo set_value('user',$user['email']);?>" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="form-group">
                            <button class="adminbutton">Update</button>
                            <a href="<?php echo base_url().'useraccounts/get'?>" class="adminbuttondelete">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>