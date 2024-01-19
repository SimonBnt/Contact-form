<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // require ("contactForm_process.php");
    require ("config.php");
    require ("vendor/autoload.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // $to = "simon.be47@gmail.com";
    
    // $mail = new PHPMailer(true);

    // try {
    //     $mail->isSMTP();                                            
    //     $mail->Host = "smtp.gmail.com";                     
    //     $mail->SMTPAuth = true;                                   
    //     // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
        
    //     $mail->Username = "adresse.test.mail.signature@gmail.com";                     
    //     $mail->Password = "Sucsds123456testmail";                               

    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
    //     $mail->Port = 587;           
        
    //     $mail->setFrom($email);
    //     $mail->addAddress($to);
        
    //     $mail->isHTML(true);                                  
    //     $mail->Subject = $subject;
    //     $mail->Body = "<p>Name : {$name}</p><p>Email : {$email}</p><p>Message : {$message}</p>";
    //     $mail->AltBody = $message;

    //     $mail->send();

    //     echo "email send";

    //     $successMessage = "<p> style='color: green;'>Succes</p>";
    //     echo $successMessage;
    // } catch (Exception $error) {
    //     $errorMessage = "<p style='color: red;'>Error</p>";
    //     echo $errorMessage;
    // }

    function sendMail($name, $email, $message) {
        $mail = new PHPMailer(true);

        $subject = "New contact form submission";

        $mail->isSMTP();                                            
        $mail->SMTPAuth = true;                                   
        $mail->Host = mailHost;    

        $mail->Username = userName;                     
        $mail->Password = password;      
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
        $mail->Port = 587;   

        $mail->setFrom($email, sendFromName);
        $mail->addAddress($email);
        $mail->addReplyTo(replyTo, replyToName);

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body = "<p>Name : {$name}</p><p>Email : {$email}</p><p>Message : {$message}</p>";
        $mail->AltBody = $message;

        if(!$mail->send()) {
            return "Email not send, Please try again.";
        } else {
            return "Email succesfully send !";
        }
    }
?>
