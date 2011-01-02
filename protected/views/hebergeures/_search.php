<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idHebergeures'); ?>
		<?php echo $form->textField($model, 'idHebergeures'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'HebergeursNom'); ?>
		<?php echo $form->textField($model, 'HebergeursNom', array('maxlength' => 75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'HebergeuresTag'); ?>
		<?php echo $form->textField($model, 'HebergeuresTag', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
