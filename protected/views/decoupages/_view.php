<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idDecoupages')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idDecoupages), array('view', 'id' => $data->idDecoupages)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('DecoupagesNom')); ?>:
	<?php echo GxHtml::encode($data->DecoupagesNom); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Telechargements')); ?>:
	<?php echo GxHtml::encode($data->Telechargements); ?>
	<br />

</div>