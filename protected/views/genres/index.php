<?php
$this->breadcrumbs = array(
	'Genres',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Genres', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Genres', 'url' => array('admin')),
);
?>

<h1>Genres</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 