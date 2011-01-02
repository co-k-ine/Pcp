<?php
$this->breadcrumbs = array(
	'Pays',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Pays', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Pays', 'url' => array('admin')),
);
?>

<h1>Pays</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 