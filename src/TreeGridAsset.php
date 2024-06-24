<?php

namespace davidxu\treegrid;

use yii\web\AssetBundle;
use yii\web\YiiAsset;
use yii\bootstrap5\BootstrapAsset;

/**
 * This asset bundle provides the [jQuery TreeGrid plugin library](https://github.com/maxazan/jquery-treegrid)
 */
class TreeGridAsset extends AssetBundle
{

    /**
     * @var string
     */
    public $sourcePath = '@davidxu/treegrid';

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
        $this->js[] = 'js/jquery.treegrid.fa5' . $min . '.js';
    }

    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}
