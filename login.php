<!doctype html>
	<html lang="en">
	<?php require_once('include/header.php'); ?>

		<body>
			<header>
				<?php require_once('include/nav.php'); ?>
			</header>
	
			<div class="container h-100">
					<div class="d-flex justify-content-center h-100">
					<div class="user-card1">
						
					<div class="row">
					<div class="col-md-12">
						<h1 class="text-center text-white">Login</h1>
						<label class="label control-label text-white"><i class="fa fa-envelope" aria-hidden="true">Email</i></label>
						<div class="input-group">
							<input type="text" class="form-control" name="mail" placeholder="Enter Email">
						</div>
						

						<label class="label control-label text-white"><i class="fa fa-lock" aria-hidden="true">Password</i></label>
						<div class="input-group">
							<input type="password" class="form-control" name="password" placeholder="Enter Password">
						</div>

						<div class="row">
							<div class="col-md-7">
								<input type="checkbox"><small class=" text-white">Remember Password</small>
							</div>
							<div class="col-md-12">
								<a href=#><p class="text-right">Forget password</p></a>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
						<a href="#"><div class="btn btn-warning">Login</div></a>
					</div>
						<p class="text-center text-white">Don't have account!<a href="register.php">SignUp</a></p>
					</div>
					</div>

				</div>

				</div>
			</div>

			<?php require_once('include/footer.php'); ?>
	</body>
</html>