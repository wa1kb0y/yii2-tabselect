# Installation
Add `"walkboy/yii2-tabselect": "dev-master"` to composer.json and run `composer update`

# Usage with filter form
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
])->label(false);

FilterForm::end();
?>
```
