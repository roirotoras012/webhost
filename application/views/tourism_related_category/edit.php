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
            <h3>Update Tourism Related Category</h3>
            <hr>
            <form method="post" name="" action="<?php echo base_url().'tourismrelatedcategory/edit/'.$related_cat['related_cat_id'];?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tourism Related Category Name</label>
                            <input type="text" name="related_cat_name" value="<?php echo set_value('related_cat_name',$related_cat['related_cat_name']);?>" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <a href="<?php echo base_url().'tourismrelatedcategory/get'?>" class="btn-secondary btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>