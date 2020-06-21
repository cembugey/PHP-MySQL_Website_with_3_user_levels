<?php

include 'header.php';

?>
<main>
	<div class="container">
		<h2 class="text-white p-4">Classes</h2>
		<div class="row">
	<?php
		// loop through the table and display the classes
		while( $class_row = $class_result->fetch_assoc() ){   // $class_result = "SELECT * FROM class";
			$title = $class_row['title'];
			$description = $class_row['description'];
			$image = $class_row['image'];
			$url = "class_details.php?title=$title&description=$description";

?>

			<div class="card col-12 col-md-4 mb-3 border-light bg-transparent">
			  <img class="card-img-top" src="img/<?php echo $image; ?>" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title text-white"><?php echo $title; ?></h4>
			    <p class="card-text text-white"><?php echo $description; ?></p>
					<!-- Clicking on learn more, we are sent to class_details.php page  -->
					<a href="<?php echo $url; ?>"><p class="card-text"><small class="text-muted">Learn more</small></p></a>
			  </div>
			</div>

<?php

    }

	?>
		</div>
	</div>
</main>

<?php

include 'footer.php';

?>
