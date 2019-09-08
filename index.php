<?php

if(isset($_POST['Submit'])){
	//Setting the email that receives the form data and the Subject of the email
	$emailTo = "omokugbobr@gmail.com";
	$emailSubject = "Data from CV Contact Form";

	//Collecting input data from the Contact form
	$fname = $_POST['FirstName'];
	$lname = $_POST['LastName'];
	$email = $_POST['EmailAddress'];
	$title = $_POST['TitleofMessage'];
	$message = $_POST['Message'];

	//Create the email body
	$emailMessage = "Contact Form details below: \n\n";
	$emailMessage .= "First Name:  ".$fname."\n";
	$emailMessage .= "Last Name:   ".$lname."\n";
	$emailMessage .= "Email Address:   ".$email."\n";
	$emailMessage .= "Title of Message:   ".$title."\n";
	$emailMessage .= "Message:     ".$message."\n";

	//Conditonal statements to prevent the sending on invalid input parameters
	if (strlen($fname)==0 or strlen($fname) <4 or (!preg_match("/^[a-zA-Z ]*$/", $fname))) {
		echo "Invalid input: Check if First Name is empty, has less than 4 characters, or has special characters";
	}
	elseif (strlen($lname)==0 or strlen($lname) < 4 or (!preg_match("/^[a-zA-Z ]*$/", $lname))) {
		echo "Invalid input: Check if First Name is empty, has less than 4 characters, or has special characters";
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid Email";
	}
	elseif (strlen($message)==0 or strlen($message)<20) {
		echo "Invalid input";
	}
	else{
		mail($emailTo, $emailSubject, $emailMessage);
		echo "Mail sent";
	}
} 
