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
            <h3>Update Frontliner Category </h3>
            <hr>
            <form method="post" name="" action="<?php echo base_url().'frontlinercategory/edit/'.$frontliner_cat['frontliner_cat_id'];?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Frontliner Category Name</label>
                            <input type="text" name="frontliner_cat_name" value="<?php echo set_value('frontliner_cat_name',$frontliner_cat['frontliner_cat_name']);?>" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <a href="<?php echo base_url().'frontlinercategory/get'?>" class="btn-secondary btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>