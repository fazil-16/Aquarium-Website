<?php

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['formName']) && isset($_POST['formEmail']) && isset($_POST['formMessage']) ) {
	
        $name = $_POST['formName'];
		$mail = $_POST['formEmail'];
		$subj = $_POST['formSubject'];
		$mess = $_POST['formMessage'];
		
		$to = 'enquires@fistastic.com';
		$subject = ($subj) ? $subj : 'Your Order Placed Successfully';
		$message = $mess . "\r\n" . $name;
		$headers = 'From: <' . $mail . '>' . "\r\n";
		
        $result = mail( $to, $subject, $message, $headers );
		echo $result;
	}

	return false;

?>
