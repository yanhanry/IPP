<?php

/**
 * Created by PhpStorm.
 * User: W7_64
 * Date: 14-7-6
 * Time: 下午10:05
 */


class send extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.126.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'yanbianlaoshi@126.com';                 // SMTP username
        $mail->Password = 'yanbianlaoshi';                           // SMTP password

        $mail->From = 'yanbianlaoshi@126.com';
        $mail->FromName = 'fight';
        $mail->addAddress('pvguo@sjtu.edu.cn', 'Joe User');     // Add a recipient
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
} 