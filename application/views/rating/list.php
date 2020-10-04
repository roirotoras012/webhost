<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>

            
          <div class="col-lg-8 col-md-12 col-sm-12" style="padding-top: 40px;">
            <div class="row">
              <div class="col-md-11">
                <div class="row">
                  <div class="col-md-6"><h6 class="easylead">View Ratings</h6></div>
                  <div class="col-md-6 text-right">
                    <a href="<?php echo base_url().'rating/create';?>" class="adminbutton">Create</a>
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
                            <th>Rating</th>
                            <th></th>
                            <th></th>
                        </tr>
                      </thead>
                    <?php foreach($tbl_rating as $rating) {?>
                    <tr>
                      <td><?php echo $rating['rating']?></td>
                      <td style="float:right;">
                        <a href="<?php echo base_url().'rating/edit/'.$rating['rating_id']?>" class="adminbuttonedit fa fa-pencil">Edit</a>
                        <a href="<?php echo base_url().'rating/delete/'.$rating['rating_id']?>" class="adminbuttondelete fa fa-trash">Delete</a>
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