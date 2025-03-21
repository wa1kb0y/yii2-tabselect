<?php
namespace walkboy\TabSelect;

use yii;
use yii\helpers\ArrayHelper;

class TabSelect extends \yii\widgets\InputWidget
{
    public $items;
    public $showSelect = false;
    public $showFilter = false;
    public $tabsOptions = [];
    public $navType = 'nav-tabs';
    public $bsVersion;
    public $encodeLabels = true;

    /**
     * @var array html attributes applied to filter input
     */
    public $filterInputOptions = [];

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

        $this->tabsOptions = array_merge([
            'class' => 'tab-select'
        ], $this->tabsOptions);

        $this->filterInputOptions = array_merge([
            'id' => $this->id.'_filter',
            'class' => 'tab-filter form-control mb-3',
            'placeholder' => 'Search...',
        ], $this->filterInputOptions);
    }

    public function run()
    {
        return $this->render('tabselect', [
            'widget' => $this,
        ]);
    }
}
