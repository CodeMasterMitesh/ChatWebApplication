<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    // print_r(__DIR__);
    $currentDirectory = dirname(__FILE__);
    if (file_exists($currentDirectory.'/../vendor/autoload.php')) {
        require_once $currentDirectory.'/../vendor/autoload.php';
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();
    }
    // $host = $_ENV['DB_HOST'];
    // $username = $_ENV['DB_USERNAME'];
    // $password = $_ENV['DB_PASSWORD'];
    // $db = $_ENV['DB_DATABASE'];

    $conn = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD'],$_ENV['DB_DATABASE']) or die("login failed");
    if(!$conn){
        echo "Database Connection Failed";
    }

    // if($conn)
    // {
    //     echo "Connect Sucessfully";
    // }

    function debug($std){
        echo "<pre>";
        print_r($std);
        echo "</pre>";
    }
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    function sentInvitation($sessionUser,$friend_mail, $username, $refno)
    {
        // require 'path/to/PHPMailer/src/Exception.php';
        // require 'path/to/PHPMailer/src/PHPMailer.php';
        // require 'path/to/PHPMailer/src/SMTP.php';
    
        $mail = new PHPMailer(true); // Enable exceptions
    
        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com'; // Your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'info@codemastermitesh.com'; // Your SMTP username
            $mail->Password = 'Gk[Z]-T-9Nxxc;B'; // Your SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use 'ssl'
            $mail->Port = 465;
    
            // Sender and recipient settings
            $mail->setFrom('info@codemastermitesh.com', 'Invitation From CodeMaster Mitesh');
            $mail->addAddress($friend_mail); // Friend's email address
    
            // Email content
            $mail->isHTML(true);
            $mail->Subject = "You're Invited!";
            $mail->Body = "
                <p>Hello,</p>
                <p>$username has invited you to join our platform. Use the link below to register:</p>
                <p><strong>Reference Number:</strong> $refno</p>
                <p><a href='http://localhost:3000/invitedFriend.php?friend_id=" . $sessionUser . "'>Click here to register</a></p>
                <p>Thanks,<br>CodeMaster Mitesh Team</p>
            ";
            // Send email
            $mail->send();
            echo '<p>Invitation sent successfully!</p>';
        } catch (Exception $e) {
            echo '<p>Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '</p>';
        }
    }

?>