<?php
$this->breadcrumbs = array(
	'Hebergeures' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Hebergeures', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Hebergeures', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Hebergeures</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>