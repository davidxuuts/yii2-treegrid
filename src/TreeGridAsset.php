<?php

namespace davidxu\treegrid;

use yii\web\AssetBundle;
use davidxu\base\assets;

/**
 * This asset bundle provides the [jQuery TreeGrid plugin library](https://github.com/maxazan/jquery-treegrid)
 */
class TreeGridAsset extends AssetBundle
{

    /**
     * @var string
     */
    public $sourcePath = __DIR__;

    /**
     * @var array
     */
    public $js = [];
    public $css = [
        'css/jquery.treegrid.css',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $this->js[] = 'js/jquery.treegrid' . $min . '.js';
    }

    public $depends = [
        AppAsset::class,
    ];
}
