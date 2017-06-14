<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$config = [
    'id' => 'basic-console',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
