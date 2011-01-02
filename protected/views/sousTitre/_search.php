<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idsous_titre'); ?>
		<?php echo $form->textField($model, 'idsous_titre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'sous_titreNom'); ?>
		<?php echo $form->textField($model, 'sous_titreNom', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
