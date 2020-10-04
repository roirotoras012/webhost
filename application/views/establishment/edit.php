<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>
        <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
             <h6 class="easylead">Update Establishment Category</h6>
            <hr>
            <form method="post" name="" action="<?php echo base_url().'Establishment/edit/'.$establishment['estab_id'];?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Establishment Category Name</label>
                            <input type="text" name="estab_name" value="<?php echo set_value('estab_name',$establishment['estab_name']);?>" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Enterprise</label>
                          </div>
                          <select class="custom-select" name="enterprise_id">
                            <option hidden elected value="<?php echo set_value('enterprise_type',$tbl_estab_cat['enterprise_type']);?>"><?php echo set_value('enterprise_type',$tbl_estab_cat['enterprise_type']);?></option>
                            <?php echo json_encode($enterprise);?>
                        <?php foreach($tbl_enterprise as $enterprise) {?>
                            <option value="<?php echo $enterprise['enterprise_id']?>"><?php echo $enterprise['enterprise_type']?>"></option>
                        <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                            <button class="adminbutton">Update</button>
                            <a href="<?php echo base_url().'Establishment/get'?>" class="adminbuttondelete">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>