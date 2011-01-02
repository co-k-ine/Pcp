<?php
$this->breadcrumbs = array(
	'Genres' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Genres', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Genres', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Genres</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>