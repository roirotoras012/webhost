<!DOCTYPE html>
<html>
    <head>
        <title>Crud Application - Update College</title>
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
            <h3>Update Accommodation Category </h3>
            <hr>
            <form method="post" name="" action="<?php echo base_url().'accommodationcategory/edit/'.$accommodation_cat['accommodation_cat_id'];?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Accommodation Category Name</label>
                            <input type="text" name="accommodation_cat_name" value="<?php echo set_value('accommodation_cat_name',$accommodation_cat['accommodation_cat_name']);?>" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <a href="<?php echo base_url().'accommodationcategory/get'?>" class="btn-secondary btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>