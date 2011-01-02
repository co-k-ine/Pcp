<?php

class RealisateursController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view'),
				'users'=>array('*'),
				),
			array('allow', 
				'actions'=>array('minicreate', 'create','update'),
				'users'=>array('@'),
				),
			array('allow', 
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Realisateurs'),
		));
	}

	public function actionCreate() {
		$model = new Realisateurs;


		if (isset($_POST['Realisateurs'])) {
			$model->attributes = $_POST['Realisateurs'];
			$relatedData = array(
				'films' => $_POST['Realisateurs']['films'] === '' ? null : $_POST['Realisateurs']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->idRealisateurs));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Realisateurs');


		if (isset($_POST['Realisateurs'])) {
			$model->attributes = $_POST['Realisateurs'];
			$relatedData = array(
				'films' => $_POST['Realisateurs']['films'] === '' ? null : $_POST['Realisateurs']['films'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->idRealisateurs));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel($id, 'Realisateurs')->delete();

			if (!Yii::app()->request->isAjaxRequest)
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Realisateurs');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Realisateurs('search');
		$model->unsetAttributes();

		if (isset($_GET['Realisateurs']))
			$model->attributes = $_GET['Realisateurs'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

}