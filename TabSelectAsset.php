<?php
namespace walkboy\TabSelect;

use yii\web\AssetBundle;

class TabSelectAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';
    public $js = [
        'js/tabselect.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}