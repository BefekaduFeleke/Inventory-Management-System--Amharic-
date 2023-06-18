<?php
	session_start();
	
	// Check if user is already logged in
	if(isset($_SESSION['loggedIn'])){
		header('Location: index.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
  <body>

<?php
// Variable to store the action (login, register, passwordReset)
$action = '';
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == 'register'){
?>
			<div class="container-fluid bg-light">
			  <div class="row justify-content-center">
			  <div class="col-sm-12 col-md-5 col-lg-5  bg-light">
				<div class="card">
				<img src=" inc\photo_2022-01-26_12-40-11.jpg" class="rounded mx-auto d-block height="200px" width="300px" >
				  <div class="card-header  bg-light">
					Register
				  </div>
				  <div class="card-body  bg-light">
					<form action="">
					<div id="registerMessage"></div>
					  <div class="form-group  bg-light">
						<label for="registerFullName">Name<span class="requiredIcon">*</span></label>
						<input type="text" class="form-control" id="registerFullName" name="registerFullName">
						<!-- <small id="emailHelp" class="form-text text-muted"></small> -->
					  </div>
					   <div class="form-group">
						<label for="registerUsername">Username<span class="requiredIcon">*</span></label>
						<input type="email" class="form-control" id="registerUsername" name="registerUsername" autocomplete="on">
					  </div>
					  <div class="form-group">
						<label for="registerPassword1">Password<span class="requiredIcon">*</span></label>
						<input type="password" class="form-control" id="registerPassword1" name="registerPassword1">
					  </div>
					  <div class="form-group">
						<label for="registerPassword2">Re-enter password<span class="requiredIcon">*</span></label>
						<input type="password" class="form-control" id="registerPassword2" name="registerPassword2">
					  </div>
					  <a href="login.php" class="btn btn-primary">Login</a>
					  <button type="button" id="register" class="btn btn-success">Register</button>
					  <a href="login.php?action=resetPassword" class="btn btn-warning">Reset Password</a>
					  <button type="reset" class="btn">Clear</button>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
<?php
			require 'inc/footer.php';
			echo '</body></html>';
			exit();
		} elseif($action == 'resetPassword'){
?>
			<div class="container-fluid  bg-light">
			  <div class="row justify-content-center">
			  <div class="col-sm-12 col-md-5 col-lg-5 bg-light">
				<div class="card">
				<img src=" inc\photo_2022-01-26_12-40-11.jpg" class="rounded mx-auto d-block height="200px" width="300px" >
				  <div class="card-header  bg-light">
					Reset Password
				  </div>
				  <div class="card-body  bg-light">
					<form action="">
					<div id="resetPasswordMessage"></div>
					  <div class="form-group  bg-light">
						<label for="resetPasswordUsername">Username</label>
						<input type="text" class="form-control" id="resetPasswordUsername" name="resetPasswordUsername">
					  </div>
					  <div class="form-group">
						<label for="resetPasswordPassword1">New Password</label>
						<input type="password" class="form-control" id="resetPasswordPassword1" name="resetPasswordPassword1">
					  </div>
					  <div class="form-group">
						<label for="resetPasswordPassword2">Confirm New Password</label>
						<input type="password" class="form-control" id="resetPasswordPassword2" name="resetPasswordPassword2">
					  </div>
					  <a href="login.php" class="btn btn-primary">Login</a>
					  <a href="login.php?action=register" class="btn btn-success">Register</a>
					  <button type="button" id="resetPasswordButton" class="btn btn-warning">Reset Password</button>
					  <button type="reset" class="btn">Clear</button>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
<?php
			require 'inc/footer.php';
			echo '</body></html>';
			exit();
		}
	}	
?>
	<!-- Default Page Content (login form) -->


    <div class="container፟-fluid  bg-light" >
      <div class="row justify-content-center">
	  <div class="col-sm-12 col-md-5 col-lg-5  bg-light">
	  <div class="card border border-success  bg-light " >
		<img src=" inc\photo_2022-01-26_12-40-11.jpg" class="rounded mx-auto d-block height="200px" width="300px" >
		  <div class="card-header  bg-light">
		  <h5 class="card-title " style="font-family: 'Trebuchet MS', sans-serif;">Login</h5>
		  </div>
		  <div class="card-body">
			<form action="">
			<div id="loginMessage"></div>
			  <div class="form-group">
			  <h6 class="card-title" style="font-family: 'Trebuchet MS', sans-serif;">Username</h6>
				<input type="text" class="form-control   " id="loginUsername" name="loginUsername">
			  </div>
			  <div class="form-group">
			  <h6 class="card-title" style="font-family: 'Trebuchet MS', sans-serif;" >Password</h6>
				<input type="password" class="form-control" id="loginPassword" name="loginPassword">
			  </div>
			  <button type="button" id="login" class="btn btn-primary">Login</button>
			  <a href="login.php?action=register" class="btn btn-success">Register</a>
			  <a href="login.php?action=resetPassword" class="btn btn-warning">Reset Password</a>
			  <button type="reset" class="btn">Clear</button>
			</form>
		  </div>
		</div>
		</div>
      </div>
    </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
