<?php

$params = require 'params.php';
$db = require 'db.php';

$config = [
    'id' => 'api',
    'basePath' => dirname(__DIR__),
    'timeZone' => 'Europe/Prague',
    'bootstrap' => ['log', 'api'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@api-utils' => '@vendor/damidevelopment/yii2-api-utils/src',
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => '6XDsnEvBvuEHyJMHEfcySfZvxExQofVJ',
            'parsers' => [
                'application/json' => yii\web\JsonParser::class,
            ]
        ],
        'user'=> [
            'identityClass' => \app\models\User::class
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
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
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'fileMap' => [
                        'app' => 'app.php',
                        'errors' => 'errors.php',
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,
    'modules' => [
        'api' => [
            'class' => \damidevelopment\apiutils\ApiModule::class,
            // api versions
            'modules' => [
                'v1' => app\api\v1\Module::class
            ]
        ]
    ]
];;

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'historySize' => 5000,
        'allowedIPs' => [
            '127.0.0.1',
            '::1',
        ],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
