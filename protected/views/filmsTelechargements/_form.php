<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'films-telechargements-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'Films_idFilms'); ?>
		<?php echo $form->dropDownList($model, 'Films_idFilms', GxHtml::listDataEx(Films::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'Films_idFilms'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'liens'); ?>
		<?php echo $form->textArea($model, 'liens'); ?>
		<?php echo $form->error($model,'liens'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'NFO'); ?>
		<?php echo $form->textArea($model, 'NFO'); ?>
		<?php echo $form->error($model,'NFO'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'release_name'); ?>
		<?php echo $form->textField($model, 'release_name', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'release_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'mot_de_passe'); ?>
		<?php echo $form->textField($model, 'mot_de_passe', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'mot_de_passe'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tbl_user_id'); ?>
		<?php echo $form->textField($model, 'tbl_user_id'); ?>
		<?php echo $form->error($model,'tbl_user_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tbl_user_name'); ?>
		<?php echo $form->textField($model, 'tbl_user_name', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'tbl_user_name'); ?>
		</div><!-- row -->

		<label>Decoupages</label>
		<?php echo $form->checkBoxList($model, 'decoupages', GxHtml::encodeEx(GxHtml::listDataEx(Decoupages::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Hebergeures</label>
		<?php echo $form->checkBoxList($model, 'hebergeures', GxHtml::encodeEx(GxHtml::listDataEx(Hebergeures::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Langues</label>
		<?php echo $form->checkBoxList($model, 'langues', GxHtml::encodeEx(GxHtml::listDataEx(Langues::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Qualiters</label>
		<?php echo $form->checkBoxList($model, 'qualiters', GxHtml::encodeEx(GxHtml::listDataEx(Qualiter::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Sous Titres</label>
		<?php echo $form->checkBoxList($model, 'sousTitres', GxHtml::encodeEx(GxHtml::listDataEx(SousTitre::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('filmstelechargements/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->