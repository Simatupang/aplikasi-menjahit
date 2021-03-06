<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register!</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <script src="assets/js/jquery.min.js"></script>
	 <script src="assets/js/popper.min.js"> </script>
	 <script src="assets/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="assets/css/style/theme.css">
	 <link rel="stylesheet" type="text/css" href="assets/css/style/custom_radio.css">
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <a class="navbar-brand" href="#" >
		    <img src="<?php echo base_url() ?>assets/img/sentanu.png" alt="logo" class="logo-circle">
	  	</a>
	</nav>
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="<?php echo base_url() ?>assets/img/omg.png" class="logo-circle">
				</div>
				<form action="register/register" method="post" class="col-12">
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="true">
					</div>
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required="true">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required="true">
					</div>
					<div class="form-group">
						<input type="password" name="repassword" class="form-control" placeholder="Re-Password" required="true">
					</div>
					<div class="form-group">
						<label class="forget">Account type:</label>
						<select name="account_type" class="form-control">
							<option value="member">Member</option>
							<option value="tukang_jahit">Tukang Jahit</option>
						</select>
					</div>
					<button class="btn btn-red form-control">Register</button>
					<?php if($this->session->flashdata()){ ?>
					<div class="alert alert-danger">
						<strong> <?php echo $this->session->flashdata('register'); ?></strong>
					</div>
					<?php } ?>
				</form>
				<div class="col-12 forgot">
					<a href="login">Have Account?</a>
				</div>
				
			</div>
			
		</div>
	</div>
</body>
</html>