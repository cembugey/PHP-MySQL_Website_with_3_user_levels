<?php

include 'header.php';

?>
<main class="background-member">
	<div class="container">
		<h2 class="text-center p-4">Contact Messages</h2>
	<?php
		// loop through the table and display the contact messages
		while( $contact_row = $contact_result->fetch_assoc() ){ // $contact_result ="SELECT * FROM contact_us";
			$name = $contact_row['name'];
			$email = $contact_row['email'];
			$phone_no = $contact_row['phone_no'];
			$message = $contact_row['message'];
?>
			<div class="jumbotron col-12 col-md-8 pt-2 pb-2 ml-auto mr-auto">
				<!-- Display the fetched results from above  -->
				<h2>Contact Information</h2>
				<p class="pt-2">Name: <?php echo $name; ?></p>
				<p>Email: <?php echo $email; ?></p>
				<p>Phone No: <?php echo $phone_no; ?></p>
				<hr class="my-4">
				<h2>Message</h2>
				<p class="pb-2">"<?php echo $message; ?>"</p>
			</div>

<?php
    }

	?>
	</div>
</main>

<?php

include 'footer.php';

?>
