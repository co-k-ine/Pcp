<?php
$this->breadcrumbs = array(
	'Qualiters' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Qualiter', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Qualiter', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Qualiter', 'url'=>array('update', 'id' => $model->idQualiter)),
	array('label'=>Yii::t('app', 'Delete') . ' Qualiter', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idQualiter), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Qualiter', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Qualiter #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idQualiter',
'QualiterNom',
'QualiterDescription',
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