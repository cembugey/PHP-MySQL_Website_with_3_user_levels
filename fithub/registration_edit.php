<?php

include 'header.php';

?>
<main class="background-admin">
	<div class="container pt-4">
		<!-- fee levels edit form -->
		<form class="container jumbotron" style="max-width: 35rem;" method="POST">
			<h2 class="pl-4 pb-4">Edit Registration Page</h2>
			<h4 class="p-2">Level 1</h4>
		  <div class="form-row">
				<div class="form-group col-md-12">
			    <label for="inputUserName" class="col-form-label">Title</label>
			    <input type="text" class="form-control" id="inputUserName" name="registration_edit_level_1_title" value="<?php echo $registration_row_title['level_1']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputEmail" class="col-form-label">Benefit 1</label>
			    <input type="text" class="form-control" id="inputEmail" name="registration_edit_level_1_benefit_1" value="<?php echo $registration_row_benefit_1['level_1']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Benefit 2</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_1_benefit_2" value="<?php echo $registration_row_benefit_2['level_1']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Benefit 3</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_1_benefit_3" value="<?php echo $registration_row_benefit_3['level_1']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Price</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_1_price" value="<?php echo $registration_row_price['level_1']; ?>">
			  </div>
		  </div>
			<!-- edit level 2 -->
			<h4 class="p-2">Level 2</h4>
		  <div class="form-row">
				<div class="form-group col-md-12">
			    <label for="inputUserName" class="col-form-label">Title</label>
			    <input type="text" class="form-control" id="inputUserName" name="registration_edit_level_2_title" value="<?php echo $registration_row_title['level_2']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputEmail" class="col-form-label">Benefit 1</label>
			    <input type="text" class="form-control" id="inputEmail" name="registration_edit_level_2_benefit_1" value="<?php echo $registration_row_benefit_1['level_2']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Benefit 2</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_2_benefit_2" value="<?php echo $registration_row_benefit_2['level_2']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Benefit 3</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_2_benefit_3" value="<?php echo $registration_row_benefit_3['level_2']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Price</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_2_price" value="<?php echo $registration_row_price['level_2']; ?>">
			  </div>
		  </div>
			<!-- edit level 3 -->
			<h4 class="p-2">Level 3</h4>
		  <div class="form-row">
				<div class="form-group col-md-12">
			    <label for="inputUserName" class="col-form-label">Title</label>
			    <input type="text" class="form-control" id="inputUserName" name="registration_edit_level_3_title" value="<?php echo $registration_row_title['level_3']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputEmail" class="col-form-label">Benefit 1</label>
			    <input type="text" class="form-control" id="inputEmail" name="registration_edit_level_3_benefit_1" value="<?php echo $registration_row_benefit_1['level_3']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Benefit 2</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_3_benefit_2" value="<?php echo $registration_row_benefit_2['level_3']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Benefit 3</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_3_benefit_3" value="<?php echo $registration_row_benefit_3['level_3']; ?>">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Price</label>
			    <input type="text" class="form-control" id="inputPassword" name="registration_edit_level_3_price" value="<?php echo $registration_row_price['level_3']; ?>">
			  </div>
		  </div>
			<!-- submit button -->
			<input type="submit" name="registration_edit_submit" value="Submit" class="btn btn-dark">
		  <!-- <button type="submit" name="registration_form_submit" class="btn btn-dark">Sign in</button> -->
		</form>
	</div>
</main>

<?php

include 'footer.php';

?>
