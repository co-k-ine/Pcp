<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idGenres')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idGenres), array('view', 'id' => $data->idGenres)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('GenresTitre')); ?>:
	<?php echo GxHtml::encode($data->GenresTitre); ?>
	<br />

</div>