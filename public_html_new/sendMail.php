<?php

require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer();

$mail ->isSMTP();
$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;
$mail->Username='info@xervmon.com';

$mail->Password = '4support51';
$mail->SMTPSecure='tls';

$mail->From = 'info@xervmon.com';
$mail->FromName= 'Xervmon Team';

$mail->addAddress('support@xervmon.com', 'Xervmon Support Team');

$mail->addReplyTo( 'info@xervmon.com', 'Xervmon Team');
$mail->isHTML(true);  
$post = $_POST;
//$post ['name'] = 'sudhi';
//$post['company'] = 'XErvmon';
//$post['email'] = 'sud@dd.com';
$mail->Subject = 'Xervmon Signup :'. $post['name'].' from  '.$post['company'];

$mail->Body = 'Details : Name: '.$post['name'].'<br/> Email: '.$post['email']
    .'<br/>Company: '. $post['company'];

//file_put_contents('signup.txt', $mail->Body.'<br/>', FILE_APPEND | LOCK_EX);
writeToFile($_POST);
if(!$mail->send()) {
       //echo 'Message could not be sent.';
      //    echo 'Mailer Error: ' . $mail->ErrorInfo;
    //    exit;
    echo json_encode(array('status' => 'error', 'message' => $mail->ErrorInfo));          
       exit;
}

//echo 'Message has been sent';a
echo json_encode(array('status' => 'OK', 'message' => 'Message has been sent'));


function writeToFile($post)
{
        $myFile = "data98767777xsdd12.txt";

        // opens the file for appending (file must already exist)
         $fh = fopen($myFile, 'a');
         $comma_delmited_list = implode(",", $post) . "\n";
         fwrite($fh, $comma_delmited_list);
         fclose($fh);
}
