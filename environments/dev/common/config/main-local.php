<?php
return [
    'components' => [
        'db'     => [
            'class'    => 'yii\db\Connection',
            'dsn'      => 'mysql:host=123.56.191.231;dbname=ppadmin',
            'username' => 'rwsk',
            'password' => 'Rwsk`123',
            'charset'  => 'utf8',
        ],
        'mailer' => [
            'class'            => 'yii\swiftmailer\Mailer',
            'viewPath'         => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
