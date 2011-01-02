<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idsous_titre')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idsous_titre), array('view', 'id' => $data->idsous_titre)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('sous_titreNom')); ?>:
	<?php echo GxHtml::encode($data->sous_titreNom); ?>
	<br />

</div>