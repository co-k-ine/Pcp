<?php
$this->breadcrumbs = array(
	'Sous Titres' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' SousTitre', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' SousTitre', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' SousTitre', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' SousTitre', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> SousTitre #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>