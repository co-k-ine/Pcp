<?php
$this->breadcrumbs = array(
	'Hebergeures',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Hebergeures', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Hebergeures', 'url' => array('admin')),
);
?>

<h1>Hebergeures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 