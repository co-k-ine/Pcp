<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idLangues'); ?>
		<?php echo $form->textField($model, 'idLangues'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'LanguesNom'); ?>
		<?php echo $form->textField($model, 'LanguesNom', array('maxlength' => 50)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
