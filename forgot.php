<?php
session_start();
$servername = "localhost";
$username = "username";
$password = "password";
$database = "auth_system";

$conn = new mysqli("localhost", "root", "", "auth_system");
// Check connection
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail($email, $reset_token) {
    require('PHPMailer/PHPMailer.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/Exception.php');

    $mail = new PHPMailer(true);

    
try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'senumesh527@gmail.com';                     //SMTP username
    $mail->Password   = 'Ecom@123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('senumesh527@gmail.com', 'Gyaan.com');
    $mail->addAddress($emai);     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset Request from Gyaan.com';
    $mail->Body    = "we got a request from you to reset your password! <b>clic the link below:</b>
                    <a href='http://localhost/auth/reset.php?email=$email&token=$reset_token '>Reset Password</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    return true;
} catch (Exception $e) {
    return false;}

}
  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the form is submitted
if (isset($_POST['send-reset-link'])) {
    $qury = "SELECT * FROM `users` WHERE `email` = '$_POST[email]'";
    $result = mysqli_query($conn, $qury);
    if($result)
    {
     if (mysqli_num_rows($result) > 0) {
        $reset_token = bin2hex(random_bytes(16)); // Generate a random token
        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d');
        $update_query = "UPDATE `users` SET `reset_token` ='$reset_token', `resettokenexpire` = '$date' WHERE `email` = '$_POST[email]'";
        if (mysqli_query($conn, $update_query) && sendmail($_POST['email'], $reset_token)) {
           echo "
        <script>
        alert('password reqest link sent successfully');   
        window.location.href = 'forgot.php';
        </script>
        ";
    }
    else{
       echo "
        <script>
        alert('Server down try again later');   
        window.location.href = 'forgot.php';
        </script>
        ";
    }
}
    else {
        echo "
        <script>
        alert('Email not found');   
        window.location.href = 'forgot.php';
        </script>
        ";
    }
}
    else
    {   echo "
        <script>
        alert('cannot run query');   
        window.location.href = 'forgot.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
        <script src="https://cdn.tailwindcss.com"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#7c3aed',
                        accent: '#a5b4fc',
                        bgDark: '#1e1b4b',
                        bgLight: '#f8fafc',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bgDark min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-8">
    <div class="w-full max-w-xs sm:max-w-md lg:max-w-lg bg-white/10 backdrop-blur-md rounded-2xl shadow-xl border border-white/10 p-6 sm:p-8 lg:p-10">
        <form action="forgot.php" method = "post" class="space-y-6 animate-fade-in">
                   <h1 class="text-2xl text-white font-bold text-center mt-1">Forgot Password</h1>
        <input type="email" name="email" placeholder="Enter your email" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
           <button type="submit" name = "send-reset-link" class="w-full bg-blue-300 text-black font-semibold py-2 sm:py-3 rounded-lg hover:bg-secondary transition-all duration-300 flex items-center justify-center space-x-2">
                    <span>Send link</span>
                    <i class="fas fa-sign-in-alt"></i>
                </button>
        </form>
    </div>
</body>
</html>