<?php
$this->breadcrumbs = array(
	'Pays' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Pays', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Pays', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Pays</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>