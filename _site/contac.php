<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Formulari de contacte</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];
$mail_to = 'contacte@edutictac.es';

$subject = 'Message from a site visitor ' . $field_name;
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

mail($mail_to, $subject, $body_message, $headers);

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Moltes gràcies. Li contestarem el més aviat possible.');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'index.html';
    </script>
<?php
}



else { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('El missatege a fallat. Per favor envia un correu a contacte@edutictac.es');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'index.html';
    </script>
<?php
}?>
</body>
</html>
