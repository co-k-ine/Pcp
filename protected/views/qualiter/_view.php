<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idQualiter')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idQualiter), array('view', 'id' => $data->idQualiter)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('QualiterNom')); ?>:
	<?php echo GxHtml::encode($data->QualiterNom); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('QualiterDescription')); ?>:
	<?php echo GxHtml::encode($data->QualiterDescription); ?>
	<br />

</div>