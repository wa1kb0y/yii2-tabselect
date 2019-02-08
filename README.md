# What is it?
This is Yii 2 widget working as dropdown but looking like tabs.

# Installation
Add `"walkboy/yii2-tabselect": "dev-master"` to composer.json and run `composer update`

# Config
Add `bsVersion => '4.x'` to your `params.php` to use Bootstrap 4 globally or set it on widget settings.

# Usage
```
use walkboy\TabSelect\TabSelect;

<?= $form->field($searchModel, 'number')->widget(TabSelect::classname(), [
    'items' => [
    	0 => 'Tab 1', 
    	1 => 'Tab 2',
    ],
])->label(false) ?>
```

## Usage with filter form
```
use walkboy\FilterForm\FilterForm;
use walkboy\TabSelect\TabSelect;

<?php
$form = FilterForm::begin(['options'=>['class'=>'filter-form']]);

echo $form->field($searchModel, 'number')->widget(TabSelect::classname(), [
    'items' => ArrayHelper::map(
		Order::find()
			->select(['created_at'=>'year(created)'])
			->distinct()
		    ->all(), 
		'created', 'created'),
	\\'bsVersion' => '4',
])->label(false);

FilterForm::end();
?>
```
