<?php

include 'header.php';

?>
<main>
<div class="container pt-5">
	<!-- display contact form -->
	<form class="container jumbotron" style="max-width: 35rem;" method="POST">
		<h2>Contact Us</h2>
	  <div class="form-row">
			<div class="form-group col-md-12">
		    <label for="inputUserName" class="col-form-label">Name</label>
		    <input type="text" class="form-control" id="inputUserName" name="contact_us_name">
		  </div>
			<div class="form-group col-md-12">
		    <label for="inputEmail" class="col-form-label">Email</label>
		    <input type="text" class="form-control" id="inputEmail" name="contact_us_email">
		  </div>
			<div class="form-group col-md-12">
		    <label for="inputEmail" class="col-form-label">Phone No</label>
		    <input type="text" class="form-control" id="inputEmail" name="contact_us_phone_no">
		  </div>
			<div class="form-group col-md-12">
		    <label for="inputPassword" class="col-form-label">Message</label>
				<textarea class="form-control" id="inputPassword" name="contact_us_message"></textarea>
		  </div>
	  </div>
	  <button type="submit" name="contact_us_submit" class="btn btn-dark">Submit</button>
	</form>
</div>
</main>
<?php

include 'footer.php';

?>
