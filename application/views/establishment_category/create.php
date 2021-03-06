<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>
        <div class="col-lg-8 col-md-12 col-sm-1" style="padding-top: 40px;">
             <h6 class="easylead">Create Establishment Category</h6>
            <hr>
            <form method="post" name="createCollege" action="<?php echo base_url().'establishmentcategory/create';?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Establishment Category Name</label>
                            <input type="text" name="estab_cat_name" value="" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Enterprise</label>
                          </div>
                          <select class="custom-select" name="enterprise_id">
                            <option selected>Choose...</option>
                        <?php foreach($tbl_enterprise as $enterprise) {?>
                            <option value="<?php echo $enterprise['enterprise_id']?>"><?php echo $enterprise['enterprise_type']?></option>
                        <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                            <button class="adminbutton">Create</button>
                            <a href="<?php echo base_url().'Establishmentcategory/get'?>" class="adminbuttondelete">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>