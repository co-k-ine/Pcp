<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idFilms_Telechargements'); ?>
		<?php echo $form->textField($model, 'idFilms_Telechargements'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Films_idFilms'); ?>
		<?php echo $form->dropDownList($model, 'Films_idFilms', GxHtml::listDataEx(Films::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'liens'); ?>
		<?php echo $form->textArea($model, 'liens'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'NFO'); ?>
		<?php echo $form->textArea($model, 'NFO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'release_name'); ?>
		<?php echo $form->textField($model, 'release_name', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mot_de_passe'); ?>
		<?php echo $form->textField($model, 'mot_de_passe', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tbl_user_id'); ?>
		<?php echo $form->textField($model, 'tbl_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tbl_user_name'); ?>
		<?php echo $form->textField($model, 'tbl_user_name', array('maxlength' => 150)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
