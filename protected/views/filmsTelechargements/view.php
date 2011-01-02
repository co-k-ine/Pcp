<?php
$this->breadcrumbs = array(
	'Films Telechargements' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' FilmsTelechargements', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' FilmsTelechargements', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' FilmsTelechargements', 'url'=>array('update', 'id' => $model->idFilms_Telechargements)),
	array('label'=>Yii::t('app', 'Delete') . ' FilmsTelechargements', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idFilms_Telechargements), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' FilmsTelechargements', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> FilmsTelechargements #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idFilms_Telechargements',
array(
			'label' => 'Films',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->filmsIdFilms)), array('films/view', 'id' => GxActiveRecord::extractPkValue($model->filmsIdFilms, true))),
			),
'liens',
'NFO',
'release_name',
'mot_de_passe',
'tbl_user_id',
'tbl_user_name',
	),
)); ?>

<h2>Decoupages</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->decoupages as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('decoupages/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Hebergeures</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->hebergeures as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('hebergeures/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Langues</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->langues as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('langues/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Qualiters</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->qualiters as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('qualiter/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2>Sous Titres</h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->sousTitres as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('sousTitre/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>