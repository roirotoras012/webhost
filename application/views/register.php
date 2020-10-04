<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
	<h1>Register Page</h1>
	
	<?php if(isset($_SESSION['success'])) {?>
		<div class="alert alert-success"><?php echo $_SESSION['success']; ?> 
		</div>
	<?php } ?>
	<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

	<form action="" method="POST">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="form-group">
				<label for="email" class="label-default">Email:</label>
				<input class="form-control" name="email" id="email" type="text">
			</div>
			<div class="form-group">
				<label for="username" class="label-default">Username:</label>
				<input class="form-control" name="username" id="username" type="text">
			</div>
			<div class="form-group">
				<label for="password" class="label-default">Password:</label>
				<input class="form-control" name="password" id="password" type="password">
			</div>
			<div class="form-group">
				<label for="password2" class="label-default">Confirm Password:</label>
				<input class="form-control" name="password2" id="password2" type="password">
			</div>

			<div class="text-center">
				<button class="btn btn-primary" name="register">Register</button>
			</div>
		</div>
	</form>
</body>
</html>