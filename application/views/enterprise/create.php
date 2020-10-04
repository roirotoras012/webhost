<!DOCTYPE html>
<html>
    
          <?php
          $this->load->view('base');
          ?>
        <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
            <h6 class="easylead">Create Enterprises</h6>
            <hr>
            <form method="post" name="createCollege" action="<?php echo base_url().'enterprise/create';?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enterprise Type</label>
                            <input type="text" name="enterprise_type" value="" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="form-group">
                            <button class="adminbutton">Create</button>
                            <a href="<?php echo base_url().'enterprise/get'?>" class="adminbuttondelete">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>