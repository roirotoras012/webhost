<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>
        <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top:40px;">
            <h6 class="easylead">Create Establishment Sub Category</h6>
            <hr>
            <form method="post" name="createCollege" action="<?php echo base_url().'establishmentsubcategory/create';?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Establishment Sub Category Name</label>
                            <input type="text" name="estab_sub_name" value="" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Establishment Category</label>
                          </div>
                          <select class="custom-select" name="estab_cat_id">
                            <option selected>Choose...</option>
                        <?php foreach($tbl_estab_cat as $estab_cat) {?>
                            <option value="<?php echo $estab_cat['estab_cat_id']?>"><?php echo $estab_cat['estab_cat_name']?></option>
                        <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                            <button class="adminbutton">Create</button>
                            <a href="<?php echo base_url().'establishmentsubcategory/get'?>" class="adminbuttondelete">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>