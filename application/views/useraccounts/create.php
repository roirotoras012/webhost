<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>
        <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
            <h6 class="easylead">Add Account</h6>
            <hr>
            <form method="post" name="" action="<?php echo base_url().'useraccounts/create';?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="" class="form-control">
                            <?php echo form_error('name');?>
                            <label>First Name</label>
                            <input type="text" name="firstname" value="" class="form-control">
                            <?php echo form_error('name');?>
                            <label>Last Name</label>
                            <input type="text" name="lastname" value="" class="form-control">
                            <?php echo form_error('name');?>
                            <label>Mobile No.</label>
                            <input type="text" name="mobileno" value="" class="form-control">
                            <?php echo form_error('name');?>
                            <label>Email</label>
                            <input type="email" name="email" value="" class="form-control">
                            <?php echo form_error('name');?>
                            <label>Password</label>
                            <input type="password" name="password" value="" class="form-control">
                            <?php echo form_error('name');?>
                            <label>Confirm Password</label>
                            <input type="password" name="password" value="" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="form-group">
                            <button class="adminbutton">Create</button>
                            <a href="<?php echo base_url().'useraccounts/get'?>" class="adminbuttondelete">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>