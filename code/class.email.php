<?php

include "class.phpmailer.php";
include "class.smtp.php";

class Email {
    public function __construct()
    {
        $this->email="email";
        $this->password = "password";
    }

    public function sendEmail($recipient, $title, $subject, $message){
        try{
            $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host="smtp.gmail.com";
        $mail->Port="587";

        $mail->Username = $this->email;
        $mail->Password = $this->password;

        $mail->From = $this->email;
        $mail->FromName = "EXCALI-BARS";
        $mail->Subject = $subject;
        $mail->WordWrap=50;

        $mail->IsHTML(true);
        $mail->MsgHTML($message);
        $mail->AddAddress("$recipient", $title);
        $mail->CharSet = "UTF-8";

        $mail->Send();
        echo 'email was sent.';
        } 
        catch (phpmailerException $e) {
          echo $e->errorMessage();  //PHPMailer error messages
        } 
        catch (Exception $e) {
            echo $e->getMessage();  // other error messages
        }
    }
}
?>