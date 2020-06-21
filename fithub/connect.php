<?php

// set database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fithub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($conn === false){
  //if connection is no set, we print and error + the string returned by mysqli_connect_error(), then exit current script.
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// index page - start

// create table page query execution
$table_page = "CREATE TABLE IF NOT EXISTS `page`(
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	about_us TEXT,
	feature_box_1_title VARCHAR(100),
	feature_box_1_image VARCHAR(2083),
	feature_box_1_text TEXT,
	feature_box_2_title VARCHAR(100),
	feature_box_2_image VARCHAR(2083),
	feature_box_2_text TEXT
)";
//Perform query on the table
$conn->query($table_page);

// save index page edits to database
if ( isset( $_POST['index_submit'] ) ) {
	// for image check
	$target_dir = "img/";
   //basename -> Return filename from the specified path
	$target_file = $target_dir . basename($_FILES["index_feature_box_1_image"]["name"]);
	$target_file2 = $target_dir . basename($_FILES["index_feature_box_2_image"]["name"]);

  // upload image to the destination specified
	move_uploaded_file($_FILES['index_feature_box_1_image']['tmp_name'], $target_file);
	move_uploaded_file($_FILES['index_feature_box_2_image']['tmp_name'], $target_file2);

   // assign variables from the $_POST super global variable
	$index_about_us = $_POST['index_about_us'];

	$index_feature_box_1_title = $_POST['index_feature_box_1_title'];
  	 //check wether image for feature box 1 has been submitted
	if (isset($_FILES["index_feature_box_1_image"]))
	{
		$index_feature_box_1_image = $_FILES["index_feature_box_1_image"]["name"];
	}
	$index_feature_box_1_text = $_POST['index_feature_box_1_text'];

	$index_feature_box_2_title = $_POST['index_feature_box_2_title'];
  //check wether image for feature box 2 has been submitted
	if (isset($_FILES["index_feature_box_2_image"]))
	{
		$index_feature_box_2_image = $_FILES["index_feature_box_2_image"]["name"];
	}
	$index_feature_box_2_text = $_POST['index_feature_box_2_text'];

  //select everything from the page table.
	$select = "SELECT * FROM page";
  //Perform the above query on the database
	$result = mysqli_query($conn, $select);

	// if the table is empty,create row,  else update row.
  //if mysqli_num_rows($result) return 0 Insert into the page table
	if ( mysqli_num_rows($result) == 0 ) {

		$insert_query = "INSERT INTO `page` (`ID`, `about_us`, `feature_box_1_title`, `feature_box_1_image`, `feature_box_1_text`, `feature_box_2_title`, `feature_box_2_image`, `feature_box_2_text`) VALUES (1, '$index_about_us', '$index_feature_box_1_title', '$index_feature_box_1_image', '$index_feature_box_1_text', '$index_feature_box_2_title', '$index_feature_box_2_image', '$index_feature_box_2_text');";
		mysqli_query($conn, $insert_query);
	} elseif ( mysqli_num_rows($result) == 1 ) {
    //if mysqli_num_rows($result) return 1, create an Update query.
		$update_query = "UPDATE `page`
						SET `about_us`='$index_about_us',
							`feature_box_1_title`='$index_feature_box_1_title',
							`feature_box_1_image`='$index_feature_box_1_image',
							`feature_box_1_text`='$index_feature_box_1_text',
							`feature_box_2_title`='$index_feature_box_2_title',
							`feature_box_2_image`='$index_feature_box_2_image',
							`feature_box_2_text`='$index_feature_box_2_text'
						WHERE `ID`=1;";
    // Perform the Update query on the database.
		mysqli_query($conn, $update_query);
	}
}

// read table page
//select  everything from the page table
$index_select = "SELECT * FROM page";
$index_result = $conn->query($index_select);
$index_row = $index_result->fetch_assoc();     //To be used by index.php
// index page - end


// registration page - fee levels - start

// create table fee query execution with the following attributes
$table_fee = "CREATE TABLE IF NOT EXISTS `fee`(
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	type_key VARCHAR(100),
	level_1 VARCHAR(100),
	level_2 VARCHAR(100),
	level_3 VARCHAR(100)
)";

$conn->query($table_fee);

// If we submit after editing, save fee levels changes to the database.
if ( isset( $_POST['registration_edit_submit'] ) ) {
	// assign variables for the tile, benefits and price of the first fee level.
	$registration_edit_level_1_title = $_POST['registration_edit_level_1_title'];
	$registration_edit_level_1_benefit_1 = $_POST['registration_edit_level_1_benefit_1'];
	$registration_edit_level_1_benefit_2 = $_POST['registration_edit_level_1_benefit_2'];
	$registration_edit_level_1_benefit_3 = $_POST['registration_edit_level_1_benefit_3'];
	$registration_edit_level_1_price = $_POST['registration_edit_level_1_price'];

// assign variables for the tile, benefits and price of the second fee level.
	$registration_edit_level_2_title = $_POST['registration_edit_level_2_title'];
	$registration_edit_level_2_benefit_1 = $_POST['registration_edit_level_2_benefit_1'];
	$registration_edit_level_2_benefit_2 = $_POST['registration_edit_level_2_benefit_2'];
	$registration_edit_level_2_benefit_3 = $_POST['registration_edit_level_2_benefit_3'];
	$registration_edit_level_2_price = $_POST['registration_edit_level_2_price'];

// assign variables for the tile, benefits and price of the third fee level.
	$registration_edit_level_3_title = $_POST['registration_edit_level_3_title'];
	$registration_edit_level_3_benefit_1 = $_POST['registration_edit_level_3_benefit_1'];
	$registration_edit_level_3_benefit_2 = $_POST['registration_edit_level_3_benefit_2'];
	$registration_edit_level_3_benefit_3 = $_POST['registration_edit_level_3_benefit_3'];
	$registration_edit_level_3_price = $_POST['registration_edit_level_3_price'];

	// update query, setting new Titles.
	$update_query1 = "UPDATE `fee`
					SET `level_1`='$registration_edit_level_1_title',
						`level_2`='$registration_edit_level_2_title',
						`level_3`='$registration_edit_level_3_title'
					WHERE `type_key`='title';";
	mysqli_query($conn, $update_query1);
  // update query, setting new primary Benefits.
	$update_query2 = "UPDATE `fee`
					SET `level_1`='$registration_edit_level_1_benefit_1',
						`level_2`='$registration_edit_level_2_benefit_1',
						`level_3`='$registration_edit_level_3_benefit_1'
					WHERE `type_key`='benefit 1';";
	mysqli_query($conn, $update_query2);
  // update query, setting new secondary benefits.
	$update_query3 = "UPDATE `fee`
					SET `level_1`='$registration_edit_level_1_benefit_2',
						`level_2`='$registration_edit_level_2_benefit_2',
						`level_3`='$registration_edit_level_3_benefit_2'
					WHERE `type_key`='benefit 2';";
	mysqli_query($conn, $update_query3);
  // update query, setting new final benefits.
	$update_query4 = "UPDATE `fee`
					SET `level_1`='$registration_edit_level_1_benefit_3',
						`level_2`='$registration_edit_level_2_benefit_3',
						`level_3`='$registration_edit_level_3_benefit_3'
					WHERE `type_key`='benefit 3';";
	mysqli_query($conn, $update_query4);
  //update query, setting new prices.
	$update_query5 = "UPDATE `fee`
					SET `level_1`='$registration_edit_level_1_price',
						`level_2`='$registration_edit_level_2_price',
						`level_3`='$registration_edit_level_3_price'
					WHERE `type_key`='price';";
	mysqli_query($conn, $update_query5);
}

//Variables to be used by registration.php in order to display the database data on that page.
// fetch title of all levels
$registration_select_title = "SELECT * FROM fee WHERE `type_key`='title';";
$registration_result_title = mysqli_query($conn, $registration_select_title);
$registration_row_title = $registration_result_title->fetch_assoc();
// fetch benefit 1 of all levels
$registration_select_benefit_1 = "SELECT * FROM fee WHERE `type_key`='benefit 1';";
$registration_result_benefit_1 = mysqli_query($conn, $registration_select_benefit_1);
$registration_row_benefit_1 = $registration_result_benefit_1->fetch_assoc();
// fetch benefit 2 of all levels
$registration_select_benefit_2 = "SELECT * FROM fee WHERE `type_key`='benefit 2';";
$registration_result_benefit_2 = mysqli_query($conn, $registration_select_benefit_2);
$registration_row_benefit_2 = $registration_result_benefit_2->fetch_assoc();
// fetch benefit 3 of all levels
$registration_select_benefit_3 = "SELECT * FROM fee WHERE `type_key`='benefit 3';";
$registration_result_benefit_3 = mysqli_query($conn, $registration_select_benefit_3);
$registration_row_benefit_3 = $registration_result_benefit_3->fetch_assoc();
// fetch prices of all levels
$registration_select_price = "SELECT * FROM fee WHERE `type_key`='price';";
$registration_result_price = mysqli_query($conn, $registration_select_price);
$registration_row_price = $registration_result_price->fetch_assoc();
// fee levels registration - end



// registration page - registration form - start

// create table user query execution with the following attributes.
$table_user = "CREATE TABLE IF NOT EXISTS `user`(
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	level VARCHAR(100),
	username VARCHAR(100),
	email VARCHAR(100),
	password VARCHAR(100),
	user_type VARCHAR(30)
)";
$conn->query($table_user);

// if the form has been submitted save new user details to database.
if ( isset( $_POST['registration_form_submit'] ) ) {
	//assign variables for table user
	$registration_form_level = $_POST['registration_form_level'];


  $registration_form_username = $_POST['registration_form_username'];
  //validate username, it is a required field and only letters and whitespace are accepted.
    if (empty($_POST['registration_form_username'])) {
      $_SESSION["nameErr"] = "Name is required";  //session variable in order to display error in registration.php
      } else {
        $registration_form_username = $_POST['registration_form_username'];
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$registration_form_username)) {  //session variable in order to display error in registration.php
          $_SESSION["nameErr"] = "Only letters and white space allowed";
        }
      }

  $registration_form_email = $_POST['registration_form_email'];

  //Validate email. Email field is required, and it must have proper format.
  if (empty($_POST['registration_form_email'])) {
      $_SESSION["emailErr"] = "Email is required";//session variable in order to display error in registration.php
    } else {
      $registration_form_email = $_POST['registration_form_email'];
      // check if e-mail address is well-formed
      if (!filter_var($registration_form_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["emailErr"] = "Invalid email format";   //session variable in order to display error in registration.php
      }
    }

	$registration_form_password = $_POST['registration_form_password'];
	// Create an Update query, insert values into the user table.
	$update_query = "INSERT INTO `user` (`level`, `username`, `email`, `password`, `user_type`) VALUES ('$registration_form_level', '$registration_form_username', '$registration_form_email', '$registration_form_password', 'member');";
  //execute update query on the database.
  mysqli_query($conn, $update_query);

	// create table user_class execution with the following attributes.
	$table_user_class = "CREATE TABLE IF NOT EXISTS `user_class`(
		ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		user_id INT(6),
		pilates VARCHAR(30),
		zumba VARCHAR(30),
		aerobics VARCHAR(30),
		weights VARCHAR(30)
	)";
	$conn->query($table_user_class);
	// select the user ID based on username submitted in the registration form.
	$find_user_id = "SELECT `ID` from user WHERE `username`='$registration_form_username';";
	$user_id_array = $conn->query($find_user_id);
  //Fetch a result row as an associative array.
	$user_id_row = $user_id_array->fetch_assoc();
  //Pass the ID to the variable $user_id
	$user_id = $user_id_row['ID'];

  // create an Update query. Insert the user id(primary key of user table) value.
	$update_query2 = "INSERT INTO `user_class` (`user_id`) VALUES ('$user_id');";
	mysqli_query($conn, $update_query2);

  // If pilates option is chosen on submission, assign its value to the variable 	$registration_form_classes_pilates
	if ( isset($_POST['registration_form_classes_pilates']) ) {
		$registration_form_classes_pilates = $_POST['registration_form_classes_pilates'];
    //Update the user_class table with the pilates option selected
  	$update_query = "UPDATE `user_class`
					SET `pilates`='$registration_form_classes_pilates'
					WHERE `user_id`='$user_id';";
		mysqli_query($conn, $update_query);
	}
  // If zumba option is chosen on submission, assign its value to the variable 	$registration_form_classes_zumba
	if ( isset($_POST['registration_form_classes_zumba']) ) {
		$registration_form_classes_zumba = $_POST['registration_form_classes_zumba'];
    //Update the user_class table with the zumba option selected
		$update_query = "UPDATE `user_class`
					SET `zumba`='$registration_form_classes_zumba'
					WHERE `user_id`='$user_id';";
		mysqli_query($conn, $update_query);
	}
  // If aerobics option is chosen on submission, assign its value to the variable 	$registration_form_classes_zumba
	if ( isset($_POST['registration_form_classes_aerobics']) ) {
		$registration_form_classes_aerobics = $_POST['registration_form_classes_aerobics'];
    //Update the user_class table with the aerobics option selected
		$update_query = "UPDATE `user_class`
					SET `aerobics`='$registration_form_classes_aerobics'
					WHERE `user_id`='$user_id';";
		mysqli_query($conn, $update_query);
	}
  // If weights option is chosen on submission, assign its value to the variable 	$registration_form_classes_zumba
	if ( isset($_POST['registration_form_classes_weights']) ) {
		$registration_form_classes_weights = $_POST['registration_form_classes_weights'];
    //Update the user_class table with the weights option selected
		$update_query = "UPDATE `user_class`
					SET `weights`='$registration_form_classes_weights'
					WHERE `user_id`='$user_id';";
		mysqli_query($conn, $update_query);
	}
}
// registration page - registration form - end



// class page - start

// // create table class with the following attributes.
$table_class = "CREATE TABLE IF NOT EXISTS `class`(
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(100),
	description TEXT,
	image VARCHAR(2083)
)";
$conn->query($table_class);

// update db for pilates
$pilates_description = 'Smooth movements tone and strengthen your core and back, improve your posture and flexibility.';
$pilates_image = 'icon_pilates.png';
$table_class_query = "INSERT INTO `class` (`ID`, `title`, `description`, `image`) VALUES (1, 'Pilates', '$pilates_description', '$pilates_image');";
mysqli_query($conn, $table_class_query);

// update db for zumba
$zumba_description = 'Get the results of interval training with the fun of the dance floor; latin and modern dance fused into a funky workout.';
$zumba_image = 'zumba.jpg';
$table_class_query = "INSERT INTO `class` (`ID`, `title`, `description`, `image`) VALUES (1, 'zumba', '$zumba_description', '$zumba_image');";
mysqli_query($conn, $table_class_query);

// update db for aerobics
$aerobics_description = 'A fun and energetic class that safe for a range of ages and fitness levels.';
$aerobics_image = 'aerobics.png';
$table_class_query = "INSERT INTO `class` (`ID`, `title`, `description`, `image`) VALUES (3, 'aerobics', '$aerobics_description', '$aerobics_image');";
mysqli_query($conn, $table_class_query);

// update db for weights
$weights_description = 'Work your whole body with a weight training class to help increase strength and cardio fitness.';
$weights_image = 'icon_barbells.png';
$table_class_query = "INSERT INTO `class` (`ID`, `title`, `description`, `image`) VALUES (4, 'weights', '$weights_description', '$weights_image');";
mysqli_query($conn, $table_class_query);

// read table
$class_select = "SELECT * FROM class";
$class_result = $conn->query($class_select);   // To be used by class.php
// class page - end


// class page - class edits - start

//if we have submitted the edits, the changes for the class details will be saved on the database.
if ( isset( $_POST['class_details_edit2_submit'] ) ) {
	// for image
	$target_dir = "img/";
   //basename -> Return filename from the specified path
	$target_file = $target_dir . basename($_FILES["class_details_edit2_image"]["name"]);
	// upload image to the destination specified
	move_uploaded_file($_FILES['class_details_edit2_image']['tmp_name'], $target_file);
	//  if image is set in the $_FILES superglobal we assign its value to  $class_details_edit2_image
	if (isset($_FILES["class_details_edit2_image"]))
	{
		$class_details_edit2_image = $_FILES["class_details_edit2_image"]["name"];
	}

	//assign variables for other fields
	$class_details_edit2_ID = $_POST['class_details_edit2_hidden_ID'];
	$class_details_edit2_title = $_POST['class_details_edit2_title'];
	$class_details_edit2_description = $_POST['class_details_edit2_description'];
	// update query on the class table, set new title,description and image.
	$update_query = "UPDATE `class`
				SET `title`='$class_details_edit2_title',
					`description`='$class_details_edit2_description',
					`image`='$class_details_edit2_image'
				WHERE `ID`='$class_details_edit2_ID';";
        //execute update query on the database.
	mysqli_query($conn, $update_query);
}
// class page - class edits - end


// testimonial page - start

// create table testimonial with the following attributes.
$table_testimonial = "CREATE TABLE IF NOT EXISTS `testimonial`(
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	class_name VARCHAR(100),
	testimonial_date TIMESTAMP,
	first_name VARCHAR(100),
	comment TEXT,
	approval VARCHAR(100)
)";
$conn->query($table_testimonial);

// if submit has been POSTED(set), save testimonial details to database.
if ( isset( $_POST['testimonial_add_submit'] ) ) {
	// assign variables
	$testimonial_add_class_name = $_POST['testimonial_add_class_name'];
	$testimonial_add_first_name = $_POST['testimonial_add_first_name'];
	$testimonial_add_comment = $_POST['testimonial_add_comment'];
	//update query, insert the above values in the testimonal table.
	$update_query = "INSERT INTO `testimonial` (`class_name`, `testimonial_date`, `first_name`, `comment`) VALUES ('$testimonial_add_class_name', NOW(), '$testimonial_add_first_name', '$testimonial_add_comment');";
	mysqli_query($conn, $update_query);
}

// read table, variables to be used in the testimonial.php page, in order to display the data.
$testimonial_select = "SELECT * FROM testimonial";
$testimonial_result = $conn->query($testimonial_select);
// testimonial page - end


// testimonial - manage testimonials - start

// if the testimonial is approved.
if ( isset( $_POST['testimonial_manage_approve'] ) ) {

	$testimonial_manage_id = $_POST['testimonial_manage_id'];
	// create Update query on the testimonial table, set approval to yes.
	$update_query = "UPDATE `testimonial`
				SET `approval`='yes'
				WHERE `ID`='$testimonial_manage_id';";
  //execute update query on database.
	mysqli_query($conn, $update_query);
}
// testimonial delete
if ( isset( $_POST['testimonial_manage_delete'] ) ) {
	$testimonial_manage_id = $_POST['testimonial_manage_id'];
	// create delete query on the testimonial table.
	$delete_query = "DELETE FROM `testimonial`
				WHERE `ID`='$testimonial_manage_id';";
  //execute delete query on database.
	mysqli_query($conn, $delete_query);
}
// testimonial - manage testimonials - end


// contact page - start

// create table contact_us with the following attributes.
$table_contact_us = "CREATE TABLE IF NOT EXISTS `contact_us`(
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100),
	email VARCHAR(100),
	phone_no VARCHAR(100),
	message TEXT
)";
$conn->query($table_contact_us);

// if the contact form us submitted, save contact message and other details to database.
if ( isset( $_POST['contact_us_submit'] ) ) {
	// assign variables
	$contact_us_name = $_POST['contact_us_name'];

  $contact_us_email = $_POST['contact_us_email'];
  //Validate email. Email field is required, and it must have proper format.
    if (empty($_POST['contact_us_email'])) {
        $_SESSION["emailErrContact"] = "Email is required";//session variable in order to display error in registration.php
      } else {
          $contact_us_email = $_POST['contact_us_email'];
        // check if e-mail address is well-formed
        if (!filter_var($contact_us_email, FILTER_VALIDATE_EMAIL)) {
          $_SESSION["emailErrContact"] = "Invalid email format";   //session variable in order to display error in registration.php
        }
      }

  $contact_us_phone_no = $_POST['contact_us_phone_no'];
        //validate phone number. Phone field is required, and it must have proper format.
      if (empty($_POST['contact_us_phone_no'])){
        $_SESSION["phoneErr"] = "Phone is required";//session variable in order to display error in registration.php
      }else {
            $contact_us_phone_no = $_POST['contact_us_phone_no'];
          // check if phone is well-formed
          if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $contact_us_phone_no)) {
        // if phone is not valid
        $_SESSION["phoneErr"] = "Only numbers allowed";//session variable in order to display error in registration.php
      }
  }

	$contact_us_message = $_POST['contact_us_message'];
	// insert in table
	$insert_query = "INSERT INTO `contact_us` (`name`, `email`, `phone_no`, `message`) VALUES ('$contact_us_name', '$contact_us_email', '$contact_us_phone_no', '$contact_us_message');";
  //execute query in the database.
  mysqli_query($conn, $insert_query);
}

// read table. Variables to be used by the contact_us_manage page.
$contact_select = "SELECT * FROM contact_us";
$contact_result = $conn->query($contact_select);
// contact page - end



// login form - start

// check if login form was submitted
if ( isset( $_POST['login_submit'] ) ) {
	//assign username and password to the following variables
	$login_username = $_POST['login_username'];
	$login_password = $_POST['login_password'];
	// create select everything  query from the user table
	$select = "SELECT * FROM user";
  //execute above query on the database.
	$result = mysqli_query($conn, $select);
	// loop through the table
	while( $result_row = $result->fetch_assoc() ){
		$username = $result_row['username'];
		$password = $result_row['password'];
		$user_type = $result_row['user_type'];
    //check the user type
		if ( $username == $login_username && $password == $login_password && $user_type == 'admin' ) {
			// if user type == admin, then set session variable as "admin".
			$_SESSION["user"] = "admin";
		}
		elseif ( $username == $login_username && $password == $login_password && $user_type == 'member' ) {
			// if user type == member, then set session variable as "admin".
			$_SESSION["user"] = "member";
		}
    }
}
// login form - end



// logout - start

//If logout is set
if ( isset( $_POST['logout'] ) ) {
	// remove all session variables
	session_unset();
	// destroy the session
	session_destroy();
	echo "session destroyed";
}

// logout - end



// Close connection to database
mysqli_close($conn);

?>
