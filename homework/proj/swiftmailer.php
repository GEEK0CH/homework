<?php
require_once 'vendor/autoload.php';

try {
    $transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
        ->setUsername('natanbayrakov228@mail.ru')
        ->setPassword('exd3MNVMZ7mic3rn2g31')
    ;

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Test'))
        ->setFrom(['natanbayrakov228@mail.ru' => 'Natan'])
        ->setTo(['natanbayrakov02@mail.ru'])
        ->setBody('Hello this message send you from smtp')
        ->attach(Swift_Attachment::fromPath('img.png'))
    ;

    $result = $mailer->send($message);
} catch (Exception $e) {
    var_dump($e->getMessage());
    echo '<pre>' . print_r($e->getTrace(), 1);
}
