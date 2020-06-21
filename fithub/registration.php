<?php

include 'header.php';

?>
<main>
	<div class="container">
		<h2 class="text-white p-4">Registration Options</h2>
		<!-- table that displays 3 fee levels -->
		<div class="row">
			<div class="col-12 col-md-4">
				<div class="jumbotron position-static">
				  <h1 class="display-4"><?php echo $registration_row_title['level_1']; ?></h1>
				  <hr class="my-4">
					<p><?php echo $registration_row_benefit_1['level_1']; ?></p>
					<p><?php echo $registration_row_benefit_2['level_1']; ?></p>
					<p><?php echo $registration_row_benefit_3['level_1']; ?></p>
					<div class="ui inverted circular segment position-relative" style="left:30%">
					  <h2 class="ui inverted header">
					    JOIN NOW
					    <div class="sub header"><?php echo $registration_row_price['level_1']; ?></div>
					  </h2>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="jumbotron position-static">
				  <h1 class="display-4"><?php echo $registration_row_title['level_2']; ?></h1>
				  <hr class="my-4">
					<p><?php echo $registration_row_benefit_1['level_2']; ?></p>
					<p><?php echo $registration_row_benefit_2['level_2']; ?></p>
					<p><?php echo $registration_row_benefit_3['level_2']; ?></p>
					<div class="ui inverted circular segment position-relative" style="left:30%">
					  <h2 class="ui inverted header">
					    JOIN NOW
					    <div class="sub header"><?php echo $registration_row_price['level_2']; ?></div>
					  </h2>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="jumbotron position-static">
				  <h1 class="display-4"><?php echo $registration_row_title['level_3']; ?></h1>
				  <hr class="my-4">
					<p><?php echo $registration_row_benefit_1['level_3']; ?></p>
					<p><?php echo $registration_row_benefit_2['level_3']; ?></p>
					<p><?php echo $registration_row_benefit_3['level_3']; ?></p>
					<!-- Fomantic UI segment -->
					<div class="ui inverted circular segment position-relative" style="left:30%">
					  <h2 class="ui inverted header">
					    JOIN NOW
					    <div class="sub header"><?php echo $registration_row_price['level_3']; ?></div>
					  </h2>
					</div>
				</div>
			</div>
		</div>
		<!-- Registration Form -->
		<form class="container jumbotron" style="max-width: 35rem;" method="POST">
			<h2>Registration Form</h2>
		  <div class="form-row">
				<div class="form-group col-md-12">
		      <label for="inputState">Choose Level</label>
		      <select id="inputState" class="form-control" name="registration_form_level">
		        <option>Level 1</option>
		        <option>Level 2</option>
						<option>Level 3</option>
		      </select>
		    </div>
		    <div class="form-group col-md-12">
		      <label for="inlineCheckbox1">Choose Classes:   </label>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="registration_form_classes_pilates" id="inlineCheckbox1" value="option1">
					  <label class="form-check-label" for="inlineCheckbox1">Pilates</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="registration_form_classes_zumba" id="inlineCheckbox2" value="option2">
					  <label class="form-check-label" for="inlineCheckbox2">Zumba</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="registration_form_classes_aerobics" id="inlineCheckbox3" value="option3">
					  <label class="form-check-label" for="inlineCheckbox3">Aerobics</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="registration_form_classes_weights" id="inlineCheckbox4" value="option4">
					  <label class="form-check-label" for="inlineCheckbox4">Weights</label>
					</div>
		    </div>
				<div class="form-group col-md-12">
			    <label for="inputUserName" class="col-form-label">Username</label>
			    <input type="text" class="form-control" id="inputUserName" name="registration_form_username">
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputEmail" class="col-form-label">Email</label>
			    <input type="email" class="form-control" id="inputEmail" name="registration_form_email">
					<!-- <?php //echo $_SESSION["emailErr"; ?>   print error message if email is not entered or is of an invalid format  -->
			  </div>
				<div class="form-group col-md-12">
			    <label for="inputPassword" class="col-form-label">Password</label>
			    <input type="password" class="form-control" id="inputPassword" name="registration_form_password">
			  </div>
		  </div>
		  <button type="submit" name="registration_form_submit" class="btn btn-dark">Sign in</button>
		</form>
	</div>
</main>
<?php

include 'footer.php';

?>
