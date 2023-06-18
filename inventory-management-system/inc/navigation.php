	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand text-white"><img src=" inc\photo_2022-01-26_12-40-11.jpg" height="50px" width="100px" href="">&nbsp; &nbsp; Oumer Auto Glass Inventory Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item">
				<form class="form-inline" action="/action_page.php">
					<input class="form-control col-md-8 mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-success" type="submit">Search</button>
				</form>
			</li> -->
			<li class="nav-item">
				<span class="nav-link">እንኳን ደህና መጡ <?php echo $_SESSION['fullName']; ?></span>
            </li>
			<li class="nav-item">
				<span class="nav-link"> | </span>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="model/login/logout.php">ይዉጡ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>