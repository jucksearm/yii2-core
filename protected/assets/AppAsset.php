<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/public';
    public $baseUrl  = '@web/public';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'app\assets\FontAwesomeAsset',
    ];
}
