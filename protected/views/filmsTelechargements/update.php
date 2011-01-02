<?php
$this->breadcrumbs = array(
	'Films Telechargements' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' FilmsTelechargements', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' FilmsTelechargements', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' FilmsTelechargements', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' FilmsTelechargements', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> FilmsTelechargements #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>