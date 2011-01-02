<?php
$this->breadcrumbs = array(
	'Realisateurs' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Realisateurs', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Realisateurs', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Realisateurs</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>