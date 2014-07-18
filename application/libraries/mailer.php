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
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.163.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'zhabianteng@163.com'; // SMTP username
        $mail->Password = '29561777y'; // SMTP password

        $mail->From = 'zhabianteng@163.com';
        $mail->FromName = '羽梯';
        $mail->addAddress($opt['dst'], $opt['name']); // Add a recipient

        $mail->WordWrap = 50; // Set word wrap to 50 characters
        $mail->isHTML(true); // Set email format to HTML

        $mail->Subject = '有人要跟你打羽毛球';
        $mail->Body = $opt['content'];
        $mail->AltBody = $opt['content'];

        return $mail->send();

    }
} 