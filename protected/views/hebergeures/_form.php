<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'hebergeures-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'HebergeursNom'); ?>
		<?php echo $form->textField($model, 'HebergeursNom', array('maxlength' => 75)); ?>
		<?php echo $form->error($model,'HebergeursNom'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'HebergeuresTag'); ?>
		<?php echo $form->textField($model, 'HebergeuresTag', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'HebergeuresTag'); ?>
		</div><!-- row -->

		<label>Films Telechargements</label>
		<?php echo $form->checkBoxList($model, 'filmsTelechargements', GxHtml::encodeEx(GxHtml::listDataEx(FilmsTelechargements::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('hebergeures/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->