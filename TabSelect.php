<?php
namespace walkboy\TabSelect;

use walkboy\TabSelect\TabSelectAsset;


class TabSelect extends \yii\widgets\InputWidget
{
    public $items;
    public $showSelect = false;

	public function init()
    {
    	parent::init();
    	$view = $this->getView();
    	TabSelectAsset::register($view);
    }

    public function run()
    {
        return $this->render('tabselect', [
            'widget' => $this,
        ]);
    }
}