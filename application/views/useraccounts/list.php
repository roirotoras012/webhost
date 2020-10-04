<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>

            
          <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
            <div class="row">
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-6"><h6 class="easylead">View User Accounts</h6></div>
                  <div class="col-md-6 text-right">
                    <a href="<?php echo base_url().'useraccounts/create';?>" class="adminbutton">Add Account</a>
                  </div>
                    <hr>
                  </div>
              </div>
            </div>

              <div class="row"  style="background-color: white;padding-top: 20px;border-radius: 8px;">
                <div class="col-md-12">
                  <table class="table table-hover">
                    <thead class="thead-white">
                      <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Mobile no.</th>
                        <th>User level</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <?php foreach($useraccounts as $user) {?>
                    <tr>
                      <td><?php echo $user['username']?></td>
                      <td><?php echo $user['email']?></td>
                      <td><?php echo $user['firstname']?></td>
                      <td><?php echo $user['lastname']?></td>
                      <td><?php echo $user['mobileno']?></td>
                      <td><?php if ($user['is_admin'] == 1) {echo 'Admin';} else{echo 'User';} ?></td>
                      <td>
                        <a href="<?php echo base_url().'useraccounts/edit/'.$user['user_id']?>" class="adminbuttonedit fa fa-pencil"> Edit</a>
                      </td>
                      <td>
                        <a href="<?php echo base_url().'useraccounts/delete/'.$user['user_id']?>" class="adminbuttondelete fa fa-trash"> Delete</a>
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