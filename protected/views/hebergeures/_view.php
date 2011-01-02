<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idHebergeures')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idHebergeures), array('view', 'id' => $data->idHebergeures)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('HebergeursNom')); ?>:
	<?php echo GxHtml::encode($data->HebergeursNom); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('HebergeuresTag')); ?>:
	<?php echo GxHtml::encode($data->HebergeuresTag); ?>
	<br />

</div>