<?php
$this->breadcrumbs = array(
	'Langues' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Langues', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Langues', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Langues</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>