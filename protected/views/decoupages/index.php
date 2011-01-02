<?php
$this->breadcrumbs = array(
	'Decoupages',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Decoupages', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Decoupages', 'url' => array('admin')),
);
?>

<h1>Decoupages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 