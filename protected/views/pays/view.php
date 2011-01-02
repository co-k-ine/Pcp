<?php
$this->breadcrumbs = array(
	'Pays' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Pays', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Pays', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Pays', 'url'=>array('update', 'id' => $model->idPays)),
	array('label'=>Yii::t('app', 'Delete') . ' Pays', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idPays), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Pays', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Pays #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idPays',
'PaysNom',
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