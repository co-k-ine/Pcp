<?php
$this->breadcrumbs = array(
	'Realisateurs' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Realisateurs', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Realisateurs', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Realisateurs', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Realisateurs', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Realisateurs #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>