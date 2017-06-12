<?php

namespace app\bootstraps;

use Yii;
use yii\base\BootstrapInterface;

class AliasHelper implements BootstrapInterface
{
    private $_aliasMap = [
        '@pub'  => '@web/public',
        '@img'  => '@web/public/images',
    ];

	public function bootstrap($app)
    {
        foreach ($this->_aliasMap as $alias => $path) {
            Yii::setAlias($alias, $path);
        }
    }
}