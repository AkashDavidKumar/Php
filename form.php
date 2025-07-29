<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $msg  = "Name: " . $name . "\n";
    $msg .= "E-mail: " . $email . "\n";
    $msg .= "Message: " . $message . "\n";

    $recipient = "you@yourdomain.com";
    $subject = "Form Submitted Result";
    $mailheader = "From: My Website <default@example.com>\r\n";

    @mail($recipient, $subject, $msg, $mailheader);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <style>
              *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-image: url("images/background.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;  
            padding: 20px;
        }
        .container{
            background-color: transparent;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 350px;
            backdrop-filter: blur(5px);
            color: #fff;
            border:2px solid #fff;
        }
        p{
            margin: 10PX;
        }
    </style>
    <link rel="stylesheet" href="success.css">
</head>
<body>
    <div class="form-container success">
    <div class="tick-mark">
        <div class="circle">
            <div class="check"></div>
        </div>
    </div>
    <div class="container">
        <h1>Thank You!</h1>
        <p><strong><?php echo htmlspecialchars($_POST['name'] ?? ''); ?></strong>, your form was submitted.</p>
        <p>Your email address is <strong><?php echo htmlspecialchars($_POST['email'] ?? ''); ?></strong></p>
        <p>Your message is:</p>
        <p><strong><?php echo nl2br(htmlspecialchars($_POST['message'] ?? '')); ?></strong></p>
        <p>We will get back to you soon.</p>
    </div>
</body>
</html>
