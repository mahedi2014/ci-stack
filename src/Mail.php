<?php


class Mail
{
    public function email_smtp($to_email, $subject, $body)
    {
        $to = $to_email;
        $from = 'paytechbd@gmail.com';
        $from_name = 'test';

        global $error;
        $mail = new PHPMailer();

        $mail->SMTPDebug  = 0; //1,2,3 is for details debugging

        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = 'email@gmail.com';
        $mail->Password = 'email';

        $mail->SetFrom($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);

        if(!$mail->Send()) {
            //echo $error = 'Mail error: '.$mail->ErrorInfo;
            return false;
        } else {
           // echo $error = 'Message sent!';
            return true;
        }
    }
}