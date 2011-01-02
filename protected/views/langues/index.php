<?php
$this->breadcrumbs = array(
	'Langues',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Langues', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Langues', 'url' => array('admin')),
);
?>

<h1>Langues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 