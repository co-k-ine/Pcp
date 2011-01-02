<?php
$this->breadcrumbs = array(
	'Films',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Films', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Films', 'url' => array('admin')),
);
?>

<h1>Films</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 