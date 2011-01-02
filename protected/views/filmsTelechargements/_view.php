<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idFilms_Telechargements')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idFilms_Telechargements), array('view', 'id' => $data->idFilms_Telechargements)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Films_idFilms')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->filmsIdFilms)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('liens')); ?>:
	<?php echo GxHtml::encode($data->liens); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NFO')); ?>:
	<?php echo GxHtml::encode($data->NFO); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('release_name')); ?>:
	<?php echo GxHtml::encode($data->release_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('mot_de_passe')); ?>:
	<?php echo GxHtml::encode($data->mot_de_passe); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tbl_user_id')); ?>:
	<?php echo GxHtml::encode($data->tbl_user_id); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('tbl_user_name')); ?>:
	<?php echo GxHtml::encode($data->tbl_user_name); ?>
	<br />
	*/ ?>

</div>