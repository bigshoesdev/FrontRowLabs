<?php

$params = require __DIR__ . '/params.php';
$db = array_merge(
    require __DIR__ . '/db.php',
    require __DIR__ . '/db-local.php'
);

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
   // 'homeUrl'=>'http://45.55.41.234/',
//    'homeUrl'=>'https://a1.frontrowlabs.com/',
    'homeUrl'=>'http://frontrowlab.com:7000/',

    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ft-y6WZAiG0nge9m3AhfujjvOq1TTVjY',
        ],
        'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
        'user' => [
        'identityClass' => 'app\models\User',
        'enableAutoLogin' => true,
    ],
        'errorHandler' => [
        'errorAction' => 'site/error',
    ],
        'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        // send all mails to a file by default. You have to set
        // 'useFileTransport' to false and configure a transport
        // for the mailer to send real emails.
        'htmlLayout' => 'layouts/main-html',
        'textLayout' => 'layouts/main-text',
        'messageConfig' => [
            'charset' => 'UTF-8',
            'from' => ['youremail' => 'Front Row Lab Message'],
        ],

        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'yourswiftsmtpemail',
            'password' => 'yourswiftsmtppassword',
            'port' => 'port',
            'encryption' => 'tls',
        ],
        'useFileTransport' => false,
    ],
        'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
        'db' => $db,

        'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'enableStrictParsing' => false,
        'rules' => [
            '/' => 'site/index',
            'about' => 'site/about',
            'what-we-do' => 'site/what-we-do',
            'talent-sourcing' => 'site/talent-sourcing',
            'contact' => 'site/contact',
            'cookiepolicy' => 'site/cookiepolicy',
            'privacypolicy' => 'site/privacypolicy',
            'login' => 'site/login',
            'logout' => 'site/logout',
            'user' => 'user/index',
        ],
    ],
        'mailchimp' => [
        'class' => 'app\components\MailchimpComponent',
        'API_KEY' => 'b12c9790aae088981d0fcbf7b7370f19-us5',
        'listId' => 'f6267c9c67' //audience ID
    ],
        'activeCampaign' => [
        'class' => 'app\components\ActiveCampaignComponent',
        'API_URL' => 'https://frontrowlabs.api-us1.com',
        'API_KEY' => 'cdd2b85d7f3cfdf47dc2a28f3dccc43040c84b2bdda0641e028cf2e2f33611f81fc969ba',
        'welcomeAutomationId' => 19,
        'fundCompletionId' => 20,
        'customAutomationId' => 22
    ]
    ],
    'params' => $params
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
