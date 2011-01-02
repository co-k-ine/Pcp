<?php
$this->breadcrumbs = array(
	'Qualiters' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Qualiter', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Qualiter', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Qualiter</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>