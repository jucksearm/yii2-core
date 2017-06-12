<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

try {
    (new Dotenv\Dotenv(__DIR__.'/protected'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

$config = require(__DIR__ . '/protected/config/web.php');

(new yii\web\Application($config))->run();
