<?php

$bootstraps = require(__DIR__ . '/bootstraps.php');
$db         = require(__DIR__ . '/db.php');
$routes     = require(__DIR__ . '/routes.php');
$params     = require(__DIR__ . '/params.php');
$modules    = require(__DIR__ . '/modules.php');

$config = [
    'id' => getenv('APP_ID'),
    'name' => getenv('APP_NAME'),
    'basePath'   => dirname(__DIR__),
    'vendorPath' => __DIR__ . '/../../vendor',
    'timeZone'   => getenv('APP_TIMEZONE'),
    'language'   => getenv('APP_LANGUAGE'),
    'charset'    => getenv('APP_CHAR'),
    'homeUrl'    => getenv('ROOT_PATH'),
    'bootstrap'  => $bootstraps,
    'components' => [
        'request' => [
            'baseUrl' => getenv('ROOT_PATH'),
            'cookieValidationKey' => 'KnagaV2w8A3REzuN3j7ne2aDRESaX3BrAs',
        ],
        'assetManager' => [
            'linkAssets' => false,
            'dirMode'    => 0775,
            'basePath'   => '@webroot/public/assets',
            'baseUrl'    => '@web/public/assets',
            'appendTimestamp' => true,
            'forceCopy' => true,
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
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager'  => [
            'baseUrl' => getenv('ROOT_PATH'),
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules' => $routes,
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => getenv('SMTP_HOST'),
                'username' => getenv('SMTP_USER'), 
                'password' => getenv('SMTP_PASS'),
                'port' => getenv('SMTP_PORT'),
                'encryption' => getenv('SMTP_ENCRYP'),
            ],
        ],
    ],
    'modules' => $modules,
    'params'  => $params,
    'on beforeRequest' => function ($event) {
    }
];

if (getenv('DEV_MODE')) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;