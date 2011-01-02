<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'realisateurs-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'RealisateurNom'); ?>
		<?php echo $form->textField($model, 'RealisateurNom', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'RealisateurNom'); ?>
		</div><!-- row -->

		<label>Films</label>
		<?php echo $form->checkBoxList($model, 'films', GxHtml::encodeEx(GxHtml::listDataEx(Films::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('realisateurs/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->