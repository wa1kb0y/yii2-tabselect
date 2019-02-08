<?php
use yii\helpers\Html;

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

<?php if ($widget->bsVersion == '4'): ?>

	<?php
	if (!class_exists("yii\\bootstrap4\\Html")) {
		throw new InvalidConfigException("You must install 'yiisoft/yii2-bootstrap4' extension for Bootstrap 4");
	}
	?>

	<?= \yii\bootstrap4\Tabs::widget([
		'id' => $widget->id,
		'options' => $widget->tabsOptions,
		'navType' => $widget->navType,
		'items' => $tabs,
	]) ?>

<?php else: ?>

	<?= \yii\bootstrap\Tabs::widget([
		'id' => $widget->id,
		'options' => $widget->tabsOptions,
		'navType' => $widget->navType,
		'items' => $tabs,
	]) ?>

<?php endif; ?>