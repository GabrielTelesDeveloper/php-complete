<?php

/* Carregar arquivos automaticamente */
require_once ('./vendor/autoload.php');

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP -> Prepara o PHPmailer para enviar um Email
$mail->isSMTP();

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    )
);

//Enable SMTP debugging
// 0 = off (for production use) >PRODUÇÃO
// 1 = client messages >TESTES
// 2 = client and server messages >DEV
$mail->SMTPDebug = 1;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "meusestudosjava@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "bielteles11";

//Set who the message is to be sent from | DEFINE QUEM É O REMETENTE
$mail->setFrom('meusestudosjava@gmail.com', 'Empresa Teles');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('gabrielteles.tms@gmail.com', 'Gabriel Teles');

//Set the subject line
$mail->Subject = 'Testando a classe PHPMailer com Gmail';

//Conteúdo que será enviado para o Email
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//Corpo alternativo
$mail->AltBody = 'Texto alternativo';

//Adicionar imagens
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
//Section 2: IMAP
//Uncomment these to save your message in the 'Sent Mail' folder.
#if (save_mail($mail)) {
#    echo "Message saved!";
#}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail) {
//You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

//Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
?>

