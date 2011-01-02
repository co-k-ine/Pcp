<?php
$this->breadcrumbs = array(
	'Hebergeures' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Hebergeures', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Hebergeures', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Hebergeures', 'url'=>array('update', 'id' => $model->idHebergeures)),
	array('label'=>Yii::t('app', 'Delete') . ' Hebergeures', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idHebergeures), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Hebergeures', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Hebergeures #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idHebergeures',
'HebergeursNom',
'HebergeuresTag',
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