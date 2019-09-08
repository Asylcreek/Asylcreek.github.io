<?php

if(isset($_POST['Submit'])){
	$emailTo = "omokugbobr@gmail.com";
	$emailSubject = "Data from CV Contact Form";

	$fname = $_POST['First Name'];
	$lname = $_POST['Last Name'];
	$email = $_POST['Email Address'];
	$title = $_POST['Title of Message'];
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