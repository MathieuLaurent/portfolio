<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/OAuth.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/POP3.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
session_start();
  if(!empty($_POST["captcha"])&&$_SESSION["code"]==$_POST["captcha"])
  {
    // Configuration du serveur
    $mail->isSMTP();
    
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
    //if your network does not support SMTP over IPv6,
    //though this may cause issues with TLS
    
    //Set the SMTP port number:
    // - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
    // - 587 for SMTP+STARTTLS
    $mail->Port = 465;
    
    //Set the encryption mechanism to use:
    // - SMTPS (implicit TLS on port 465) or
    // - STARTTLS (explicit TLS on port 587)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'mathieu.laurent1995@gmail.com';
    
    //Password to use for SMTP authentication
    $mail->Password = 'rcrwhkbwugtiskew';
    
    //Set who the message is to be sent from
    //Note that with gmail you can only use your account address (same as `Username`)
    //or predefined aliases that you have configured within your account.
    //Do not use user-submitted addresses in here
    $mail->setFrom($_POST['email'], $_POST['nom'].' '.$_POST['prenom']);
    
    //Set who the message is to be sent to
    $mail->addAddress('mathieu.laurent1995@gmail.com', 'Mathieu Laurent');
    
    //Set the subject line
    $mail->Subject = $_POST['objet'];
    
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($_POST['description']);
    
    //Replace the plain text body with one created manually
    $mail->AltBody = $_POST['description'];
    
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        ?><script>
        alert('Votre email a bien été envoyé');
        window.location.replace('index.php'); 
        </script><?php
    }
}
else{
    ?>
    <script>
        alert('Code captcha incorrect!');
        window.location.replace('index.php');
    </script>
    <?php
}
?>