<?php
$this->breadcrumbs = array(
	'Sous Titres' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' SousTitre', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' SousTitre', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> SousTitre</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>