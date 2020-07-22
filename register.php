<!doctype html>
	<html lang="en">
	<?php require_once('include/header.php'); ?>

		<body>
			<header>
				<?php require_once('include/nav.php'); ?>
			</header>
	
			<div class="container h-100">
					<div class="d-flex justify-content-center h-100">
					<div class="user-card2">
					<div class="row">
					<div class="col-md-12">
						<div class="heading">Register</div>
						<div class="label1"><i class="fa fa-user" aria-hidden="true">Name</i></div>
						<div class="input-group_user">
							<input type="text" class="form-control" name="name" placeholder=" Enter Name">
						</div>
						
						<div class="label1"><i class="fa fa-envelope" aria-hidden="true">Email</i></div>
						<div class="input-group_user">
							<input type="text" class="form-control" name="mail" placeholder=" Enter Email">
						</div>

						<div class="label1"><i class="fa fa-phone" aria-hidden="true">Contact No.</i></div>
						<div class="input-group_user">
							<input type="number" class="form-control" name="cno" placeholder="Enter Mobile No.">
						</div>
						
						
						<div class="label1"><i class="fa fa-lock" aria-hidden="true">Password</i></div>
						<div class="input-group_user">
							<input type="Password" class="form-control" name="password" placeholder="Enter Password">
						</div>
						



						<div class="label1"><i class="fa fa-lock" aria-hidden="true">Confirm Password</i></div>
						<div class="input-group_user">
							<input type="password" class="form-control" name="cpassword" placeholder="Enter Confirm Password">
						</div>

					
						<div class="d-flex justify-content-center mt-3 login_container">
						<a href="#"><div class="btn btn-warning">Submit</div></a>
					</div>
					</div>
					</div>

					</div>

				
			</div>

			<?php require_once('include/footer.php'); ?>
	</body>
</html>