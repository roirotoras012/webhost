<!DOCTYPE html>
<html>
    <head>
        <title>Crud Application - Create User</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    </head> 
    <body>
        <div class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">CRUD APPLICATION</a>
            </div>
        </div>
        <div class="row">
          <?php
          $this->load->view('base');
          ?>

            
          <div class="container" style="padding-top: 10px;">
            <div class="row">
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-6"><h3>View Travel Agency Category</h3></div>
                  <div class="col-md-6 text-right">
                    <a href="<?php echo base_url().'travelagencycategory/create';?>" class="btn btn-primary">Create</a>
                  </div>
                    <hr>
                  </div>
              </div>
            </div>

              <div class="row">
                <div class="col-md-12">
                  <table class="table table-striped">
                    <tr>
                      <th>Travel Agency Category Name</th>
                      <th></th>
                      <th></th>
                    </tr>

                    <?php foreach($tbl_travelagency_cat as $travel_agency_cat) {?>
                    <tr>
                      <td><?php echo $travel_agency_cat['travelagency_cat_name']?></td>
                      <td>
                        <a href="<?php echo base_url().'travelagencycategory/edit/'.$travel_agency_cat['travelagency_cat_id']?>" class="btn btn-primary">Edit</a>
                      </td>
                      <td>
                        <a href="<?php echo base_url().'travelagencycategory/delete/'.$travel_agency_cat['travelagency_cat_id']?>" class="btn btn-danger">Delete</a>
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