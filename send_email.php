
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["full_name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "contato@netnimbux.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    mail($to, $subject, $message, $headers);
    echo "Message sent successfully!";
} else {
    echo "Method not allowed!";
}
?>
