<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idPays'); ?>
		<?php echo $form->textField($model, 'idPays'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'PaysNom'); ?>
		<?php echo $form->textField($model, 'PaysNom', array('maxlength' => 50)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
