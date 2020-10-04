<!DOCTYPE html>
<html>
          <?php
          $this->load->view('base');
          ?>
        <div class="container" style="padding-top: 10px;">
            <h3>Update Rating</h3>
            <hr>
            <form method="post" name="" action="<?php echo base_url().'rating/edit/'.$rating['rating_id'];?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Rating</label>
                            <input type="text" name="rating" value="<?php echo set_value('rating',$rating['rating']);?>" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <a href="<?php echo base_url().'rating/get'?>" class="btn-secondary btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>