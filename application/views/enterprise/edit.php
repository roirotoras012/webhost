<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>
        <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
             <h6 class="easylead">Update Enterprise</h6>
            <hr>
            <form method="post" name="" action="<?php echo base_url().'enterprise/edit/'.$enterprise['enterprise_id'];?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enterprise Type</label>
                            <input type="text" name="enterprise_type" value="<?php echo set_value('enterprise_type',$enterprise['enterprise_type']);?>" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="form-group">
                            <button class="adminbutton">Update</button>
                            <a href="<?php echo base_url().'enterprise/get'?>" class="adminbuttondelete">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>