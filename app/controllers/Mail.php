<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.04.2018
 * Time: 20:36
 */

class Mail
{

    public function sendMail()
    {

        require_once(ROOT . '/libs/mailer/PHPMailerAutoload.php');
        $mail = new PHPMailer;
        $mail->CharSet = 'utf-8';
        $name = htmlspecialchars(strip_tags($_POST['name']));
        $phone = htmlspecialchars(strip_tags($_POST['phone']));
        $email = htmlspecialchars(strip_tags($_POST['mail']));
        $discription = htmlspecialchars(strip_tags($_POST['discription']));

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mail.ru';                                                                                            // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'avidnik89@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
        $mail->Password = 'xf3z54dlc'; // Ваш пароль от почты с которой будут отправляться письма
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

        $mail->setFrom('avidnik89@mail.ru'); // от кого будет уходить письмо?
        $mail->addAddress('avidnik89@mail.ru');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Сообщение с сайта';
        $mail->Body = '' . $name . ' оставил заявку, его телефон ' . $phone . '<br>Почта этого пользователя: ' . $email . '<br>Сообщение: ' . $discription;
        $mail->AltBody = '';

        if (!$mail->send()) {
            echo 'Error';
        } else {
            echo true;
        }
    }

}