<?php
$this->breadcrumbs = array(
	'Acteurs' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Acteurs', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Acteurs', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Acteurs</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>