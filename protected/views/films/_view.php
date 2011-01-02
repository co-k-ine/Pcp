<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idFilms')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idFilms), array('view', 'id' => $data->idFilms)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('id_allocine')); ?>:
	<?php echo GxHtml::encode($data->id_allocine); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('titre')); ?>:
	<?php echo GxHtml::encode($data->titre); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Titre_original')); ?>:
	<?php echo GxHtml::encode($data->Titre_original); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Affiche')); ?>:
	<?php echo GxHtml::encode($data->Affiche); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Date_de_sortie')); ?>:
	<?php echo GxHtml::encode($data->Date_de_sortie); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Synopsis')); ?>:
	<?php echo GxHtml::encode($data->Synopsis); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('Durée')); ?>:
	<?php echo GxHtml::encode($data->Durée); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Bande_annonce')); ?>:
	<?php echo GxHtml::encode($data->Bande_annonce); ?>
	<br />
	*/ ?>

</div>