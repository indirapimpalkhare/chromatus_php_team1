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
						<h1 class="text-center text-white">Register</h1>
						<label class="label control-label text-white"><i class="fa fa-user" aria-hidden="true">Name</i></label>
						<div class="input-group">
							<input type="text" class="form-control" name="name" placeholder=" Enter Name">
						</div>
						
						<label class="label control-label text-white"><i class="fa fa-envelope" aria-hidden="true">Email</i></label>
						<div class="input-group">
							<input type="text" class="form-control" name="mail" placeholder=" Enter Email">
						</div>

						<label class="label control-label text-white"><i class="fa fa-phone" aria-hidden="true">Contact No.</i></label>
						<div class="input-group">
							<input type="number" class="form-control" name="cno" placeholder="Enter Mobile No.">
						</div>
						
						
						<label class="label control-label text-white"><i class="fa fa-lock" aria-hidden="true">Password</i></label>
						<div class="input-group">
							<input type="Password" class="form-control" name="password" placeholder="Enter Password">
						</div>
						



						<label class="label control-label text-white"><i class="fa fa-lock" aria-hidden="true">Confirm Password</i></label>
						<div class="input-group">
							<input type="password" class="form-control" name="cpassword" placeholder="Enter Confirm Password">
						</div>

					
						<div class="d-flex justify-content-center mt-3 login_container">
						<a href="#"><div class="btn btn-warning">Submit</div></a>
					</div>
					</div>
					</div>

					</div>

				
			</div>
		</div>

			<?php require_once('include/footer.php'); ?>
	</body>
</html>