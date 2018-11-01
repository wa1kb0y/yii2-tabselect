<?php
use yii\helpers\Html;
use yii\bootstrap\Tabs;

$selected_value = $widget->model->{$widget->attribute};

foreach ($widget->items as $key => $value) {
	$tabs[] = [
		'label' => $value, 
		'linkOptions' => [
			'data-id' => $key
		],
		'active' => ($selected_value == $key) ? true : false,
	];
}

echo Html::activeDropdownList($widget->model, $widget->attribute, $widget->items, [
	'id' => $widget->id.'_select',
	'style' => ($widget->showSelect) ? '' : 'display:none;',
	'class' => 'form-control',
])
?>

<?= Tabs::widget([
	'id' => $widget->id,
	'options' => ['class'=>'tab-select'],
	'items' => $tabs,
]) ?>