<?php

include 'header.php';

?>
<main class="background-member">
	<div class="container pt-5">
			<!-- form to add new testimonial -->
			<form class="container jumbotron" style="max-width: 35rem;" method="POST">
				<h2>Add Testimonial</h2>
			  <div class="form-row">
					<div class="form-group col-md-12">
				    <label for="inputUserName" class="col-form-label">Class Name</label>
				    <input type="text" class="form-control" id="inputUserName" name="testimonial_add_class_name">
				  </div>
					<div class="form-group col-md-12">
				    <label for="inputUserName" class="col-form-label">First Name</label>
				    <input type="text" class="form-control" id="inputUserName" name="testimonial_add_first_name">
				  </div>
					<div class="form-group col-md-12">
				    <label for="inputPassword" class="col-form-label">Comment</label>
						<textarea class="form-control" id="inputPassword" name="testimonial_add_comment"></textarea>
				  </div>
			  </div>
				<!-- submit button -->
				<button type="submit" class="btn btn-dark" name="testimonial_add_submit">Submit</button>
			</form>
	</div>
</main>
<?php

include 'footer.php';

?>
