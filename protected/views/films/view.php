<?php
$this->breadcrumbs = array(
	'Films' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Films', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Films', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Films', 'url'=>array('update', 'id' => $model->idFilms)),
	array('label'=>Yii::t('app', 'Delete') . ' Films', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idFilms), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Films', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Films #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idFilms',
'id_allocine',
'titre',
'Titre_original',
'Affiche',
'Date_de_sortie',
'Synopsis',
'Durée',
'Bande_annonce',
	),
)); ?>

<h2>Acteurs</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->acteurs as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('acteurs/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Films Telechargements</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->filmsTelechargements as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('filmsTelechargements/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Genres</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->genres as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('genres/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Pays</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->pays as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('pays/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Realisateurs</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->realisateurs as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('realisateurs/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>