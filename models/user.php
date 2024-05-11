<?php
    require('../../phpMailer/includes/Exception.php');
    require('../../phpMailer/includes/PHPMailer.php');
    require('../../phpMailer/includes/SMTP.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    class user{
        public $userID;
        public $name;
        public $password;
        public $mobile;
        public $email;
        public $address;
        public $type;
        // 0-> admin, 1->seller, 2->user_error
        function send($email, $subject, $name, $msgg){
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = "true";
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = "momshrf111@gmail.com";
            $mail->Password = "01145151942";
            $mail->Subject = "$subject";
            $mail->setFrom("$email");
            $mail->Body = "name: $name 
            massege: $msgg
            ";
            $mail->addAddress("$email");
            $mail->send();

            $mail->smtpClose();
        }

    }






?>