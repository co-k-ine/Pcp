<?php
$this->breadcrumbs = array(
	'Realisateurs' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Realisateurs', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Realisateurs', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Realisateurs', 'url'=>array('update', 'id' => $model->idRealisateurs)),
	array('label'=>Yii::t('app', 'Delete') . ' Realisateurs', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idRealisateurs), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Realisateurs', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Realisateurs #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idRealisateurs',
'RealisateurNom',
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