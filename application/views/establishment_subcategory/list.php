<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>

            
          <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
            <div class="row">
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-6"><h6 class="easylead">View Establishment Sub Category</h6></div>
                  <div class="col-md-6 text-right">
                    <a href="<?php echo base_url().'establishmentsubcategory/create';?>" class="adminbutton">Create</a>
                  </div>
                   <hr>
                  </div>
              </div>
            </div>

              <div class="row" style="background-color: white;padding-top: 20px;border-radius: 8px;">
                <div class="col-md-12">
                  <table class="table table-hover">
                    <thead class="thead-white">
                    <tr>
                      <th>Establishment Sub Category</th>
                      <th>Establishment Category</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                    <?php foreach($tbl_estab_subcategory as $estab_subcategory) {?>
                    <tr>
                      <td><?php echo $estab_subcategory['estab_sub_name']?></td>
                      <td><?php echo $estab_subcategory['estab_cat_name']?></td>
                      <td style="float:right">
                        <a href="<?php echo base_url().'establishmentsubcategory/edit/'.$estab_subcategory['estab_sub_id']?>" class="adminbuttonedit fa fa-pencil"> Edit</a>
                      </td>
                      <td>
                        <a href="<?php echo base_url().'establishmentsubcategory/delete/'.$estab_subcategory['estab_sub_id']?>" class="adminbuttondelete  fa fa-trash"> Delete</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
          </div>
      </div>

    </body>
</html>