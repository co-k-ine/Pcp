<?php
$this->breadcrumbs = array(
	'Films' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Films',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Films',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('films-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Films</h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'films-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'idFilms',
		'id_allocine',
		'titre',
		'Titre_original',
		'Affiche',
		'Date_de_sortie',
		/*
		'Synopsis',
		'Durée',
		'Bande_annonce',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>