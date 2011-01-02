<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'films-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'id_allocine'); ?>
		<?php echo $form->textField($model, 'id_allocine'); ?>
		<?php echo $form->error($model,'id_allocine'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'titre'); ?>
		<?php echo $form->textField($model, 'titre', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'titre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Titre_original'); ?>
		<?php echo $form->textField($model, 'Titre_original', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'Titre_original'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Affiche'); ?>
		<?php echo $form->textField($model, 'Affiche', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'Affiche'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Date_de_sortie'); ?>
		<?php echo $form->textField($model, 'Date_de_sortie', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'Date_de_sortie'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Synopsis'); ?>
		<?php echo $form->textArea($model, 'Synopsis'); ?>
		<?php echo $form->error($model,'Synopsis'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Durée'); ?>
		<?php echo $form->textField($model, 'Durée', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'Durée'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Bande_annonce'); ?>
		<?php echo $form->textField($model, 'Bande_annonce', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'Bande_annonce'); ?>
		</div><!-- row -->

		<label>Acteurs</label>
		<?php echo $form->checkBoxList($model, 'acteurs', GxHtml::encodeEx(GxHtml::listDataEx(Acteurs::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Films Telechargements</label>
		<?php echo $form->checkBoxList($model, 'filmsTelechargements', GxHtml::encodeEx(GxHtml::listDataEx(FilmsTelechargements::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Genres</label>
		<?php echo $form->checkBoxList($model, 'genres', GxHtml::encodeEx(GxHtml::listDataEx(Genres::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Pays</label>
		<?php echo $form->checkBoxList($model, 'pays', GxHtml::encodeEx(GxHtml::listDataEx(Pays::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Realisateurs</label>
		<?php echo $form->checkBoxList($model, 'realisateurs', GxHtml::encodeEx(GxHtml::listDataEx(Realisateurs::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('films/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->