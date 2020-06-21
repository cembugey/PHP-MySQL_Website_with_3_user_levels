<?php

include 'header.php';

?>
<main class="background-admin">
	<div class="container pt-4">
		<!-- homepage edit form -->
		<form class="container jumbotron" style="max-width: 35rem;" method="POST" enctype="multipart/form-data">
			<h2 class="pl-4 pb-4">Edit Homepage Details</h2>
		  <div class="form-row">
				<!-- about us area -->
				<div class="form-group col-md-12">
			    <label for="inputUserName" class="col-form-label"><strong>About Us</strong></label>
						<!-- $index_row has the associated array returned from the query "SELECT * FROM page"; -->
					<textarea class="form-control" id="inputUserName" rows="4" cols="50" name="index_about_us"><?php echo $index_row['about_us']; ?></textarea>
			  </div>
				<!-- first feature box -->
				<h3>Feature Box 1</h3>
				<div class="form-group col-md-12">
			    <label for="inputEmail" class="col-form-label">Title</label>
			    <input type="text" class="form-control" id="inputEmail" name="index_feature_box_1_title" value="<?php echo $index_row['feature_box_1_title']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Image</label>
			    <input type="file" class="form-control" id="inputPassword" name="index_feature_box_1_image">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Text</label>
					<textarea class="form-control" id="inputPassword" rows="4" cols="50" name="index_feature_box_1_text"><?php echo $index_row['feature_box_1_text']; ?></textarea>
			  </div>
				<!-- second feature box -->
				<h3>Feature Box 2</h3>
				<div class="form-group col-md-12">
			    <label for="inputEmail" class="col-form-label">Title</label>
					<input type="text" class="form-control" id="inputEmail" name="index_feature_box_2_title" value="<?php echo $index_row['feature_box_2_title']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Image</label>
					<input type="file" class="form-control" id="inputPassword" name="index_feature_box_2_image">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Text</label>
					<textarea class="form-control" id="inputPassword" rows="4" cols="50" name="index_feature_box_2_text"><?php echo $index_row['feature_box_2_text']; ?></textarea>
			  </div>
		  </div>
			<!-- submit button -->
			<input type="submit" name="index_submit" value="Submit" class="btn btn-dark">
		</form>
	</div>
</main>

<?php

include 'footer.php';

?>
