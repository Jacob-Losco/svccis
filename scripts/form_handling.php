<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'path/to/PHPMailer/src/Exception.php';
    require 'path/to/PHPMailer/src/PHPMailer.php';
    require 'path/to/PHPMailer/src/SMTP.php';

    require 'vendor/autoload.php';

    if (isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    } else {
        die("ERROR: Form was not processed (Please try again).");
    }

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->User = 'USERNAME'; // need to enter username
        $mail->Password = 'PASSWORD'; // need to enter password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('svccis@gmail.com', 'Saint Vincent Computer Science Club');
        $mail->addAddress('svccis@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = "SVCCIS - New Form Submitted";
        $mail->Body = "Message from: ".$name." (Email: ".$mail.")\n".$message;
    
        header('Location: http://svccis.hosting.acm.org/contact?status=true');
    } catch (Exception $error) {
        echo "Error: {$mail->Error_Info}";
    }
?>