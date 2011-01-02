<?php
$this->breadcrumbs = array(
	'Genres' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Genres', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Genres', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Genres', 'url'=>array('update', 'id' => $model->idGenres)),
	array('label'=>Yii::t('app', 'Delete') . ' Genres', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idGenres), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Genres', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Genres #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idGenres',
'GenresTitre',
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