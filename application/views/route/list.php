<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>

            
          <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6"><h6 class="easylead">View Routes</h6></div>
                  <div class="col-md-6 text-right">
                  </div>
                    <hr>
                  </div>
              </div>
            </div>

              <div class="row" style="background-color: white;padding-top: 20px;border-radius: 8px;">
                <div class="col-md-12">
                  <table class="table table-responsive" style="table-layout:fixed; height: 600px">
                    <thead class="thead-white">
                    <tr>           
                      <th>Source Address</th>
                      <th>Destination Address</th>
                      <th>Privacy</th>
                      <th>Origin LatLong</th>
                      <th>Destination LatLong</th>
                      <th>Username</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Mobile No.</th>
                      <th>Email</th>
                      <th>Date Created</th>
                      <th></th>
                    </tr>
                  </thead>

                    <?php foreach($routes as $route) {?>

                    <tr>
                      <td><?php echo $route['source_address']?></td>
                      <td><?php echo $route['destination_address']?></td>
                      <td><?php echo $route['status']?></td>
                      <td><?php echo $route['origin_latitude'].",".$route['origin_longitude'] ?></td>
                      <td><?php echo $route['destination_latitude'].",".$route['destination_longitude'] ?></td>
                      <td><?php echo $route['username']?></td>
                      <td><?php echo $route['firstname']?></td>
                      <td><?php echo $route['lastname']?></td>
                      <td><?php echo $route['mobileno']?></td>
                      <td><?php echo $route['email']?></td>
                      <td><?php echo $route['datecreated']?></td>
                      <td style="float:right;">
                        <a href="<?php echo base_url().'route/delete?data='.$route['route_id'] ?>" class="adminbuttondelete fa fa-trash">Delete</a>
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