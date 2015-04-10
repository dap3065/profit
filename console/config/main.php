<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
//    'controllerNamespace' => 'app\commands',
    'controllerNamespace' => 'console\controllers',
    'controllerMap' => [
        // declares "account" controller using a class name
        'rbac' => 'console\controllers\RbacController',
	'mail' => 'console\controllers\MailController',
        // declares "article" controller using a configuration array
//        'account' => [
  //          'class' => 'app\controllers\UserController',
    //        'enableCsrfValidation' => false,
      //  ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
      'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
    'params' => $params,
];
