<?php
if ($_POST):

	$to = 'sales9876@ititropicals.com';

	$subject = stripslashes($_POST["form_name"]) . ' Forms Submission from '. stripslashes($_POST["name"]) . "\n\n";

	// $message = 'From: ' . stripslashes($_POST["name"]) . "\n"; 
	$message = 'From: ' . 'noreply@ititropicals.com' . "\r\n"; 
	$message .= 'Subject: ' . stripslashes($_POST["name"]) . ' - ' . $_POST["email"] . "\n\n";
	$message .= 'Name: ' . stripslashes($_POST["name"]) . "\n";
	$message .= 'Job Title: ' . stripslashes($_POST["comptitle"]) . "\n";
	$message .= 'Company:  ' . stripslashes($_POST["compname"]) . "\n";
	$message .= 'Website:  ' . $_POST["website"] . "\n"; 
	$message .= 'Address:  ' . stripslashes($_POST["address1"]) . "\n";
	$message .= "\t" . stripslashes($_POST["address2"]) . "\n\n";
	$message .= 'City:   ' . stripslashes($_POST["city"]) . "\n";
	$message .= 'State:  ' . stripslashes($_POST["state"]) . "\n";
	$message .= 'Zip:  ' . stripslashes($_POST["zip"]) . "\n";
	$message .= 'Phone: ' . stripslashes($_POST["telephon"]) . "\n";
	$message .= 'Email: ' . $_POST["email"] . "\n\n";
	$message .= 'Interested in: ' . stripslashes($_POST["interest"]) . "\n";
	$message .= 'Application: ' . stripslashes($_POST["application"]) . "\n\n";
	$message .= 'How did you hear of us: ' . stripslashes($_POST["heardfrom"]) . "\n";
	$message .= 'Other? Specify: ' . stripslashes($_POST["headfrom_other"]) . "\n\n";
	$message .= '--' . "\n";
	$message .= 'This e-mail was sent from a contact form on iTi Tropicals (http://www.ititropicals.com)';

	$headers = 'From: noreply@ititropicals.com' . "\r\n" .
			   'Reply-To: ' . $_POST["email"] . "\r\n";

	mail($to, $subject, $message, $headers);

	/* ================================================================
                            Thank you Emailing
	=================================================================== */

	// User Email

	$to2      = stripslashes($_POST["email"]) . ', ';
	// $to     .= 'chengj1@apps.tcnj.edu';

	$subject2 = stripslashes($_POST["form_name"]) . ' Forms Submission';


	$message2 = 'Thanks for writing in! Your email has been received and someone from iTi Tropicals will be on top of it as soon as possible!'."\n\n".' -- '."\n".'This e-mail was sent from a contact form on iTi Tropicals (http://www.ititropicals.com)';


	$headers2 = 'From: noreply@ititropicals.com' . "\r\n" .
           'Reply-To: noreply@ititropicals.com' . "\r\n";

	mail($to2, $subject2, $message2, $headers2);

endif;
?>
