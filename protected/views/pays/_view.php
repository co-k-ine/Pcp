<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idPays')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idPays), array('view', 'id' => $data->idPays)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('PaysNom')); ?>:
	<?php echo GxHtml::encode($data->PaysNom); ?>
	<br />

</div>