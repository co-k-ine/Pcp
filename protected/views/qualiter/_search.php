<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idQualiter'); ?>
		<?php echo $form->textField($model, 'idQualiter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'QualiterNom'); ?>
		<?php echo $form->textField($model, 'QualiterNom', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'QualiterDescription'); ?>
		<?php echo $form->textArea($model, 'QualiterDescription'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
