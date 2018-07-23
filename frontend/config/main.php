<?php

$params = array_merge(
        require __DIR__ . '/../../common/config/params.php', require __DIR__ . '/../../common/config/params-local.php', require __DIR__ . '/params.php', require __DIR__ . '/params-local.php'
);

use yii\web\Request;

$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'site' => [
            'basePath' => '@app/modules/site',
            'class' => 'frontend\modules\site\user',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],
    'defaultRoute' => '/site/site/index',
    'components' => [
        'request' => [
            'cookieValidationKey' => '[RANDOM KEY HERE]',
            'csrfParam' => '_csrf-frontend',
            'enableCsrfValidation' => false,
            'baseUrl' => $baseUrl,
        ],
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
            'returnUrl' => array('/site/default/index'),
            'loginUrl' => array('/site/site/login'),
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                '/' => 'site/site/index',
                [
                    'pattern' => '/about/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'about'],
                ],
                    [
                    'pattern' => '/work/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'work'],
                ],
                    [
                    'pattern' => '/career/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'career'],
                ],
                    [
                    'pattern' => '/contactus/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'contactus'],
                ],
                 [
                    'pattern' => '/terms/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'terms'],
                ],
                [
                    'pattern' => '/web-design/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'web-design'],
                ],
                [
                    'pattern' => '/web/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'web'],
                ],
                [
                    'pattern' => '/seo/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'seo'],
                ],
                [
                    'pattern' => '/mobile/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'mobile'],
                ],
                 [
                    'pattern' => '/outsource/<slug:>',
                    'route' => '/site/site/pages',
                    'defaults' => ['slug' => 'outsource'],
                ],
            ],
        ],
    ],
    'params' => $params,
];
