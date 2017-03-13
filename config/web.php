<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'sdjklfjsdlfkurio5345hk349sd7gf45h64k6098dg098345kh',
                       

        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'budyaga\users\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/login'],
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'vkontakte' => [
                    'class' => 'budyaga\users\components\oauth\VKontakte',
                    'clientId' => 'XXX',
                    'clientSecret' => 'XXX',
                    'scope' => 'email'
                ],
                'google' => [
                    'class' => 'budyaga\users\components\oauth\Google',
                    'clientId' => 'XXX',
                    'clientSecret' => 'XXX',
                ],
                'facebook' => [
                    'class' => 'budyaga\users\components\oauth\Facebook',
                    'clientId' => 'XXX',
                    'clientSecret' => 'XXX',
                ],
                'github' => [
                    'class' => 'budyaga\users\components\oauth\GitHub',
                    'clientId' => 'XXX',
                    'clientSecret' => 'XXX',
                    'scope' => 'user:email, user'
                ],
                'linkedin' => [
                    'class' => 'budyaga\users\components\oauth\LinkedIn',
                    'clientId' => 'XXX',
                    'clientSecret' => 'XXX',
                ],
                'live' => [
                    'class' => 'budyaga\users\components\oauth\Live',
                    'clientId' => 'XXX',
                    'clientSecret' => 'XXX',
                ],
                'yandex' => [
                    'class' => 'budyaga\users\components\oauth\Yandex',
                    'clientId' => 'XXX',
                    'clientSecret' => 'XXX',
                ],
                'twitter' => [
                    'class' => 'budyaga\users\components\oauth\Twitter',
                    'consumerKey' => 'XXX',
                    'consumerSecret' => 'XXX',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mail/',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'dsalaidinov@gmail.com',
                'password' => 'denmylove2017',
                'port' => '587',
                'encryption' => 'tls',

            ],
          'htmlLayout'=>false,
           'textLayout'=>false,
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
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                    '/signup' => '/user/user/signup',
                    '/login' => '/user/user/login',
                    '/logout' => '/user/user/logout',
                    '/requestPasswordReset' => '/user/user/request-password-reset',
                    '/resetPassword' => '/user/user/reset-password',
                    '/profile' => '/user/user/profile',
                    '/retryConfirmEmail' => '/user/user/retry-confirm-email',
                    '/confirmEmail' => '/user/user/confirm-email',
                    '/unbind/<id:[\w\-]+>' => '/user/auth/unbind',
                    '/oauth/<authclient:[\w\-]+>' => '/user/auth/index',
                    'pages/<page:[\w-]+>' => 'site/index',
                    
            ],
        ],
        'authManager' => [
        'class' => 'yii\rbac\DbManager',
            ],
       
    ],
     'modules' => [
            'user' => [
                'class' => 'budyaga\users\Module',
                'userPhotoUrl' => 'http://example.com/uploads/user/photo',
                'userPhotoPath' => '@frontend/web/uploads/user/photo'
                ],
            'customMailViews' => [
            'confirmChangeEmail' => '@app/mail/confirmChangeEmail' //in this case you have to create files confirmChangeEmail-html.php and confirmChangeEmail-text.php in mail folder
                ],
            'pages' => [
            'class' => 'bupy7\pages\Module',
            'tableName' => '{{%pages}}',
            'layout' => '@app/views/layouts/main.php',
            'imperaviLanguage' => 'ru',
            'controllerMap' => [
                'manager' => [
                    'class' => 'bupy7\pages\controllers\ManagerController',
                    'as access' => [
                        'class' => yii\filters\AccessControl::className(),
                        'ruleConfig' => [
                            'class' => yii\filters\AccessRule::className(),
                        ],
                        'rules' => [
                            // allow authenticated users
                            [
                                'allow' => true,
                                'roles' => ['@']
                            ],
                        ],
                    ],
                ],
                'default' => [
                    'class' => 'app\controllers\DefaultController',
                    'on beforeAction' => function($event) {
                            // see content of $event
                            $event->action->controller->layout = '/main';
                    }
                ],
            ],
            'pathToImages' => '@webroot/images/static-pages',
            'urlToImages' => '@web/images/static-pages',
            'pathToFiles' => '@webroot/files/static-pages',
            'urlToFiles' => '@web/files/static-pages',
            'uploadImage' => true,
            'uploadFile' => true,
            'addImage' => true,
            'addFile' => true,
        ],
        'block' => [
            'class' => 'wolfguard\block\Module',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
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
