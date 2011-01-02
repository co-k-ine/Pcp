<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idDecoupages'); ?>
		<?php echo $form->textField($model, 'idDecoupages'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'DecoupagesNom'); ?>
		<?php echo $form->textField($model, 'DecoupagesNom', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Telechargements'); ?>
		<?php echo $form->textField($model, 'Telechargements', array('maxlength' => 250)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
