<?php
$this->breadcrumbs = array(
	'Films Telechargements',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' FilmsTelechargements', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' FilmsTelechargements', 'url' => array('admin')),
);
?>

<h1>Films Telechargements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 