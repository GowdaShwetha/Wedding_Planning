<?php
 use PHPMailer\PHPMailer\PHPMailer;

 require_once 'PHPMailer/Exception.php';
 require_once 'PHPMailer/PHPMailer.php';
 require_once 'PHPMailer/SMTP.php';

 $mail = new PHPMailer(true);
 
$alert = '';

 if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

    try{
         $mail->isSMTP();
         $mail->Host = 'smtp.gmail.com';
         $mail->SMTPAuth = true;
         $mail->Username = 'mshwetha410@gmail.com';
         $mail->Password = '@Sgowda2001.';
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
         $mail->Port = '587';

         $mail->setFrom('mshwetha410@gmail.com');
         $mail->addAddress('mshwetha410@gmail.com');

         $mail->isHTML(true);
         $mail->Subject = 'Message Recived (contact page)';
         $mail->Body = "<h3>Name: $name  <br>Email: $email  <br>subject: $subject  <br>message:
         $message   </h3>"; 
         $mail->Send();
         $alert = '<div class="alert-success">
                    <span>Message Sent! Thank you for contacting us.</span>
                  </div>';
        } 
         catch(Exception $e){
            $alert = '<div class="alert-error">
                         <span>'.$e->getMessage().'</span>
                     </div>';

        }
 }
?>