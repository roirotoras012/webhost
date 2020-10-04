<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>

          <div class="col-lg-8 col-md-12 col-sm-12"  style="padding-top: 40px;">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6"><h6 class="easylead">View Enterprises</h6></div>
                  <div class="col-md-6 text-right">
                    <a href="<?php echo base_url().'enterprise/create';?>" class="adminbutton">Create</a>
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
                            <th>Enterprise Type</th>
                            <th></th>
                            <th></th>
                        </tr>
                      </thead>
                    <?php foreach($tbl_enterprise as $enterprise) {?>
                    <tr>
                      <td><?php echo $enterprise['enterprise_type']?></td>
                      <td style="float:right;">
                        <a href="<?php echo base_url().'Enterprise/edit/'.$enterprise['enterprise_id']?>" class="adminbuttonedit fa fa-pencil"> Edit</a>
                        <a href="<?php echo base_url().'Enterprise/delete/'.$enterprise['enterprise_id']?>" class="adminbuttondelete fa fa-trash"> Delete</a>
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