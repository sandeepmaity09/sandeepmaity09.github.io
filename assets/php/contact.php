<?php
if(isset($_POST['message'])){

	$name = $_POST['c_name'];
	$email = $_POST['c_email'];
	$message = $_POST['c_message'];
    
	
	$to      = 'sandeepmaity09@gmail.com';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';	
		//Edit your message here
		$res['c_message'] = 'Form Submission Successful';
		print("Complete");
    }
	else{
		$res['c_message'] = 'Failed to send mail. Please mail me to sandeepmaity09@gmail.com';
		print("Not Complete");
	}
	echo json_encode($res);
}

?>
