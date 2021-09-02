<?php 

if (isset($_POST['submit']) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "c.gonzalez23799@gmail.com"
$headers = "From:   ".$mailFrom;
$txt = "Has recibido un e-mail de ".$name. ".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: contact.php?mailsend");
}


?>