<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
	<h1>Login Page</h1>
	
	<?php if(isset($_SESSION['success'])) {?>
		<div class="alert alert-success"><?php echo $_SESSION['success']; ?> 
		</div>
	<?php } ?>
	<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

	HELLO, <?php echo $_SESSION['username']; ?>
	<br><br>

	<a href="<?php echo base_url(); ?>auth/logout">Logout</a>

</body>
</html>