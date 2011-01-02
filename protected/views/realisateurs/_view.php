<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idRealisateurs')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idRealisateurs), array('view', 'id' => $data->idRealisateurs)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('RealisateurNom')); ?>:
	<?php echo GxHtml::encode($data->RealisateurNom); ?>
	<br />

</div>