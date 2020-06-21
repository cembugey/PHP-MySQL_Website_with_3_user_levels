<?php

include 'header.php';

?>
<main>
	<div class="container">
		<h2 class="text-white p-4">Testimonials</h2>
		<div class="row">
	<?php
	// loop through the table and display the testimonials
	while( $testimonial_row = $testimonial_result->fetch_assoc() ){   //$testimonial_result -> "SELECT * FROM testimonial";
		//if the testimonial is approved by the admin, its data is displayed in the page.
		if ( $testimonial_row['approval'] == 'yes' ) {
			$class_name = $testimonial_row['class_name'];
			$testimonial_date = $testimonial_row['testimonial_date'];
			$first_name = $testimonial_row['first_name'];
			$comment = $testimonial_row['comment'];
?>

			<div class="jumbotron col-12 col-md-5 pt-1 mr-5">
			  <h3 class="display-5 pt-3"><?php echo $class_name; ?></h3>
			  <p class="lead"><small class="text-muted"><?php echo $testimonial_date; ?></small></p>
			  <hr class="my-4">
			  <h4>"<?php echo $comment; ?>"</h4>
				<p class="float-right"><em><?php echo $first_name; ?></em></p>
			</div>


<?php
		}
    }

	?>
		</div>
	</div>
</main>

<?php

include 'footer.php';

?>
