<?php

if( isset($_POST) ){

	//form validation vars
	$formok = true;
	$errors = array();

	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];

	//form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$message = $_POST['message'];

	//validate form data

	//validate name is not empty
	if(empty($name)){
		$formok = false;
		$errors[] = "You have not entered a name";
	}

	//validate email address is not empty
	if(empty($email)){
		$formok = false;
		$errors[] = "You have not entered an email address";
	//validate email address is valid
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$formok = false;
		$errors[] = "You have not entered a valid email address";
	}

	//validate message is not empty
	if(empty($message)){
		$formok = false;
		$errors[] = "You have not entered a message";
	}
	//validate message is greater than 20 charcters
	elseif(strlen($message) < 20){
		$formok = false;
		$errors[] = "Your message must be greater than 20 characters";
	}

	//send email if all is ok
	if($formok){
        require_once('lib/PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'specscape1@gmail.com';                 // SMTP username
        $mail->Password = '22penn27';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->From = 'mailer@bcantz.com';
        $mail->FromName = 'mailer';
        $mail->addAddress('bryancantz@comcast.net');     // Add a recipient
        $mail->isHTML(true);
        $mail->Subject = 'New Resume Contact!';
        $mail->Body    = "<p>You have recieved a new message your Resume website.</p>
                          <p><strong>Name: </strong> {$name} </p>
                          <p><strong>Email Address: </strong> {$email} </p>
                          <p><strong>Telephone: </strong> {$telephone} </p>
                          <p><strong>Message: </strong> {$message} </p>
                          <p>This message was sent from the IP Address: {$ipaddress}</p>";

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }

	}

	//what we need to return back to our form
	$returndata = array(
		'posted_form_data' => array(
			'name' => $name,
			'email' => $email,
			'telephone' => $telephone,
			'message' => $message
		),
		'form_ok' => $formok,
		'errors' => $errors
	);


	//if this is not an ajax request
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
		//set session variables
		session_start();
		$_SESSION['cf_returndata'] = $returndata;

		//redirect back to form
		header('location: ' . $_SERVER['HTTP_REFERER']);
	}
}
?>
