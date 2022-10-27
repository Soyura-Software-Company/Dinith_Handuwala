<?php



require_once ('../dbconnect.php');
if(isset($_POST['submit'])){
	$this->db = new dbconnect();

	$full_name = $_POST['full_name'];
	$email_address = $_POST['email_address'];


	
	$verification_code = sha1($email_address.time());
	$verification_URL = 'http://localhost/email_verification/verify.php?code=' . $verification_code;


	// mail sending code

	$to	 		  = $email_address; // receiver
	$sender		  = 'vimukthilakshan82@gmail.com'; // email address of the sender
	$mail_subject = 'Verify Email Address';
	$email_body   = '<p>Dear' . $full_name . '</p><br>';
	$email_body   = '<p>thank you for signup. </p><br>';
	$email_body   = '<p>	$verification_URL</p><br>';
	$email_body   = '<p>Thank You,</p>' ;

	$header       = "From: {$sender}\r\nContent-Type: text/html;";

	$send_mail_result = mail($to, $mail_subject, $email_body, $header);

	if ( $send_mail_result ) {
		// mail sent successfully

		echo 'please check your email<br>';
		
		echo '<a href=".$verification_URL.">Click here to sign up</a>';
		
	} else {
		// mail could not be sent 
		echo 'Error';
	}

}
 

?>