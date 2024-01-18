<?php
    require_once "../../vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_SESSION["name"])) {
        $name = $_SESSION["name"];
        echo '<pre>';
        echo "name = " . $name . " ";
        echo '</pre>';
    } else {
        exit;
    }

    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        echo '<pre>';
        echo "email = " . $email . " ";
        echo '</pre>';
    } else {
        exit;
    }

    if (isset($_SESSION["message"])) {
        $message = $_SESSION["message"];
        echo '<pre>';
        echo "message = " . $message . " ";
        echo '</pre>';
    } else {
        exit;
    }

    $to = "adresse.test.mail.signature@gmail.com";
    $subject = "New contact form submission";
    
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();                                            
        // $mail->isHTML(true);                                  
        $mail->SMTPAuth = true;                                   
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      

        $mail->Host = "smtp.example.com";                     
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
        $mail->Port = 587;           

        $mail->Username = "example@example.com";                     
        $mail->Password = "";                               

        $mail->setFrom($email);
        $mail->addAddress($to);

        $mail->Subject = $subject;
        $mail->Body = "<p>Name : {$name}</p><p>Email : {$email}</p><p>Message : {$message}</p>";

        $mail->send();

        echo "email send";

        $successMessage = "<p> style='color: green;'>Succes</p>";
        echo $successMessage;
    } catch (Exception $error) {
        $errorMessage = "<p style='color: red;'>Error</p>";
        echo $errorMessage;
    }
?>
