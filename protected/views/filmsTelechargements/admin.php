<?php
$this->breadcrumbs = array(
	'Films Telechargements' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' FilmsTelechargements',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' FilmsTelechargements',
		'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('films-telechargements-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage'); ?> Films Telechargements</h1>

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
	'id' => 'films-telechargements-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'idFilms_Telechargements',
		array(
				'name'=>'Films_idFilms',
				'value'=>'GxHtml::valueEx($data->filmsIdFilms)',
				'filter'=>GxHtml::listDataEx(Films::model()->findAllAttributes(null, true)),
				),
		'liens',
		'NFO',
		'release_name',
		'mot_de_passe',
		/*
		'tbl_user_id',
		'tbl_user_name',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>