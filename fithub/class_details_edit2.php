<?php

include 'header.php';

?>
<main class="background-admin">
	<!-- display class edit form -->
	<div class="container">
		<!-- Send form-data encoded as "multipart/form-data"  ->  enctype="multipart/form-data -->
		<form class="container jumbotron" style="max-width: 35rem;" method="POST" enctype="multipart/form-data">
			<h2>Edit this class</h2>
			<input type="hidden" name="class_details_edit2_hidden_ID" value="<?php echo $_GET['ID']; ?>">
		  <div class="form-row">
				<div class="form-group col-md-12">
			    <label for="inputUserName" class="col-form-label">Title</label>
			    <input type="text" class="form-control" id="inputUserName" name="class_details_edit2_title">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputEmail" class="col-form-label">Image</label>
					<input type="file" class="form-control" id="inputEmail" name="class_details_edit2_image">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Description</label>
					<textarea class="form-control" id="inputPassword" name="class_details_edit2_description"></textarea>
			  </div>
		  </div>
			<!-- submit button -->
			<button type="submit" class="btn btn-dark" name="class_details_edit2_submit">Submit</button>
		</form>
	</div>
</main>
<?php

include 'footer.php';

?>
