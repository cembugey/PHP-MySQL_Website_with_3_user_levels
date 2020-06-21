<?php

include 'header.php';

?>
<main class="background-admin">
	<div class="container">
		<h2>Classes</h2>

		<div class="row">
	<?php
	// loop through the table and display the classes
	while( $class_row = $class_result->fetch_assoc() ){  // $class_result = "SELECT * FROM class";
		$ID = $class_row['ID'];
		$title = $class_row['title'];
		$description = $class_row['description'];
		$image = $class_row['image'];
		$url = "class_details_edit2.php?ID=$ID&title=$title&image=$image&description=$description";

?>

		<div class="card col-12 col-md-4 mb-3">
			<img class="card-img-top" src="img/<?php echo $image; ?>" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $title; ?></h5>
				<p class="card-text"><?php echo $description; ?></p>
				<!-- link brings us to the edit_details_edit2 page  -->
				<a href="<?php echo $url; ?>">Edit this class</a>
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
