<?php

namespace davidxu\treegrid;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * This asset bundle provides the [jQuery TreeGrid plugin library](https://github.com/maxazan/jquery-treegrid)
 */
class TreeGridBS3Asset extends AssetBundle
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
        $this->js[] = 'js/jquery.treegrid' . $min . '.js';
        $this->js[] = 'js/jquery.treegrid.bootstrap3.js';
    }

    public $depends = [
        JqueryAsset::class,
    ];
}
