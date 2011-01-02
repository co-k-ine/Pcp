<?php
$this->breadcrumbs = array(
	'Acteurs' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Acteurs', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Acteurs', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Acteurs', 'url'=>array('update', 'id' => $model->idActeurs)),
	array('label'=>Yii::t('app', 'Delete') . ' Acteurs', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idActeurs), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Acteurs', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Acteurs #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idActeurs',
'ActeursNom',
	),
)); ?>

<h2>Films</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->films as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('films/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>