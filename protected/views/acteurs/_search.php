<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idActeurs'); ?>
		<?php echo $form->textField($model, 'idActeurs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ActeursNom'); ?>
		<?php echo $form->textField($model, 'ActeursNom', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
