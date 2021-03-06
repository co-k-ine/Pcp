<?php
$this->breadcrumbs = array(
	'Langues' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Langues', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Langues', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Langues', 'url'=>array('update', 'id' => $model->idLangues)),
	array('label'=>Yii::t('app', 'Delete') . ' Langues', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idLangues), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Langues', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Langues #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idLangues',
'LanguesNom',
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