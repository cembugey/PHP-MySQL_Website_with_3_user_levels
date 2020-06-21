<?php

// Start the session
session_start();

include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>FitHub</title>
	<!-- Bootstrap CDN Link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Additional Bootstrap CDN Links -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

<header>


<?php

// check if session variable user has been set or not
if ( isset( $_SESSION["user"] ) ) {
	// if session variable user has been set to admin
	if ( $_SESSION["user"] == 'admin' ) {
?>

		<!-- display navigation menu for admin -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php">FitHub</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Home
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="index.php">Home</a>
		          <a class="dropdown-item" href="index_edit.php">Edit Homepage</a>
		        </div>
		      </li>
					<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="registration.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Register
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="registration.php">Register</a>
		          <a class="dropdown-item" href="registration_edit.php">Edit Registration Page</a>
		        </div>
		      </li>
					<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="class.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Classes
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="class.php">Classes</a>
		          <a class="dropdown-item" href="class_details_edit.php">Edit Classes</a>
		        </div>
		      </li>
					<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="testimonial.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Testimonials
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="testimonial.php">Testimonials</a>
		          <a class="dropdown-item" href="testimonial_add.php">Add Testimonial</a>
		          <a class="dropdown-item" href="testimonial_manage.php">Manage Testimonials</a>
		        </div>
		      </li>
					<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="contact_us.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Contact Us
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="contact_us.php">Contact Us</a>
		          <a class="dropdown-item" href="contact_us_manage.php">Manage Contact Messages</a>
		        </div>
		      </li>
					<li class="nav-item">
						<a class="nav-link" href = "logout.php" tite = "Logout">Logout</a>
		      </li>
		    </ul>
		  </div>
		</nav>

<?php
	}
	// if session variable user has been set to member
	elseif ( $_SESSION["user"] == 'member' ) {
?>
		<!-- display navigation menu for member -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php">FitHub</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="registration.php">Register</a>
		      </li>
					<li class="nav-item">
		        <a class="nav-link" href="class.php">Classes</a>
		      </li>
					<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="testimonial.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Testimonials
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="testimonial.php">Testimonial</a>
		          <a class="dropdown-item" href="testimonial_add.php">Add Testimonial</a>
		        </div>
		      </li>
					<li class="nav-item">
		        <a class="nav-link" href="contact_us.php">Contact Us</a>
		      </li>
					<li class="nav-item">
						<a class="nav-link" href = "logout.php" tite = "Logout">Logout</a>
		      </li>
		    </ul>
		  </div>
		</nav>


<?php
	}
}
else {
?>
	<!-- display navigation menu for public -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="index.php">FitHub</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="registration.php">Register</a>
	      </li>
				<li class="nav-item">
	        <a class="nav-link" href="class.php">Classes</a>
	      </li>
				<li class="nav-item">
	        <a class="nav-link" href="testimonial.php">Testimonials</a>
	      </li>
				<li class="nav-item">
	        <a class="nav-link" href="contact_us.php">Contact Us</a>
	      </li>
				<li class="float-right login_form_area nav-item">
					<form class="input-group" method="POST">
						<input type="text" class="form-control" name="login_username" placeholder="Username">
						<input type="password" class="form-control" name="login_password" placeholder="Password">
						<input class="btn btn-outline-light" id="loginbutton" type="submit" name="login_submit" value="Login">
					</form>
	      </li>
	    </ul>
	  </div>
	</nav>


<?php
}

?>

</header>
