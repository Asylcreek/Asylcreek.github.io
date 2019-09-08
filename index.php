<?php

if(isset($_POST['Submit'])){
	$emailTo = "omokugbobr@gmail.com";
	$emailSubject = "Data from CV Contact Form";

	$fname = $_POST['FirstName'];
	$lname = $_POST['LastName'];
	$email = $_POST['EmailAddress'];
	$title = $_POST['TitleofMessage'];
	$message = $_POST['Message'];
	
	$emailMessage = "Contact Form details below:. \n\n";
	$emailMessage .= "First Name:  ".$fname."\n";
	$emailMessage .= "Last Name:   ".$lname."\n";
	$emailMessage .= "Email Address:   ".$email."\n";
	$emailMessage .= "Title of Message:   ".$title."\n";
	$emailMessage .= "Message:     ".$message."\n";

	mail($emailTo, $emailSubject, $emailMessage);
	echo "Mail sent";
}

?>