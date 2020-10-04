<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/modified.css';?>">
</head>
<body style="background-color: #F8F8F8">
		<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
		<?php if(isset($_SESSION['success'])) {?>
			<div class="alert alert-success"><?php echo $_SESSION['success']; ?> 
			</div>
		<?php } ?>
		<?php if(isset($_SESSION['error'])) {?>
			<div class="alert alert-danger"><?php echo $_SESSION['error']; ?> 
			</div>
		<?php } ?>
	<!-- leftside -->
	<div class="row">
	  	<div class="col-sm-8 ">
	  		<div class="row">
	  			<div class="leftside centerlogo">
	  				<img src="<?php echo base_url(); ?>assets/images/finallogo.png" alt="Lights">
	  			</div>
	  		</div>
		  	<div class="row">
		  		<div class="center below">
		  			<img src="<?php echo base_url(); ?>assets/images/welcome.png" alt="Lights">
		  		</div>
		  	</div>	
	  	</div>
		
	  <!-- rightside -->
	 	<div class="col-sm-4" style="background-image: url('assets/images/backgroundfinal1.png'); 
	">
			<form action="<?php echo base_url().'auth/login';?>" method="POST">
				<div class="col-lg-12">
					<div class="rightside ">
						<div class="form-group">
							<input class="form-control modifiedinput" name="username" id="username" type="text" placeholder="Username">
						</div>
						<div class="form-group">
							<input class="form-control modifiedinput" name="password" id="password" type="password"
							placeholder="Password">
						</div>
					</div>
						<button class="modifiedbutton center"  name="login">Login</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>