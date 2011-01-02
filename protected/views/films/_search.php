<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idFilms'); ?>
		<?php echo $form->textField($model, 'idFilms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id_allocine'); ?>
		<?php echo $form->textField($model, 'id_allocine'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'titre'); ?>
		<?php echo $form->textField($model, 'titre', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Titre_original'); ?>
		<?php echo $form->textField($model, 'Titre_original', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Affiche'); ?>
		<?php echo $form->textField($model, 'Affiche', array('maxlength' => 40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Date_de_sortie'); ?>
		<?php echo $form->textField($model, 'Date_de_sortie', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Synopsis'); ?>
		<?php echo $form->textArea($model, 'Synopsis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Durée'); ?>
		<?php echo $form->textField($model, 'Durée', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Bande_annonce'); ?>
		<?php echo $form->textField($model, 'Bande_annonce', array('maxlength' => 200)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
