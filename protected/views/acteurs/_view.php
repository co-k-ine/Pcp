<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idActeurs')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idActeurs), array('view', 'id' => $data->idActeurs)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ActeursNom')); ?>:
	<?php echo GxHtml::encode($data->ActeursNom); ?>
	<br />

</div>