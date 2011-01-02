<?php
$this->breadcrumbs = array(
	'Decoupages' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Decoupages', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Decoupages', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Decoupages</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>