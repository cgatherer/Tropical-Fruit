<?php

/* ================================================================
                            cURL to Gene
=================================================================== */

$post_url = "http://archives.ititropicals.com/contact_post.php";

$post_values = array(
      "x_version"			=> "3.1",
      "x_delim_data"		=> "TRUE",
      "x_delim_char"		=> "|",
      "x_relay_response"	=> "FALSE",
      "name"				=> stripslashes($_POST["name"]),
      "comptitle"			=> stripslashes($_POST["comptitle"]),
      "compname"			=> stripslashes($_POST["compname"]),
      "website"			=> stripslashes($_POST["website"]),
      "address1"			=> stripslashes($_POST["address1"]),
      "address2"			=> stripslashes($_POST["address2"]),
      "city"				=> stripslashes($_POST["city"]),
      "state"				=> stripslashes($_POST["state"]),
      "zip"				=> stripslashes($_POST["zip"]),
      "state"				=> stripslashes($_POST["state"]),
      "locale"			=> stripslashes($_POST["locale"]),
      "telephon"			=> stripslashes($_POST["telephon"]),
      "email"				=> stripslashes($_POST["email"]),
      //"heardfrom"			=> stripslashes($_POST["heardfrom"]),
      //"other"				=> stripslashes($_POST["headfrom_other"]),
      "signup"			=> stripslashes($_POST["signup"]),
      "relationship"			=> stripslashes($_POST["relationship"])
     );

$post_string = "";
foreach( $post_values as $key => $value ) {
      $post_string .= "$key=" . urlencode( $value ) . "&";
}
$post_string = rtrim( $post_string, "& " );

$request = curl_init($post_url);
curl_setopt($request, CURLOPT_REFERER, "http://www.ititropicals.com");
curl_setopt($request, CURLOPT_HEADER, 0);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($request, CURLOPT_POSTFIELDS, $post_string);
curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);
$post_response = curl_exec($request);
curl_close($request);
$response_array = explode($post_values["x_delim_char"],$post_response);

/* ================================================================
                            Emailing
=================================================================== */

// User Email

$to      = stripslashes($_POST["email"]) . ', ';
// $to     .= 'chengj1@apps.tcnj.edu';

$subject = stripslashes($_POST["form_name"]) . ' Forms Submission';


$message = 'Thanks for writing in! Your email has been received and someone from iTi Tropicals will be on top of it as soon as possible!'."\n\n".' -- '."\n".'This e-mail was sent from a contact form on iTi Tropicals (http://www.ititropicals.com)';


$headers = 'From: noreply@ititropicals.com' . "\r\n" .
           'Reply-To: noreply@ititropicals.com' . "\r\n";

mail($to, $subject, $message, $headers);


// Gert's Email

$to2      = 'sales9876@ititropicals.com' . ', ';
// $to2     .= 'jgalazzo@princetonpartners.com';

$subject2 = stripslashes($_POST["form_name"]) . ' Forms Submission from '. stripslashes($_POST["name"]) . "\n\n";

//$message2 .= 'From: ' . stripslashes($_POST["name"]) . ' - ' . $_POST["email"] . "\n";
$message2 = 'From: noreply@ititropicals.com' . "\n";
$message2 .= 'Subject: ' . stripslashes($_POST["name"]) . ' - ' . $_POST["email"] . "\n\n";

$message2 .= 'Information: ' . stripslashes($_POST["name"]) . ' - ' . $_POST["email"] . "\n\n";

$message2 .= 'Name: ' . stripslashes($_POST["name"]) . "\n";
$message2 .= 'Job Title: ' . stripslashes($_POST["comptitle"]) . "\n";
$message2 .= 'Company:  ' . stripslashes($_POST["compname"]) . "\n";
$message2 .= 'Website:  ' . $_POST["website"] . "\n";
$message2 .= 'Address:  ' . stripslashes($_POST["address1"]) . "\n";
$message2 .= "\t" . stripslashes($_POST["address2"]) . "\n\n";

$message2 .= 'City:   ' . stripslashes($_POST["city"]) . "\n";
$message2 .= 'State:  ' . stripslashes($_POST["state"]) . "\n";
$message2 .= 'Zip:  ' . stripslashes($_POST["zip"]) . "\n";
$message2 .= 'Locale: ' . stripslashes($_POST["locale"]) . "\n";
$message2 .= 'Phone: ' . stripslashes($_POST["telephon"]) . "\n";
$message2 .= 'Email: ' . $_POST["email"] . "\n\n";

$message2 .= 'Interest: ' . stripslashes($_POST["interest"]) . "\n";
$message2 .= 'Comments: ' . stripslashes($_POST["comments"]) . "\n\n";

$message2 .= 'News Flash: ' . stripslashes($_POST["signup"]) . "\n";
$message2 .= 'Relationship w/iTi: ' . stripslashes($_POST["relationship"]) . "\n";
$message2 .= 'Other? Specify: ' . stripslashes($_POST["relationship_other"]) . "\n\n";

$message2 .= 'How did you hear of us: ' . stripslashes($_POST["heardfrom"]) . "\n";
$message2 .= 'Internet Search? Specify: ' . stripslashes($_POST["headfrom_internet"]) . "\n";
$message2 .= 'Other? Specify: ' . stripslashes($_POST["headfrom_other"]) . "\n\n";

$message2 .= '--' . "\n";
$message2 .= 'This e-mail was sent from a contact form on iTi Tropicals (http://www.ititropicals.com)';

//$headers2 = 'From: ' . stripslashes($_POST["name"]) . ' - ' . $_POST["email"] . "\r\n" .
$headers2 = 'From: noreply@ititropicals.com' . "\r\n" .
            'Reply-To: ' . $_POST["email"] . "\r\n";
            

mail($to2, $subject2, $message2, $headers2);

?>
