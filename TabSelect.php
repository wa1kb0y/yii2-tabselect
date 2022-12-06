<?php
namespace walkboy\TabSelect;

use yii;
use yii\helpers\ArrayHelper;

class TabSelect extends \yii\widgets\InputWidget
{
    public $items;
    public $showSelect = false;
    public $tabsOptions = [];
    public $navType = 'nav-tabs';
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

        $this->tabsOptions = array_merge(['class'=>'tab-select'], $this->tabsOptions);
    }

    public function run()
    {
        return $this->render('tabselect', [
            'widget' => $this,
        ]);
    }
}