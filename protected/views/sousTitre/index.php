<?php
$this->breadcrumbs = array(
	'Sous Titres',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' SousTitre', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' SousTitre', 'url' => array('admin')),
);
?>

<h1>Sous Titres</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 