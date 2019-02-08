<?php
namespace walkboy\TabSelect;

use yii;
use yii\helpers\ArrayHelper;
use walkboy\TabSelect\TabSelectAsset;

class TabSelect extends \yii\widgets\InputWidget
{
    public $items;
    public $showSelect = false;
    public $bsVersion;

    public function init()
    {
        parent::init();
        $view = $this->getView();
        TabSelectAsset::register($view);
        $ver = ArrayHelper::getValue(Yii::$app->params, 'bsVersion', '3');
        $bsVer = substr(trim($ver), 0, 1);
        if (!$this->bsVersion) {
            $this->bsVersion = $bsVer;
        }
    }

    public function run()
    {
        return $this->render('tabselect', [
            'widget' => $this,
        ]);
    }
}