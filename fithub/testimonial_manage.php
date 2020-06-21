<?php

include 'header.php';

?>
<main class="background-admin">
	<div class="container">
		<?php
		// loop through the table and display the testimonials
		while( $testimonial_row = $testimonial_result->fetch_assoc() ){ // $testimonial_result-> "SELECT * FROM testimonial";
			$class_name = $testimonial_row['class_name'];
			$testimonial_date = $testimonial_row['testimonial_date'];
			$first_name = $testimonial_row['first_name'];
			$comment = $testimonial_row['comment'];
			$ID = $testimonial_row['ID'];

	?>

			<!-- buttons to take action on a testimonial -->
			<form class="container p-4" style="max-width: 35rem;" method="POST">
				<h2 class="text-white">Testimonials</h2>
				<!-- submit button -->
				<input type="hidden" name="testimonial_manage_id" value="<?php echo $ID; ?>">
				<button type="submit" class="btn btn-dark" name="testimonial_manage_approve">Approve testimonial</button>
				<button type="submit" class="btn btn-dark" name="testimonial_manage_delete">Delete testimonial</button>
			</form>
			<div class="jumbotron col-12 pt-1">
				<h3 class="display-5 mt-2"><?php echo $class_name; ?></h3>
				<p class="lead"><small class="text-muted"><?php echo $testimonial_date; ?></small></p>
				<hr class="my-4">
				<h4>"<?php echo $comment; ?>"</h4>
				<p class="float-right"><em><?php echo $first_name; ?></em></p>
			</div>

<?php

    }

	?>

	</div>
</main>

<?php

include 'footer.php';

?>
