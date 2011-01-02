<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idLangues')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idLangues), array('view', 'id' => $data->idLangues)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('LanguesNom')); ?>:
	<?php echo GxHtml::encode($data->LanguesNom); ?>
	<br />

</div>