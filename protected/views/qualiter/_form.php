<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'qualiter-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'QualiterNom'); ?>
		<?php echo $form->textField($model, 'QualiterNom', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'QualiterNom'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'QualiterDescription'); ?>
		<?php echo $form->textArea($model, 'QualiterDescription'); ?>
		<?php echo $form->error($model,'QualiterDescription'); ?>
		</div><!-- row -->

		<label>Films Telechargements</label>
		<?php echo $form->checkBoxList($model, 'filmsTelechargements', GxHtml::encodeEx(GxHtml::listDataEx(FilmsTelechargements::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('qualiter/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->