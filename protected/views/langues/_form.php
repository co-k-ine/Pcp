<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'langues-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'LanguesNom'); ?>
		<?php echo $form->textField($model, 'LanguesNom', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'LanguesNom'); ?>
		</div><!-- row -->

		<label>Films Telechargements</label>
		<?php echo $form->checkBoxList($model, 'filmsTelechargements', GxHtml::encodeEx(GxHtml::listDataEx(FilmsTelechargements::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('langues/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->