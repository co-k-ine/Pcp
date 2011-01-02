<?php
$this->breadcrumbs = array(
	'Films Telechargements' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' FilmsTelechargements', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' FilmsTelechargements', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> FilmsTelechargements</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>