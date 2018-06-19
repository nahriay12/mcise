<?php
	if(isset($_POST['send'])):
		$name     = $_POST['nom'];
		$email    = $_POST['email'];
		$subject  = $_POST['subject'];
		$comments = $_POST['message'];
		header("location index.php");
		if(trim($name) == '') {
				echo '<div class="error_message">You must enter your name.</div>';
				exit();
			}

			else if(trim($email) == '') {
				echo '<div class="error_message">Please enter a valid email address.</div>';
				exit();
			} else if(!isEmail($email)) {
				echo '<div class="error_message">Invalid e-mail address, please try again.</div>';
				exit();
			}

			if(trim($subject) == '') {
				echo '<div class="error_message">Please enter a subject.</div>';
				exit();
			}
			
			$address = "dev.nahrimehdi@gmail.com";

			 $e_subject = '' . $subject . '.';

			 $e_body = "<b>Name:</b> $name \n\n<b>Subject:</b> $subject \n\n<b>Email:</b> $email \n\n<b>Message:</b> $comments";
			 $e_content = "";
			 $e_reply = "";

			 $msg = $e_body . $e_content . $e_reply;
			
		if(mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n")) {

			 echo "<div id='success_page'>";
			 echo "<h1>Email Sent Successfully.</h1>";
			 echo "<p>Thank you <strong>$name</strong>, your message has been sent!</p>";
			 echo "</div>";

			 } else {

			 echo 'ERROR!';}
	endif
?>