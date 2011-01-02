<?php
$this->breadcrumbs = array(
	'Films' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Films', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Films', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Films</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>