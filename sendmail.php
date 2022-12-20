<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'PHPMailer-master/language/');
    $mail->isHTML(true);

    $mail->setFrom('info@fls.guru', 'Truchel');
    $mail->addAddress('kingofguns066@gmail.com');
    $mail->Subject = 'Привет';

    $body = '<h1>Message</h1>';

    if (trim(!empty($_POST['name']))) {
        $body.='<p><strong>Имя</strong> '.$_POST['name'].'</p>';
    }
    if (trim(!empty($_POST['tel']))) {
        $body.='<p><strong>Имя</strong> '.$_POST['tel'].'</p>';
    }

    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }

    $response = ['message' => $message];

?>