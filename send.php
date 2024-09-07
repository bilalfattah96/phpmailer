<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'abdulwahabb11023@gmail.com'; // Your email address
    $mail->Password = 'pihdhytirozvmers'; // Your gmail app password
    $mail->SMTPSecure = 'ssl'; // Encryption (ssl or tls)
    $mail->Port = 465; // for ssl
    // $mail->Port = 587; // for tls

    //Recipients
    $mail->setFrom('abdulwahabb11023@gmail.com', 'Abc Company');
    $mail->addAddress($_POST["email"]);
    
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $_POST["subject"];
    // $mail->Body = $_POST["message"];
    $mail->Body =  '<img src="https://marketplace.canva.com/EAFG7-le7Uk/1/0/1131w/canva-green-%26-yellow-modern-colorful-company-newsletter-pSR6NjZ_FI0.jpg"/>';

    $mail->send();
    echo '
    <script>
    alert("Email Sent Successfully");
    document.location.href = "index.php"
    </script>
    ';


}

?>