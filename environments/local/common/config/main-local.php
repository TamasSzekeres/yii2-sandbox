<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=sandbox',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
//        'sqlite' => [
//            'class' => 'yii\db\Connection',
//            'dsn' => 'sqlite:@common/sqlite/db.sqlite',
//            'username' => 'root',
//            'password' => '',
//            'charset' => 'utf8',
//        ],
//        'db' => [
//            'class' => common\db\MultiConnection::class,
//            'dbs' => [
//                'mysql',
//                'sqlite',
//            ],
//        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
