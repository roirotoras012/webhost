<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>

            
          <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
            <div class="row">
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-6"><h6 class="easylead">View Establishments</h6></div>
                  <div class="col-md-6">
                    <a href="<?php echo base_url().'establishment/all'?>" class="adminbutton">All</a>
                    <a href="<?php echo base_url().'establishment/accredited'?>" class="adminbutton">Accredited</a>
                    <a href="<?php echo base_url().'establishment/users'?>" class="adminbutton">Users</a>
                  </div>
                  <div class="col-md-6 text-right">
                  </div>
                    <hr>
                  </div>
              </div>
            </div>

              <div class="row" style="background-color: white;padding-top: 20px;border-radius: 8px;">
                <div class="col-md-12">
                  <table class="table table-responsive" style="height: 580px">
                    <thead class="thead-white">
                    <tr>           
                      <th>Name</th>
                      <th>Address</th>
                      <th>Province</th>
                      <th>Privacy</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Owner</th>
                      <th>Expiration</th>
                      <th>LatLong</th>
                      <th>Sub Category</th>
                      <th>Category</th>
                      <th>Enterprise</th>
                      <th>User name</th>
                      <th>User email</th>
                      <th>User mobileno</th>
                      <th></th>
                    </tr>
                  </thead>

                    <?php foreach($establishments as $establishment) {?>

                    <tr>
                      <td><?php echo $establishment['estab_name']?></td>
                      <td><?php echo $establishment['estab_address']?></td>
                      <td><?php echo $establishment['province_name']?></td>
                      <td><?php echo $establishment['status']?></td>
                      <td><?php echo $establishment['estab_contact']?></td>
                      <td><?php echo $establishment['estab_email']?></td>
                      <td><?php echo $establishment['estab_owner']?></td>
                      <td><?php echo $establishment['estab_expiration']?></td>
                      <td><?php echo $establishment['estab_latitude'].",".$establishment['estab_longitude'] ?></td>
                      <td><?php echo $establishment['estab_sub_name']?></td>
                      <td><?php echo $establishment['estab_cat_name']?></td>
                      <td><?php echo $establishment['enterprise_type']?></td>
                      <td><?php echo $establishment['username']?></td>
                      <td><?php echo $establishment['email']?></td>
                      <td><?php echo $establishment['mobileno']?></td>
                      <td style="float:right;">
                        <a href="<?php echo base_url().'establishment/delete_establishment?data='.$establishment['estab_id'] ?>" class="adminbuttondelete fa fa-trash">Delete</a>
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