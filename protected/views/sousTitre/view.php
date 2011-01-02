<?php
$this->breadcrumbs = array(
	'Sous Titres' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' SousTitre', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' SousTitre', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' SousTitre', 'url'=>array('update', 'id' => $model->idsous_titre)),
	array('label'=>Yii::t('app', 'Delete') . ' SousTitre', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idsous_titre), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' SousTitre', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> SousTitre #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idsous_titre',
'sous_titreNom',
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