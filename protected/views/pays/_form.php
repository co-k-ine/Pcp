<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'pays-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'PaysNom'); ?>
		<?php echo $form->textField($model, 'PaysNom', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'PaysNom'); ?>
		</div><!-- row -->

		<label>Films</label>
		<?php echo $form->checkBoxList($model, 'films', GxHtml::encodeEx(GxHtml::listDataEx(Films::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('pays/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->