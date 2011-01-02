<?php
$this->breadcrumbs = array(
	'Realisateurs',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Realisateurs', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Realisateurs', 'url' => array('admin')),
);
?>

<h1>Realisateurs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 