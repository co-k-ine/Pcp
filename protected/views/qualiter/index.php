<?php
$this->breadcrumbs = array(
	'Qualiters',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Qualiter', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Qualiter', 'url' => array('admin')),
);
?>

<h1>Qualiters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 