<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require ("config.php");
    require ("vendor/autoload.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    
    function sendMail($name, $email, $message) {
        $mail = new PHPMailer(true);

        $subject = "New contact form submission";

        // adresse mail du destinataire
        $to = "simon.be47@hotmail.fr";

        $mail->isSMTP();                                            
        $mail->SMTPAuth = true;                                   
        $mail->Host = mailHost;    

        $mail->Username = userName;                     
        $mail->Password = password;      
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
        $mail->Port = 587;   

        $mail->setFrom(setFrom, setFromName);
        $mail->addAddress($to);

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body = "<p>Name : {$name}</p><p>Subject : {$subject}</p><p>Email : {$email}</p><p>Message : {$message}</p>";
        $mail->AltBody = $message;

        if(!$mail->send()) {
            return "error";
        } else {
            return "success";
        }
    }
?>
