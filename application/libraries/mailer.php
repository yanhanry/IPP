<?php
/**
 * Created by PhpStorm.
 * User: w7_64
 * Date: 14-7-15
 * Time: 下午4:02
 */
require 'class.phpmailer.php';
require 'class.smtp.php';

class mailer
{
    private $ci;

    public function __construct()
    {
        $this->ci = & get_instance();
    }

    public function __get($name)
    {
        if (!isset($this->$name) AND isset($this->ci->$name)) {
            return $this->ci->$name;
        }
        return $this->$name;
    }

    public function send($opt = array(
        'name' => 'ipp用户',
        'dst' => '',
        'content' => ''
    ))
    {
        $mail = new PHPMailer;

        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.126.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'yanbianlaoshi@126.com'; // SMTP username
        $mail->Password = 'yanbianlaoshi'; // SMTP password

        $mail->From = 'yanbianlaoshi@126.com';
        $mail->FromName = 'fight';
        $mail->addAddress($opt['dst'], $opt['name']); // Add a recipient

        $mail->WordWrap = 50; // Set word wrap to 50 characters
        $mail->isHTML(true); // Set email format to HTML

        $mail->Subject = '约架！';
        $mail->Body = $opt['content'];
        $mail->AltBody = $opt['content'];

        return $mail->send();

    }
} 