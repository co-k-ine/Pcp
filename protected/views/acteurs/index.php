<?php
$this->breadcrumbs = array(
	'Acteurs',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Acteurs', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Acteurs', 'url' => array('admin')),
);
?>

<h1>Acteurs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 