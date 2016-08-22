<?php

// EMAIL RECIPIENT
$to = 'harbourbeachvillas@gmail.com';
$bcc = 'toninicholson@remax.net, walrusk+thomasbooking@gmail.com';

$jsonresult = array(
  'email' => NULL
);

// POST_DATA
$contact_info = array(
	'name' => $_POST['c_name'],
	'email' => $_POST['c_email'],	
	'phone' => $_POST['c_phone'],
	'rooms' => $_POST['c_bedrooms'],
	'guests' => $_POST['c_guests'],
	'date_start' => $_POST['c_date_start'],
	'date_end' => $_POST['c_date_end'],
	'comments' => $_POST['c_comments']
);

$contact_info_keys = array_keys($contact_info);
$contact_info = (object)$contact_info;

// SEND EMAIL WITH FIELD INFO
$subject = 'Booking Request For 622';

$headers = 'From: ' . $contact_info->name.' <'.$contact_info->email.'>' . "\r\n";
$headers .= "Reply-To: ". $contact_info->email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= 'Bcc: ' . $bcc . "\r\n";

$message = file_get_contents('booking_email.html');

/* REPLACE FIELDS */
foreach($contact_info_keys as $field) {
    $message = str_replace('{{'.$field.'}}', $contact_info->$field, $message);
}

$jsonresult['email'] = mail($to, $subject, $message, $headers);

echo json_encode($jsonresult);
