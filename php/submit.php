<?php

// specify your email here

//$to = 'ventas@santarosa.mx';
$to = 'victorcito001@hotmail.com';

// Assigning data from $_POST array to variables
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$from = $_POST['email'];}
// if (isset($_POST['subject'])) {$subject = $_POST['subject'];}
if (isset($_POST['phone'])) {$company = $_POST['phone'];}
if (isset($_POST['location'])) {$message = $_POST['location'];}
// if (isset($_POST['hade'])) {$hade = trim(stripcslashes($_POST['hade']));}

// if($hade == ''){
// Construct email body
$body_message = 'Nombre de Cliente: ' . $name . "\r\n" . 'Email: ' . $from . "\r\n" . 'Telefono: ' . $company . "\r\n" . 'Message: ' . $message . "\r\n";

// Construct headers of the message
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain charset=UTF-8' . "\r\n";
$headers .= 'From: ' . $from . "\r\n";
// $headers .= 'Message-ID: <' . $ordernummer . ">\r\n";
$headers .= 'Content-Transfer-Encoding: quoted-printable';
// $headers .= 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";


$subject = "Envio de cotizacion por pagina web";

$mail_sent = mail($to, $subject, $body_message, $headers);

if ($mail_sent == true) {
    http_response_code(200);
    echo "<script type='text/javascript'> alert('Enviado!');window.location.replace('https://santarosa.mx/newWeb/contact.html');</script>";
    //echo "Thank You! Your message has been sent.";
    //header('Location: ../contact.html');
} else {
    http_response_code(500);
    echo "<script>alert('Oops! Algo ha salido mal.');window.location.replace('https://santarosa.mx/newWeb/contact.html');</script>";
    //header('Location: ../index.html');
}
// }
// else{
// echo "Oops! Something went wrong and we couldn't send your Spam.";
// }
?>
