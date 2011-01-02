<?php
$this->breadcrumbs = array(
	'Hebergeures' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Hebergeures', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Hebergeures', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Hebergeures', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Hebergeures', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Hebergeures #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>