<?php
$this->breadcrumbs = array(
	'Decoupages' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Decoupages', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Decoupages', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Decoupages', 'url'=>array('update', 'id' => $model->idDecoupages)),
	array('label'=>Yii::t('app', 'Delete') . ' Decoupages', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idDecoupages), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Decoupages', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Decoupages #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idDecoupages',
'DecoupagesNom',
'Telechargements',
	),
)); ?>

<h2>Films Telechargements</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->filmsTelechargements as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('filmsTelechargements/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>